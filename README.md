
## Data Diri | UJIAN AKHIR SEMESTER (UAS)
Nama        : Mahes Yaputra
Nim         : 03081200047
Kelas       : 20SI2
Mata Kuliah : Business Application Programming (BAP)

## No 1
Soal:
Tambahkan satu buah table pada web aplikasi kemudian buatlah halaman CRUD dengan menggunakan CRUD generator, serta tambahkan menu untuk mengakses table tersebut pada sidebar(30poin).

Jawaban:
Table yang saya tambahkan adalah prices. Dapat diakses pada http://127.0.0.1:8000/admin/price atau melalui sidebar. Nama file yang ditambahkan dapat dilihat pada folder resources/views/admin/price dengan nama file index.blade.php , create.blade.php , edit.blade.php , form.blade.php , show.blade.php. (Beserta Controller dan Modelnya)

## No 2
Soal:
Buatlah sebuah view untuk melakukan analisis data yang relevan dengan topik final project anda, simpan query view tersebut kedalam file QueryUAS.sql(20poin).

Jawaban:
Query View tersebut dapat dilihat pada sidebar yang berjudul Sort Price atau dapat dicek melalui http://127.0.0.1:8000/admin/sort_price. Untuk file QueryUAS.sql terlampir pada repository Github.

## No 3
Soal: 
Buatlah sebuah antarmuka untuk menampilkan view pada soal 2, kemudian tambahkan tombol untuk mencetaknya kedalam format laporan pdf. Sertakan logo UPH dan nama berserta studentID anda pada header laporan (30)

Jawaban:
Seperti nomor 2, Query View dapat di cek pada http://127.0.0.1:8000/admin/sort_price yang dimana terdapat button Print PDF. Laporan itu akan digenerate menjadi Laporan PDF dan akan otomatis terdownload. Nama file yang ditambahkan dapat dilihat pada folder resources/views/admin/sort_price dengan nama file index.blade.php dan print_pdf.blade.php (Beserta Controller dan Modelnya)


## No 4
Soal:
Buat validasi data untuk halaman insert dan update soal nomor 1 (10 Poin)

Jawaban:
Untuk Validasi daata halaman Insert dan Update dapat dilihat pada folder app/Http/Controllers/Admin/sort_priceController. Dimana untuk kolom 'currency' tidak boleh kosong dan juga max 3 karakter, sedangkan 
Code Validasi dapat dilihat dibawah ini:

            $validated = $request->validate([
                'currency' => 'required|max:3',
            ]);

## No 5
Soal: Simpan kode program beserta queryUAS.sql ke public repository github.
Link Github: https://github.com/MahesYaputra/UAS