package com.fahriza.penghitungscore;

import android.widget.TextView;
import android.support.v7.app.AppCompatActivity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.RadioGroup;

public class MainActivity3 extends AppCompatActivity {

    int scoreTeamA, scoreTeamB, roundaa, roundab, roundba, roundbb, roundca, roundcb = 0;





    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main3);



        getSupportActionBar().setSubtitle("CopyRight Fahriza Ramadhani P");

        Bundle b = getIntent().getExtras();
        roundaa = b.getInt("parse_roundaa");
        roundab = b.getInt("parse_roundab");
        roundba = b.getInt("parse_roundba");
        roundbb = b.getInt("parse_roundbb");

        roundSatuA(roundaa);
        roundSatuB(roundab);
        roundDuaA(roundba);
        roundDuaB(roundbb);




    }


    public void displayForTeamA(int score) {
        TextView scoreView = (TextView) findViewById(R.id.team_a_score);
        scoreView.setText(String.valueOf(score));
      /*
      Menampilkan score Team A di dalam TextView yang di tampilkan
      Menset nilai score yang bertipe data integer

       */


    }



    public void satuPointA(View v) {
        scoreTeamA = scoreTeamA + 1;
        displayForTeamA(scoreTeamA);

        //Menambah Point Team A 1
    }

    public void displayForTeamB(int score) {
        TextView scoreView = (TextView) findViewById(R.id.team_b_score);
        scoreView.setText(String.valueOf(score));
             /*
      Menampilkan score Team B di dalam TextView yang di tampilkan
      Menset nilai score yang bertipe data integer

       */

    }



    public void satuPointB(View v) {
        scoreTeamB = scoreTeamB + 1;
        displayForTeamB(scoreTeamB);
        // Menambah Point Team B 1
    }


    public void resetPoint(View v) {
        scoreTeamA = 0;
        scoreTeamB = 0;
        roundaa = 0;
        roundab = 0;
        roundba = 0;
        roundbb = 0;
        roundca = 0;
        roundcb = 0;
        roundSatuA(roundaa);
        roundSatuB(roundab);
        roundDuaA(roundba);
        roundDuaB(roundbb);
        roundTigaA(roundca);
        roundTigaB(roundcb);
        displayForTeamA(scoreTeamA);
        displayForTeamB(scoreTeamB);

        Intent i = null;
        i = new Intent(MainActivity3.this, MainActivity.class);
        startActivity(i);

    }

    public void roundSatuA(int score) {
        TextView scoreView = (TextView) findViewById(R.id.roundsatuA);
        scoreView.setText(String.valueOf(score));
    }

    public void roundSatuB(int score) {
        TextView scoreView = (TextView) findViewById(R.id.roundsatuB);
        scoreView.setText(String.valueOf(score));
    }

    public void roundDuaA(int score) {
        TextView scoreView = (TextView) findViewById(R.id.roundduaA);
        scoreView.setText(String.valueOf(score));
    }

    public void roundDuaB(int score) {
        TextView scoreView = (TextView) findViewById(R.id.roundduaB);
        scoreView.setText(String.valueOf(score));
    }

    public void roundTigaA(int score) {
        TextView scoreView = (TextView) findViewById(R.id.roundtigaA);
        scoreView.setText(String.valueOf(score));
    }

    public void roundTigaB(int score) {
        TextView scoreView = (TextView) findViewById(R.id.roundtigaB);
        scoreView.setText(String.valueOf(score));
    }


    public void nextRound3(View view) {
        roundca = scoreTeamA;
        roundcb = scoreTeamB;
        roundTigaA(roundca);
        roundTigaB(roundcb);
        scoreTeamA = 0;
        scoreTeamB = 0;
        displayForTeamA(scoreTeamA);
        displayForTeamB(scoreTeamB);

        Button kembali = (Button) findViewById(R.id.round3);
        kembali.setOnClickListener(new OnClickListener() {
            public void onClick(View v) {

                Intent i = null;
                i = new Intent(MainActivity3.this, MainActivity.class);

                startActivity(i);
            }
        });
    }


   /* public void roundDuaA(int score) {
        TextView scoreView = (TextView) findViewById(R.id.roundduaA);
        scoreView.setText(String.valueOf(score));
    }

    public void roundDuaB(int score) {
        TextView scoreView = (TextView) findViewById(R.id.roundduaB);
        scoreView.setText(String.valueOf(score));
    }
    public void nextRound(View view) {
        roundba = scoreTeamA;
        roundbb = scoreTeamB;
        scoreTeamA = 0;
        scoreTeamB = 0;
        roundDuaA(roundba);
        roundDuaB(roundbb);

    }

    public void roundTigaA(int score) {
        TextView scoreView = (TextView) findViewById(R.id.roundtigaA);
        scoreView.setText(String.valueOf(score));
    }

    public void roundTigaB(int score) {
        TextView scoreView = (TextView) findViewById(R.id.roundtigaB);
        scoreView.setText(String.valueOf(score));
    }
    public void nextRound(View view) {
        roundca = scoreTeamA;
        roundcb = scoreTeamB;
        scoreTeamA = 0;
        scoreTeamB = 0;
        roundTigaA(roundca);
        roundTigaB(roundcb);

    }*/


}
