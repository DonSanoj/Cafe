<!-- Footer section start -->
<footer class="footer">
    <div class="footer_wrapper">

        <div class="footer_links">

            <div class="footer_links_column">
                <div class="footer_links_column_title"><a href="index.php"><span>Cafe.</span></a></div>
                <div class="content">
                    <h3>The coffee is brewed by first roasting the green coffee beans over hot coals in a brazier.
                        given an opportunity to sample.</h3>
                </div>
            </div>

            <div class="footer_links_column">
                <!-- <div class="footer_links_column_title">Services</div>
                <a href="#">Graphics & Design</a>
                <a href="#">Web Development</a>
                <a href="#">Application Development</a>
                <a href="#">Video & Animation</a>
                <a href="#">Content Writing</a>
                <a href="#">Marketing & Advertising</a> -->
            </div>

            <div class="footer_links_column">
                <div class="footer_links_column_title">About</div>
                <a href="../about_us.php">Our Team</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Use</a>
            </div>

            <div class="footer_links_column">
                <div class="footer_links_column_title">Social Media</div>
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class="bx bxl-instagram"></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
            </div>

            <div class="footer_links_column">
                <div class="footer_links_column_title system-info">
                    <?php
                    $conn = include('./config/config.php');  // Include the database connection file

                    if ($conn->connect_error) {
                        echo "<h3><i class='fas fa-circle' style='color:#FF0000'></i></h3>"; // Red circle for error
                        echo "<h3 style='color:#FF0000'>System Error: " . $conn->connect_error . "</h3>";
                    } else {
                        echo "<h3><i class='fas fa-circle' style='color:#00FF00'></i></h3>"; // Green circle for normal
                        echo "<h3 style='color:#00FF00'>All Systems normal</h3>";
                    }

                    $conn->close(); // Close the database connection
                    ?>
                    <!-- <h3><i class="fas fa-circle"></i></h3>
                    <h3>All Systems normal</h3> -->
                </div>
            </div>
        </div>

        <hr>

        <div class="footer-copyright">
            <p>Copyright © Cafe. 2023</p>
        </div>
    </div>

</footer>
<!-- Footer section end -->