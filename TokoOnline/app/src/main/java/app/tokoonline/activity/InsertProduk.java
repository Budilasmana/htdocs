package app.tokoonline.activity;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;


import app.tokoonline.R;
import app.tokoonline.Rest.ApiClient;
import app.tokoonline.Rest.ApiInterface;
import app.tokoonline.model.PostPutDelProduk;
import app.tokoonline.model.Produk;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class InsertProduk extends AppCompatActivity {
    EditText edtNama, edtNomor;
    Button btInsert, btBack;
    ApiInterface mApiInterface;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_insert_produk);
        edtNama = (EditText) findViewById(R.id.edtNama);
        edtNomor = (EditText) findViewById(R.id.edtNomor);
        mApiInterface = ApiClient.getClient().create(ApiInterface.class);
        btInsert = (Button) findViewById(R.id.btInserting);
        btInsert.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
//                Call<PostPutDelProduk> postKontakCall = mApiInterface.postProduk(edtNama.getText().toString(), edtNomor.getText().toString());
//                postKontakCall.enqueue(new Callback<PostPutDelProduk>() {
//                    @Override
//                    public void onResponse(Call<PostPutDelProduk> call, Response<PostPutDelProduk> response) {
//                        ProdukActivity.ma.refresh();
//                        finish();
//                    }
//
//                    @Override
//                    public void onFailure(Call<PostPutDelProduk> call, Throwable t) {
//                        Toast.makeText(getApplicationContext(), "Error", Toast.LENGTH_LONG).show();
//                    }
//                });
            }
        });

        btBack = (Button) findViewById(R.id.btBackGo);
        btBack.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                ProdukActivity.ma.refresh();
                finish();
            }
        });
    }
}