package app.tokoonline.home_fragment;


import android.os.Bundle;
import android.app.Fragment;
import android.support.design.widget.Snackbar;
import android.support.v7.widget.GridLayoutManager;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.ListView;
import android.widget.SimpleAdapter;
import android.widget.TextView;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

import app.tokoonline.Rest.ApiClient;
import app.tokoonline.Rest.ApiInterface;
import app.tokoonline.activity.Main;
import app.tokoonline.R;
import app.tokoonline.adapter.KategoriAdapter;
import app.tokoonline.adapter.ProdukAdapter;
import app.tokoonline.model.GetKategori;
import app.tokoonline.model.GetProduk;
import app.tokoonline.model.Kategori;
import app.tokoonline.model.Produk;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

/**
 * A simple {@link Fragment} subclass.
 */
public class Category extends Fragment {
    ApiInterface mApiInterface;
    private RecyclerView mRecyclerView;
    private RecyclerView.Adapter mAdapter;
    private RecyclerView.LayoutManager mLayoutManager;
    public static Category ma;


    public Category() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {

        View view = inflater.inflate(R.layout.fragment_category, container, false);
        mRecyclerView = (RecyclerView)view. findViewById(R.id.lstCat);
        mLayoutManager = new LinearLayoutManager(getActivity());
        mRecyclerView.setLayoutManager(mLayoutManager);
        mApiInterface = ApiClient.getClient().create(ApiInterface.class);
        ma=this;
        refresh();
        return view;
    }
    private void refresh() {
        Call<GetKategori> kontakCall = mApiInterface.getKategori();
        kontakCall.enqueue(new Callback<GetKategori>() {
            @Override
            public void onResponse(Call<GetKategori> call, Response<GetKategori>
                    response) {
                List<Kategori> KontakList = response.body().getListDataKategori();
                Log.d("Retrofit Get", "Jumlah data Kontak: " +
                        String.valueOf(KontakList.size()));
                mAdapter = new KategoriAdapter(KontakList,getActivity());
                mRecyclerView.setAdapter(mAdapter);
            }

            @Override
            public void onFailure(Call<GetKategori> call, Throwable t) {
                Log.e("Retrofit Get", t.toString());
            }
        });

    }

}
