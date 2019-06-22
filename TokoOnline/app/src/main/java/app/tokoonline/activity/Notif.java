package app.tokoonline.activity;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ListView;
import android.widget.SimpleAdapter;
import android.widget.TextView;

import java.util.ArrayList;
import java.util.HashMap;

import app.tokoonline.R;

public class Notif extends AppCompatActivity {

    ListView lstNotif;
    SimpleAdapter simpleAdapter;
    ArrayList<HashMap<String, String>> arrayList = new ArrayList<HashMap<String, String>>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_notif);

        lstNotif = findViewById(R.id.lstNotif);
        setNotif();

        getSupportActionBar().setDisplayHomeAsUpEnabled(true);
        getSupportActionBar().setTitle("Notifikasi");
    }

    @Override
    public boolean onSupportNavigateUp(){
        finish();
        return true;
    }

    private void setNotif(){

        for (int i = 1; i <= 10; i++) {
            HashMap<String, String> map = new HashMap<String, String>();
            map.put("title",  "Lorem Ipsum");
            arrayList.add(map);
        }
        simpleAdapter = new SimpleAdapter(Notif.this, arrayList, R.layout.adapter_notif,
                new String[] { "title", },
                new int[] { R.id.txtTitle });

        lstNotif.setAdapter(simpleAdapter);
        lstNotif.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {

                TextView txtDesc = ((TextView) view.findViewById(R.id.txtDesc));
                if ( txtDesc.getVisibility() == View.GONE) {
                    txtDesc.setVisibility(View.VISIBLE);
                } else {
                    txtDesc.setVisibility(View.GONE);
                }
            }
        });
    }
}
