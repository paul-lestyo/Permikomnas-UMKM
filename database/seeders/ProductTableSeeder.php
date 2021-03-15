<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product')->delete();
        
        \DB::table('product')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_product' => 'Tahu Kupat',
                'text' => 'AKU LUWE MBOK TULUNG JAJAKKE TENONGAN RASAH SAMBAT RASAH SAMBAT',
                'gambar' => 'product/3kCe1EbpdIMkTNMAyyXB1epR03HIOJmFbC5bdtkg.jpg',
                'harga' => '15000',
                'shope_link' => 'https://shopee.co.id/',
                'toped_link' => 'https://www.tokopedia.com',
                'category_id' => 1,
                'toko_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nama_product' => 'Sate Lontong',
                'text' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAaaaaaaaaaaaaaaaaaaAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAASSSSSSSSSSSSSSSSSSSSSSSSSSSSSSDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDWWWWWWWWWWWWWWWWWWWWWWWWWWWWaaaaaaaaaaaaaaaaaawwwwwwwwwwwwwwwwwwwwwddddddddddddddddsssssssssssssssssssssssssssssssssssss',
                'gambar' => 'product/GL3LN631mAjIWmqcJYbX5UW8WY3snjb7szTM8iY2.jpg',
                'harga' => '30000',
                'shope_link' => 'https://shopee.co.id/Tahu-Bakso-Semarang-Siap-Goreng-Isi-15-Pcs-i.72219563.7955376208',
                'toped_link' => 'https://www.tokopedia.com/tokobahankuedona/royal-palmia-butter-margarine-200-gr-murah?src=topads',
                'category_id' => 1,
                'toko_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'nama_product' => 'Anthurium Corong',
                'text' => 'Anthurium Corong adalah tanaman hias unik dimana tanaman ini memiliki daun yang unik dan warna yang unik',
                'gambar' => 'product/zJMJWJnkWEAcuLZslvrUvlpyEyUyWvYITwmAljcx.jpg',
                'harga' => '150000',
                'shope_link' => 'https://shopee.co.id/Tahu-Bakso-Semarang-Siap-Goreng-Isi-15-Pcs-i.72219563.7955376208',
                'toped_link' => 'https://www.tokopedia.com/tokobahankuedona/royal-palmia-butter-margarine-200-gr-murah?src=topads',
                'category_id' => 2,
                'toko_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'nama_product' => 'Putu Ayu',
                'text' => 'PUTU AYUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUU',
                'gambar' => 'product/TT8dKqXLqmHAmLbe5VQoLWM54nBfKFnQGN1uw6K6.jpg',
                'harga' => '2000',
                'shope_link' => 'https://shopee.co.id/Tahu-Bakso-Semarang-Siap-Goreng-Isi-15-Pcs-i.72219563.7955376208',
                'toped_link' => 'https://www.tokopedia.com/tokobahankuedona/royal-palmia-butter-margarine-200-gr-murah?src=topads',
                'category_id' => 1,
                'toko_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'nama_product' => 'Lidah Buaya',
            'text' => 'Lidah buaya (Aloe vera) adalah spesies tumbuhan dengan daun berdaging tebal dari genus Aloe.[3] Tumbuhan ini bersifat menahun, berasal dari Jazirah Arab, dan tanaman liarnya telah menyebar ke kawasan beriklim tropis, semi-tropis, dan kering di berbagai belahan dunia. Tanaman lidah buaya banyak dibudidayakan untuk pertanian, pengobatan, dan tanaman hias, dan dapat juga ditanam di dalam pot.',
                'gambar' => 'product/OnvPyxfJ31fDjJzowIGmLEQfakIcFCgKIjfBRp49.jpg',
                'harga' => '50000',
                'shope_link' => 'https://shopee.co.id/Benih-Bibit-Biji-Lidah-Buaya-Aloe-Vera-9-Jenis-Mix-Import-100-Butir-i.301948164.4261296427',
                'toped_link' => 'https://www.tokopedia.com/bibitharapan/benih-bibit-biji-lidah-buaya-aloe-vera-9-jenis-mix-import-100-butir?src=topads',
                'category_id' => 2,
                'toko_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'nama_product' => 'Wedang Uwuh Instan',
                'text' => 'Wedang uwuh ini dalam Bahasa Jawa mempunyai arti yang unik, yakni wedang berarti “minuman” dan uwuh berarti “sampah”. Singkatnya dijuluki sebagai minuman sampah.',
                'gambar' => 'product/cBMFVIr2CILNYQmMskxqHkzrz1GNdCb1jP2FToFr.jpg',
                'harga' => '5000',
                'shope_link' => 'https://shopee.co.id/Benih-Bibit-Biji-Lidah-Buaya-Aloe-Vera-9-Jenis-Mix-Import-100-Butir-i.301948164.4261296427',
                'toped_link' => 'https://www.tokopedia.com/bibitharapan/benih-bibit-biji-lidah-buaya-aloe-vera-9-jenis-mix-import-100-butir?src=topads',
                'category_id' => 3,
                'toko_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'nama_product' => 'Keripik Pare',
                'text' => 'Olahan Pare segar dengan racikan bumbu alami khas indonesia.

