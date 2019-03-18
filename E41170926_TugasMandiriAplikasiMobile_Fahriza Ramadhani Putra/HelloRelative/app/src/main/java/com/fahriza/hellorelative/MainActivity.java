package com.fahriza.hellorelative;

import android.app.Notification;
import android.app.NotificationManager;
import android.content.Context;
import android.content.Intent;
import android.os.Vibrator;
import android.support.v4.app.NotificationCompat;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    private int isiCount = 0;
    private TextView tampilCount;
    private int data = 10;
    private int a = 10;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        tampilCount = (TextView) findViewById(R.id.show_count);
        getSupportActionBar().setSubtitle("Copy Right By Fahriza Ramadhani Putra");
    }

    public void run_toast(View view) {
        Toast isi = Toast.makeText(this, "Jumlah data yang masuk = "+isiCount+"", Toast.LENGTH_LONG);
        isi.show();
    }

    public void run_count(View view) {
        isiCount++;
        displayNotification();
        if (isiCount==data) {
            Log.d("MainActivity", "angka = " + data + "");
            Toast isi = Toast.makeText(this, "Data yang masuk = " + data + "", Toast.LENGTH_LONG);
            isi.show();
            data += a;
        }
        if (tampilCount != null) {
            tampilCount.setText(Integer.toString(isiCount));
        }
    }

    protected void displayNotification() {
        Vibrator vi;

        vi=(Vibrator) getSystemService(Context.VIBRATOR_SERVICE);

        if (vi.hasVibrator()){

            vi.vibrate(100);

        }

    }

    public void run_reset(View view) {
        isiCount = 0;
        data = 10;
        Toast isi = Toast.makeText(this, "Data berhasil Tereset", Toast.LENGTH_LONG);
        isi.show();
        if (tampilCount != null) {
            tampilCount.setText(Integer.toString(isiCount));
        }
    }
}
