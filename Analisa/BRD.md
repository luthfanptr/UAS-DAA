# Rancangan Aplikasi Web Berbasis IoT untuk Pemantauan Kualitas Udara

## Latar Belakang
Peningkatan polusi udara menjadi perhatian global yang memerlukan pemantauan yang cukup ketat. Banyaknya kegiatan manusia yang dapat menyebabkan polusi setiap harinya seperti asap pabrik, kendaraan, sampah, asap rokok, dapat memicu terjadinya gangguan pernapasan seperti asma, ISPA, dan kanker paru-paru. Dengan meningkatnya polusi udara, kebutuhan akan sistem pemantauan kualitas udara secara real-time menjadi sangat penting. 

Di sisi lain, kemajuan teknologi **Internet of Things** (IoT) memungkinkan pengembangan sistem pemantauan yang terintegrasi dan efisien. Dengan memanfaatkan sensor-sensor cerdas yang terhubung ke internet, data kualitas udara dapat dikumpulkan, diproses, dan disajikan secara real-time melalui platform digital. Aplikasi web berbasis IoT menjadi solusi yang tepat untuk memenuhi kebutuhan ini, karena dapat memberikan akses informasi yang mudah dan cepat kepada pengguna.

Aplikasi ini diharapkan dapat meningkatkan kesadaran masyarakat tentang pentingnya menjaga kualitas udara dan mendorong partisipasi aktif dalam upaya pelestarian lingkungan.

---

## Analisis 5W+1H:
- **What (Apa)**: 
    + Aplikasi web berbasis IoT yang dapat memantau kualitas udara secara real-time, dengan data yang meliputi suhu, kelembaban, dan tingkat polusi. Pengguna dapat mengakses data melalui dashboard dan menerima notifikasi jika kualitas udara berbahaya.
- **Why (Mengapa)**: 
    + Peningkatan polusi udara menjadi masalah kesehatan global. Sistem ini dirancang untuk membantu pengguna dalam memantau kualitas udara untuk mencegah gangguan kesehatan.
    + Aplikasi web berbasis IoT memungkinkan pengumpulan data secara real-time dan memberikan akses yang lebih cepat kepada pengguna.
- **When (Kapan)**:
    + Saat pengguna ingin memantau kualitas udara. 
    + Saat pengguna ingin mengambil tindakan preventif untuk menjaga lingkungan. 
- **Where (Dimana)**: 
    + Sistem dapat digunakan dimana saja, dan dapat diakses melalui aplikasi web menggunakan browser.
- **Who (Siapa)**: 
    + Administrator sebagai penanggung jawab untuk mengelola data, memperbarui status, dan membuat laporan berkala.
    + Pengguna (Masyarakat, Organisasi Lingkungan, Pemerintah): Melakukan pemantauan kualitas udara di sekitar lingkungan mereka, menerima notifikasi dan melihat laporan kualitas udara.
- **How (Bagaimana)**: 
    + Sensor IoT mengumpulkan data kualitas udara dan mengirimkan data melalui API ke server.
    + Server menerima data dari perangkat IoT dan menyimpannya kedalam database MySQL.
    + Admin menerima dan mengelola data untuk dijadikan laporan yang kemudian akan diunggah, serta memperbarui status sensor perangkat IoT.
    + Pengguna mengakses aplikasi web untuk melihat data secara real-time.
    ---

## Tujuan Proyek
- Mengembangkan sistem pemantauan kualitas udara secara real-time berbasis website.
- Menggunakan framework Laravel dan database MySQL untuk efisiensi pengolahan data.
- Mengintegrasikan perangkat IoT untuk pengumpulan data kualitas udara.
- Menyediakan antarmuka yang ramah pengguna.
---


## Batasan Proyek
- Perangkat IoT harus dikonfigurasi untuk mengirim data ke server melalui API.
- Sistem hanya mendukung penyimpanan dan pemrosesan data di MySQL.
- Aplikasi hanya dapat diakses melalui browser web.
---


## Stakeholder
### Stakeholder yang Berperan Langsung Dengan Sistem
Stakeholder yang terlibat langsung dalam penggunaan atau berinteraksi dengan sistem, baik sebagai pengguna aktif atau pengelola data.
1. **Administrator**
    + **Peran**: Admin bertanggung jawab untuk mengelola data kualitas udara secara real-time (suhu, kelembaban, dan tingkat polusi).
    + **Interaksi dengan Sistem**: Admin menggunakan dashboard admin untuk mengakses, memperbarui, dan mengelola status sensor, kualitas udara, dan laporan statistik kualitas udara.
    + **Fitur Utama**:
        - Pengelolaan dan pembaruan index kualitas udara seperti suhu dan kelembaban.
        - Mengelola dan melakukan pembaruan status sensor dan update waktu sensor digunakan.
        - Mengirimkan notifikasi dan peringatan kepada pengguna jika kualitas udara mencapai level berbahaya.
        - Membuat dan mengunggah laporan statistik mingguan dan bulanan kualitas udara dalam 7 hari dan 30 hari terakhir.

