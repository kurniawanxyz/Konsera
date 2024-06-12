<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Instrumen;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstrumenKonsera extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inst = Instrumen::create([
            "title" => "INVENTORI KONDISI PRIBADI KONSELI REMAJA (IKPKR)",
            "description" => "Latar Belakang Masalah:
            Perkembangan manusia terjadi melalui beberapa tahapan kehidupan, salah satu tahapan perkembangan yang krusial adalah tahap perkembangan pada masa remaja atau dikenal dengan adolensence yang artinya tumbuh menjadi dewasa. Usia dewasa berkisar antara usia 13 tahun sampai 21 tahun. Pada rentang usia ini, remaja berada pada tingkatan jenjang Pendidikan SMP sampai SMA sederajat.
            Seperti yang kita ketahui dari berbagai teori (Misalnya Hurlock (2004) dan Santrock (2011)), dapat kita simpulkan jika masa remaja adalah masa yang indah, masa yang penuh problem, sehingga tidak jarang menyebabkan remaja banyak mencari tahu tentang jati dirinya. Mencari tahu tentang jati dirinya terkadang membuat remaja kurang tepat dalam melangkah dan mengambil keputusan, yang akibatnya dapat menjadikan masalah tersendiri yang akan mereka alami, dan tentunya tidak terselesaikan masalah tersebut dikhawatirkan dapat mengganggu tugas-tugas dan tahapan perkembangan yang dilalui.
            Walaupun remaja sudah mulai mempersiapkan dirinya untuk mandiri, namun tetap diperlukan bimbingan dan pengarahan agar tugas perkembangannya dapat dilaksanakan secara optimal. Tidak sedikit pula remaja yang beranggapan bahwa apa yang mereka jalani, lakukan, dan pikirkan merupakan langkah terbaik dan paling benar tanpa menyadari apakah sudah sesuai atau kurang sesuai dengan tugas perkembangan yang mereka lalui. Oleh sebab itu, sangatlah penting remaja mengenal dirinya atau bagaimana kondisi pribadinya sehingga meminimalisir salah langkah dalam proses pengambilan keputusan.
            Kenyataan di lapangan, banyak ditemukan masalah dalam bentuk tingkah laku, cara pandang, maupun pemikiran yang irasional. Beberapa data dari Guru bimbingan dan siswa yang, rata-rata permasalahan disebabkan oleh pemikiran irasional siswa. Contohnya:  adanya siswa yang minder dengan jerawat yang dimiliki sehingga ditempeli stiker yang menurutnya menambah kepercayaan diri; siswa yang menengok kanan dan kiri karena merasa minder tidak memiliki kompetensi tugas yang diberikan guru, bahkan ada kasus WA orangtua sang pacar mengaku hamil dikarenakan depresi diputus oleh pacar, dan seterusnya.
            Masalah-masalah yang sering terjadi bisa diminimalisir seandainya siswa lebih mengenal dirinya, bagaimana kondisi pribadinya apakah sehat dan tidak sehat, apakah perbuatan yang mereka lakukan selama ini baik atau buruk untuk dirinya sendiri, orang lain serta lingkungan sekitar. Tidak hanya itu, guru bimbingan dan siswangpun harus mengenal kondisi siswanya, apakah siswanya memiliki kecenderungan sehat atau tidak sehat.
            Dalam pengumpulan data mengenai data tentang siswa tentulah dibutuhkan alat ukur atau instrumen yang tepat sesuai data yang hendak dicari. Namun, peneliti selama bekerja kurang lebih 10 tahun hanya menemukan satu pengembangan inventori yang memfasilitasi guru bimbingan dan konseling dalam mengidentifikasi karakteristik pribadi sehat remaja, yakni inventori yang dikembangkan oleh Dewi, T. R. (2017), sehingga untuk meningkatkan keefektivan dan keefektivitas penyebaran inventori tersebut, peneliti melakukan penelitian lanjutan dengan melakukan pengembangan aplikasi Berbasis Web untuk Mengidentifikasi Kondisi Pribadi Sehat Remaja Bagi Siswa SMA/ SMK di Mejayan.
            Dalam penelitian pengembangan ini, kami mengadopsi pendekatan berbasis Web sebagai alternatif. Keputusan ini didasari oleh beberapa alasan yang relevan: (1) Perilaku Pengguna: Pengguna yang menjadi target aplikasi ini adalah siswa dengan jenjang SMK. Rata-rata dari mereka enggan untuk menginstal aplikasi dari Google Play Store karena keterbatasan paket data, koneksi wifi yang tidak stabil, bahkan masalah memori yang penuh. Oleh karena itu, kami memilih pendekatan berbasis Web untuk meminimalisir hambatan ini; (2) Efektivitas Aplikasi: Penggunaan aplikasi berbasis instalasi dari Google Play Store seringkali menghadapi masalah teknis yang sulit untuk diatasi. Sebagai contoh, aplikasi PMM mengalami masalah saat diakses melalui instalasi aplikasi, sehingga guru-guru akhirnya mengakses aplikasi tersebut melalui Web. Dengan menggunakan pendekatan berbasis Web, penggunaan aplikasi menjadi lebih mudah dan dapat diakses dengan baik melalui smartphone siswa maupun komputer. Pendekatan ini juga memungkinkan penggunaan yang lebih efisien, menghindari pengulangan pekerjaan.
            Pengembangan aplikasi untuk mengidentifikasi kondisi pribadi sehat remaja tersebut berdasarkan pada pendekatan Rational Emotive Behavior Therapy (REBT) karena: (1) pendekatan tersebut dapat mencakup banyak aspek dalam diri pribadi remaja, diantaranya segi kognitif, emosi, serta perilaku, (2) Diyakini berguna dalam pelayanan bimbingan dan konseling  agar remaja lebih mengetahui dan memahami sedini mungkin tentang kondisi pribadinya sebagai modal mengaktualisasikan tugas perkembangan, (3) Berguna untuk guru bimbingan dan konseling sebagai kelengkapan dalam melaksanakan asesmen kebutuhan yang bisa digunakan menjadi dasae menentukan intervensi layanan bimbingan dan konseling yang tepat berbasis data yang diperoleh dari hasil aplikasi yang dikembangkan. Semuanya ini sebagai langkah preventif dalam membantu siswa memandirikan dirinya dalam mencapai tugas perkembangan.
            ",
            "isPublished" => true,
        ]);

        $inst->criteria()->createMany(
            [
                [
                    "description" => "Pribadi sehat terdiri dari kehadiran, konsentrasi, motivasi, dan kemampuan untuk menjaga hubungan yang baik dengan orang lain.",
                    "text" => "PRIBADI SEHAT",
                    "point_min" => 101,
                    "point_max" => 200,
                ],
                [
                    "description" => "Pribadi tidak sehat terdiri dari keinginan menyalahi diri sendiri, kehilangan kemampuan untuk menjaga hubungan yang baik dengan orang lain, dan kemampuan untuk mengendalikan perilaku yang negatif.",
                    "text" => "PRIBADI TIDAK SEHAT",
                    "point_min" => 0,
                    "point_max" => 100,
                ],
            ]
        );

        $inst->sub_criterias()->create([
            "text" => "Self-interest",
            "description" => "Pribadi sehat cenderung bijaksana dan menyenangkan untuk diri mereka sendiri dan menaruh diri mereka sendiri menjadi pribadi yang menyenangkan bagi orang lain.
            ",
            "solutions" => "a.	Menerapkan Model ABC:
            Menurut Ellis (2002) ada tiga pilar yang membangun tingkah laku individu, yaitu Antecedent event atau Adversities (A), Belief (B), dan Emotional consequence (C). Kerangka pilar ini yang kemudian dikenal dengan konsep atau teori ABC.
            Dalam REBT, model ABC (A = peristiwa, B = keyakinan, C = konsekuensi) digunakan untuk membantu individu memahami hubungan antara peristiwa, keyakinan, dan konsekuensi emosional yang muncul. Dalam konteks ini, individu dapat mengidentifikasi keyakinan irasional yang mungkin muncul saat mereka mendahulukan kepentingan pribadi. Setelah itu, mereka dapat menggantinya dengan keyakinan yang lebih rasional dan sehat 
            b.	Disputing (D) 
            Menurut Corey (2009) merupakan penerapan prinsip-prinsip ilmiah untuk menentang pikiran yang cenderung mengalahkan diri sendiri dan kepercayaan-kepercayaan irasional yang dimiliki individu. Terdapat tiga bagian dalam tahap disputing, yaitu sebagai berikut:
            1)	Detecting irrational beliefs : Konselor menemukan keyakinan konseli yang irasional dan membantu konseli untuk menemukan keyakinan irasionalnya melalui persepsinya sendiri. Pertama-tama, individu perlu mengidentifikasi keyakinan irasional yang mungkin mereka miliki. Keyakinan irasional ini dapat termasuk pandangan yang berlebihan tentang pentingnya kepentingan pribadi dibandingkan dengan kepentingan orang lain. Dengan mengenali keyakinan irasional ini, individu dapat mulai mengubahnya menjadi keyakinan yang lebih rasional dan sehat 
            2)	Debating irrational beliefs : Konseli berdebat dengan kepercayaan disfungsionalnya dengan belajar bagaimana berpikir secara logis dan empiris. Selain itu juga dengan cara belajar bagaimana berargumen dengan kuat dan bertindak sesuai dengan kepercayaannya.
            3)	Discriminating irrational beliefs : Kemudian yang terakhir adalah konseli belajar membedakan kepercayaan irasional (self-defeating) dan kepercayaan rasional (self-helping). Dalam pendekatan REBT, self-interest yang sehat adalah tentang memahami dan memenuhi kebutuhan diri sendiri tanpa melanggar hak atau kepentingan orang lain.
            c.	 Effect (E) 
            Menurut Corey (2009) hasil akhir dari proses A-B-C-D berupa Effect (E).  Suatu sistem keyakinan yang baru dan efektif terdiri dari penggantian pemikiran yang tidak sehat dengan pemikiran yang sehat. Jika berhasil melakukan hal tersebut maka akan timbul new feeling (F) yaitu satu perangkat perasaan yang baru. Meningkatkan self-interest tidak berarti mengabaikan kepentingan orang lain. Penting untuk menghormati dan memperhatikan kepentingan orang lain dalam interaksi sosial Anda. Menjadi empati terhadap orang lain dan memperhatikan perasaan mereka adalah kunci untuk mencapai keseimbangan antara kepentingan pribadi dan kepentingan orang lain.
            ",
        ])->statements()->createMany([
            ["text" => "Saya bahagia dengan kondisi fisik saya saat ini", "favorable" => "fav","instrumen_id" => $inst->id],
            ["text" => "Saya selalu menikmati setiap tugas yang diberikan oleh guru tanpa ada rasa jengkel", "favorable" => "fav","instrumen_id" => $inst->id],
        ]);
        $inst->sub_criterias()->create([
            "text" => "Social Interest",
            "description" => "Manusia memilih hidup dan menikmati diri mereka sendiri dalam kelompok sosial atau komunitas. Jika mereka tidak bertindak secara moral, menyembunyikan kebenaran orang lain, dan menghasut kelompok masyarakat, hal ini tidak akan disukai. Mereka akan menciptakan dunia yang ramah yang mana mereka dapat hidup dengan nyaman dan senang.",
            "solutions" => "Dalam konteks REBT, solusi yang ditawarkan jika nilai Social interest rendah, dapat melibatkan langkah-langkah berikut:
            a.	Menerapkan Model ABC:
            Menurut Ellis (2002) ada tiga pilar yang membangun tingkah laku individu, yaitu Antecedent event atau Adversities (A), Belief (B), dan Emotional consequence (C). Kerangka pilar ini yang kemudian dikenal dengan konsep atau teori ABC.
            Dalam REBT, model ABC (A = peristiwa, B = keyakinan, C = konsekuensi) digunakan untuk membantu individu memahami hubungan antara peristiwa, keyakinan, dan konsekuensi emosional yang muncul. Dalam konteks ini, individu dapat mengidentifikasi keyakinan irasional yang mungkin muncul saat mereka mendahulukan kepentingan pribadi. Setelah itu, mereka dapat menggantinya dengan keyakinan yang lebih rasional dan sehat.
            b.	Disputing (D) 
            Menurut Corey (2009) merupakan penerapan prinsip-prinsip ilmiah untuk menentang pikiran yang cenderung mengalahkan diri sendiri dan kepercayaan-kepercayaan irasional yang dimiliki individu. Terdapat tiga bagian dalam tahap disputing, yaitu sebagai berikut:
            1)	Detecting irrational beliefs : Penting untuk mengidentifikasi keyakinan irasional yang mungkin mempengaruhi self-interest seseorang. Keyakinan irasional ini dapat termasuk pandangan yang berlebihan tentang pentingnya kepentingan pribadi dibandingkan dengan kepentingan orang lain. Dengan mengenali keyakinan irasional ini, individu dapat mulai mengubahnya menjadi keyakinan yang lebih rasional dan sehat.
            2)	Debating irrational beliefs : Konseli berdebat dengan kepercayaan disfungsionalnya dengan belajar bagaimana berpikir secara logis dan empiris. Selain itu juga dengan cara belajar bagaimana berargumen dengan kuat dan bertindak sesuai dengan kepercayaannya.
            3)	Discriminating irrational beliefs : Kemudian yang terakhir adalah konseli belajar membedakan kepercayaan irasional (self-defeating) dan kepercayaan rasional (self-helping). Dalam sesi konseling dengan pendekatan REBT, seorang konselor dapat membantu individu mengidentifikasi keyakinan irasional dan menggantinya dengan keyakinan yang lebih rasional. Konselor juga dapat membantu individu mengembangkan keterampilan sosial yang memungkinkan mereka untuk memperhatikan kepentingan orang lain dengan lebih baik.
            c.	 Effect (E) 
            Menurut Corey (2009) hasil akhir dari proses A-B-C-D berupa Effect (E).  Suatu sistem keyakinan yang baru dan efektif terdiri dari penggantian pemikiran yang tidak sehat dengan pemikiran yang sehat. Jika berhasil melakukan hal tersebut maka akan timbul new feeling (F) yaitu satu perangkat perasaan yang baru. Dalam REBT, penting untuk mengembangkan empati terhadap orang lain. Ini melibatkan kemampuan untuk memahami dan merasakan perasaan dan kebutuhan orang lain. Dengan mengembangkan empati, individu dapat lebih memperhatikan kepentingan orang lain dan mencari keseimbangan antara kepentingan pribadi dan kepentingan orang lain..
            ",
        ])->statements()->createMany([
            ["text" => "Saya senang terlibat dalam kegiatan OSIS, karena saya bisa memberikan sumbangan untuk kemajuan sekolah", "favorable" => "fav","instrumen_id" => $inst->id],
            // ["text" => "Saya selalu menikmati setiap tugas yang diberikan oleh guru tanpa ada rasa jengkel", "favorable" => "fav","instrumen_id" => $inst->id],
        ]);

        $inst->sub_criterias()->create([
            "text" => "Self-direction",
            "description" => "Pribadi yang sehat cenderung mengasumsikan tanggung jawab untuk kehidupan mereka ketika secara simultan mengutamakan kerja sama dengan yang lain. Mereka tidak membutuhkan atau menuntut banyak dukungan dari yang lain, meskipun mereka mungkin mengutamakan dan bekerja untuk ini.
            ",
            "solutions" => "Dalam konteks REBT, solusi yang ditawarkan jika Self-direction rendah, dapat melibatkan langkah-langkah berikut:
            a.	Menerapkan Model ABC:
            Gunakan model ABC (A = peristiwa, B = keyakinan, C = konsekuensi) untuk memahami hubungan antara peristiwa, keyakinan, dan konsekuensi emosional. Dengan memahami keyakinan yang mendasari perilaku dan tanggung jawab, individu dapat mengubahnya menjadi keyakinan yang lebih rasional.
            b.	Disputing (D) 
            Menurut Corey (2009) merupakan penerapan prinsip-prinsip ilmiah untuk menentang pikiran yang cenderung mengalahkan diri sendiri dan kepercayaan-kepercayaan irasional yang dimiliki individu. Terdapat tiga bagian dalam tahap disputing, yaitu sebagai berikut:
            1)	Detecting irrational beliefs : Identifikasi keyakinan irasional yang mungkin mempengaruhi self-direction. Keyakinan irasional ini dapat membatasi kemampuan seseorang untuk mengambil tanggung jawab atas kehidupan mereka sendiri.
            2)	Debating irrational beliefs : Konseli berdebat dengan kepercayaan disfungsionalnya dengan belajar bagaimana berpikir secara logis dan empiris. Selain itu juga dengan cara belajar bagaimana berargumen dengan kuat dan bertindak sesuai dengan kepercayaannya.
            3)	Discriminating irrational beliefs : Kemudian yang terakhir adalah konseli belajar membedakan kepercayaan irasional (self-defeating) dan kepercayaan rasional (self-helping). Dalam sesi konseling dengan pendekatan REBT, seorang konselor dapat membantu individu mengidentifikasi keyakinan irasional dan menggantinya dengan keyakinan yang lebih rasional. Konselor bersama konseli mendorong individu untuk mengembangkan keterampilan mandiri, seperti pengambilan keputusan yang bertanggung jawab, perencanaan, dan pengaturan tujuan yang realistis.
            c.	 Effect (E) 
            Menurut Corey (2009) hasil akhir dari proses A-B-C-D berupa Effect (E).  Suatu sistem keyakinan yang baru dan efektif terdiri dari penggantian pemikiran yang tidak sehat dengan pemikiran yang sehat. Jika berhasil melakukan hal tersebut maka akan timbul new feeling (F) yaitu satu perangkat perasaan yang baru. Dalam REBT, meskipun mandiri, individu yang sehat juga menghargai kerja sama dengan orang lain. Mereka dapat belajar untuk bekerja sama dalam mencapai tujuan bersama tanpa bergantung secara berlebihan pada orang lain.
            ",
        ])->statements()->createMany([
            ["text" => "Saya salah memilih jurusan sehingga tidak bisa belajar dengan maksimal", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Saya lebih memilih diam saat orang lain menghujat dan mencemooh saya", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Saya memiliki gambaran yang jelas tentang cita-cita saya kelak", "favorable" => "fav","instrumen_id" => $inst->id],
            ["text" => "Saya mengikuti salah satu kegiatan ekstrakurikuler di sekolah yang sesuai dengan cita-cita saya", "favorable" => "fav","instrumen_id" => $inst->id],
        ]);


        $inst->sub_criterias()->create([
            "text" => "High frustration tolerance",
            "description" => "Pribadi yang sehat adalah mereka yang dapat mengubah kondisi yang memuakkan pada diri mereka, menerima hal yang tidak bisa mereka lakukan, dan memiliki kebijaksanaan dalam mehamai dua perbedaan.
            ",
            "solutions" => "Dalam konteks REBT, solusi yang ditawarkan jika High frustration tolerance rendah, dapat melibatkan langkah-langkah berikut:
            a.	Menerapkan Model ABC:
            Menurut Ellis (2002) ada tiga pilar yang membangun tingkah laku individu, yaitu Antecedent event atau Adversities (A), Belief (B), dan Emotional consequence (C). Kerangka pilar ini yang kemudian dikenal dengan konsep atau teori ABC untuk memahami hubungan antara peristiwa, keyakinan, dan konsekuensi emosional. Dalam konteks ini, individu dapat mengidentifikasi keyakinan irrasional yang mungkin muncul saat mereka menghadapi frustrasi. Setelah itu, mereka dapat menggantinya dengan keyakinan yang lebih rasional dan sehat.
            b.	Disputing (D) 
            Menurut Corey (2009) merupakan penerapan prinsip-prinsip ilmiah untuk menentang pikiran yang cenderung mengalahkan diri sendiri dan kepercayaan-kepercayaan irasional yang dimiliki individu. Terdapat tiga bagian dalam tahap disputing, yaitu sebagai berikut:
            1)	Detecting irrational beliefs : Identifikasi keyakinan irasional yang mungkin mempengaruhi self-direction. Keyakinan irasional ini dapat membatasi kemampuan seseorang untuk mengambil tanggung jawab atas kehidupan mereka sendiri.
            2)	Debating irrational beliefs : Konseli berdebat dengan kepercayaan disfungsionalnya dengan belajar bagaimana berpikir secara logis dan empiris. Selain itu juga dengan cara belajar bagaimana berargumen dengan kuat dan bertindak sesuai dengan kepercayaannya.
            3)	Discriminating irrational beliefs : Kemudian yang terakhir adalah konseli belajar membedakan kepercayaan irasional (self-defeating) dan kepercayaan rasional (self-helping). Dalam sesi konseling dengan pendekatan REBT, seorang konselor dapat membantu individu mengidentifikasi keyakinan irasional dan menggantinya dengan keyakinan yang lebih rasional. Konselor bersama konseli melatih diri sendiri untuk mengembangkan keterampilan mengatasi frustrasi dengan baik. Ini melibatkan mengenali emosi yang muncul saat frustrasi, mengelola stres, menggunakan strategi pemecahan masalah yang efektif, dan mengadopsi sikap yang lebih fleksibel terhadap situasi yang menantang.
            c.	 Effect (E) 
            Menurut Corey (2009) hasil akhir dari proses A-B-C-D berupa Effect (E).  Suatu sistem keyakinan yang baru dan efektif terdiri dari penggantian pemikiran yang tidak sehat dengan pemikiran yang sehat. Jika berhasil melakukan hal tersebut maka akan timbul new feeling (F) yaitu satu perangkat perasaan yang baru. Dalam sesi konseling dengan pendekatan REBT, seorang konselor dapat membantu individu mengidentifikasi keyakinan irrasional yang mempengaruhi toleransi frustrasi rendah. Konselor juga dapat membantu individu menggantikan keyakinan irrasional tersebut dengan keyakinan yang lebih rasional dan membantu mereka mengembangkan keterampilan mengatasi frustrasi. Dengan menerapkan langkah-langkah ini, individu dapat meningkatkan self-direction dan toleransi frustrasi mereka dalam konteks pribadi yang sehat sesuai dengan pendekatan REBT.
            ",
        ])->statements()->createMany([
            ["text" => "Saya bisa mencairkan susasana kelompok yang dingin akibat adanya kesalahpahaman antara anggota kelompok ", "favorable" => "fav","instrumen_id" => $inst->id],
            ["text" => "Ketika teman saya sedang memiliki masalah saya akan mencoba untuk tidak mendekatinya", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Saya akan merasa sangat bersalah ketika mendapatkan nilai ulangan mata pelajaran favorit saya di bawah KKM (Kriteria Ketuntasan Minimum)", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Saya bisa menerima kekurangan fisik yang ada pada diri saya dengan mengagumi kekurangan itu", "favorable" => "fav","instrumen_id" => $inst->id],
        ]);

        $inst->sub_criterias()->create([
            "text" => "Flexibility",
            "description" => "Pribadi yang sehat dan matang cenderung fleksibel dalam berpikir, terbuka terhadap perubahan, dan tidak berprasangka buruk dan pluralistik dalam pandangan mereka terhadap orang lain.
            ",
            "solutions" => "Dalam konteks REBT, solusi yang ditawarkan jika Flexibility rendah, dapat melibatkan langkah-langkah berikut:
            a.	Menerapkan Model ABC:
            Menurut Ellis (2002) ada tiga pilar yang membangun tingkah laku individu, yaitu Antecedent event atau Adversities (A), Belief (B), dan Emotional consequence (C). Kerangka pilar ini yang kemudian dikenal dengan konsep atau teori ABC untuk memahami hubungan antara peristiwa, keyakinan, dan konsekuensi emosional. Dalam konteks ini, Gunakan model ABC (A = peristiwa, B = keyakinan, C = konsekuensi) untuk memahami hubungan antara peristiwa, keyakinan, dan konsekuensi emosional. Dalam konteks ini, individu dapat mengidentifikasi keyakinan irasional yang mungkin muncul saat mereka menghadapi perubahan atau situasi yang berbeda. Setelah itu, mereka dapat menggantinya dengan keyakinan yang lebih rasional dan adaptif.

            b.	Disputing (D) 
            Menurut Corey (2009) merupakan penerapan prinsip-prinsip ilmiah untuk menentang pikiran yang cenderung mengalahkan diri sendiri dan kepercayaan-kepercayaan irasional yang dimiliki individu. Terdapat tiga bagian dalam tahap disputing, yaitu sebagai berikut:
            1)	Detecting irrational beliefs : Identifikasi keyakinan irasional yang mungkin mempengaruhi fleksibilitas rendah. Keyakinan irasional ini dapat termasuk pandangan yang kaku atau tidak mampu menerima perubahan.
            2)	Debating irrational beliefs : Konseli berdebat dengan kepercayaan disfungsionalnya dengan belajar bagaimana berpikir secara logis dan empiris. Selain itu juga dengan cara belajar bagaimana berargumen dengan kuat dan bertindak sesuai dengan kepercayaannya.
            3)	Discriminating irrational beliefs : Kemudian yang terakhir adalah konseli belajar membedakan kepercayaan irasional (self-defeating) dan kepercayaan rasional (self-helping). Dalam sesi konseling dengan pendekatan REBT, seorang konselor dapat membantu individu mengidentifikasi keyakinan irasional dan menggantinya dengan keyakinan yang lebih rasional. Konselor bersama konseli melatih diri sendiri untuk mengembangkan keterampilan mengatasi frustrasi dengan baik. Ini melibatkan mengenali emosi yang muncul saat frustrasi, mengelola stres, menggunakan strategi pemecahan masalah yang efektif, dan mengadopsi sikap yang lebih fleksibel terhadap situasi yang menantang.
            c.	 Effect (E) 
            Menurut Corey (2009) hasil akhir dari proses A-B-C-D berupa Effect (E).  Suatu sistem keyakinan yang baru dan efektif terdiri dari penggantian pemikiran yang tidak sehat dengan pemikiran yang sehat. Jika berhasil melakukan hal tersebut maka akan timbul new feeling (F) yaitu satu perangkat perasaan yang baru. Dalam sesi konseling dengan pendekatan REBT, Latih diri sendiri untuk mengembangkan keterampilan adaptasi yang baik. Ini melibatkan kemampuan untuk berpikir secara fleksibel, menyesuaikan diri dengan perubahan, dan mencari solusi kreatif dalam menghadapi situasi yang berbeda.
            ",
        ])->statements()->createMany([
            ["text" => "Saya kecewa saat teman-teman tidak menyetujui pendapat saya", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Saya menerima segala kritikan tentang diri saya untuk kebaikan diri saya sendiri", "favorable" => "fav","instrumen_id" => $inst->id],
            ["text" => "Yang menyebabkan prestasi kelompok saya gagal karena teman saya selalu salah dalam menjelaskan materinya", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Teman sebangku saya selalu saja mencampuri urusan saya pasti nanti di belakang saya akan menjelek-jelekkan saya", "favorable" => "unfav","instrumen_id" => $inst->id],
        ]);

        $inst->sub_criterias()->create([
            "text" => "Acceptance of Uncertainty",
            "description" => "Pribadi yang sehat cenderung mengakui dan menerima gagasan bahwa kita tampak hidup di dunia yang penuh dengan kemungkinan dan perubahan dimana kepastian mutlak tidak bisa dipastikan dan kemungkinan tidak pernah akan terus ada.
            ",
            "solutions" => "Dalam konteks REBT, solusi yang ditawarkan jika Acceptance of uncertainty rendah, dapat melibatkan langkah-langkah berikut:
            a.	Menerapkan Model ABC:
            Menurut Ellis (2002) ada tiga pilar yang membangun tingkah laku individu, yaitu Antecedent event atau Adversities (A), Belief (B), dan Emotional consequence (C). Kerangka pilar ini yang kemudian dikenal dengan konsep atau teori ABC untuk memahami hubungan antara peristiwa, keyakinan, dan konsekuensi emosional. Dalam konteks ini, Gunakan model ABC (A = peristiwa, B = keyakinan, C = konsekuensi) untuk memahami hubungan antara peristiwa, keyakinan, dan konsekuensi emosional. Gunakan model ABC (A = peristiwa, B = keyakinan, C = konsekuensi) untuk memahami hubungan antara peristiwa, keyakinan, dan konsekuensi emosional. Dalam konteks ini, individu dapat mengidentifikasi keyakinan irasional yang mungkin muncul saat mereka dihadapkan pada ketidakpastian. Setelah itu, mereka dapat menggantinya dengan keyakinan yang lebih rasional dan adaptif.

            b.	Disputing (D) 
            Menurut Corey (2009) merupakan penerapan prinsip-prinsip ilmiah untuk menentang pikiran yang cenderung mengalahkan diri sendiri dan kepercayaan-kepercayaan irasional yang dimiliki individu. Terdapat tiga bagian dalam tahap disputing, yaitu sebagai berikut:
            1)	Detecting irrational beliefs : Identifikasi keyakinan irasional yang mungkin mempengaruhi penerimaan ketidakpastian rendah. Keyakinan irasional ini dapat termasuk pandangan yang mengharapkan kepastian mutlak dalam hidup atau menganggap ketidakpastian sebagai sesuatu yang tidak dapat ditoleransi.
            2)	Debating irrational beliefs : Konseli berdebat dengan kepercayaan disfungsionalnya dengan belajar bagaimana berpikir secara logis dan empiris. Selain itu juga dengan cara belajar bagaimana berargumen dengan kuat dan bertindak sesuai dengan kepercayaannya.
            Discriminating irrational beliefs : Kemudian yang terakhir adalah konseli belajar membedakan kepercayaan irasional (self-defeating) dan kepercayaan rasional (self-helping). Dalam sesi konseling dengan pendekatan REBT, seorang konselor dapat membantu individu mengidentifikasi keyakinan irasional dan menggantinya dengan keyakinan yang lebih rasional. Dalam sesi konseling dengan pendekatan REBT, seorang konselor dapat membantu individu mengidentifikasi keyakinan irasional yang mempengaruhi penerimaan ketidakpastian rendah. Konselor juga dapat membantu individu menggantikan keyakinan irasional tersebut dengan keyakinan yang lebih rasional dan membantu mereka mengembangkan keterampilan menghadapi ketidakpastian.





            c.	 Effect (E) 
            Menurut Corey (2009) hasil akhir dari proses A-B-C-D berupa Effect (E).  Suatu sistem keyakinan yang baru dan efektif terdiri dari penggantian pemikiran yang tidak sehat dengan pemikiran yang sehat. Jika berhasil melakukan hal tersebut maka akan timbul new feeling (F) yaitu satu perangkat perasaan yang baru. Dalam sesi konseling dengan pendekatan REBT, dalam sesi konseling dengan pendekatan REBT, seorang konselor dapat membantu individu latih diri sendiri untuk mengembangkan keterampilan menghadapi ketidakpastian dengan baik. Ini melibatkan kemampuan untuk mengelola kecemasan, mengembangkan ketahanan mental, dan mengadopsi sikap yang lebih terbuka terhadap perubahan dan ketidakpastian.
            ",
        ])->statements()->createMany([
            ["text" => "Saya tidak terima jika saat musyawarah kelas, pendapat saya ditolak teman-teman", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Saya menerima kapanpun nyawa akan diambil oleh Tuhan karena saya tahu nyawa adalah titipan-Nya", "favorable" => "fav","instrumen_id" => $inst->id],
            ["text" => "Saya akan merasa sangat sedih jika suatu saat nanti teman terbaik atau sahabat saya tidak melanjutkan ke Perguruan Tinggi yang sama dengan saya", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Saya akan menerima saran perbaikan dari guru bidang studi terkait tugas yang saya kerjakan", "favorable" => "fav","instrumen_id" => $inst->id],
            ["text" => "Saya tidak menerima alasan apapun jika mungkin siap jika suatu saat nanti kekasih saya akan meninggalkan saya", "favorable" => "unfav","instrumen_id" => $inst->id],
        ]);

        $inst->sub_criterias()->create([
            "text" => "Commitment to creative pursuits",
            "description" => "Kebanyakan manusia cenderung menjadi pribadi sehat dan senang ketika mereka secara krusial dapat berbaur dengan kelompok sosial atau komunitas dan sedikitnya satu kreasinya dapat menjadi minat perhatian dari kelompok sosial atau komunitas, seperti halnya kebanyakan manusia, bahwa mereka menganggap penting mereka bisa menjadi bagian dari struktur yang baik dari kehidupan disekitarnya.
            ",
            "solutions" => "Dalam konteks REBT, solusi yang ditawarkan jika Commitment to creative pursuits rendah, dapat melibatkan langkah-langkah berikut:
            a.	Menerapkan Model ABC:
            Menurut Ellis (2002) ada tiga pilar yang membangun tingkah laku individu, yaitu Antecedent event atau Adversities (A), Belief (B), dan Emotional consequence (C). Kerangka pilar ini yang kemudian dikenal dengan konsep atau teori ABC untuk memahami hubungan antara peristiwa, keyakinan, dan konsekuensi emosional. Gunakan model ABC (A = peristiwa, B = keyakinan, C = konsekuensi) untuk memahami hubungan antara peristiwa, keyakinan, dan konsekuensi emosional. Dalam konteks ini, individu dapat mengidentifikasi keyakinan irasional yang mungkin muncul saat mereka dihadapkan pada ketidakpastian. Setelah itu, mereka dapat menggantinya dengan keyakinan yang lebih rasional dan adaptif.

            b.	Disputing (D) 
            Menurut Corey (2009) merupakan penerapan prinsip-prinsip ilmiah untuk menentang pikiran yang cenderung mengalahkan diri sendiri dan kepercayaan-kepercayaan irasional yang dimiliki individu. Terdapat tiga bagian dalam tahap disputing, yaitu sebagai berikut:
            1)	Detecting irrational beliefs :  Identifikasi keyakinan irasional yang mungkin mempengaruhi penerimaan ketidakpastian rendah. Keyakinan irasional ini dapat termasuk pandangan yang mengharapkan kepastian mutlak dalam hidup atau menganggap ketidakpastian sebagai sesuatu yang tidak dapat ditoleransi.
            2)	Debating irrational beliefs : Konseli berdebat dengan kepercayaan disfungsionalnya dengan belajar bagaimana berpikir secara logis dan empiris. Selain itu juga dengan cara belajar bagaimana berargumen dengan kuat dan bertindak sesuai dengan kepercayaannya.
            3)	Discriminating irrational beliefs : Kemudian yang terakhir adalah konseli belajar membedakan kepercayaan irasional (self-defeating) dan kepercayaan rasional (self-helping). Dalam sesi konseling dengan pendekatan REBT, seorang konselor dapat membantu individu mengidentifikasi keyakinan irasional dan menggantinya dengan keyakinan yang lebih rasional. Dalam sesi konseling dengan pendekatan REBT, seorang konselor dapat membantu individu mengidentifikasi keyakinan irasional yang mempengaruhi penerimaan ketidakpastian rendah. Konselor juga dapat membantu individu menggantikan keyakinan irasional tersebut dengan keyakinan yang lebih rasional dan membantu mereka mengembangkan keterampilan menghadapi ketidakpastian.
            c.	 Effect (E) 
            Menurut Corey (2009) hasil akhir dari proses A-B-C-D berupa Effect (E).  Suatu sistem keyakinan yang baru dan efektif terdiri dari penggantian pemikiran yang tidak sehat dengan pemikiran yang sehat. Jika berhasil melakukan hal tersebut maka akan timbul new feeling (F) yaitu satu perangkat perasaan yang baru. Dalam sesi konseling dengan pendekatan REBT, Latih diri sendiri untuk mengembangkan keterampilan menghadapi ketidakpastian dengan baik. Ini melibatkan kemampuan untuk mengelola kecemasan, mengembangkan ketahanan mental, dan mengadopsi sikap yang lebih terbuka terhadap perubahan dan ketidakpastian.
            ",
        ])->statements()->createMany([
            ["text" => "Saya harus menjadi siswa terbaik dan teladan di kelas saya", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "saya akan belajar lebih giat lagi untuk meningkatkan kemampuan saya dalam berbahasa inggris", "favorable" => "fav","instrumen_id" => $inst->id],
            ["text" => "saya akan mengerjakan tugas sesuai dengan pembagian tugas masing-masing anggota kelompok", "favorable" => "fav","instrumen_id" => $inst->id],
            ["text" => "Jika pemikiran saya tidak sepaham dengan pemikiran anggota kelompok maka saya akan bekerja sendiri", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Jika saya merasa tidak cocok dengan anggota kelompok, maka saya akan mencari kelompok lain", "favorable" => "unfav","instrumen_id" => $inst->id],
        ]);

        $inst->sub_criterias()->create([
            "text" => "Scientific thinking",
            "description" => "Pribadi yang sehat memiliki kecenderungan menjadi lebih objektif, realistis, dan ilmiah.  Individu yang tidak mengalami gangguan cenderung lebih objektif, realistis, dan ilmiah dibandingkan yang lebih terganggu. Mereka mampu merasakan secara mendalam dan bertindak secara terpadu, namun mereka cenderung mengatur emosi dan tindakan mereka dengan cara yang sama. Merefleksikannya dan mengevaluasi konsekuensinya sejauh mana yang mengarah pada pencapaian tujuan jangka pendek dan jangka panjang.
            ",
            "solutions" => "Dalam konteks REBT, solusi yang ditawarkan jika Scientific thinking rendah, dapat melibatkan langkah-langkah berikut:
                a.	Menerapkan Model ABC:
                Menurut Ellis (2002) ada tiga pilar yang membangun tingkah laku individu, yaitu Antecedent event atau Adversities (A), Belief (B), dan Emotional consequence (C). Kerangka pilar ini yang kemudian dikenal dengan konsep atau teori ABC untuk memahami hubungan antara peristiwa, keyakinan, dan konsekuensi emosional. Gunakan model ABC (A = peristiwa, B = keyakinan, C = konsekuensi) untuk memahami hubungan antara peristiwa, keyakinan, dan konsekuensi emosional. Dalam konteks ini, individu dapat mengidentifikasi keyakinan irasional yang mungkin muncul saat mereka dihadapkan pada ketidakpastian. Setelah itu, mereka dapat menggantinya dengan keyakinan yang lebih rasional dan adaptif.
                b.	Disputing (D) 
                Menurut Corey (2009) merupakan penerapan prinsip-prinsip ilmiah untuk menentang pikiran yang cenderung mengalahkan diri sendiri dan kepercayaan-kepercayaan irasional yang dimiliki individu. Terdapat tiga bagian dalam tahap disputing, yaitu sebagai berikut:
                1)	Detecting irrational beliefs :  Identifikasi keyakinan irasional yang mungkin mempengaruhi penerimaan ketidakpastian rendah. Keyakinan irasional ini dapat termasuk pandangan yang mengharapkan kepastian mutlak dalam hidup atau menganggap ketidakpastian sebagai sesuatu yang tidak dapat ditoleransi.
                2)	Debating irrational beliefs : Konseli berdebat dengan kepercayaan disfungsionalnya dengan belajar bagaimana berpikir secara logis dan empiris. Selain itu juga dengan cara belajar bagaimana berargumen dengan kuat dan bertindak sesuai dengan kepercayaannya.
                3)	Discriminating irrational beliefs : Kemudian yang terakhir adalah konseli belajar membedakan kepercayaan irasional (self-defeating) dan kepercayaan rasional (self-helping). Dalam sesi konseling dengan pendekatan REBT, seorang konselor dapat membantu individu mengidentifikasi keyakinan irasional dan menggantinya dengan keyakinan yang lebih rasional. Dalam sesi konseling dengan pendekatan REBT, seorang konselor dapat membantu individu mengidentifikasi keyakinan irasional yang mempengaruhi penerimaan ketidakpastian rendah. Konselor juga dapat membantu individu menggantikan keyakinan irasional tersebut dengan keyakinan yang lebih rasional dan membantu mereka mengembangkan keterampilan menghadapi ketidakpastian.
                c.	 Effect (E) 
                Menurut Corey (2009) hasil akhir dari proses A-B-C-D berupa Effect (E).  Suatu sistem keyakinan yang baru dan efektif terdiri dari penggantian pemikiran yang tidak sehat dengan pemikiran yang sehat. Jika berhasil melakukan hal tersebut maka akan timbul new feeling (F) yaitu satu perangkat perasaan yang baru. Dalam sesi konseling dengan pendekatan REBT, Latih diri sendiri untuk mengembangkan keterampilan menghadapi ketidakpastian dengan baik. Ini melibatkan kemampuan untuk mengelola kecemasan, mengembangkan ketahanan mental, dan mengadopsi sikap yang lebih terbuka terhadap perubahan dan ketidakpastian.
                ",
        ])->statements()->createMany([
            ["text" => "Saya takut teman-teman menganggap kuper (kurang pergaulan) dan tidak laku jika saya tidak punya pacar", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Saya akan melaporkan guru saya jika saya mendapatkan nilai jelek", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Dia (orang yang saya taksir) itu sudah jelas akan menolak saat saya mengungkapkan perasaan cinta saya kepadanya", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Saya bukan apa-apa tanpa pacar saya", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Ketika nilai saya di bawah KKM, saya akan memperbaikinya pada ulangan mendatang", "favorable" => "fav","instrumen_id" => $inst->id],
            ["text" => "Jika orang lain bisa membeli HP baru seperti yang saya inginkan, maka saya akan menabung untuk membelinya", "favorable" => "fav","instrumen_id" => $inst->id],
        ]);

        $inst->sub_criterias()->create([
            "text" => "Self-acceptance",
            "description" => "Pribadi yang sehat biasanya senang hidup dan menerima diri mereka sendiri karena mereka hidup dan memiliki kapasitas untuk menikmati diri mereka sendiri. Orang sehat biasanya senang hidup dan menerima diri mereka sendiri hanya karena mereka masih hidup dan memiliki kapasitas untuk menikmati diri mereka sendiri. Mereka menolak mengukur nilai intrinsik mereka dengan pencapaian ekstrinsik mereka atau dengan apa yang orang lain pikirkan tentang mereka. Mereka terus terang memilih untuk memiliki penerimaan diri tanpa syarat, dan mereka berusaha menghindari menilai diri sendiri. Mereka berusaha untuk menikmati daripada membuktikan diri.
            ",
            "solutions" => `Dalam konteks REBT, solusi yang ditawarkan jika Self-acceptance rendah, dapat melibatkan langkah-langkah berikut:


            a.	Menerapkan Model ABC:
            Menurut Ellis (2002) ada tiga pilar yang membangun tingkah laku individu, yaitu Antecedent event atau Adversities (A), Belief (B), dan Emotional consequence (C). Kerangka pilar ini yang kemudian dikenal dengan konsep atau teori ABC untuk memahami hubungan antara peristiwa, keyakinan, dan konsekuensi emosional. Gunakan model ABC (A = peristiwa, B = keyakinan, C = konsekuensi) untuk memahami hubungan antara peristiwa, keyakinan, dan konsekuensi emosional. Misalkan, dalam konteks self-acceptance rendah, A (Activating Event): Seseorang mendapatkan kritik dari teman tentang penampilannya, B (Belief System): Seseorang memiliki pikiran irasional bahwa "Saya tidak bisa diterima jika penampilan saya tidak sempurna”, C (Consequence): Seseorang merasa cemas, sedih, dan merugikan diri sendiri dengan menghindari interaksi sosial.
            b.	Disputing (D) 
            Menurut Corey (2009) merupakan penerapan prinsip-prinsip ilmiah untuk menentang pikiran yang cenderung mengalahkan diri sendiri dan kepercayaan-kepercayaan irasional yang dimiliki individu. Terdapat tiga bagian dalam tahap disputing, yaitu sebagai berikut:
            1)	Detecting irrational beliefs :  Identifikasi keyakinan irasional yang mungkin mempengaruhi penerimaan ketidakpastian rendah. Mengenali dan mengidentifikasi pikiran-pikiran irasional yang mungkin muncul terkait dengan self-acceptance rendah. Pikiran-pikiran seperti "Saya harus sempurna" atau "Saya tidak bisa diterima jika tidak sempurna" perlu diidentifikasi.
            2)	Debating irrational beliefs : Konseli berdebat dengan kepercayaan disfungsionalnya dengan belajar bagaimana berpikir secara logis dan empiris. Selain itu juga dengan cara belajar bagaimana berargumen dengan kuat dan bertindak sesuai dengan kepercayaannya.
            3)	Discriminating irrational beliefs : Kemudian yang terakhir adalah konseli belajar membedakan kepercayaan irasional (self-defeating) dan kepercayaan rasional (self-helping). Dalam sesi konseling dengan pendekatan REBT, seorang konselor dapat membantu individu mengidentifikasi keyakinan irasional dan menggantinya dengan keyakinan yang lebih rasional. Dalam sesi konseling dengan pendekatan REBT, seorang konselor dapat membantu individu mengidentifikasi keyakinan irasional yang mempengaruhi penerimaan ketidakpastian rendah. Konselor juga dapat membantu individu menggantikan keyakinan irasional tersebut dengan keyakinan yang lebih rasional dan membantu mereka mengembangkan keterampilan menghadapi ketidakpastian.
            c.	 Effect (E)
            Menurut Corey (2009) hasil akhir dari proses A-B-C-D berupa Effect (E).  Suatu sistem keyakinan yang baru dan efektif terdiri dari penggantian pemikiran yang tidak sehat dengan pemikiran yang sehat. Jika berhasil melakukan hal tersebut maka akan timbul new feeling (F) yaitu satu perangkat perasaan yang baru. Dalam sesi konseling dengan pendekatan REBT, Latih diri sendiri untuk mengembangkan afirmasi positif untuk memperkuat self-acceptance. Afirmasi positif adalah pernyataan positif tentang diri sendiri yang diulang secara teratur untuk membantu mengubah pola pikir negatif menjadi positif. Contohnya, mengulang afirmasi seperti "Saya menerima diri saya apa adanya" atau "Saya berharga dan pantas diterima". Selain itu, mengembangkan diri melalui pengembangan keterampilan, minat, dan hobi yang positif. Dengan mengembangkan diri, seseorang dapat merasa lebih percaya diri dan menerima diri sendiri dengan lebih baik. Dukungan dari orang-orang terdekat seperti keluarga, teman, atau profesional kesehatan mental. Dukungan sosial dapat membantu seseorang merasa lebih diterima dan meningkatkan self-acceptance.
            `,
        ])->statements()->createMany([
            ["text" => "Saya akan merasa sakit hati dan kecewa jika mengingat masa lalu saya", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Saya kecewa dengan ketidakmampuan saya saat berbicara di depan publik", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Mengapa saya terlahir dari keluarga yang tidak mampu?", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Dengan kekurangan pada fisik saya seperti ini, saya masih bisa membuat diri saya dan orang lain bahagia", "favorable" => "fav","instrumen_id" => $inst->id],
            ["text" => "Inilah saya dengan segala keterbatasan saya, saya tetap merasa bahagia", "favorable" => "fav","instrumen_id" => $inst->id],
        ]);

        $inst->sub_criterias()->create([
            "text" => "Risk-taking",
            "description" => "Emosi pribadi yang sehat memiliki kecenderungan berani mengambil resiko dan mencoba melakukan apa yang ingin dilakukan. Mereka menganggap itu adalah kesempatan baik meskipun mungkin mereka gagal. Mereka memiliki kecenderungan menjadi petualang tetapi tidak gegabah. Orang yang sehat secara emosional cenderung mengambil risiko dalam jumlah yang cukup mengambil risiko dan mencoba melakukan apa yang ingin mereka lakukan, bahkan ketika ada peluang bagus walaupun mereka mungkin gagal.
            ",
            "solutions" => `Dalam konteks REBT, solusi yang ditawarkan jika Risk-taking rendah, dapat melibatkan langkah-langkah berikut:
            a.	Menerapkan Model ABC:
            Menurut Ellis (2002) ada tiga pilar yang membangun tingkah laku individu, yaitu Antecedent event atau Adversities (A), Belief (B), dan Emotional consequence (C). Kerangka pilar ini yang kemudian dikenal dengan konsep atau teori ABC untuk memahami hubungan antara peristiwa, keyakinan, dan konsekuensi emosional. Gunakan model ABC (A = peristiwa, B = keyakinan, C = konsekuensi) untuk memahami hubungan antara peristiwa, keyakinan, dan konsekuensi emosional. Misalkan, Dalam konteks Risk-taking rendah, A (Activating Event): Seseorang dihadapkan pada kesempatan untuk mengambil risiko, seperti memulai bisnis baru atau melakukan aktivitas yang di luar zona nyaman, B (Belief System): Seseorang memiliki pikiran irasional yang menghambat, seperti "Saya tidak akan pernah berhasil" atau "Jika saya gagal, itu berarti saya tidak berharga.", C (Consequence): Seseorang merasa takut, ragu-ragu, atau cemas menghadapi risiko tersebut. Hal ini dapat menghambat kemampuan seseorang untuk mengambil langkah maju dan mencapai potensi penuh mereka.
            b.	Disputing (D) 
            Menurut Corey (2009) merupakan penerapan prinsip-prinsip ilmiah untuk menentang pikiran yang cenderung mengalahkan diri sendiri dan kepercayaan-kepercayaan irasional yang dimiliki individu. Terdapat tiga bagian dalam tahap disputing, yaitu sebagai berikut:
            1)	Detecting irrational beliefs :  Mengidentifikasi pikiran-pikiran irasional yang muncul terkait dengan mengambil risiko. Misalnya, menggantikan pikiran "Saya tidak akan pernah berhasil" dengan pikiran "Mungkin ada risiko, tetapi saya memiliki kemampuan dan peluang untuk berhasil."
            2)	Debating irrational beliefs : Konseli berdebat dengan kepercayaan disfungsionalnya dengan belajar bagaimana berpikir secara logis dan empiris. Selain itu juga dengan cara belajar bagaimana berargumen dengan kuat dan bertindak sesuai dengan kepercayaannya.
            3)	Discriminating irrational beliefs : Kemudian yang terakhir adalah konseli belajar membedakan kepercayaan irasional (self-defeating) dan kepercayaan rasional (self-helping). Dalam sesi konseling dengan pendekatan REBT, seorang konselor dapat membantu individu mengidentifikasi keyakinan irasional dan menggantinya dengan keyakinan yang lebih rasional. Misalnya, menggantikan "Jika saya gagal, itu berarti saya tidak berharga" dengan "Kegagalan adalah bagian dari proses belajar dan tidak menentukan nilai diri saya".

            c.	 Effect (E)
            Menurut Corey (2009) hasil akhir dari proses A-B-C-D berupa Effect (E).  Suatu sistem keyakinan yang baru dan efektif terdiri dari penggantian pemikiran yang tidak sehat dengan pemikiran yang sehat. Jika berhasil melakukan hal tersebut maka akan timbul new feeling (F) yaitu satu perangkat perasaan yang baru. Membantu klien untuk mengembangkan kesadaran diri yang lebih baik tentang reaksi emosional mereka terhadap risiko. Ini dapat dilakukan melalui teknik mindfulness atau meditasi yang membantu klien untuk tetap tenang dan fokus saat menghadapi situasi berisiko. Kemudian melakukan diskusi dan Refleksi Pengalaman untuk mengajak klien untuk merefleksikan pengalaman mereka dalam mengambil risiko, apa yang mereka pelajari, dan bagaimana perasaan mereka setelah melakukannya. Diskusi ini membantu klien untuk melihat pengambilan risiko sebagai pengalaman belajar yang berharga.
            `,
        ])->statements()->createMany([
            ["text" => "Saya takut dimarahi guru saya jika saya salah dalam menyelesaikan tugas sekolah", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Saya lebih memilih untuk menghindari teman yang suka mencemooh orang lain, daripada harus menegurnya dan mendapatkan cemoohannya juga", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Saat tes masuk perguruan Tinggi nanti, saya akan mencoba mendaftar di perguruan tinggi favorit saya, meskipun saya tau kesempatannya sangat sedikit", "favorable" => "fav","instrumen_id" => $inst->id],
            ["text" => "Saat ingin membeli gagdet baru, saya akan memberanikan diri untuk bilang ke orangtua tidak masalah jika nanti orangtua menolak yang penting saya sudah berusaha meminta", "favorable" => "fav","instrumen_id" => $inst->id],
            ["text" => "Saya tidak akan mundur jika harus bertanding pada olimpiade dengan sekolah lain yang lebih favorit. Kalah menang itu sudah biasa.", "favorable" => "fav","instrumen_id" => $inst->id],
        ]);

        $inst->sub_criterias()->create([
            "text" => "Long-range hedonism",
            "description" => "Pribadi yang sehat mencari ketenangan hidup untuk saat sekarang dan masa depan dan itu tidak didapatkan secara instan. Orang yang mampu menyesuaikan diri dengan baik cenderung mencari kesenangan saat ini dan masa depan dan tidak sering menerima penderitaan di masa depan untuk keuntungan saat ini. Mereka bersifat hedonistik, yaitu mencari kebahagiaan dan menghindari rasa sakit, namun mereka berasumsi bahwa mereka mungkin akan hidup beberapa tahun dan karena itu mereka sebaiknya memikirkan hari ini dan hari esok, dan tidak memikirkan hal itu terobsesi dengan kepuasan langsung.
            ",
            "solutions" => "Dalam konteks REBT, solusi yang ditawarkan jika long-range hedonism rendah, dapat melibatkan langkah-langkah berikut:
            a.	Menerapkan Model ABC:
            Menurut Ellis (2002) ada tiga pilar yang membangun tingkah laku individu, yaitu Antecedent event atau Adversities (A), Belief (B), dan Emotional consequence (C). Kerangka pilar ini yang kemudian dikenal dengan konsep atau teori ABC untuk memahami hubungan antara peristiwa, keyakinan, dan konsekuensi emosional. Gunakan model ABC (A = peristiwa, B = keyakinan, C = konsekuensi) untuk memahami hubungan antara peristiwa, keyakinan, dan konsekuensi emosional. Misalkan mengidentifikasi peristiwa yang memicu ketakutan, keyakinan irasional yang terkait, konsekuensi emosional, dan kemudian mendisputasi keyakinan tersebut untuk menghasilkan efek yang lebih rasional dan adaptif.

            b.	Disputing (D) 
            Menurut Corey (2009) merupakan penerapan prinsip-prinsip ilmiah untuk menentang pikiran yang cenderung mengalahkan diri sendiri dan kepercayaan-kepercayaan irasional yang dimiliki individu. Terdapat tiga bagian dalam tahap disputing, yaitu sebagai berikut:
            1)	Detecting irrational beliefs :  Mengenali dan menantang keyakinan irrasional yang mungkin mendorong pengejaran kesenangan jangka pendek dengan mengorbankan tujuan jangka panjang. Ini melibatkan memeriksa pemikiran dan asumsi yang mendasari yang berkontribusi pada prioritas gratifikasi segera.
            2)	Debating irrational beliefs : Diskusikan dengan klien bagaimana pemikiran irasional ini mempengaruhi hidup mereka dalam jangka panjang. Misalnya, hindari pengambilan risiko karena takut gagal mungkin menghalangi mereka mencapai tujuan jangka panjang atau mengembangkan diri.
            3)	Discriminating irrational beliefs : Kemudian yang terakhir adalah konseli belajar membedakan kepercayaan irasional (self-defeating) dan kepercayaan rasional (self-helping). Dalam sesi konseling dengan pendekatan REBT, seorang konselor dapat membantu individu mengidentifikasi keyakinan irasional dan menggantinya dengan keyakinan yang lebih rasional. Misalnya, mengklarifikasi dan menetapkan tujuan jangka panjang yang bermakna yang sejalan dengan nilai-nilai dan aspirasi pribadi. Ini dapat memberikan rasa tujuan dan motivasi untuk bekerja menuju tujuan-tujuan tersebut, bahkan ketika dihadapkan pada godaan jangka pendek.
            c.	 Effect (E)
            Menurut Corey (2009) hasil akhir dari proses A-B-C-D berupa Effect (E).  Suatu sistem keyakinan yang baru dan efektif terdiri dari penggantian pemikiran yang tidak sehat dengan pemikiran yang sehat. Jika berhasil melakukan hal tersebut maka akan timbul new feeling (F) yaitu satu perangkat perasaan yang baru. Dalam konteks REBT, hedonisme jangka panjang dapat dilihat sebagai hambatan potensial terhadap penerimaan diri dan kesejahteraan secara keseluruhan. Ini melibatkan memprioritaskan kesenangan segera daripada kebahagiaan dan pemenuhan jangka panjang. REBT menekankan pentingnya menjaga keseimbangan antara kesenangan jangka pendek dengan tujuan dan kesejahteraan jangka panjang. Ini mendorong individu untuk mempertimbangkan baik hari ini maupun masa depan saat membuat keputusan, dengan memperhatikan perspektif dan konsekuensi jangka panjang dari tindakan mereka.
            ",
        ])->statements()->createMany([
            ["text" => "Saya akan mengasah dan melatih hobi saya dari sekarang siap atau akan berguna untuk bekal di masa yang akan datang", "favorable" => "fav","instrumen_id" => $inst->id],
            ["text" => "Saya tidak mau ambil pusing memikirkan cara untuk lulus nanti yang penting sekarang saya bisa mendapatkan nilai yang baik dengan cara apapun.", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Saya akan membuat contekan sebelum ulangan dimulai agar mendapatkan nilai yang bagus sehingga saya tidak ada kena remidi", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Saya paham jika saya harus mulai belajar dari sekarang untuk mempermudah saya masuk perguruan tinggi", "favorable" => "fav","instrumen_id" => $inst->id],
        ]);

        $inst->sub_criterias()->create([
            "text" => "Self-responsibility for own emotional disturbance",
            "description" => "Pribadi yang sehat cenderung bertanggung jawab atas kekacauan yang mereka buat daripada bertahan dengan tuduhan dan hujatan orang lain.",
            "solutions" => "Dalam konteks REBT, solusi yang ditawarkan jika Self-responsibility for own emotional disturbance rendah, dapat melibatkan langkah-langkah berikut:
                a.	Menerapkan Model ABC:
                Menurut Ellis (2002) ada tiga pilar yang membangun tingkah laku individu, yaitu Antecedent event atau Adversities (A), Belief (B), dan Emotional consequence (C). Kerangka pilar ini yang kemudian dikenal dengan konsep atau teori ABC untuk memahami hubungan antara peristiwa, keyakinan, dan konsekuensi emosional. Gunakan model ABC (A = peristiwa, B = keyakinan, C = konsekuensi) untuk memahami hubungan antara peristiwa, keyakinan, dan konsekuensi emosional.
                b.	Disputing (D) 
                Menurut Corey (2009) merupakan penerapan prinsip-prinsip ilmiah untuk menentang pikiran yang cenderung mengalahkan diri sendiri dan kepercayaan-kepercayaan irasional yang dimiliki individu. Terdapat tiga bagian dalam tahap disputing, yaitu sebagai berikut:
                1)	Detecting irrational beliefs :  Mengakui bahwa tanggung jawab atas respon emosional kita terletak pada cara kita merespons dan menghadapi situasi, bukan sepenuhnya ditentukan oleh perilaku orang lain. Menghindari kecenderungan untuk menyalahkan orang lain atas perasaan yang kita alami, dan menyadari bahwa perasaan kita adalah hasil dari cara kita merespons dan menginterpretasikan situasi.
                2)	Debating irrational beliefs : Ajarkan klien bahwa emosi mereka berasal dari keyakinan dan interpretasi mereka tentang peristiwa, bukan dari peristiwa itu sendiri. Gunakan contoh konkret untuk memperjelas konsep tersebut pada konseli.
                3)	Discriminating irrational beliefs : Kemudian yang terakhir adalah konseli belajar membedakan kepercayaan irasional (self-defeating) dan kepercayaan rasional (self-helping). Dalam sesi konseling dengan pendekatan REBT, seorang konselor dapat membantu individu mengidentifikasi keyakinan irasional dan menggantinya dengan keyakinan yang lebih rasional. Mengembangkan keterampilan pengaturan emosi yang memungkinkan kita untuk mengelola perasaan negatif dan mengubahnya menjadi perasaan yang lebih positif dan sehat.
                c.	 Effect (E)
                Menurut Corey (2009) hasil akhir dari proses A-B-C-D berupa Effect (E).  Suatu sistem keyakinan yang baru dan efektif terdiri dari penggantian pemikiran yang tidak sehat dengan pemikiran yang sehat. Jika berhasil melakukan hal tersebut maka akan timbul new feeling (F) yaitu satu perangkat perasaan yang baru. Dalam konteks REBT, Mengadopsi keyakinan baru yang lebih adaptif dan membantu kita mengelola emosi dengan lebih baik yang kemudian bisa mengembangkan keyakinan yang memperkuat tanggung jawab.
                ",
        ])->statements()->createMany([
            ["text" => "Saya akan meminta maaf jika saya salah sangka kepada teman saya", "favorable" => "fav","instrumen_id" => $inst->id],
            ["text" => "Saya akan mengikuti program remidial karena nilai saya di bawah KKM", "favorable" => "fav","instrumen_id" => $inst->id],
            ["text" => "Jika saya melanggar tata tertib sekolah, saya lebih memilih menyembunyikannya daripada saya harus mendapatkan sanksi yang telah ditentukan pihak sekolah", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Saya akan sangat marah jika ada orang lain yang meghina saya", "favorable" => "unfav","instrumen_id" => $inst->id],
            ["text" => "Saya bisa menahan amarah saya saat orang lain menyindir atau memaki saya", "favorable" => "fav","instrumen_id" => $inst->id],
        ]);


        $inst->answer()->createMany([
            [
                "text" => "Sangat Setuju",
                "point_fav" => 4,
                "point_unfav" => 1,
            ],
            [
                "text" => "Setuju",
                "point_fav" => 3,
                "point_unfav" => 2,
            ],
            [
                "text" => "Tidak Setuju",
                "point_fav" => 2,
                "point_unfav" => 3,
            ],
            [
                "text" => "Sangat Tidak Setuju",
                "point_fav" => 1,
                "point_unfav" => 4,
            ],
        ]);

        $gp = Group::create([
            "name" => "XI RPL 1",
            "description" => fake()->sentence(2),
            "code" => "PASTIBISA"
        ]);

        $gp->instrumens()->sync($inst->id);

        User::where("email", "user@gmail.com")->first()->groups()->sync($gp->id);
    }
}
