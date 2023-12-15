<!--Header section start-->
<header>

    <a href="/index.php" class="logo">Cafe.</a>

    <nav class="navbar">
        <a href="/index.php">Home</a>
        <a href="/menu.php">Menu</a>
        <a href="#">Contact Us</a>
        <a href="#">About Us</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="/favorites.php" class="fas fa-heart"></a>
        <a href="/cart.php" class="fas fa-shopping-cart"></a>
        <a href="/login_and_register/login.php" class="fas fa-user" id="login-icon"></a>
    </div>

</header>
<!--Header section end-->

<!--Search form start-->
<form action="/search_result.php" id="search-form" method="GET">
    <input type="search" placeholder="Search here..." name="search" id="search-box">
    <button type="submit" name="submit-search"><label for="search-box" class="fas fa-search"></label></button>
    <i class="fas fa-times" id="search-form-close"></i>
</form>
<!-- Search form end -->