package app.tokoonline.adapter;
import android.content.Intent;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;



import java.util.List;

import app.tokoonline.model.Produk;
//import app.tokoonline.EditActivity;



/**
 * Created by root on 2/3/17.
 */

public class ProdukAdapter extends RecyclerView.Adapter<ProdukAdapter.MyViewHolder>{
    List<Produk> mProdukList;

    public ProdukAdapter(List <Produk> ProdukList) {
        mProdukList = ProdukList;
    }

    @Override
    public MyViewHolder onCreateViewHolder (ViewGroup parent,int viewType){
        View mView = LayoutInflater.from(parent.getContext()).inflate(R.layout.kontak_list, parent, false);
        MyViewHolder mViewHolder = new MyViewHolder(mView);
        return mViewHolder;
    }

    @Override
    public void onBindViewHolder (MyViewHolder holder,final int position){
        holder.mTextViewIdP.setText("Id_p= " + mProdukList.get(position).getId_produk());
        holder.mTextViewIdK.setText("IdK = " + mProdukList.get(position).getId_kategori());

        holder.mTextViewNama.setText("Nama = " + mProdukList.get(position).getNama());
        holder.mTextViewHarga.setText("harga = " + mProdukList.get(position).getHarga());
        holder.mTextViewDeskripsi.setText("Des = " + mProdukList.get(position).getDeskripsi());
        holder.mTextViewGambar.setText("Gambr = " + mProdukList.get(position).getGambar());
        holder.itemView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
//                Intent mIntent = new Intent(view.getContext(), EditActivity.class);
//                mIntent.putExtra("Id_p= " , mProdukList.get(position).getId_produk());
//                mIntent.putExtra("IdK = " , mProdukList.get(position).getId_kategori());
//                mIntent.putExtra("Nama", mProdukList.get(position).getNama());
//
//                mIntent.putExtra("harga = " , mProdukList.get(position).getHarga());
//                mIntent.putExtra("Des = " , mProdukList.get(position).getDeskripsi());
//                mIntent.putExtra("Gambr = " , mProdukList.get(position).getGambar());
//                view.getContext().startActivity(mIntent);
            }
        });
    }

    @Override
    public int getItemCount () {
        return mProdukList.size();
    }

    public class MyViewHolder extends RecyclerView.ViewHolder {
        public TextView mTextViewIdP,mTextViewIdK,  mTextViewNama, mTextViewHarga, mTextViewDeskripsi, mTextViewGambar;

        public MyViewHolder(View itemView) {
            super(itemView);
            mTextViewIdP = (TextView) itemView.findViewById(R.id.tvIdP);
            mTextViewIdK = (TextView) itemView.findViewById(R.id.tvIdK);
            mTextViewNama = (TextView) itemView.findViewById(R.id.tvNama);
            mTextViewHarga= (TextView) itemView.findViewById(R.id.tvHarga);
            mTextViewDeskripsi= (TextView) itemView.findViewById(R.id.tvDeskripsi);
            mTextViewGambar= (TextView) itemView.findViewById(R.id.tvGambar);
        }
    }
}
