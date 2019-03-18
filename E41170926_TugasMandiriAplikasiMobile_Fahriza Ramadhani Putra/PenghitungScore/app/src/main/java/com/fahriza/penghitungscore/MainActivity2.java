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

public class MainActivity2 extends AppCompatActivity {

    int scoreTeamA, scoreTeamB, roundaa, roundab, roundba, roundbb, roundca, roundcb = 0;





    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);



        getSupportActionBar().setSubtitle("CopyRight Fahriza Ramadhani P");

        Bundle b = getIntent().getExtras();
        roundaa = b.getInt("parse_roundaa");
        roundab = b.getInt("parse_roundab");

        roundSatuA(roundaa);
        roundSatuB(roundab);



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
        roundDuaA(roundba);
        roundDuaB(roundbb);
        roundSatuA(roundaa);
        roundSatuB(roundab);
        displayForTeamA(scoreTeamA);
        displayForTeamB(scoreTeamB);

        Intent i = null;
        i = new Intent(MainActivity2.this, MainActivity.class);
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



    public void nextRound2(View view) {
        roundba = scoreTeamA;
        roundbb = scoreTeamB;



        Intent i = null;
        i = new Intent(MainActivity2.this, MainActivity3.class);
        Bundle b = new Bundle();
        b.putInt("parse_roundaa", roundaa);
        b.putInt("parse_roundab", roundab);
        b.putInt("parse_roundba", roundba);
        b.putInt("parse_roundbb", roundbb);

        i.putExtras(b);
        startActivity(i);


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
