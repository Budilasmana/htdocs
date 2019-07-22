package app.tokoonline;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.util.Log;

import java.util.List;

import app.tokoonline.Rest.ApiClient;
import app.tokoonline.Rest.ApiInterface;
import app.tokoonline.adapter.ProdukAdapter;
import app.tokoonline.model.GetProduk;
import app.tokoonline.model.Produk;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class tes extends AppCompatActivity {
    ApiInterface mApiInterface;
    private RecyclerView mRecyclerView;
    private RecyclerView.Adapter mAdapter;
    private RecyclerView.LayoutManager mLayoutManager;
    public static tes ma;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tes);
        mRecyclerView = (RecyclerView) findViewById(R.id.recyclerView);
        mLayoutManager = new LinearLayoutManager(this);
        mRecyclerView.setLayoutManager(mLayoutManager);
        mApiInterface = ApiClient.getClient().create(ApiInterface.class);
        ma=this;
        refresh();

    }

    private void refresh() {
        Call<GetProduk> kontakCall = mApiInterface.getProduk();
        kontakCall.enqueue(new Callback<GetProduk>() {
            @Override
            public void onResponse(Call<GetProduk> call, Response<GetProduk>
                    response) {
                List<Produk> KontakList = response.body().getListDataProduk();
                Log.d("Retrofit Get", "Jumlah data Kontak: " +
                        String.valueOf(KontakList.size()));
                mAdapter = new ProdukAdapter(KontakList,getBaseContext());
                mRecyclerView.setAdapter(mAdapter);
            }

            @Override
            public void onFailure(Call<GetProduk> call, Throwable t) {
                Log.e("Retrofit Get", t.toString());
            }
        });

    }
}