Cemilan kaya manfaat. Pare sendiri bermanfaat untuk melancarkan pecerrnaan, meningkatkan kekebalan tubuh, membantu menurunkan kadar gula darah, bisa juga membantu menurunkan tekanan darah dan masih banyak manfaat lainya. Untuk kalian yg nggak suka pare karena paitnya cobain dehh keripik pare ALZ, dijaminn otomatis pengen lagi dan lagi, nggak mau berhentii,,, iyahhh memang nggak total ilang paitnya yaa, tetep kami tidak meninggalkan ciri khas dr pare itu sendiri, ada paitnya tapi dikiiiiiiittt banget, dipadukan dengan gurihnya bumbu racikan dr dapur ALZ
Penasarannnn???? Buruann diorder, In syaa Alloh dijamin nggak nyesel dehhh....

Komposisi:
1.Pare Segar
2.Tepung Tapioka
3.Tepung Terigu
4.Bawang & Rempah
5.Garam

Berat Bersih : 90 Gram (Packing saat pengiriman menjadi 165  gram, karena dihitung volume oleh pihak Cargo / Expedisi)

Masa Kadaluarsa 6 bulan dengan catatan di simpan dalam ruangan yang suhunya stabil

#alz #keripik #cemilan #oleholeh #higienis #infokemuning #kebuntehkemuning #infokaranganyar #infosolo #infojateng #solokuliner #kulinerjateng #kulinerindonesia #wisatakebuntehkemuning #wisatajateng #khaskemuning #khaskaranganyar #khassolo #nonmsg #tanpapengawet #pare #sayur #keripiksayur #keripikpare',
                'gambar' => 'product/bDVeq81EYJcT7nK3XsMg6JmoDZ70CKKPeVxdDKuS.png',
                'harga' => '17000',
                'shope_link' => 'https://shopee.co.id/Kripik-Keripik-Pare-ALZ-Non-MSG-Oleh-oleh-Khas-Kebun-Teh-Kemuning-Karanganyar-Solo-i.130348964.3922439406',
                'toped_link' => 'https://shopee.co.id/Kripik-Keripik-Pare-ALZ-Non-MSG-Oleh-oleh-Khas-Kebun-Teh-Kemuning-Karanganyar-Solo-i.130348964.3922439406',
                'category_id' => 1,
                'toko_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'nama_product' => 'Keripik Jamur Kuping',
                'text' => 'Cemilan kaya manfaat. Jamur Kuping sendiri bermanfaat untuk  meghambat dan mencegah penggumpalan darah. dapat menormalkan tekanan darah, menurunkan kolesterol, meningkatkan kekebalan tubuh, menguatkan saraf, dapat mengurangi stress, dan manfaat lainya. Untuk kalian yg nggak suka Jamur Kuping, cobain dehh keripik Jamur Kuping ALZ, dijaminn otomatis pengen lagi dan lagi, nggak mau berhentii,,,  
Karena gurihnya bumbu racikan dr dapur ALZ tanpa msg, tanpa pengawet sehingga aman dikonsumsi segala usia
Penasarannnn???? Buruann diorder, In syaa Alloh dijamin nggak nyesel dehhh....


Berat : 80 Gram ( saat packing untuk pengiriman menjadi 165gram, karena dihitung volume oleh pihak Cargo / Expedisi)
Masa Kadaluarsa : 6 Bulan dengan catatan disimpan pada ruangan yang suhu ruangnya stabil

Komposisi : 
1. Jamur Kuping
2. Tepung Terigu
3. Tepung Tapioka
4. Bawang dan rempah
5. Garam

