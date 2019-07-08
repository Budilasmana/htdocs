package com.najib.clientandroid;

import android.app.DatePickerDialog;
import android.app.ProgressDialog;
import android.content.Context;
import android.content.Intent;
import android.net.ConnectivityManager;
import android.net.NetworkInfo;
import android.os.AsyncTask;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.DatePicker;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;

import org.json.JSONException;
import org.json.JSONObject;

import java.io.BufferedWriter;
import java.io.IOException;
import java.io.OutputStream;
import java.io.OutputStreamWriter;
import java.net.HttpURLConnection;
import java.net.URL;
import java.text.SimpleDateFormat;
import java.util.Arrays;
import java.util.Calendar;
import java.util.HashMap;
import java.util.List;
import java.util.Locale;
import java.util.Random;

public class BeliPulsa extends AppCompatActivity {

    private DatePickerDialog datePickerDialog;
    private SimpleDateFormat dateFormatter;
    private TextView tvDateResult;
    private EditText tanggal, nomor, id_trans, date;
    Spinner provider,nominal;
    TextView notif;
    Random rand = new Random();
    int n = rand.nextInt(2000000);

    public boolean checkNetworkConnection() {
        ConnectivityManager connMgr = (ConnectivityManager)
                getSystemService(Context.CONNECTIVITY_SERVICE);

        NetworkInfo networkInfo = connMgr.getActiveNetworkInfo();
        boolean isConnected = false;
        if (networkInfo != null && (isConnected = networkInfo.isConnected())) {
            // show "Connected" & type of network "WIFI or MOBILE"
            Toast.makeText(this, "Terhubung", Toast.LENGTH_SHORT).show();


        } else {
            Toast.makeText(this, "Tidak Terhubung", Toast.LENGTH_SHORT).show();
        }

        return isConnected;
    }

    private void showDateDialog(){
        Calendar newCalendar = Calendar.getInstance();
        datePickerDialog = new DatePickerDialog(this, new DatePickerDialog.OnDateSetListener() {

            @Override
            public void onDateSet(DatePicker view, int year, int monthOfYear, int dayOfMonth) {

                Calendar newDate = Calendar.getInstance();
                newDate.set(year, monthOfYear, dayOfMonth);

                tanggal.setText(dateFormatter.format(newDate.getTime()));
            }

        },newCalendar.get(Calendar.YEAR), newCalendar.get(Calendar.MONTH), newCalendar.get(Calendar.DAY_OF_MONTH));

        datePickerDialog.show();
    }
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_belipulsa);
        notif = (TextView) findViewById(R.id.notif);

        checkNetworkConnection();
        date = (EditText) findViewById(R.id.tanggal);
        id_trans = (EditText) findViewById(R.id.id_trans);
        provider = (Spinner) findViewById(R.id.provider);
        nominal = (Spinner) findViewById(R.id.nominal);
        nomor = (EditText) findViewById(R.id.nomor);

        id_trans.setText(""+n);
        String [] namaArray= getResources().getStringArray(R.array.planets_array);
        List<String> namaList=Arrays.asList(namaArray);
        ArrayAdapter<String>namaAdapter=new ArrayAdapter<>(this,android.R.layout.simple_spinner_dropdown_item,namaList);
        provider.setAdapter(namaAdapter);

        String [] namaArray1= getResources().getStringArray(R.array.nominal);
        List<String> namaList1=Arrays.asList(namaArray1);
        ArrayAdapter<String>namaAdapter1=new ArrayAdapter<>(this,android.R.layout.simple_spinner_item,namaList1);
        nominal.setAdapter(namaAdapter1);

