<?php  
session_start();



if(!isset($_SESSION['login'])) {
    header("Location:login.php");
    exit;
}


require("function.php");

$product = query("SELECT * FROM product");

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beemzshoes - Jagonya sepatu</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="image/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <section>
        <nav>
            <div class="logo">
                <h1>Beemz<span>shoes</span></h1>
            </div>

            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="#Products">Products</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#Review">Review</a></li>
                <li><a href="#Services">Services</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="logout.php">logout</a></li>
            </ul>

            <div class="icons" style="z-index:9999;">
                <i class="fa-solid fa-heart"></i>
                <i class="fa-solid fa-cart-shopping"></i>
                <i class="fa-solid fa-user"></i>
            </div>

        </nav>

        <div class="main" id="Home">
            <div class="main_content">
                <div class="main_text">
                    <h1>Beemz<br><span>Collection</span></h1>
                    <p>
                        Beemzstore berdiri sejak kepepet dan akhirnya dapat berkembang hingga sejauh ini 
                        dengan menampilkan produk yang berkualitas dari generasi ke generasi dengan menjaga
                        kualitas produk itu sendiri sehingga pelanggan merasa puas dengan produk kami
                    </p>
                </div>
                <div class="main_image">
                    <img src="image/shoes.png">
                </div>
            </div>
        </div>

    </section>


    <!--Products-->

    <div class="products" id="Products">
        <h1>Products</h1>

        
        <div class="box">
        <?php foreach($product as $p): ?>
            <div class="card">
                <a href="product.php?id_product=<?= $p["id_product"]; ?>" style="text-decoration: none; color: black;">
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="image">
                    <img src="image/<?= $p["gambar"] ?>">
                </div>

                <div class="products_text">
                    <h2><?= $p["nama_product"]; ?></h2>
                    <p>
                        <?= $p["deskripsi"]; ?>
                    </p>
                    <h3><?= $p["harga"]; ?></h3>
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <a href="" class="btn">Add To Cart</a>
                </div>
                </a>
            </div>
            <?php endforeach ; ?>
            </div>

        </div>
    </div>



    <!--About-->

    <div class="about" id="About">
        
        <h1>Web<span>About</span></h1>

        <div class="about_main">
            <div class="about_image">
                <div class="about_small_image">
                    <img src="image/red_shoes1.png" onclick="functio(this)">
                    <img src="image/red_shoes2.png" onclick="functio(this)">
                    <img src="image/red_shoes3.png" onclick="functio(this)">
                    <img src="image/red_shoes4.png" onclick="functio(this)">
                </div>

                <div class="image_contaner">
                    <img src="image/red_shoes1.png" id="imagebox">
                </div>

            </div>

            <div class="about_text">
                <p>
                    Web ini dibuat untuk memudahkan para pelanggan setia dari Beemzshoes untuk berbelanja dan melihat produk sepatu yang tersedia dengan banyak promo - promo menarik terntunya. 
                    Disini kami berusaha menjaga kepuasan dan kenyamanan pelanggan tentunya semoga para pelanggan juga puas dengan pelayanan kami semoga support para pelanggan terus menjadi semangat kami
                    agar menjadi lebih baik dan meningkatkan pelayanan dari store kami. Web ini juga bertujuan agar Beemzshoes dapat dilihat dan diakses ke penjuru dunia yang sekarang dengan mudah dapat 
                    diakses melalui internet. Dengan ini Web store kami dibuat untuk kenyamanan dan mempermudaah para pelanggan setia Beemzshoes untuk berbelanja. Terimakasih telah mengunjungi Web store kami.
                    Kepuasan anda adalah prioritas kami.
                </p>
            </div>

        </div>

        <a href="#Products" class="about_btn">Shop Now</a>

        <script>
            function functio(small){
                var full = document.getElementById("imagebox")
                full.src = small.src
            }
        </script>
        
    </div>



    <!--Review-->

    <div class="review" id="Review">
        <h1>Customer's<span>review</span></h1>
        
        <div class="review_box">
            <div class="review_card">
                <div class="card_top">
                    <div class="profile">

                        <div class="profile_image">
                            <img src="image/girl_dp1.jpg">
                        </div>

                        <div class="name">
                            <strong>Kudileee</strong>

                            <div class="like">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="comment">
                    <p>
                        Suka banget sama toko sepatu yang satu ini 
                        karena memiliki berbagai produk yang bagus 
                        dan tentunya berkualitas
                    </p>
                </div>
            </div>   

            <div class="review_card">
                <div class="card_top">
                    <div class="profile">

                        <div class="profile_image">
                            <img src="image/man_dp1.jpg">
                        </div>

                        <div class="name">
                            <strong>Lee Haechan</strong>

                            <div class="like">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="comment">
                    <p>
                        Sepatu yang bagus dengan harga yang murah 
                        tetapi harga tidak murahan doooong semoga 
                        segera ada update produk terbaru lagipokona mah well
                    </p>
                </div>
            </div>   

            <div class="review_card">
                <div class="card_top">
                    <div class="profile">

                        <div class="profile_image">
                            <img src="image/man_dp2.jpg">
                        </div>

                        <div class="name">
                            <strong> Guan Heng Hendery</strong>

                            <div class="like">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <div class="comment">
                    <p>
                        Sangat cocok dan trendy dipakai oleh 
                        mahasiswa ke kampus semoga kedepannya ada 
                        produk yang lebih keren lagi+
                    </p>
                </div>
            </div>   

        </div>

        <div class="review_box">
            <div class="review_card">
                <div class="card_top">
                    <div class="profile">

                        <div class="profile_image">
                            <img src="image/gir_dp3.jpg">
                        </div>

                        <div class="name">
                            <strong>Park Jihyo</strong>

                            <div class="like">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="comment">
                    <p>
                        AAAA suka banget sama sepatu dari Beemzshoes 
                        ini produknya keren - keren banget dan
                        yang pastinya berkualitas
                    </p>
                </div>
            </div>   

            <div class="review_card">
                <div class="card_top">
                    <div class="profile">

                        <div class="profile_image">
                            <img src="image/gir_dp2.jpg">
                        </div>

                        <div class="name">
                            <strong>Hwang Yeji</strong>

                            <div class="like">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="comment">
                    <p>
                       Harga terjangkau dan tidak terlalu mahal pas di dompet
                       sesuai dengan budget pelajar yang senang sekali 
                       dengan fashion
                    </p>
                </div>
            </div>   

            <div class="review_card">
                <div class="card_top">
                    <div class="profile">

                        <div class="profile_image">
                            <img src="image/man_dp3.jpg">
                        </div>

                        <div class="name">
                            <strong>D.O. Kyungsoo</strong>

                            <div class="like">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="comment">
                    <p>
                        Kualitas barang bagus tidak sakit di kaki 
                        dan nyaman di kaki Beemzshoes the best pokona mah
                        Beemzshoes sukses terus
                    </p>
                </div>
            </div>   

        </div>

    </div>


    <!--Services-->

    <div class="services" id="Services">
        <h1>our<span>services</span></h1>

        <div class="services_cards">
            <div class="services_box">
                <i class="fa-solid fa-truck-fast"></i>
                <h3>Fast Delivery</h3>
                <p>
                    Barang mendarat dengan cepat dan selamat
                </p>
            </div>

            <div class="services_box">
                <i class="fa-solid fa-rotate-left"></i>
                <h3>10 Days Replacement</h3>
                <p>
                    Barang yang tidak sesuai jaminan kembali
                </p>
            </div>

            <div class="services_box">
                <i class="fa-solid fa-headset"></i>
                <h3>24 x 7 Support</h3>
                <p>
                    Melayani seputar pertanyaan 24x7 admin fast respon
                </p>
            </div>
        </div>

    </div>


    <!--Footer-->

    <footer>
        <div class="footer_main">
            <div class="tag">
                <h1>Contact</h1>
                <a href="#"><i class="fa-solid fa-house"></i>Gegerkalong 29</a>
                <a href="#"><i class="fa-solid fa-phone"></i>+62 12 345 6789</a>
                <a href="#"><i class="fa-solid fa-envelope"></i>beemzshoes@gmail.com</a>
            </div>

            <div class="tag">
                <h1>Get Help</h1>
                <a href="#" class="center">FAQ</a>
                <a href="#" class="center">Shipping</a>
                <a href="#" class="center">Returns</a>
                <a href="#" class="center">Payment Options</a>
            </div>

            <div class="tag">
                <h1>Our Stores</h1>
                <a href="#" class="center">Gegerkalong</a>
                <a href="#" class="center">Gegerkalong Hilir</a>
                <a href="#" class="center">Gegerkalong Tengah</a>
                <a href="#" class="center">Gegerkalong Girang</a>
            </div>

            <div class="tag tengah">
                <h1>Follow Us</h1>
                <div class="social_link">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>                    
                </div>
            </div>
        </div>
    </footer>

    
</body>
</html>