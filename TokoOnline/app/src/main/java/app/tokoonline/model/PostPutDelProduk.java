package app.tokoonline.model;

import com.google.gson.annotations.SerializedName;

public class PostPutDelProduk {
    @SerializedName("status")
    String status;
    @SerializedName("result")
    Produk mProduk;
    @SerializedName("message")
    String message;

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    public Produk getmProduk() {
        return mProduk;
    }

    public void setmProduk(Produk mProduk) {
        this.mProduk = mProduk;
    }

    public String getMessage() {
        return message;
    }

    public void setMessage(String message) {
        this.message = message;
    }
}
