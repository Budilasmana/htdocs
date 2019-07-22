package app.tokoonline.adapter;

import android.content.Context;
import android.content.Intent;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import com.squareup.picasso.Picasso;

import java.util.List;

import app.tokoonline.R;
import app.tokoonline.activity.Detail;
import app.tokoonline.model.Kategori;
import app.tokoonline.model.Produk;
//import app.tokoonline.EditActivity;


/**
 * Created by root on 2/3/17.
 */

public class KategoriAdapter extends RecyclerView.Adapter<KategoriAdapter.MyViewHolder>{
    List<Kategori> mKategoriList;
    Context context;


    public KategoriAdapter(List <Kategori> KategoriList, Context context) {

        mKategoriList = KategoriList;
        this.context=context;

    }

    @Override
    public MyViewHolder onCreateViewHolder (ViewGroup parent,int viewType){
        View mView = LayoutInflater.from(parent.getContext()).inflate(R.layout.adapter_category, parent, false);
        MyViewHolder mViewHolder = new MyViewHolder(mView);
        return mViewHolder;
    }

    @Override
    public void onBindViewHolder (MyViewHolder holder,final int position) {
        final String urlGambar = "http://jamurbondowoso.webtif.com/assets/img/kategori/" + mKategoriList.get(position).getGambar();
        Picasso.with(context).load(urlGambar).into(holder.imgProduct);
        holder.mTextViewNama.setText( mKategoriList.get(position).getKategori());
        holder.itemView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
            }
        });
    }

    @Override
    public int getItemCount () {
        return mKategoriList.size();
    }

    public class MyViewHolder extends RecyclerView.ViewHolder {
        public TextView mTextViewIdP,mTextViewIdK,  mTextViewNama, mTextViewHarga, mTextViewDeskripsi, mTextViewGambar;
        public ImageView imgProduct;

        public MyViewHolder(View itemView) {
            super(itemView);
            imgProduct = (ImageView) itemView.findViewById(R.id.gambar);
            mTextViewNama = (TextView) itemView.findViewById(R.id.txtTitle);
        }
    }
}
