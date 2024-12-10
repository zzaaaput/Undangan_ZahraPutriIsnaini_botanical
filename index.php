<?php
$background_image = "path/to/background.jpg";
$logo = "assets/img/logo-transparan.png";
$logo_navigasi = [  "assets/img/logo-love.png",
                    "assets/img/logo-image.png",
                    "assets/img/logo-calender.png",
                    "assets/img/logo-location.png",
                    "assets/img/logo-message.png" ];
$couple = "Anna & Zizan";
$nama_tamu = "Zahra";
$pengantin = [ 
                [
                    ["namaPanggilanPria" => "Zizan"], 
                    ["namaPanggilanWanta" => "Anna"]
                ],
                [
                    ["namaPengantinPria" => "Muhammad Alaska Azizan Vincent"], 
                    ["namaPengantinWanta" => "Anna Azalea Putri Abivadya"]
                ],
                [
                    ["keluargaPria" => "Putra Keempat Dari:<br>Bapak M.Aiden Vincent dan Ibu Aisy Queenzha"], 
                    ["keluargaWanita" => "Putri Kedua Dari:<br>Bapak M.Bagaskara Abivadya dan Ibu Azalia Steffani"]
                ],
                [
                    ["daerahAsalPria" => "Lombok"], 
                    ["daerahAsalWanita" => "Jakarta"]
                ],
                [
                    ["instagramPria" => "@zizan.vincent"], 
                    ["instagramWanita" => "@annaa.abivadya"]
                ]
    ];
$waktu_pernikahan = [
                        [   ["waktu" => "Jumat, 6 November 2026"], 
                            ["jam" => "21:00 WIB - 23:00 WIB"], 
                            ["lokasi" => "Lokasi di Jakarta"]
                        ],
                        [   ["waktu" => "Sabtu, 7 November 2026"], 
                            ["jam" => "07:00 WIB - 22:00 WIB"], 
                            ["lokasi" => "Lokasi di Jakarta"]
                        ],
                        ["tanggal" => "06 . 11 . 2026"],
                        ["hari" => "Sabtu, 7 November 2026"]  
                    ];
$wedding_photos = ["assets/img/moment/16a.jpeg", 
                    "assets/img/moment/18a.jpeg", 
                    "assets/img/moment/19a.jpeg",
                    "assets/img/moment/1a.jpeg",
                    "assets/img/moment/25a.jpeg",
                    "assets/img/moment/26a.jpeg",
                    "assets/img/moment/24a.jpeg",
                    "assets/img/moment/2a.jpeg",
                    "assets/img/moment/31a.jpeg",
                    "assets/img/moment/22a.jpeg",
                    "assets/img/moment/12a.jpeg",
                    "assets/img/moment/17-a.jpeg",
                    "assets/img/moment/31a.jpeg",
                    "assets/img/moment/6a.jpeg"];
$wedding_video = [
                    "assets/video/video.mp4", 
                    "https://www.youtube.com/embed/FBx38gbMPco?si=L5oO9CExZEGxnzW6"];
$wedding_moment = [ ["Februari 2026", "Bertemu"],
                    ["Juli 2026", "Ta'aruf"],
                    ["September 2026", "Lamaran"],
                    ["November 2026", "Menikah"]    ];
$schedule = [   ["07:10", "Pembukaan"],
                ["07:30", "Kirab Pengantin"],
                ["10:00", "Sambutan kedua mempelai"],
                ["10:20", "Pembacaan doa"],
                ["10:30", "Pemberian Ucapan Selamat"],
                ["19:30", "Hiburan"],
                ["20:30", "Penutupan"] ];
$tamu_khusus = [    ["No", "Nama", "Jabatan", "Identitas"],
                    ["Email", "Alamat"],
                    ["1", "Sebastian Eart Sanders", "Owner Sanders Shop", "sebastian@gmail.com", "JL.Anggur"],
                    ["2", "Cakra Darius Drax", "PT Darius Company", "cakra.drax@gmail.com", "JL.Mangga"],
                    ["3", "Muhammad Raffasya Aidtya", "Keluarga", "raffa66@gmail.com", "JL.Mentimun"],
                    ["4", "Naufal Dary Abiyyu", "Sepupu", "abiyyu.naufal@gmail.com", "JL.Sirsak"],
                    ["5", "Healvito Revan Abraham", "Sepupu", "abraham@gmail.com", "JL.Jeruk"]  ];
