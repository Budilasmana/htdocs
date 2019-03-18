package com.fahriza.hellotoastt;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    private int isiCount=0;
    private int data = 10;
    private  int a=10;
    private TextView tampilCount;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        tampilCount = (TextView) findViewById(R.id.textVieww);

    }

    public void view(View view) {
        Toast isi = Toast.makeText(this, "Jumlah data yang masuk="+isiCount+"",Toast.LENGTH_LONG);
        isi.show();
    }

    public void reset(View view) {
        isiCount=0;
        data=10;
        Toast reset = Toast.makeText(this,"Data berhasil Tereset",Toast.LENGTH_LONG);
        reset.show();
        if (tampilCount!=null){
            tampilCount.setText(Integer.toString(isiCount));
        }
    }

    public void count(View view) {
        isiCount++;
        if (isiCount==data){
            Toast count = Toast.makeText(this,"Data="+data+"",Toast.LENGTH_LONG);
            count.show();
            data+=a;
        }if (tampilCount!=null){
            tampilCount.setText(Integer.toString(isiCount));
        }
    }
}
