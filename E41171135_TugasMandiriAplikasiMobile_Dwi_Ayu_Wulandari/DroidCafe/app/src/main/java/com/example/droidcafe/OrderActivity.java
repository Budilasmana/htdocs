package com.example.droidcafe;

import android.support.design.widget.TabLayout;
import android.support.v4.view.PagerAdapter;
import android.support.v4.view.ViewPager;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.RadioButton;
import android.widget.Toast;

public class OrderActivity extends AppCompatActivity {
    private static final String TAG_ACTIVITY =
            OrderActivity.class.getSimpleName();
    public void displayToast(String message) {
        Toast.makeText(getApplicationContext(), message,
                Toast.LENGTH_SHORT).show();
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_order);

  
    }
    public void onRadioButtonClicked(View view) {
// Is the button now checked?
        boolean checked = ((RadioButton) view).isChecked();
// Check which radio button was clicked
        switch(view.getId()) {
            case R.id.sameday:
                if (checked)
// Same day service
                    displayToast(getString(R.string.chosen) +
                            getString(R.string.same_day_mesengger_service));
                break;
            case R.id.nextday:
                if (checked)
// Next day delivery
                    displayToast(getString(R.string.chosen) +
                            getString(R.string.next_day_ground_delivery));
                break;
            case R.id.pickup:
                if (checked)
// Pick up
                    displayToast(getString(R.string.chosen) +
                            getString(R.string.pick_up));
                break;
            default:
                Log.d(TAG_ACTIVITY, getString(R.string.nothing_clicked));
                break;
        }
    }


    }

