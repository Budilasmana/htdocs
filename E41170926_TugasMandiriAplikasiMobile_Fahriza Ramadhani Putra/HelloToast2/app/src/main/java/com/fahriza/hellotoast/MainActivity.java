package com.fahriza.hellotoast;

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
    private int isiCounts = 0;
    //private TextView tampilCounts;
    private int datas = 10;


//    public static final int NOTIFIKASI_ID = 1;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        tampilCount = (TextView) findViewById(R.id.show_count);
        //tampilCounts = (TextView) findViewById(R.id.show_counts);
        getSupportActionBar().setSubtitle("Copy Right By Fahriza Ramadhani Putra");
    }


    public void run_toast(View view) {
        Toast isi = Toast.makeText(this, "Jumlah data yang masuk = "+isiCount+"", Toast.LENGTH_LONG);
        isi.show();
    }




    /*NotificationCompat.Builder notificBuilder = new  NotificationCompat.Builder (this)
                    .setSmallIcon(R.mipmap.ic_launcher)
                    .setContentTitle("HelloToast")
                    .setContentText("Data yang masuk = "+isiCount+"");

            NotificationManager notificationManager = (NotificationManager) getSystemService(Context.NOTIFICATION_SERVICE);
            notificationManager.notify(NOTIFIKASI_ID, notificBuilder.build());*/




    public void run_reset(View view) {
        isiCount = 0;
        data = 10;
        Toast isi = Toast.makeText(this, "Data berhasil Tereset", Toast.LENGTH_LONG);
        isi.show();
        if (tampilCount != null) {
            tampilCount.setText(Integer.toString(isiCount));
        }
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
//batas----------------------------------------------------------------------------------------------


    public void run_counts(View view) {
        Toast isi = Toast.makeText(this, "Jumlah Score Sepak bola = "+isiCounts+"", Toast.LENGTH_LONG);
        isi.show();
    }


    public void run_resets(View view) {
        isiCounts = 0;
        datas = 10;
        Toast isi = Toast.makeText(this, "Score berhasil Tereset", Toast.LENGTH_LONG);
        isi.show();
        if (tampilCount != null) {
            tampilCount.setText(Integer.toString(isiCounts));
        }
    }

    public void run_toasts(View view) {
        isiCounts++;
        displayNotification();

        if (isiCounts==datas) {
            Log.d("MainActivity", "angka = " + datas + "");
            Toast isi = Toast.makeText(this, "Data yang masuk = " + datas + "", Toast.LENGTH_LONG);
            isi.show();
            datas += a;
        }


        if (tampilCount != null) {
            tampilCount.setText(Integer.toString(isiCounts));
        }
    }
}
