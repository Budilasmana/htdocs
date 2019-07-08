package com.najib.clientandroid;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.view.animation.Animation;
import android.view.animation.AnimationUtils;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    ImageView welcom;
    TextView thehoax, desc;
    Button mulai;
    Animation atg, text;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        welcom = (ImageView) findViewById(R.id.welcome);
        thehoax = (TextView) findViewById(R.id.thehoax);
        desc = (TextView)findViewById(R.id.desc);
        mulai = (Button) findViewById(R.id.mulai);

        atg = AnimationUtils.loadAnimation(this, R.anim.atg);
        text = AnimationUtils.loadAnimation(this, R.anim.text);

        welcom.startAnimation(atg);
        thehoax.startAnimation(text);
        desc.startAnimation(text);
        mulai.startAnimation(atg);

    }

    public void openacti(View view) {
        Intent intent = new Intent(this, Pembelian.class);
        startActivity(intent);
    }
}
