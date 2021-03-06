package app.tokoonline.activity;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import org.json.JSONException;
import org.json.JSONObject;

import java.util.HashMap;
import java.util.Map;

import app.tokoonline.R;

public class Signup extends AppCompatActivity {

    private EditText email, name,  nomor, password;
    private Button btn_regist;
    private static String URL_REGIST = "http://192.168.100.85/projectsemester4/api/Api_register";


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_signup);

        email = findViewById(R.id.email);
        name = findViewById(R.id.name);
        nomor = findViewById(R.id.nomor);
        password = findViewById(R.id.password);
        btn_regist=findViewById(R.id.btn_regist);

        btn_regist.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Regist();
            }
        });

    }

    private void Regist() {
        btn_regist.setVisibility(View.GONE);

        final String email = this.email.getText().toString().trim();
        final String name = this.name.getText().toString().trim();
        final String nomor = this.nomor.getText().toString().trim();
        final String password = this.password.getText().toString().trim();

        StringRequest stringRequest = new StringRequest(Request.Method.POST, URL_REGIST,
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                    try {
                        JSONObject jsonObject = new JSONObject(response);
                        String success = jsonObject.getString("success");

                        if (success.equals("1")) {
                            Toast.makeText(app.tokoonline.activity.Signup.this, "Register Sukses",Toast.LENGTH_SHORT).show();
                        }
                    } catch (JSONException e) {
                        e.printStackTrace();
                        Toast.makeText(app.tokoonline.activity.Signup.this, "Register Error"+e.toString(),Toast.LENGTH_SHORT).show();
                        btn_regist.setVisibility(View.VISIBLE);
                    }
                    }
                },
                new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        Toast.makeText(app.tokoonline.activity.Signup.this, "Register Error"+error.toString(),Toast.LENGTH_SHORT).show();
                        btn_regist.setVisibility(View.VISIBLE);
                    }
                })
        {
            @Override
            protected Map<String, String> getParams() throws AuthFailureError {
                Map<String, String> params= new HashMap<>();
                params.put("email", email);
                params.put("name", name);
                params.put("nomor", nomor);
                params.put("password", password);
                return params;
            }
        };

        RequestQueue requestQueue = Volley.newRequestQueue(this);
        requestQueue.add(stringRequest);
    }
}