2. **Pengguna Akhir (Masyarakat)**:
    + **Peran**: Pengguna dapat melihat data kualitas udara secara real-time, termasuk suhu dan kelembaban.
    + **Interaksi dengan Sistem**: Pengguna menggunakan dashboard user untuk melihat data dari kualitas udara di lokasi tertentu dan laporan statistik kualitas udara mingguan dan bulanan.
    + **Fitur Utama**:
        - Pemantauan index kualitas udara seperti suhu dan kelembaban.
        - Melihat informasi dasar mengenai sensor yang terpasang, seperti status sensor di lokasi tertentu.
        - Menerima notifikasi jika kualitas udara berada di level berbahaya.
        - Melihat laporan kualitas udara berdasarkan data mingguan dan bulanan.


### Stakeholder yang Berperan Diluar Sistem
1. **Penyedia Perangkat IoT**:
    + **Peran**: Sebagai fasilitator perangkat IoT yang memastikan data dapat dikirim dengan benar ke sistem.
    + **Interaksi dengan Sistem**: Penyedia tidak berperan langsung dengan sistem, namun mereka memastikan perangkat IoT dapat bekerja dan mengirim data dengan baik ke dalam sistem.

2. **Tim Pengembang/IT**:
    + **Peran**: Bertanggung jawab dalam pengembangan dan pemeliharaan aplikasi web, memastikan kelancaran operasional aplikasi.
    + **Interaksi dengan Sistem**: Tim IT tidak berinteraksi secara langsung dengan aplikasi untuk tujuan sehari-hari, tetapi memiliki peran yang sangat penting untuk menjaga kelancaran operasional aplikasi.

3. **Pihak Regulator (Pemerintah)**:
    + **Peran**: Menetapkan batasan untuk kualitas udara yang aman bagi kesehatan masyarakat serta bertanggung jawab untuk mengawasi kualitas udara di wilayah tertentu sesuai dengan standar yang ditetapkan oleh pemerintah.
    + **Interaksi dengan Sistem**: Melihat dashboard user untuk melihat data dari kualitas udara di suatu lokasi dan laporan statistik kualitas udara mingguan dan bulanan.
---


## Persyaratan Bisnis

| ID    | Deskripsi                                                                 |
|-------|---------------------------------------------------------------------------|
| BR-01 | Aplikasi harus dapat menerima data dari perangkat IoT secara otomatis.   |
| BR-02 | Data harus disimpan dengan aman di database MySQL.                        |
| BR-03 | Pengguna harus dapat melihat data kualitas udara dalam bentuk grafik dan tabel. |
| BR-04 | Sistem harus memberikan notifikasi jika parameter kualitas udara melebihi batas aman. |
| BR-05 | Terdapat fitur manajemen pengguna dengan peran dan hak akses yang berbeda. |
| BR-06 | Pengguna harus dapat mengunduh laporan kualitas udara dalam format PDF. |

---

## Persyaratan Teknis

- **Framework Backend**: Laravel
- **Database**: MySQL
- **Front-end**: Blade Template, HTML, CSS, JavaScript
- **Protokol Komunikasi IoT**: MQ-135 Sensor
- **Hosting**: Server berbasis Linux atau cloud platform yang mendukung Laravel

---

## Risiko dan Mitigasi

| Risiko                              | Mitigasi                                                                 |
|-------------------------------------|--------------------------------------------------------------------------|
| Sensor IoT tidak mengirimkan data  | Menyediakan mekanisme retry dan log error                                 |
| Serangan keamanan terhadap aplikasi| Menggunakan enkripsi, autentikasi kuat, dan firewall                      |
| Performa lambat karena beban data besar | Menggunakan caching dan optimasi database                               |

---

## Kesimpulan
Dokumen ini menjelaskan kebutuhan bisnis dan teknis untuk aplikasi pemantauan kualitas udara berbasis IoT. Dengan implementasi yang sesuai, sistem ini dapat memberikan data kualitas udara secara real-time dan membantu dalam pengambilan keputusan berbasis lingkungan.