#alz #keripik #cemilan #oleholeh  #higienis #infokemuning #kebuntehkemuning #infokaranganyar #infosolo #infojateng #solokuliner #kulinerjateng #kulinerindonesia #wisatakebuntehkemuning #wisatajateng #khaskemuning #khaskaranganyar #khassolo #nonmsg #tanpapengawet
#jamur #jamurkuping #keripikjamurkuping',
                'gambar' => 'product/o4Ol4SS1qKNmOtl0hPIWbRtrqwJCWgepeq7PwVuM.png',
                'harga' => '17000',
                'shope_link' => 'https://shopee.co.id/Kripik-Keripik-Jamur-Kuping-ALZ-Non-MSG-Oleh-oleh-Khas-Kebun-Teh-Kemuning-Karanganyar-Solo-i.130348964.7322343480',
                'toped_link' => 'https://shopee.co.id/Kripik-Keripik-Jamur-Kuping-ALZ-Non-MSG-Oleh-oleh-Khas-Kebun-Teh-Kemuning-Karanganyar-Solo-i.130348964.7322343480',
                'category_id' => 1,
                'toko_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'nama_product' => 'Onde Ketaw Ubi Ungu',
                'text' => 'Olahan Ubi ungu khas dari lereng Gunung Lawu
Kenapa koq onde onde ALZ pasti dibalut dengan wijen yang penuh.???
Ternyata selain untuk mempercantik, wijen juga bermanfaat bagi tubuh kita Lur..., antara lain :

* Melancarkan Pencernaan.
* Kesehatan Kulit dan Rambut. 
* Mengurangi Risiko Diabetes. 
* Mengatur Tekanan Darah. 
* Mencegah Kanker. 
* Memiliki Sifat Anti-inflamasi.

Netto : 170 Gram (Saat pengiriman menadi 200 gram, karena dihitung volume oleh pihak expedisi / cargo)
Masa Kadaluarsa  : 6 Bulan

#alz #keripik #cemilan #oleholeh  #higienis #infokemuning #kebuntehkemuning #infokaranganyar #infosolo #infojateng #solokuliner #kulinerjateng #kulinerindonesia #wisatakebuntehkemuning #wisatajateng #khaskemuning #khaskaranganyar #khassolo #nonmsg #tanpapengawet
#ubi #ubiungu #ondeonde',
                'gambar' => 'product/9NMyTFAMaxHGKW0AOn80fHJYtwzk2dpY7pdbIJsA.png',
                'harga' => '17000',
                'shope_link' => 'https://shopee.co.id/Onde-Ketawa-Ubi-Ungu-ALZ-Oleh-oleh-Khas-Kebun-Teh-Kemuning-Karanganyar-Solo-i.130348964.7522351070',
                'toped_link' => 'https://shopee.co.id/Onde-Ketawa-Ubi-Ungu-ALZ-Oleh-oleh-Khas-Kebun-Teh-Kemuning-Karanganyar-Solo-i.130348964.7522351070',
                'category_id' => 1,
                'toko_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'nama_product' => 'Keripik Jamur Tiram',
            'text' => 'Cemilan kaya manfaat. Jamur Tiram  mengandung sejumlah zat yang dianggap bisa memengaruhi kesehatan manusia. Sebut saja seratnya, beta-glukan, dan polisakarida (kelas karbohidrat yang memengaruhi fungsi kekebalan tubuh)., cobain dehh Keripik Jamur Tiram ALZ, dijaminn otomatis pengen lagi dan lagi, nggak mau berhentii,,,  
Karena gurihnya bumbu racikan dari dapur ALZ  tanpa msg, tanpa pengawet sehingga aman dikonsumsi segala usia
Penasarannnn???? 
Buruann diorder, In syaa Alloh dijamin nggak nyesel dehhh...

Berat Bersih : 90 Gram ( saat packing untuk pengiriman menjadi 165 gram, karena dihitung volume oleh pihak Cargo / Expedisi)
Masa Kadaluarsa 6 Bulan, ( Suhu ruang Stabil)

Komposisi:
1.Jamur Tiram Segar
2.Tepung Tapioka
3.Tepung Terigu
4.Bawang & rempah
5.Garam

