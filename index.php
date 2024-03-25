<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cafe Express, cafe express">
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="/assets/css/index.css">
    <link rel="stylesheet" href="/assets/css/header.css">
    <link rel="stylesheet" href="/assets/css/footer.css">

    <link rel="stylesheet" href="/snow-falling/snow.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>

    <title>Cafe Express</title>

</head>

<body>

    <?php @include('./includes/header.php'); ?>

    <!-- Home section start -->
    <section class="home" id="home">

        <div class="intro">
            <h1 class="animation">Stir and Brew</h1>
            <h3 class="animation">The Fresh Aroma of Coffee</h3>
            <a href="/menu.php" class="order-online">Order Online</a>
            <a href="" class="book-table">Book a Table</a>
        </div>

    </section>
    <!-- Home section end -->

    <!-- Popular services section start -->
    <section class="pop-services" id="pop-services">

        <h1 class="heading">Popular Cups</h1>

        <div class="flex-container">

            <div class="flex-box1">
                <h3 class="animation">Espresso</h3>
                <p class="animation">Mastering Responsive Design, Creating Dynamic Websites for Every Device</p>
                <a href="/sub_pages/web_design.php" class="btn animation">Order Now <i class=" fas fa-regular fa-chevron-right"></i></a>
            </div>

            <div class="flex-box2">
                <h3 class="animation">Cappuccino</h3>
                <p class="animation">Engage and captivate with dynamic videos and animations for storytelling.</p>
                <a href="/sub_pages/video_animation.php" class="btn animation">Order Now <i class=" fas fa-regular fa-chevron-right"></i></a>
            </div>

        </div>

        <div class="flex-container">

            <div class="flex-box3">
                <h3 class="animation">Black Coffee</h3>
                <p class="animation">Elevate Your Development Skills, Mastering Programming and Innovation in 2023</p>
                <a href="/sub_pages/app_development.php" class="btn animation">Order Now <i class=" fas fa-regular fa-chevron-right"></i></a>
            </div>

            <div class="flex-box4">
                <h3 class="animation">Macchiato</h3>
                <p class="animation">Unlocking Creativity, Transforming Ideas into Visual Masterpieces with Graphic Design</p>
                <a href="/sub_pages/graphic_design.php" class="btn animation">Order Now <i class=" fas fa-regular fa-chevron-right"></i></a>
            </div>

        </div>

    </section>
    <!-- Popular services section end -->

    <!-- About section start -->
    <section class="about" id="about">

        <h1 class="heading">About Us</h1>
        <h3 class="animation">Why choose us?</h3>

        <div class="content">

            <p class="animation">Welcome to Cafe Express, where innovation meets excellence. <br>
                We have been dedicated to providing top-notch services to our valued customers.</p>

            <a href="about_us.php" class="animation">More Info <i class=" fas fa-regular fa-chevron-right"></i></a>

        </div>

    </section>
    <!-- About section end -->

    <!-- Review section start -->
    <section class="review" id="review">

        <h1 class="heading">Our Happy Clients</h1>

        <div class="flex-container">

            <div class="flex-box1">
                <div class="review-info">
                    <img src="" class="fas fa-user">
                    <h1 class="name">Michael Joseph</h1>
                </div>
                <p class="comment">They constantly go above and beyond to make sure I find what I'm searching for.
                    Their team is very informed and highly professional.
                    They provide excellent customer service and are always accessible to answer any queries I might
                    have.</p>
            </div>

            <div class="flex-box2">
                <div class="review-info">
                    <img src="" class="fas fa-user">
                    <h1 class="name">Richard Oliver</h1>
                </div>
                <p class="comment">Their products are strong and long-lasting, which makes them a fantastic investment for anyone,
                    I can say with confidence.
                    I heartily endorse Cafe to anyone who is searching for high-quality service.
                </p>
            </div>

            <div class="flex-box3">
                <div class="review-info">
                    <img src="" class="fas fa-user">
                    <h1 class="name">Robert Daniel</h1>
                </div>
                <p class="comment">I am quite pleased with the calibre of Cafe's goods and services as a customer.
                    They provide a wide selection of high-quality services.
                    making them my go-to place for all of my Content writing and translation requirements.</p>
            </div>

        </div>

    </section>
    <!-- Review section end -->

    <div class="space"></div>

    <?php @include('./includes/footer.php'); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha512-0xrMWUXzEAc+VY7k48pWd5YT6ig03p4KARKxs4Bqxb9atrcn2fV41fWs+YXTKb8lD2sbPAmZMjKENiyzM/Gagw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="/assets/js/index.js"></script>

    <script type="text/javascript" src="/particles.js"></script>
    <script type="text/javascript" src="/app.js"></script>

</body>

</html>