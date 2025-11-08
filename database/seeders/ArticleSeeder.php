<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'category_id' => 1,
            'title' => 'Machine Learning',
            'image_url' => 'https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2020/05/Blog-Blog-19-Agustus-Apa-itu-Machine-Learning-Beserta-Pengertian-dan-Cara-Kerjanya.png',
            'posted_at' => '2024-05-14',
            'writer_id' => 1,
            'short_info' => 'Teknologi machine learning (ML) adalah mesin yang dikembangkan untuk bisa belajar dengan sendirinya tanpa arahan dari penggunanya. Pembelajaran mesin dikembangkan berdasarkan disiplin ilmu lainnya seperti statistika, matematika dan data mining sehingga mesin dapat belajar dengan menganalisa data tanpa perlu di program ulang atau diperintah.

            Dalam hal ini machine learning memiliki kemampuan untuk memperoleh data yang ada dengan perintah ia sendiri. ML juga dapat mempelajari data yang ada dan data yang ia peroleh sehingga bisa melakukan tugas tertentu. Tugas yang dapat dilakukan oleh ML pun sangat beragam, tergantung dari apa yang ia pelajari.'
        ]);

        Article::create([
            'category_id' => 1,
            'title' => 'Deep Learning',
            'image_url' => 'https://dicoding-assets.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2021/09/Blog_Mengenal_Deep_Learning_Lebih_Jelas.jpg',
            'posted_at' => '2024-05-14',
            'writer_id' => 2,
            'short_info' => 'Deep learning merupakan subbidang machine learning yang algoritmanya terinspirasi dari struktur otak manusia. Saat ini, teknik deep learning sangat populer di kalangan praktisi data dan menarik perhatian banyak pihak. Hal ini karena teknologi deep learning telah diterapkan dalam berbagai produk berteknologi tinggi seperti self-driving car. Selain itu, ia juga ada di balik produk dan layanan yang kita gunakan sehari-hari. Contohnya antara lain, asisten digital, Google Translate, dan voice-activated device (perangkat cerdas yang bisa diaktifkan dengan suara).'
        ]);

        Article::create([
            'category_id' => 1,
            'title' => 'Natural Language Processing',
            'image_url' => 'https://ftmm.unair.ac.id/wp-content/uploads/2025/05/Screenshot-2025-05-27-123739.png',
            'posted_at' => '2024-05-15',
            'writer_id' => 3,
            'short_info' => 'Natural Language Processing (NLP) merupakan salah satu cabang ilmu AI yang berfokus pada pengolahan bahasa natural. Bahasa natural adalah bahasa yang secara umum digunakan oleh manusia dalam berkomunikasi satu sama lain.  Bahasa yang diterima oleh komputer butuh untuk diproses dan dipahami terlebih dahulu supaya maksud dari user bisa dipahami dengan baik oleh komputer.

            Ada berbagai terapan aplikasi dari NLP. Diantaranya adalah Chatbot (aplikasi yang membuat user bisa seolah-olah melakukan komunikasi dengan computer), Stemming atau Lemmatization (pemotongan kata dalam bahasa tertentu menjadi bentuk dasar pengenalan fungsi setiap kata dalam kalimat), Summarization (ringkasan dari bacaan), Translation Tools (menterjemahkan bahasa) dan aplikasi-aplikasi lain yang memungkinkan komputer mampu memahami instruksi bahasa yang diinputkan oleh user.'
        ]);

        Article::create([
            'category_id' => 2,
            'title' => 'Software Security',
            'image_url' => 'https://www.valuecoders.com/blog/wp-content/uploads/2023/03/Software-Security-1.jpg.webp',
            'posted_at' => '2024-05-16',
            'writer_id' => 4,
            'short_info' => 'Software security merupakan hal penting yang diperlukan untuk membangun sistem software yang dapat dipercaya. Ini menjadi teknik yang diterapkan untuk melindungi software dari serangan berbahaya dan risiko peretas lainnya. Sehingga, software terus berfungsi dengan benar di bawah potensi risiko tersebut.

            Mengembangkan software yang aman, berfokus pada tahap awal software development life cycle (SDLC) dan kode yang mendasari aplikasi tertentu. Dengan tujuan untuk mengidentifikasi kekurangan dan cacat sedini mungkin. Selain itu, keamanan ini diperlukan untuk menyediakan integrity, authentication, dan availability. Hal ini dikarenakan sistem software yang dengan mudah diserang untuk mencuri informasi, memantau konten, melihat kerentanan, dan sejenisnya.'
        ]);

        Article::create([
            'category_id' => 2,
            'title' => 'Network Administration',
            'image_url' => 'https://idcloudhost.com/wp-content/uploads/2019/08/Network-Administrator-min-scaled.jpg',
            'posted_at' => '2024-05-16',
            'writer_id' => 5,
            'short_info' => 'Network Administration merupakan professional yang bertanggung jawab atas pemeliharaan perangkat keras komputer dan perangkat lunak yang terdiri dari sebuah jaringan komputer. Biasanya bertugas untuk melakukan konfigurasi, pemeliharaan, pemeliharaan, dan monitoring jarinngan. Dimana fungsinya untuk spesialisasi jaringan atau analisis jaringan.'
        ]);

        Article::create([
            'category_id' => 2,
            'title' => 'Popular Network Technology',
            'image_url' => 'https://www.lepide.com/blog/wp-content/uploads/2022/07/Common-Types-of-Network-Devices-1.jpg',
            'posted_at' => '2024-05-17',
            'writer_id' => 6,
            'short_info' => 'Setelah berhasil menyelesaikan kursus ini, siswa akan dapat: Memahami implementasi dan integrasi jaringan; Mengembangkan sistem jaringan; Merancang sistem jaringan dengan menggunakan teknologi jaringan terkini.'
        ]);
    }
}