#alz #keripik #cemilan #oleholeh #higienis #infokemuning #kebuntehkemuning #infokaranganyar #infosolo #infojateng #solokuliner #kulinerjateng #kulinerindonesia #wisatakebuntehkemuning #wisatajateng #khaskemuning #khaskaranganyar #khassolo #nonmsg #tanpapengawet #jamur #jamurtiram',
                'gambar' => 'product/hINnraz5qccnU1KCWVMyzxJRR2143HyMgFCb6PS8.png',
                'harga' => '17000',
                'shope_link' => 'https://shopee.co.id/Kripik-Keripik-Jamur-Tiram-Non-MSG-Oleh-oleh-Khas-Kebun-Teh-Kemuning-Karanganyar-Solo-i.130348964.6422349305',
                'toped_link' => 'https://shopee.co.id/Kripik-Keripik-Jamur-Tiram-Non-MSG-Oleh-oleh-Khas-Kebun-Teh-Kemuning-Karanganyar-Solo-i.130348964.6422349305',
                'category_id' => 1,
                'toko_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'nama_product' => 'Moto Maling Pedes Judes',
                'text' => 'Kulit Melinjo yang dipadukan dengan gula jawa, rempah, cabe dan garam.
Selain rasa khas pedas manisnya bikin nagih, Kulit melinjo aman dikonsumsi karena anti asam urat.

Netto 80 gram, ( saat pengiriman menjadi 125 gram, karena dihitung volume packing)
Masa Kadaluarsa : 6 bulan

#alz #keripik #cemilan #oleholeh #kentang #higienis #infokemuning #kebuntehkemuning #infokaranganyar #infosolo #infojateng #solokuliner #kulinerjateng #kulinerindonesia #wisatakebuntehkemuning  #wisatakaranganyar #wisatajateng #khaskemuning #khaskaranganyar #khassolo #nonmsg #tanpapengawet',
                'gambar' => 'product/XZqm1vqfbt7BYJzhfXozZSU6GWmaATdZXFq94pQ7.png',
                'harga' => '17000',
            'shope_link' => 'https://shopee.co.id/Moto-Maling-Pedes-Judes-(Kripik-Keripik-Kulit-Melinjo)-Oleh-oleh-Khas-Kemuning-Karanganyar-Solo-i.130348964.7145074585',
            'toped_link' => 'https://shopee.co.id/Moto-Maling-Pedes-Judes-(Kripik-Keripik-Kulit-Melinjo)-Oleh-oleh-Khas-Kemuning-Karanganyar-Solo-i.130348964.7145074585',
                'category_id' => 1,
                'toko_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'nama_product' => 'Keripik Kentang Pedas Manis',
                'text' => 'Dari Kentang, yang dipadukan dengan gula, cabe dan garam.
Rasa khas pedas manisnya bikin nagih.

Netto 80 gram, ( saat pengiriman menjadi 165 gram, karena dihitung volume packing)

Masa Kadaluarsa : 6 bulan

#alz #keripik #cemilan #oleholeh #kentang #higienis #infokemuning #kebuntehkemuning #infokaranganyar #infosolo #infojateng #solokuliner #kulinerjateng #kulinerindonesia #wisatakebuntehkemuning #wisatajateng #khaskemuning #khaskaranganyar #khassolo #nonmsg #tanpapengawet',
                'gambar' => 'product/GRPhWMAQJYxDDLMHSFePtZzhYvn1evVWT36aWbeY.png',
                'harga' => '17000',
                'shope_link' => 'https://shopee.co.id/Keripik-Kripik-Kentang-Pedas-Manis-oleh-oleh-Khas-Kebun-Teh-Kemuning-Karanganyar-Solo-i.130348964.6944515631',
                'toped_link' => 'https://shopee.co.id/Keripik-Kripik-Kentang-Pedas-Manis-oleh-oleh-Khas-Kebun-Teh-Kemuning-Karanganyar-Solo-i.130348964.6944515631',
                'category_id' => 1,
                'toko_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'nama_product' => 'Grubi Ubi Madu',
                'text' => 'Ubi jalar/ketela merupakan sumber makanan yang tidak asing lagi bagi sebagian besar masyarakat Indonesia. Jenis umbi-umbian ini mudah ditemui di pasaran dengan harga relatif murah. Ubi jalar baik dikonsumsi oleh berbagai kalangan usia, mulai dari anak-anak hingga orang tua. Selain rasanya yang enak dan bertekstur lembut, makanan ini memiliki kandungan yang dibutuhkan oleh tubuh. Ubi jalar kerap dijadikan hidangan oleh masyarakan Indonesia sejak zaman dahulu. Banyak orang tua menganggap sarapan dengan ubi jalar mampu menguatkan tubuh saat beraktivitas sehari-hari.