$location = ["https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.814898970637!2d106.81356287370099!3d-6.288044661544442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1f7922dadfb%3A0x98dfd50aed23cd0e!2sTaman%20Kajoe!5e0!3m2!1sid!2sid!4v1725775282282!5m2!1sid!2sid"];
$RSVP = [   ["Nama :"],
            ["kehadiran :", "Saya akan datang", "Maaf, saya tidak bisa hadir"],
            ["Jumlah Tamu :"],
            ["Souvenir :", "Foto both", "Bingkisan", "Alat Shalat", "Voucher"],
            ["Acara :", "Akad", "Resepsi", "Keduanya"]];
$transfer = [   ["BNI", "BCA"],
                ["6544784968", "0064256711"],
                ["Zahra Putri", "Zahra Putri"]];
$message = [["Nama :", "Masukkan nama"],
            ["Pesan :", "Sampaikan pesan kepada pengantin"]];
$audio = [  ["iconOn" => "assets/audio/img/audioOn.png"],
            ["iconOff" => "assets/audio/img/audioOff.png"],
            ["audio" => "assets/audio/audio.mp3"]
        ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web-undangan-35-botanical</title>
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="website icon" type="png" href="<?= $logo?>"/>
</head>
<body>
<!--cover-->
<!--tampilan halaman-->
<section id="cover" class="cover">
        <div id="crd-Cover" class="crd-Cover">
            <div class="header">
                <h3 class="cl-7">The Wedding Of</h3>
                <p class="cl-7"><?= $couple?></p>
                <h2 class="cl-7"><?= $waktu_pernikahan[2]["tanggal"]?></h2>
            </div>
            <div class="tamu">
                <p class="cl-7">Kepada Bapak/Ibu/Saudara/i</p>
                <h3 class="cl-7"><?= $nama_tamu?></h3>
                <div class="line">
                    <button class="btn cl-1 bg-6" onclick="openInvitation()">
                        <section class="open" >
                            Open Invitation
                        </section>
                </div>
            </button>
            </div>
        </div>
</section>
<main id="appearance" class="appearance bg-3">
<!--navigasi-->
    <div id="nav">
        <ul>
            <a href="#love"><li><img src="<?= $logo_navigasi[0] ?>"></li></a>
            <a href="#moment"><li><img src="<?= $logo_navigasi[1] ?>"></li></a>
            <a href="#calender"><li><img src="<?= $logo_navigasi[2] ?>"></li></a>
            <a href="#location"><li><img src="<?= $logo_navigasi[3] ?>"></li></a>
            <a href="#rsvp"><li><img src="<?= $logo_navigasi[4] ?>"></li></a>
        </ul>
    </div>
<!--quran-->
    <section class="quote">
            <p class="cl-6"> 
                وَمِنْ اٰيٰتِهٖٓ اَنْ خَلَقَ لَكُمْ مِّنْ اَنْفُسِكُمْ اَزْوَاجًا لِّتَسْكُنُوْٓا اِلَيْهَا وَجَعَلَ بَيْنَكُمْ مَّوَدَّةً وَّرَحْمَةًۗ اِنَّ فِيْ ذٰلِكَ لَاٰيٰتٍ لِّقَوْمٍ يَّتَفَكَّرُوْنَ ۝٢١
                <br><br>"Dan di antara tanda-tanda (kebesaran)-Nya ialah bahwa Dia menciptakan pasangan-pasangan untukmu dari (jenis) dirimu sendiri
                agar kamu merasa tenteram kepadanya. Dia menjadikan di antaramu rasa cinta dan kasih sayang. Sesungguhnya pada yang demikian itu
                benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kamu yang berpikir." <br>(QS. Ar-Rum: 21)
                </p>
    </section>
<!--couple-->
    <center>
    <section id="love" class="love">
        <div class="opening">
            <img src="assets/img/hiasan-gantung.png" class="hs2">
            <div class="profile-details"></div>
                <h1 data-aos="zoom-in" class="cl-6"><?= $couple?></h1>
                <h2 data-aos="fade-up" class="cl-7">Assalamu’alaikum Warahmatullahi Wabarakatuh</h2>
                <P data-aos="fade-up" class="cl-00">Maha suci Allah SWT yang telah menciptakan makhluk-Nya berpasang-pasangan.
                    Ya Allah, perkenankanlah kami merangkai kasih sayang yang Kau ciptakan di antara putra-putri kami:</P>
        </div>
        <div class="couple">
            <div class="profile">
                <div data-aos="fade-right" class="profile-image">
                    <img class="gallery" src="assets/img/groom.png" alt="zizan">
                </div>
                <div class="profile-details">
                    <h2 data-aos="fade-zoom-in"><?= $pengantin[0][0]["namaPanggilanPria"]?></h2>
                    <h3 data-aos="zoom-in-up"><?= $pengantin[1][0]["namaPengantinPria"]?></h3>
                    <p data-aos="fade-up"><?= $pengantin[2][0]["keluargaPria"]?></p>
                    <p data-aos="fade-up"><i class="location">📍</i><?= $pengantin[3][0]["daerahAsalPria"]?></p>
                    <div data-aos="zoom-in-up" class="social-media">
                        <a href="https://www.instagram.com/zannnsrn?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="instagram"><?= $pengantin[4][0]["instagramPria"]?></i></a>
                    </div>
                </div>
            </div>
            <div class="profile">
                <div data-aos="fade-left" data-aos-duration="200" class="profile-image">
                    <img class="gallery" src="assets/img/bride.png" alt="Anna">
                </div>
                <div class="profile-details">
                    <h2 data-aos="fade-zoom-in"><?= $pengantin[0][1]["namaPanggilanWanta"]?></h2>
                    <h3 data-aos="zoom-in-up"><?= $pengantin[1][1]["namaPengantinWanta"]?></h3>
                    <p data-aos="fade-up"><?= $pengantin[2][1]["keluargaWanita"]?></p>
                    <p data-aos="fade-up"><i class="location">📍</i><?= $pengantin[3][1]["daerahAsalWanita"]?></p>
                    <div data-aos="zoom-in-up" class="social-media">
                        <a href="https://www.instagram.com/kamila_asy_syifa/" target="_blank"><i class="instagram"><?= $pengantin[4][1]["instagramWanita"]?></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </center>
<!--moment-->
    <center>
    <div id="moment" data-aos="zoom-in" class="moment cl-5 bg-15">
        <h1>Moment</h1>
        <div class="image">
            <img data-aos="fade-up" class="gallery-item" src="<?php echo $wedding_photos[0] ?>" alt="foto-1">
            <img data-aos="fade-up" class="gallery-item" src="<?php echo $wedding_photos[1] ?>" alt="foto-2">
            <img data-aos="fade-up" class="gallery-item" src="<?php echo $wedding_photos[2] ?>" alt="foto-3">
            <img data-aos="fade-up" class="gallery-item" src="<?= $wedding_photos[3] ?>" alt="foto-4">
            <img data-aos="fade-up" class="gallery-item" src="<?= $wedding_photos[4] ?>" alt="foto-5">
            <img data-aos="fade-up" class="gallery-item" src="<?= $wedding_photos[5] ?>" alt="foto-6">
            <img data-aos="fade-up" class="gallery-item" src="<?= $wedding_photos[6] ?>" alt="foto-7">
            <img data-aos="fade-up" class="gallery-item" src="<?= $wedding_photos[7] ?>" alt="foto-8">
            <img data-aos="fade-up" class="gallery-item" src="<?= $wedding_photos[8] ?>" alt="foto-9">
            <img data-aos="fade-up" class="gallery-item" src="<?= $wedding_photos[9] ?>" alt="foto-10">
            <img data-aos="fade-up" class="gallery-item" src="<?= $wedding_photos[10] ?>" alt="foto-11">
            <img data-aos="fade-up" class="gallery-item" src="<?= $wedding_photos[11] ?>" alt="foto-12">
            <img data-aos="fade-up" class="gallery-item" src="<?= $wedding_photos[12] ?>" alt="foto-13">
            <img data-aos="fade-up" class="gallery-item" src="<?= $wedding_photos[13] ?>" alt="foto-14">
        </div>
    </div>
    </center>
<!--video internal-->
    <center>
    <div class="video bg-15">
        <video controls src="<?= $wedding_video[0] ?>" type="video/mp4"></video>
    </div>
    </center>
<!--jadwal-->
    <div id="calender" class="bg-2">
    <center>
        <section class="timetable">
            <h1 class="cl-7" data-aos="zoom-in">Acara Pernikahan</h1>
            <p data-aos="fade-up" data-aos-duration="700" class="cl-7">
                Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila, Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan do'a restunya, kami ucapkan terima kasih.
            </p>

            <div class="crd-timetable">
                <div class="jadwal bg-0 cl-7" data-aos="zoom-in" data-aos-duration="700">
                    <h2 data-aos="zoom-in" class="cl-7">Akad Nikah</h2>
                    <div class="timetable-details">
                        <p class="cl-6"><i class="fas fa-calendar-alt "></i><?= $waktu_pernikahan[0][0]["waktu"]?></p>
                        <p class="cl-6"><i class="fas fa-clock"></i><?= $waktu_pernikahan[0][1]["jam"]?></p>
                        <p class="cl-6"><i class="fas fa-map-marker-alt"></i><?= $waktu_pernikahan[0][2]["lokasi"]?></p>
                    </div>
                    <button class="save-calendar bg-6 cl-0" onclick="addToGoogleCalendar('Akad Nikah', '2026-11-06T09:00:00', '2026-11-06T11:00:00', 'Lokasi di Jakarta')">Tambahkan ke Kalender</button>
                </div>
                <br>
                <div class="jadwal bg-0">
                    <h2 data-aos="zoom-in" class="cl-7">Resepsi</h2>
                    <div class="timetable-details">
                        <p class="cl-6"><i class="fas fa-calendar-alt "></i><?= $waktu_pernikahan[1][0]["waktu"]?></p>
                        <p class="cl-6"><i class="fas fa-clock"></i><?= $waktu_pernikahan[1][1]["jam"]?></p>
                        <p class="cl-6"><i class="fas fa-map-marker-alt"></i><?= $waktu_pernikahan[1][2]["lokasi"]?></p>
                    </div>
                    <button class="save-calendar bg-6 cl-0" onclick="addToGoogleCalendar('Resepsi Pernikahan', '2026-11-07T19:00:00', '2026-11-07T22:00:00', 'Lokasi di Jakarta')">Tambahkan ke Kalender</button>
                </div>
            </div>
        </section>
<!--jam-->
        <div class="crd-countdown"> 
            <div class="countdown-text">
                <h1 data-aos="fade-up-right" class="cl-7">Waktu Pernikahan</h1>
                <div class="countdown">
                    <div class="countdown-box bg-0 cl-11">
                        <span id="days"></span>
                        <p>Hari</p>
                    </div>
                    <div class="countdown-box bg-0 cl-11">
                        <span id="hours"></span>
                        <p>Jam</p>
                    </div>
                    <div class="countdown-box bg-0 cl-11">
                        <span id="minutes"></span>
                        <p>Menit</p>
                    </div>
                    <div class="countdown-box bg-0 cl-11">
                        <span id="seconds"></span>
                        <p>Detik</p>
                    </div>
                </div>
                <h2 data-aos="fade-up-left" class="cl-7"><?= $waktu_pernikahan[3]["hari"]?></h2>
            </div>
        </div>
<!--maps-->
        <div class="location" id="location">
            <p data-aos="fade-up-right" class="cl-7">Lokasi</p>
            <iframe data-aos="flip-up" data-aos-duration="700" src="<?= $location[0] ?>" 
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </center>
    </div>
<!--moment berharga-->
    <div class="slider">
        <div class="slides">
            <!-- Slide 1 -->
            <div class="slide">
                <img src="assets/img/moment/21.jpeg" alt="Moment 1">
                <div class="text-content">
                    <h2 class="cl-10"><?= $wedding_moment[0][0]?></h2>
                    <p class="cl-0"><?= $wedding_moment[0][1]?></p>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="slide">
                <img src="assets/img/moment/13.jpeg" alt="Moment 2">
                <div class="text-content">
                    <h2 class="cl-10"><?= $wedding_moment[1][0]?></h2>
                    <p class="cl-0"><?= $wedding_moment[1][1]?></p>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="slide">
                <img src="assets/img/moment/4.jpeg" alt="Moment 3">
                <div class="text-content">
                    <h2 class="cl-10"><?= $wedding_moment[2][0]?></h2>
                    <p class="cl-0"><?= $wedding_moment[2][1]?></p>
                </div>
            </div>
            <!-- Slide 4 -->
            <div class="slide">
                <img src="assets/img/moment/29.jpeg" alt="Moment 4">
                <div class="text-content">
                    <h2 class="cl-10"><?= $wedding_moment[3][0]?></h2>
                    <p class="cl-0"><?= $wedding_moment[3][1]?></p>
                </div>
            </div>
            <!-- Add more slides as needed -->
        </div>
    </div>
<!--video eksternal-->
    <center>
        <div class="video bg-15">
            <iframe src="<?= $wedding_video[1] ?>" title="video youtube" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </center>
<!--kehadiran-->
    <center>
    <div id="rsvp">
<!--roundown-->
            <div id="crd-table-rwn">
                <h2 class="cl-7">Susunan Acara</h2>
                <div class="table-rwn">
                    <table>
                      <tr><th>Waktu</th><th>Acara</th></tr>
                      <tr><td><?= $schedule[0][0]?></td><td><?= $schedule[0][1]?></td></tr>
                      <tr><td><?= $schedule[1][0]?></td><td><?= $schedule[1][1]?></td></tr>
                      <tr><td><?= $schedule[2][0]?></td><td><?= $schedule[2][1]?></td></tr>
                      <tr><td><?= $schedule[3][0]?></td><td><?= $schedule[3][1]?></td></tr>
                      <tr><td><?= $schedule[4][0]?></td><td><?= $schedule[4][1]?></td></tr>
                      <tr><td><?= $schedule[5][0]?></td><td><?= $schedule[5][1]?></td></tr>
                      <tr><td><?= $schedule[6][0]?></td><td><?= $schedule[6][1]?></td></tr>
                    </table>
                </div>
            </div>
<!--tamu spesial-->
            <section id="crd-tm-khusus">
                <section class="table-tm" data-aos="fade-up" data-aos-duration="2000">
                    <header class="tamu">
                        <h2>Tamu Khusus</h2>
                    </header>
                    <div class="table-special">
                        <table id="special-guests-table">
                            <thead>
                                <tr>
                                    <th rowspan="2"><?= $tamu_khusus[0][0]?></th>
                                    <th rowspan="2"><?= $tamu_khusus[0][1]?></th>
                                    <th rowspan="2"><?= $tamu_khusus[0][2]?></th>
                                    <th colspan="2"><?= $tamu_khusus[0][3]?></th>
                                </tr>
                                <tr>
                                    <th><?= $tamu_khusus[1][0]?></th>
                                    <th><?= $tamu_khusus[1][1]?></th>
                                </tr>
                            </thead>
                            <tbody id="guests-tbody">
                                <tr>
                                    <td><?= $tamu_khusus[2][0]?></td>
                                    <td><?= $tamu_khusus[2][1]?></td>
                                    <td><?= $tamu_khusus[2][2]?></td>
                                    <td><?= $tamu_khusus[2][3]?></td>
                                    <td><?= $tamu_khusus[2][4]?></td>
                                </tr>
                                <tr>
                                    <td><?= $tamu_khusus[3][0]?></td>
                                    <td><?= $tamu_khusus[3][1]?></td>
                                    <td><?= $tamu_khusus[3][2]?></td>
                                    <td><?= $tamu_khusus[3][3]?></td>
                                    <td><?= $tamu_khusus[3][4]?></td>
                                </tr>
                                <tr>
                                    <td><?= $tamu_khusus[4][0]?></td>
                                    <td><?= $tamu_khusus[4][1]?></td>
                                    <td><?= $tamu_khusus[4][2]?></td>
                                    <td><?= $tamu_khusus[4][3]?></td>
                                    <td><?= $tamu_khusus[4][4]?></td>
                                </tr>
                                <tr>
                                    <td><?= $tamu_khusus[5][0]?></td>
                                    <td><?= $tamu_khusus[5][1]?></td>
                                    <td><?= $tamu_khusus[5][2]?></td>
                                    <td><?= $tamu_khusus[5][3]?></td>`
                                    <td><?= $tamu_khusus[5][4]?></td>
                                </tr>
                                <tr>
                                    <td><?= $tamu_khusus[6][0]?></td>
                                    <td><?= $tamu_khusus[6][1]?></td>
                                    <td><?= $tamu_khusus[6][2]?></td>
                                    <td><?= $tamu_khusus[6][3]?></td>
                                    <td><?= $tamu_khusus[6][4]?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>      
            </section>
<!--rsvp-->
<div id="hadiah">
        <div class="rsvp-psn">
            <div class="crd-rsvp">
                <h2>RSVP Form</h2>
                <form id="rsvpForm">
                    <div class="form-rsvp">
                        <label for="name"><?= $RSVP[0][0]?></label>
                        <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
                    </div>

                    <div class="form-rsvp">
                        <label><?= $RSVP[1][0]?></label>
                        <div class="radio-rsvp">
                            <label>
                                <input type="radio" name="attendance" value="yes" required>
                                <?= $RSVP[1][1]?>
                            </label>
                            <label>
                                <input type="radio" name="attendance" value="no">
                                <?= $RSVP[1][2]?>
                            </label>
                        </div>
                    </div>

                    <div class="form-rsvp">
                        <label for="tamu"><?= $RSVP[2][0]?></label>
                        <input type="number" id="tamu" name="tamu" min="1" max="10" placeholder="Jumlah tamu">
                    </div>

                    <div class="form-rsvp">
                        <label><?= $RSVP[3][0]?></label>
                        <div class="checkbox-rsvp">
                            <div>
                                <input type="checkbox" name="souvenir[]" value="photoBoth">
                                <label><?= $RSVP[3][1]?></label>
                            </div>
                            <div>
                                <input type="checkbox" name="souvenir[]" value="bingkisan">
                                <label><?= $RSVP[3][2]?></label>
                            </div>
                            <div>
                                <input type="checkbox" name="souvenir[]" value="alatShalat">
                                <label><?= $RSVP[3][3]?></label>
                            </div>
                            <div>
                                <input type="checkbox" name="souvenir[]" value="voucher">
                                <label><?= $RSVP[3][4]?></label>
                            </div>
                        </div>
                    </div>

                    <div class="form-rsvp">
                        <label for="events"><?= $RSVP[4][0]?></label>
                        <select id="events" name="events">
                            <option value="ceremony"><?= $RSVP[4][1]?></option>
                            <option value="reception"><?= $RSVP[4][2]?></option>
                            <option value="both"><?= $RSVP[4][3]?></option>
                        </select>
                    </div>

                    <div class="form-rsvp">
                        <button type="submit">Kirim RSVP</button>
                    </div>
                </form>
            </div>
<!--hadiah-->
            <div class="hdh">
                <h2>Transfer</h2>
                <div class="tf">
                    <div class="crd-tf">
                        <h4><?= $transfer[0][0]?></h4>
                        <p>
                            <span id="bni"><?= $transfer[1][0]?></span>
                            <button onclick="copyToClipboard('bni')">📋 Salin</button>
                        </p>
                        <p><?= $transfer[2][0]?></p>
                        <img src="assets/img/BCA.png" alt="QR Code" class="qr-code">
                    </div>
                    <div class="crd-tf">
                        <h4><?= $transfer[0][1]?></h4>
                        <p>
                            <span id="bca"><?= $transfer[1][1]?></span>
                            <button onclick="copyToClipboard('bca')">📋 Salin</button>
                        </p>
                        <p><?= $transfer[2][1]?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- message -->
            <div class="crd-psn">
                <h2>Pesan Untuk Pengantin</h2>
                <form id="psnForm">
                    <div class="input-psn">
                        <label for="nama"><?= $message[0][0]?></label>
                        <input type="text" id="nama" placeholder="<?= $message[0][1]?>" required>
                    </div>
                    <div class="input-psn">
                        <label for="pesan"><?= $message[1][0]?></label>
                        <textarea id="pesan" rows="5" placeholder="<?= $message[1][1]?>" required></textarea>
                    </div>
                    <button type="submit">Kirim Pesan</button>
                </form>
                
                <div class="psn-box">
                    <h2>pesan </h2>
                    <div id="pesanMutiara" class="pesanMutiara">
                    </div>
                </div>
            </div>
        </div>
    </center>
<!--audio-->
<div class="audio-icon" id="audioIcon" onclick="iconImage()">
    <!-- Masukkan ikon audio sesuai keinginan, di sini menggunakan ikon speaker -->
    <img src="<?= $audio[0]["iconOn"]?>" alt="Audio On" id="iconImage">
</div>
<audio id="audioPlayer">
    <source src="<?= $audio[2]["audio"]?>" type="audio/mpeg">
</audio>
<!--done-->
    <div id="footer" class="bg-6">
    <center>
        <h1 class="cl-0">Wassalamualaikum wr.wb</h1>
        <P class="cl-0">Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i<br>
        berkenan hadir dan memberikan do'a restu kepada kami</P>
        <h2 class="cl-0">Kami yang berbahaga</h2>
        <h3 data-aos="flip-right" class="cl-10"><?= $couple?></h3>
    </center>
    </div>
    <img src="<?= $logo?>" class="hs13">

</main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>