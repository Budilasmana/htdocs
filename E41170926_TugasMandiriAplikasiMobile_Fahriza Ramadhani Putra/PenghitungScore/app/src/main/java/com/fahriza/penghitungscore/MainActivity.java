package com.fahriza.penghitungscore;

import android.widget.TextView;
import android.support.v7.app.AppCompatActivity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Toast;
import android.view.View.OnClickListener;

public class MainActivity extends AppCompatActivity {

    int scoreTeamA, scoreTeamB, roundaa, roundab, roundba, roundbb, roundca, roundcb = 0;
    int scoreTimA = 0, scoreTimB = 0;
    String timhome;
    int i = 1;
//    int[][] round = new int[3][2];

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);


        getSupportActionBar().setSubtitle("CopyRight Fahriza Ramadhani P");



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
        scoreTimA = 0;
        scoreTimB = 0;
        i = 1;
        roundSatuA(roundaa);
        roundSatuB(roundab);
        roundDuaA(roundba);
        roundDuaB(roundbb);
        roundTigaA(roundca);
        roundTigaB(roundcb);
        displayForTeamA(scoreTeamA);
        displayForTeamB(scoreTeamB);

        //Mereset point Team A ke 0
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



    public void nextRound(View view) {


        if (i == 1) {
            roundaa = scoreTeamA;
            roundab = scoreTeamB;

            scoreTeamA = 0;
            scoreTeamB = 0;

            displayForTeamA(scoreTeamA);
            displayForTeamB(scoreTeamB);
            roundSatuA(roundaa);
            roundSatuB(roundab);

            ChkRound1();

            i++;
        } else if (i == 2){
            roundba = scoreTeamA;
            roundbb = scoreTeamB;

            scoreTeamA = 0;
            scoreTeamB = 0;

            displayForTeamA(scoreTeamA);
            displayForTeamB(scoreTeamB);
            roundDuaA(roundba);
            roundDuaB(roundbb);

            ChkRound2();
            i++;
        } else {

            if (scoreTimA == scoreTimB){
                roundca = scoreTeamA;
                roundcb = scoreTeamB;

                scoreTeamA = 0;
                scoreTeamB = 0;

                displayForTeamA(scoreTeamA);
                displayForTeamB(scoreTeamB);
                roundTigaA(roundca);
                roundTigaB(roundcb);


                ChkRound3();
                    i++;

                 if (scoreTimA == 0){
                     ChkMenang();
                 }else {
                     ChkMenang();
                 }
            }else {
                ChkMenang();
            }

            i = 1;
        }

       /* if (roundaa == 0 && roundab == 0) {
            roundaa = scoreTeamA;
            roundab = scoreTeamB;

            roundSatuA(roundaa);
            roundSatuB(roundab);

        }

        if (roundaa != 0 && roundab != 0) {
            roundba = scoreTeamA;
            roundbb = scoreTeamB;

            roundDuaA(roundba);
            roundDuaB(roundbb);

        }

        if (roundaa != 0 && roundab != 0 && roundba != 0 && roundbb != 0) {
            roundca = scoreTeamA;
            roundcb = scoreTeamB;

            roundTigaA(roundca);
            roundTigaB(roundcb);

        }*/

//        if (roundaa != 0 && roundab != 0 && roundba != 0 && roundbb != 0 && roundca != 0 && roundcb != 0) {
//            Toast isi = Toast.makeText(this, "Pertandingan Selesai, Mohon Klik Tombol RESET" , Toast.LENGTH_LONG);
//            isi.show();
//
//        }
    }

    public  void ChkRound1() {
        if (roundaa > roundab){
                scoreTimA++;
            } else if (roundaa < roundab) {
                scoreTimB++;
            } else {}
    }

    public  void ChkRound2() {
        if (roundba > roundbb){
            scoreTimA++;
        } else if (roundba < roundbb) {
            scoreTimB++;
        } else {}
    }
    public  void ChkRound3() {
        if (roundca > roundcb){
            scoreTimA++;
        } else if (roundca < roundcb) {
            scoreTimB++;
        } else {}
    }


    public void ChkMenang() {
        if(scoreTimA > scoreTimB){
//                    Team A Menang

            Toast isi = Toast.makeText(this, "Team A Menang" , Toast.LENGTH_LONG);
            isi.show();
            i = 1;
            scoreTimA = 0;
            scoreTimB = 0;
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




        }else if(scoreTimA < scoreTimB){

            Toast isi = Toast.makeText(this, "Team B Menang" , Toast.LENGTH_LONG);
            isi.show();
            i = 1;
            scoreTimA = 0;
            scoreTimB = 0;
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


//                    Team B Menang

        }else {}
    }


        /*Intent i = null;
        i = new Intent(MainActivity.this, MainActivity2.class);
        Bundle b = new Bundle();
        b.putInt("parse_roundaa", roundaa);
        b.putInt("parse_roundab", roundab);

                i.putExtras(b);
                startActivity(i);*/






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