/*
// Create an ArrayAdapter using the string array and a default spinner layout
        ArrayAdapter<CharSequence> adapter = ArrayAdapter.createFromResource(this,
                R.array.planets_array, android.R.layout.simple_spinner_item);
// Specify the layout to use when the list of choices appears
        adapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
// Apply the adapter to the spinner
        provider.setAdapter(adapter);

// Create an ArrayAdapter using the string array and a default spinner layout
        ArrayAdapter<CharSequence> data= ArrayAdapter.createFromResource(this,
                R.array.nominal, android.R.layout.simple_spinner_item);
// Specify the layout to use when the list of choices appears
        data.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
// Apply the adapter to the spinner
        nominal.setAdapter(data);*/
        dateFormatter = new SimpleDateFormat("dd-MM-yyyy", Locale.US);
        tvDateResult = (TextView) findViewById(R.id.date);
        tanggal = (EditText) findViewById(R.id.tanggal);

        tanggal.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                showDateDialog();
            }
        });

    }

    private void addEmployee(){
        final String trans = id_trans.getText().toString().trim();
        final String no = nomor.getText().toString().trim();
        final String prov = provider.getSelectedItem().toString().trim();
        final String jumlah = nominal.getSelectedItem().toString().trim();

        class AddEmployee extends AsyncTask<Void,Void,String> {

            ProgressDialog loading;

            @Override
            protected void onPreExecute() {
                super.onPreExecute();
                loading = ProgressDialog.show(BeliPulsa.this,"Menambahkan...","Tunggu...",false,false);
            }

            @Override
            protected void onPostExecute(String s) {
                super.onPostExecute(s);
                loading.dismiss();
                Toast.makeText(BeliPulsa.this,s, Toast.LENGTH_LONG).show();
            }

            @Override
            protected String doInBackground(Void... v) {
                HashMap<String,String> params = new HashMap<>();
                params.put(konfigurasi.KEY_EMP_ID_TRANS,trans);
                params.put(konfigurasi.KEY_EMP_NOHP,no);
                params.put(konfigurasi.KEY_EMP_PROV,prov);
                params.put(konfigurasi.KEY_EMP_JUMLAH,jumlah);


                RequestHandler rh = new RequestHandler();
                String res = rh.sendPostRequest(konfigurasi.URL_ADD, params);
                return res;
            }
        }

        AddEmployee ae = new AddEmployee();
        ae.execute();
    }


    private String httpPost(String myUrl) throws IOException, JSONException {
        String result = "";

        URL url = new URL(myUrl);

        // 1. create HttpURLConnection
        HttpURLConnection conn = (HttpURLConnection) url.openConnection();
        conn.setRequestMethod("POST");
        conn.setRequestProperty("Content-Type", "application/json; charset=utf-8");

        // 2. build JSON object
        JSONObject jsonObject = buidJsonObject();

        // 3. add JSON content to POST request body
        setPostRequestContent(conn, jsonObject);

        // 4. make POST request to the given URL
        conn.connect();

        // 5. return response message
        return conn.getResponseMessage()+"";

    }

    public void tambah(View view) {
        n++;
        id_trans.setText(""+n);
    }


    private class HTTPAsyncTask extends AsyncTask<String, Void, String> {
        @Override
        protected String doInBackground(String... urls) {
            // params comes from the execute() call: params[0] is the url.
            try {
                try {
                    return httpPost(urls[0]);
                } catch (JSONException e) {
                    e.printStackTrace();
                    return "Error!";
                }
            } catch (IOException e) {
                return "Unable to retrieve web page. URL may be invalid.";
            }
        }
        // onPostExecute displays the results of the AsyncTask.
        @Override
        protected void onPostExecute(String result) {
            notif.setText(result);
        }
    }


    public void send(View view) {
        Toast.makeText(this, "Clicked", Toast.LENGTH_SHORT).show();
        addEmployee();
        if(checkNetworkConnection())
            new HTTPAsyncTask().execute("http://192.168.43.1:8686");
        else
            Toast.makeText(this, "Not Connected!", Toast.LENGTH_SHORT).show();

    }

    private JSONObject buidJsonObject() throws JSONException {
        JSONObject jsonObject = new JSONObject();
        jsonObject.accumulate("no", nomor.getText().toString());
        jsonObject.accumulate("pesan",  "BeliPulsa "+nominal.getSelectedItem().toString()+" Nomor "+nomor.getText().toString());

        return jsonObject;
    }

    private void setPostRequestContent(HttpURLConnection conn, JSONObject jsonObject) throws IOException {

        OutputStream os = conn.getOutputStream();
        BufferedWriter writer = new BufferedWriter(new OutputStreamWriter(os, "UTF-8"));
        writer.write(jsonObject.toString());
        Log.i(MainActivity.class.toString(), jsonObject.toString());
        writer.flush();
        writer.close();
        os.close();
    }





}
