<?php 
  session_start(); 
  
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive service website design</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <a href="#" class="logo">LOGO</a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a style="--i:0;" href="#home">home</a>
        <a style="--i:1;" href="#feature">feature</a>
        <a style="--i:2;" href="#service">service</a>
        <a style="--i:3;" href="#project">project</a>
        <a style="--i:4;" href="#team">team</a>
        <a style="--i:5;" href="#price">price</a>
        <a style="--i:6;" href="#contact">contact</a>
        <a href="home.php?logout='1'"></a>
    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>grow your business with us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ducimus quis tenetur sed accusantium quos est enim autem saepe eveniet!</p>
        <a href="#" class="btn">discover more</a>
    </div>

    <div class="image">
        <img src="images/home-img.png" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="feature" id="feature">

    <h1 class="heading"> awesome features </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/fe1.png" alt="">
            <h3>focus on email marketing</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus id eaque maxime voluptatem distinctio vero. Quibusdam necessitatibus vitae autem quo.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/fe2.png" alt="">
            <h3>focus on content marketing</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus id eaque maxime voluptatem distinctio vero. Quibusdam necessitatibus vitae autem quo.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/fe3.png" alt="">
            <h3>focus on digital marketing</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus id eaque maxime voluptatem distinctio vero. Quibusdam necessitatibus vitae autem quo.</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- features section edns -->

<!-- service section starts  -->

<section class="service" id="service">

    <h1 class="heading"> our services </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/s1.png" alt="">
            <h3>web optimization</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, assumenda!</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/s2.png" alt="">
            <h3>content marketing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, assumenda!</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/s3.png" alt="">
            <h3>data analytics</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, assumenda!</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/s4.png" alt="">
            <h3>seo optimization</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, assumenda!</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/s1.png" alt="">
            <h3>digital marketing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, assumenda!</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/s5.png" alt="">
            <h3>media marketing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, assumenda!</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- service section ends -->

<!-- project section starts  -->

<section class="project" id="project">

    <h1 class="heading">our projects</h1>

    <div class="box-container">

        <div class="box">
            <span class="number">01</span>
            <img src="images/port-img1.jpg" alt="">
            <div class="info">
                <h3>email marketing</h3>
                <p>01 / 05 / 2021</p>
            </div>
        </div>

        <div class="box">
            <span class="number">02</span>
            <img src="images/port-img2.jpg" alt="">
            <div class="info">
                <h3>web optimization</h3>
                <p>01 / 05 / 2021</p>
            </div>
        </div>

        <div class="box">
            <span class="number">03</span>
            <img src="images/port-img3.jpg" alt="">
            <div class="info">
                <h3>seo marketing</h3>
                <p>01 / 05 / 2021</p>
            </div>
        </div>

        <div class="box">
            <span class="number">04</span>
            <img src="images/port-img4.jpg" alt="">
            <div class="info">
                <h3>content marketing</h3>
                <p>01 / 05 / 2021</p>
            </div>
        </div>

        <div class="box">
            <span class="number">05</span>
            <img src="images/port-img5.jpg" alt="">
            <div class="info">
                <h3>digital marketing</h3>
                <p>01 / 05 / 2021</p>
            </div>
        </div>

        <div class="box">
            <span class="number">06</span>
            <img src="images/port-img6.jpg" alt="">
            <div class="info">
                <h3>meida marketing</h3>
                <p>01 / 05 / 2021</p>
            </div>
        </div>

    </div>

</section>

<!-- project section ends -->

<!-- team section starts  -->

<section class="team" id="team">

    <h1 class="heading">our team</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic1.png" alt="">
            <h3>john deo</h3>
            <span>web optimizer</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/pic2.png" alt="">
            <h3>john deo</h3>
            <span>web optimizer</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/pic3.png" alt="">
            <h3>john deo</h3>
            <span>web optimizer</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/pic4.png" alt="">
            <h3>john deo</h3>
            <span>web optimizer</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dignissimos totam est veritatis omnis tempora, vitae enim quod quibusdam ducimus!</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<!-- team section ends -->

<!-- price section starts  -->

<section class="price" id="price">

    <h1 class="heading">our pricing plans</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/p1.png" alt="">
            <h3>basic plan</h3>
            <div class="amount"><span>$</span>20.50</div>
            <p>Strategy & Research Business & Finance Analysing SEO Optimization</p>
            <a href="#" class="btn">select plan</a>
        </div>

        <div class="box">
            <img src="images/p2.png" alt="">
            <h3>standard plan</h3>
            <div class="amount"><span>$</span>30.50</div>
            <p>Strategy & Research Business & Finance Analysing SEO Optimization</p>
            <a href="#" class="btn">select plan</a>
        </div>

        <div class="box">
            <img src="images/p3.png" alt="">
            <h3>premium plan</h3>
            <div class="amount"><span>$</span>50.50</div>
            <p>Strategy & Research Business & Finance Analysing SEO Optimization</p>
            <a href="#" class="btn">select plan</a>
        </div>

    </div>

</section>

<!-- price section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading">contact us</h1>

    <div class="row">

        <form action="">

            <div class="inputBox">
                <input type="text" required>
                <label>name</label>
            </div>

            <div class="inputBox">
                <input type="email" required>
                <label>email</label>
            </div>

            <div class="inputBox">
                <input type="number" required>
                <label>number</label>
            </div>

            <div class="inputBox">
                <textarea required name="" id="" cols="30" rows="10"></textarea>
                <label>message</label>
            </div>

            <input type="submit" class="btn" value="send message">

        </form>

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1619943375027!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

    </div>

</section>

<!-- contact section ends -->

<!-- footer section  -->

<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt veniam eum in libero delectus sit reprehenderit velit similique! Ad, ea!.</p>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">feature</a>
            <a href="#">service</a>
            <a href="#">project</a>
            <a href="#">team</a>
            <a href="#">price</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>category</h3>
            <a href="#">digital marketing</a>
            <a href="#">media marketing</a>
            <a href="#">content marketing</a>
            <a href="#">email marketing</a>
            <a href="#">seo marketing</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div>

















<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>