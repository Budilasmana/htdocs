package app.tokoonline.home_fragment;


import android.content.Intent;
import android.os.Bundle;
import android.app.Fragment;
import android.support.v7.widget.GridLayoutManager;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.GridView;
import android.widget.SimpleAdapter;
import android.widget.TextView;
import android.widget.Toast;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

import app.tokoonline.Rest.ApiClient;
import app.tokoonline.Rest.ApiInterface;
import app.tokoonline.activity.Detail;
import app.tokoonline.R;
import app.tokoonline.adapter.KategoriAdapter;
import app.tokoonline.adapter.ProdukAdapter;
import app.tokoonline.model.GetProduk;
import app.tokoonline.model.Produk;
import app.tokoonline.tes;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

/**
 * A simple {@link Fragment} subclass.
 */
public class Product extends Fragment {
    ApiInterface mApiInterface;
    private RecyclerView mRecyclerView;
    private RecyclerView.Adapter mAdapter;
    private RecyclerView.LayoutManager mLayoutManager;
    public static Product ma;


    public Product() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View view = inflater.inflate(R.layout.fragment_product, container, false);

        //grdProduct = view.findViewById(R.id.grdProduct);
        //setProduct();
        mRecyclerView = (RecyclerView)view. findViewById(R.id.recyclerView);
        mLayoutManager = new GridLayoutManager(getActivity(),2);
        mRecyclerView.setLayoutManager(mLayoutManager);
        mApiInterface = ApiClient.getClient().create(ApiInterface.class);
        ma=this;
        refresh();

        return view;
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
                mAdapter = new ProdukAdapter(KontakList,getActivity());
                mRecyclerView.setAdapter(mAdapter);
            }

            @Override
            public void onFailure(Call<GetProduk> call, Throwable t) {
                Log.e("Retrofit Get", t.toString());
            }
        });

    }



}
