package app.tokoonline.Rest;

/**
 * Created by root on 2/3/17.
 */


import app.tokoonline.model.GetKategori;
import app.tokoonline.model.GetProduk;
import app.tokoonline.model.PostPutDelProduk;
import retrofit2.Call;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.GET;
import retrofit2.http.HTTP;
import retrofit2.http.POST;
import retrofit2.http.PUT;

public interface ApiInterface {
    @GET("api/Api_produk")
    Call<GetProduk> getProduk();

    @GET("api/Api_kategori")
    Call<GetKategori> getKategori();

    @FormUrlEncoded
    @POST("api/Api_getproduk")
    Call<PostPutDelProduk> postProduk(@Field("id_produk") String id_produk,
                                      @Field("pengguna") String pengguna,
                                      @Field("jumlah") String jumlah);



    @FormUrlEncoded
    @PUT("api/Api_produk")
    Call<PostPutDelProduk> putProduk(@Field("id_produk") String id_produk,
                                     @Field("id_kategori") String id_kategori,
                                     @Field("nama") String nama,
                                     @Field("harga") String harga,
                                     @Field("deskripsi") String deskripsi,
                                     @Field("gambar") String gambar);


    @FormUrlEncoded
    @HTTP(method = "DELETE", path = "api/Api_produk", hasBody = true)
    Call<PostPutDelProduk> deleteProduk(@Field("id_produk") String id_produk);
}