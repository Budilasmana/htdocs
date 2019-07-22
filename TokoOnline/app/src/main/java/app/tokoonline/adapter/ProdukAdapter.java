package app.tokoonline.adapter;
import android.content.Context;
import android.content.Intent;
import android.media.Image;
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
import app.tokoonline.model.Produk;
//import app.tokoonline.EditActivity;



/**
 * Created by root on 2/3/17.
 */

public class ProdukAdapter extends RecyclerView.Adapter<ProdukAdapter.MyViewHolder>{
    List<Produk> mProdukList;
    Context context;


    public ProdukAdapter(List <Produk> ProdukList,Context context) {

        mProdukList = ProdukList;
        this.context=context;

    }

    @Override
    public MyViewHolder onCreateViewHolder (ViewGroup parent,int viewType){
        View mView = LayoutInflater.from(parent.getContext()).inflate(R.layout.adapter_product, parent, false);
        MyViewHolder mViewHolder = new MyViewHolder(mView);
        return mViewHolder;
    }

    @Override
    public void onBindViewHolder (MyViewHolder holder,final int position) {
        final String urlGambar = "http://192.168.100.85/projectsemester4/assets/img/produk/" + mProdukList.get(position).getGambar_produk();
        Picasso.with(context).load(urlGambar).into(holder.imgProduct);

        holder.mTextViewIdP.setText( mProdukList.get(position).getKategori());
        holder.mTextViewIdK.setText("Rp." + mProdukList.get(position).getHarga());

        holder.mTextViewNama.setText( mProdukList.get(position).getNama());
//        holder.mTextViewHarga.setText("harga = " + mProdukList.get(position).getHarga());
//        holder.mTextViewDeskripsi.setText("Des = " + mProdukList.get(position).getDeskripsi());
       // holder.mTextViewGambar.setText("Gambr = " + mProdukList.get(position).getGambar());
        holder.itemView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                 Intent mIntent = new Intent(view.getContext(), Detail.class);
                 mIntent.putExtra("nama" , mProdukList.get(position).getNama());
                 mIntent.putExtra("id_produk" , mProdukList.get(position).getId_produk());
                 mIntent.putExtra("kategori" , mProdukList.get(position).getKategori());
                 mIntent.putExtra("harga", mProdukList.get(position).getHarga());
//
               mIntent.putExtra("gambar" , mProdukList.get(position).getGambar_produk());
                mIntent.putExtra("deskripsi" , mProdukList.get(position).getDeskripsi());
                mIntent.putExtra("Gambr = " , mProdukList.get(position).getGambar_produk());
               view.getContext().startActivity(mIntent);
            }
        });
    }

    @Override
    public int getItemCount () {
        return mProdukList.size();
    }

    public class MyViewHolder extends RecyclerView.ViewHolder {
        public TextView mTextViewIdP,mTextViewIdK,  mTextViewNama, mTextViewHarga, mTextViewDeskripsi, mTextViewGambar;
        public ImageView imgProduct;

        public MyViewHolder(View itemView) {
            super(itemView);
            imgProduct = (ImageView) itemView.findViewById(R.id.imgProduct);
            mTextViewIdP = (TextView) itemView.findViewById(R.id.txtTitle);
            mTextViewIdK = (TextView) itemView.findViewById(R.id.txtPrice);
            mTextViewNama = (TextView) itemView.findViewById(R.id.txtSeller);
//            mTextViewHarga= (TextView) itemView.findViewById(R.id.tvHarga);
//            mTextViewDeskripsi= (TextView) itemView.findViewById(R.id.tvDeskripsi);
           // mTextViewGambar= (TextView) itemView.findViewById(R.id.tvGambar);
        }
    }
}