Gerubi Ubi Madu:
Dibuat dari Ubi Madu pilihan, gula dan garam. 
Gurih dan Renyah. 
Rasa Manis. 
Expired 3 bulan. 
Isi 12 biji
#alz #gerubi #kemuning #karanganyar #infosolo #solokuliner #oleholehkemuning #oleholehkhaskebuntehkemuning #oleholehkaranganyar #oleholehsolo #wisatasolo #makanantradisional #kulinerjateng #infojateng #wisatajateng #khassolo #makanansolo #jajanansolo #halal #tanpapengawet #higienis #ketela #ungu',
                'gambar' => 'product/n0JerwbSekSjM9sK17nR7o36m2nrB5mAN1wUKgpQ.png',
                'harga' => '10000',
                'shope_link' => 'https://shopee.co.id/Grubi-Ubi-Madu-Anugrah-Khas-Kemuning-i.130348964.5859351041',
                'toped_link' => 'https://shopee.co.id/Grubi-Ubi-Madu-Anugrah-Khas-Kemuning-i.130348964.5859351041',
                'category_id' => 1,
                'toko_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'nama_product' => 'Keripik Pisang Khas Kemuning',
                'text' => 'Pisang krispi super ini berbeda dengan kripik pisang pada umumnya, diolah menggunakan teknologi Vacum Frying. Memiliki rasa yang enak dan renyah karena di buat dari buah Pisang kepok matang pilihan.

Diskripsi Kripik Pisang :
- Kualitas dan rasa terjamin
- Bahan Pisang kepok pilihan 
- Rasa Manis legit Original Pisang  (Aman 
dikonsumsi segala usia karena Tanpa Penguat Rasa & Tanpa Pengawet)

- Netto : 90gr
Berat menjadi 200 gram saat pengiriman, karena di hitung  Volume oleh Pihak Cargo',
                'gambar' => 'product/Z5Cr47okkNekvreCs9hypLQ6janu5oaDtLNDBYRc.png',
                'harga' => '20000',
                'shope_link' => 'https://shopee.co.id/Pisang-Krispi-Khas-Kemuning-i.130348964.5361197007',
                'toped_link' => 'https://shopee.co.id/Pisang-Krispi-Khas-Kemuning-i.130348964.5361197007',
                'category_id' => 1,
                'toko_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 16,
                'nama_product' => 'Grubi Ungu',
                'text' => 'Ubi jalar/ketela merupakan sumber makanan yang tidak asing lagi bagi sebagian besar masyarakat Indonesia. Jenis umbi-umbian ini mudah ditemui di pasaran dengan harga relatif murah. Ubi jalar baik dikonsumsi oleh berbagai kalangan usia, mulai dari anak-anak hingga orang tua. Selain rasanya yang enak dan bertekstur lembut, makanan ini memiliki kandungan yang dibutuhkan oleh tubuh. Ubi jalar kerap dijadikan hidangan oleh masyarakan Indonesia sejak zaman dahulu. Banyak orang tua menganggap sarapan dengan ubi jalar mampu menguatkan tubuh saat beraktivitas sehari-hari.

Gerubi ketela ungu :
Dibuat dari ketela ungu pilihan, gula dan garam. 
Gurih dan Renyah. 
Rasa Manis. 
Expired 1 bulan. 
Isi 12 biji
#alz #gerubi #kemuning #karanganyar #infosolo #solokuliner #oleholehkemuning #oleholehkhaskebuntehkemuning #oleholehkaranganyar #oleholehsolo #wisatasolo #makanantradisional #kulinerjateng #infojateng #wisatajateng #khassolo #makanansolo #jajanansolo #halal #tanpapengawet #higienis #ketela #ungu',
                'gambar' => 'product/3FeOrQth6FYx9YWCfHL47yQT02oCqWepZveBtWXa.png',
                'harga' => '15000',
                'shope_link' => 'https://shopee.co.id/Grubi-Ubi-Ungu-i.130348964.6950420808',
                'toped_link' => 'https://shopee.co.id/Grubi-Ubi-Ungu-i.130348964.6950420808',
                'category_id' => 1,
                'toko_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}