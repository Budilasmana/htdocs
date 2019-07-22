package app.tokoonline.activity;

import android.app.Dialog;
import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.view.WindowManager;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import com.daimajia.slider.library.Animations.DescriptionAnimation;
import com.daimajia.slider.library.SliderLayout;
import com.daimajia.slider.library.SliderTypes.BaseSliderView;
import com.daimajia.slider.library.SliderTypes.TextSliderView;
import com.daimajia.slider.library.Tricks.ViewPagerEx;
import com.squareup.picasso.Picasso;

import java.util.HashMap;

import app.tokoonline.R;
import app.tokoonline.Rest.ApiClient;
import app.tokoonline.Rest.ApiInterface;
import app.tokoonline.model.PostPutDelProduk;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class Detail extends AppCompatActivity {
    public  TextView txtnama,txtkategori, produk, txtharga, mTextViewHarga, mTextViewDeskripsi, mTextViewGambar;
    private SliderLayout mDemoSlider;
    EditText pengguna;
    Button data;
    ImageView gambar;
    TextView txtBuy;
    ApiInterface mApiInterface;
    Dialog dialog;
       @Override
        protected void onCreate (Bundle savedInstanceState) {
           super.onCreate(savedInstanceState);
           setContentView(R.layout.activity_detail);
//            Button btnPay = dialog.findViewById(R.id.btnPay);
           pengguna=findViewById(R.id.pengguna);
           pengguna.setText("Amar");
           produk=findViewById(R.id.produk);
           gambar=findViewById(R.id.gambar);
            txtnama = (TextView) findViewById(R.id.nama);
            txtkategori = (TextView)findViewById(R.id.kategori);
            txtharga = (TextView) findViewById(R.id.harga);
            mTextViewDeskripsi = (TextView) findViewById(R.id.deskripsi);
           mApiInterface = ApiClient.getClient().create(ApiInterface.class);
            Intent mIntent=getIntent();
            txtharga.setText(mIntent.getStringExtra("harga"));
            txtkategori.setText(mIntent.getStringExtra("kategori"));
            txtnama.setText(mIntent.getStringExtra("nama"));
            mTextViewDeskripsi.setText(mIntent.getStringExtra("deskripsi"));
           final String urlGambar = "http://192.168.100.85/projectsemester4/assets/img/produk/" + mIntent.getStringExtra("gambar");
           Picasso.with(getApplicationContext()).load(urlGambar).into(gambar);
           data=findViewById(R.id.databeli);
           data.setOnClickListener(new View.OnClickListener() {
               @Override
               public void onClick(View v) {

                   Call<PostPutDelProduk> postKontakCall = mApiInterface.postProduk(produk.getText().toString(), txtharga.getText().toString(), pengguna.getText().toString());
                   postKontakCall.enqueue(new Callback<PostPutDelProduk>() {
                       @Override
                       public void onResponse(Call<PostPutDelProduk> call, Response<PostPutDelProduk> response) {
                           // MainActivity.ma.refresh();
                           Toast.makeText(Detail.this, "Berhasil", Toast.LENGTH_LONG).show();
                           finish();
                       }

                       @Override
                       public void onFailure(Call<PostPutDelProduk> call, Throwable t) {
                           Toast.makeText(getApplicationContext(), "Error", Toast.LENGTH_LONG).show();


                       }
                   });

               }
           });


                   Intent intent = new Intent(Detail.this, activitybeli.class);
                   intent.putExtra("harga", txtharga.getText());
                   intent.putExtra("id_produk", produk.getText());
                   intent.putExtra("kategori", txtkategori.getText());
                   intent.putExtra("nama", txtnama.getText());
                   intent.putExtra("deskripsi", mTextViewDeskripsi.getText());
                   startActivity(intent);

               }




}