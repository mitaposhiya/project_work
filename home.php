

<?php
include 'conn.php';
session_start();
if (!isset($_SESSION['name'])) {
   
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html> 
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylefit.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
        <header>
            <div class="nav">
                <div class="navimg">
                    <img src="logofit.png">
                </div>
                <div class="navlink">
                    <a href="home.php">Home</a>
                    <a href="dash.php">Dashboard</a>
                    <a href="program.php">Services</a>
                    <a href="faq.php">FAQ</a>
                    <a href="contactus.php">ContactUs</a>
                    <a href="logout.php">Logout</a>
                </div>
                <button class="menu-toggle" aria-label="Toggle-navigation">☰</button>
            </div>
        </header>
        <section>
            <div class="home1">
                <video autoplay muted loop id="myVideo">
                    <source src="video.mp4" type="video/mp4">
                </video>
                <div class="content">
                    <h1>Only track metrics that matter.</h1>
                    <p> Join our Gym and achieve your fitness goals today!</p>
                    <a href="program.php"><button id="myBtn" onclick="myFunction()">Join Us Now</button></a>
                </div>
            </div>
            <!-- <script>
                var video = document.getElementById("myVideo");
                var btn = document.getElementById("myBtn");
                function myFunction() {
                  if (video.paused) {
                    video.play();
                    btn.innerHTML = "Pause";
                  } else {
                    video.pause();
                    btn.innerHTML = "Play";
                  }
                }
                </script> -->
        </section>
        <section>
            <div class="home2">
                <div class="homeimg2">
                    <img src="fitnessimg.webp">
                </div>
                <div class="homecon">
                    <h1>SET YOUR GOALS</h1>
                    <h2>Weight loss, muscle gain, or improved fitness."</h2>
                    <p>In order to maintain a healthy lifestyle, we must
                        involve in the daily routine exercises and fresh healthy food. Being healthy and fit increases
                        our energy level,
                        improves confidence, burns calories, minimizes complications of chronic diseases and increases
                        life term.</p>
                    <a href="program.php"><button id="myBtn" type="button">Our Programs</button></a>
                </div>
            </div>
        </section>
        <section>
            <div class="home3">
                <div class="homecont">
                    <div class="con1">
                        <h1>Calories Burnt</h1>
                        <p>The more work an activity requires, the more calories you burn</p>
                    </div>
                    <div class="con2">
                        <h1>Walking Steps</h1>
                        <p>Walking for 30 minutes a day or more on most days of the week is a
                            great way to improve or maintain your overall health.</p>
                    </div>
                    <div class="con3">
                        <h1>Progress Bar</h1>
                        <p>Progressing your exercise means changing it to make it more
                            challenging. </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="sell">
                <div class="s1">
                    <h1>Explore Our Products</h1>
                    <p>Eating a well-balanced diet can help you get the calories and nutrients
                        you need to fuel your
                        daily activities, including regular exercise.</p>

                    <p>When it comes to eating foods to fuel your exercise performance, its not
                        as simple as choosing
                        vegetables over doughnuts. You need to eat the right types of food at the right times of the
                        day.</p>

                    <p>Learn about the importance of healthy breakfasts, workout snacks, and
                        meal plans from us.</p>
                    <a href="product.php"><button id="myBtn" type="button">Our Products</button></a>
                </div>
                <div class="s2">
                    <img src="sell.jpg">
                </div>
            </div>
        </section>
        <section class="sec">
            <h1 style="font-size: 50px;">Our Special Features</h1>
            <div class="blog">
                <div class="bl1">
                    <a href="faq.php"><button type="button">
                            <div class="bot1"><img src="blog.webp">
                                <h1>Amenities & Equipment</h1>
                            </div>
                        </button></a>
                </div>
                <div class="bl2">
                    <a href="faq.php"><button type="button">
                            <div class="bot2"><img src="blog1.png">
                                <h1>Pause Period</h1>
                            </div>
                        </button></a>
                </div>
            </div>
        </section>
        <footer>
            <div class="foot1">
                <div class="footimg">
                    <img src="logofit.png">
                    <p>Built your healthy future with us.</p>
                </div>
                <div class="footc1">
                    <h1>Contact info</h1>
                    <p>📍 Amin Marg,Kalawad Road,Rajkot</p>
                    <p>🕒 Monday-Saturday: 9am-9pm</p>
                    <p>📧 info@NPNG.com</p>
                    <p>📞 9999999999</p>
                </div>
                <div class="footc2">
                    <h1>Pages</h1>
                    <a href="home.php" style="color: black;">Home</a><br>
                    <a href="dash.php" style="color: black;">Dashboard</a><br>
                    <a href="program.php" style="color: black;">Services</a><br>
                    <a href="faq.php" style="color: black;">FAQ</a><br>
                    <a href="contactus.php" style="color: black;">ContactUs</a><br>
                    <a href="index.php" style="color: black;">Login</a>
                </div>
                <div class="footc3">
                    <h1>Products</h1>
                    <p>Proteinbar</p>
                    <p>Oats</p>
                    <p>PeanutButter</p>
                    <p>Grains</p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 10px;">
                <p>Copyright © 2025 NPNG Pvt Ltd. All rights reserved.</p>
              </div>
            <div class="lastbut">
                <button type="button">
                    <a href="home.fit.php">
                        <i class="fa-solid fa-arrow-up"></i>
                    </a>
                </button>
            </div>
        </footer>
        <script>
            const menuToggle = document.querySelector('.menu-toggle');
            const navLink = document.querySelector('.navlink');
            const closeButton = document.createElement('button');
    
            closeButton.classList.add('close-button');
            closeButton.innerHTML = '<i class="fa-solid fa-xmark"></i>';
            closeButton.setAttribute('aria-label', 'Close navigation');
            navLink.prepend(closeButton); // Add close button to the nav-info
    
            menuToggle.addEventListener('click', () => {
                navLink.classList.toggle('active');
                closeButton.style.display = navLink.classList.contains('active') ? 'block' : 'none'; // Show/Hide close button
                menuToggle.style.display = navLink.classList.contains('active') ? 'none' : 'block'; // Hide menu toggle when active
            });
            closeButton.addEventListener('click', () => {
                navLink.classList.remove('active');
                closeButton.style.display = 'none'; // Hide close button
                menuToggle.style.display = 'block'; // Show menu toggle again
            });    
        </script>
</body>

</html>