package app.tokoonline.model;
import com.google.gson.annotations.SerializedName;

public class Kategori {
    @SerializedName("id_kategori")
    private String id_kategori;
    @SerializedName("kategori")
    private String kategori;
    @SerializedName("gambar")
    private String gambar;

    public Kategori(){}

    public Kategori(String id_produk, String gambar, String id_kategori, String kategori, String nama, String harga, String deskripsi, String gambar_produk) {

        this.id_kategori = id_kategori;
        this.kategori = kategori;
        this.gambar= gambar;
    }

    public String getId_kategori() {
        return id_kategori;
    }

    public void setId_kategori(String id_kategori) {
        this.id_kategori = id_kategori;
    }

    public String getGambar() {
        return gambar;
    }

    public void setGambar(String gambar) {
        this.gambar = gambar;
    }

    public String getKategori() {
        return kategori;
    }

    public void setKategori(String kategori) {
        this.kategori = kategori;
    }


}

