<!DOCTYPE html>
<html lang="tr">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa | Paylaştıkça </title>
    <link rel ="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/0f83e2d45e.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">

<link rel="stylesheet" href="owl/owl.carousel.min.css">
<link rel="stylesheet" href="owl/owl.theme.default.min.css">
</head>
<body>

    <section id="menu">
        <div id="logo"> Paylaştıkça</div>
        <nav>
            <a href=""><i class="fa-solid fa-house ikon"></i>Anasayfa</a>
            <a href=""><i class="fa-solid fa-info ikon"></i>Hakkımızda</a>
            <a href=""><i class="fa-solid fa-graduation-cap ikon"></i>Eğitimler</a>
            <a href=""><i class="fa-solid fa-user-plus ikon"></i>Ekip</a>
            <a href=""><i class="fa-solid fa-pen ikon"></i>İletişim</a>
        </nav>

    </section>
    <section id="anasayfa">
        <div id="black">

        </div>
    </section>
    <div id="icerik">
        <h2>Paylaştıkça</h2>
        <hr width=300 align=left>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, a accusantium. Aliquid tempora sint, aperiam, vero veritatis debitis quae eum dolores nisi soluta quaerat reprehenderit. Animi molestias eius libero illum.
        </p>
    </div>
    <section id="hakkimizda">
        <h3>Hakkımızda</h3>
        <div class="container">
            <div id="sol">
                <h5 id="h5sol">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, nobis. Odio, cumque. 

                </h5>
            </div>
                <div id="sag">
                    <span>L</span>
                    <p id="psag">
                        orem ipsum dolor sit amet consectetur adipisicing elit. Fugiat maxime ratione earum doloribus possimus eius totam ab beatae, dolorem minima consequuntur, delectus voluptatem id modi quis rem! Impedit, beatae perferendis?

                    </p>
                </div>
                <img src="img/about.jpg" alt="" 
                class="img-fluid mt100">
                <p id="pson">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum laudantium iste dolorem, dolore doloremque voluptas nihil recusandae accusantium praesentium iure repellat! Provident facere quas cum tempora nulla aut iste rerum?
                </p>
            
        </div>
    </section>
    <section id="egitimler">
        <div class="container">
            <h3>Eğitimler</h3>
            <div class="owl-carousel owl-theme">
                <div class="card item" data-merge=1.5>
                    <img src="img/r2.jpg" alt="" 
                    class="img-fluid">
                    <h5 class="baslikcard">HTML5 ve CSS3 Eğitimi</h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>

                </div>
                <div class="card item" data-merge=1.5>
                    <img src="img/r2.jpg" alt="" 
                    class="img-fluid">
                    <h5 class="baslikcard">HTML5 ve CSS3 Eğitimi</h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>

                </div>
                <div class="card item" data-merge=1.5>
                    <img src="img/r2.jpg" alt="" 
                    class="img-fluid">
                    <h5 class="baslikcard">HTML5 ve CSS3 Eğitimi</h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>

                </div>
                
            </div>

        </div>
    </section>
    <section id="ekip">
        <div class="container">
            <h3 id="ekiph3">Ekip</h3>
            <div class="sutun-sol-sag"> 
                <img src="img/ekip1.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim"> Hakan Çelik </h4>
                <p class="ekipp">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.

                </p>
                <div class="ekip-ikon">
                    <a href="#"><i class="fa-brands fa-facebook social"></i></a>
                    <a href="#"><i class="fa-brands fa-google-plus-g social"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter social"></i></a>

                </div>
            </div>

            <div class="sutun"> 
                <img src="img/ekip2.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim"> Ayşe Gören </h4>
                <p class="ekipp">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.

                </p>
                <div class="ekip-ikon">
                    <a href="#"><i class="fa-brands fa-facebook social"></i></a>
                    <a href="#"><i class="fa-brands fa-google-plus-g social"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter social"></i></a>

                </div>
            </div>

            <div class="sutun-sol-sag"> 
                <img src="img/ekip3.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim"> Merve Temur </h4>
                <p class="ekipp">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.

                </p>
                <div class="ekip-ikon">
                    <a href="#"><i class="fa-brands fa-facebook social"></i></a>
                    <a href="#"><i class="fa-brands fa-google-plus-g social"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter social"></i></a>

                </div>
            </div>
        </div>

    </section>
    <section id="iletisim">
        <div class="container">
            <h3 id="h3iletisim">İletişim</h3>

            <form action="index.php" method="post">
            <div id="iletisimopak">
                <div id="formgroup">
                    <div id="solform">
                        <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                        <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                    </div>
                    <div id="sagform">
                        <input type="email" name="mail" placeholder="Email Adresiniz" required class="form-control">
                        <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                    </div>
                    <textarea
                    name="mesaj" id="" cols="30" placeholder="Mesaj Giriniz"
                    rows="10" required class="form-control"
                    ></textarea>
                    <input type="submit" value="Gönder">
                </div>
                <div id="adres">
                    <h4 id="adresbaslik">Adres:</h4>
                    <p class="adresp">Mehmet Akif Ersoy Mah.</p>
                    <p class="adresp">Akyıldız Caddesi</p>
                    <p class="adresp">Oğuz Bey Sokak No:123</p>
                    <p class="adresp">0212 389 99 99</p>
                    <p class="adresp">Email: paylastikca@paylastikca.com</p>
                </div>
            </div>
        </form>


            <footer>
                <div id="copyright">2023 Tüm Hakları Saklıdır
                </div>
                <div id="socialfooter">
                    <a href="#"><i class="fa-brands fa-facebook social"></i></a>
                    <a href="#"><i class="fa-brands fa-google-plus-g social"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter social"></i></a>

                </div>
                <a href="#menu"><i class="fa-solid fa-angle-up" id=></i></a>
            </footer>

        </div>
    </section>


    <script
  src="https://code.jquery.com/jquery-3.7.0.slim.min.js"
  integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE="
  crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/script.js"></script>
</body>
</html>
<?php

include("baglanti.php");

if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
{
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];

    $ekle="INSERT INTO iletisim ( adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";
    if($baglan->query($ekle)===TRUE)
    {
        echo "<script>alert('Mesajınız Başarı ile Gönderilmiştir.')</script>";
    }
    else{
        echo "<script>alert('Mesajınız Gönderilirken Bir Hata Oluştu.')</script>";
    }

}

?>