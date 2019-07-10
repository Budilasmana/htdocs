package app.tokoonline.model;
import com.google.gson.annotations.SerializedName;

public class Produk {   @SerializedName("id_produk")
private String id_produk;
    @SerializedName("id_kategori")
    private String id_kategori;
    @SerializedName("nama")
    private String nama;
    @SerializedName("harga")
    private String harga;
    @SerializedName("deskripsi")
    private String deskripsi;
    @SerializedName("gambar")
    private String gambar;

    public Produk(){}

    public Produk(String id_produk, String id_kategori, String nama, String harga, String deskripsi, String gambar) {
        this.id_produk = id_produk;
        this.id_kategori = id_kategori;
        this.nama = nama;
        this.harga = harga;
        this.deskripsi = deskripsi;
        this.gambar = gambar;
    }

    public String getId_produk() {
        return id_produk;
    }

    public void setId_produk(String id_produk) {
        this.id_produk = id_produk;
    }

    public String getId_kategori() {
        return id_kategori;
    }

    public void setId_kategori(String id_kategori) {
        this.id_kategori = id_kategori;
    }

    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public String getHarga() {
        return harga;
    }

    public void setHarga(String harga) {
        this.harga = harga;
    }

    public String getDeskripsi() {
        return deskripsi;
    }

    public void setDeskripsi(String deskripsi) {
        this.deskripsi = deskripsi;
    }

    public String getGambar() {
        return gambar;
    }

    public void setGambar(String gambar) {
        this.gambar = gambar;
    }
}

