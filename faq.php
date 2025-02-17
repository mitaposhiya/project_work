<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <div class="navlink" id="navLinks">
                    <a href="home.php">Home</a>
                    <a href="dash.php">Dashboard</a>
                    <a href="program.php">Services</a>
                    <a href="faq.php">FAQ</a>
                    <a href="contactus.php">ContactUs</a>
                    <a href="index.php">Login</a>
                </div>
                <button class="menu-toggle" aria-label="Toggle-navigation">☰</button>
            </div>
        </header>
        <section>
            <div class="faq1">
                <h1>GET IN TOUCH WITH OUR EXPERTS.</h1>
                <a href="contactus.php"><button type="button" id="myBtn">Contact Us</button></a>
            </div>
        </section>
        <section>
            <div class="faq2">
                <div class="info1">
                    <p>
                    <h1>Name: Alex Carter</h1><br>
                    Specialty: Strength and Conditioning Coach<br>
                    Experience: 8 years in personal training and group fitness.<br>
                    Certifications:
                    NASM Certified Personal Trainer (CPT)<br>
                    Certified Strength and Conditioning Specialist (CSCS)<br>
                    TRX Suspension Training Level 1<br>
                    CPR/AED Certified</p>
                    <br>
                    <img src="faqimg.jpg">
                    <p>No:-4829482947</p>
                </div>
                <div class="info2">
                    <p>
                    <h1>Name: Sophia Bennett</h1><br>
                    Specialty: Functional Fitness and Mobility Expert<br>
                    Experience: 6 years of personal training, focusing on flexibility,and endurance.<br>
                    Certifications:
                    ACE Certified Personal Trainer<br>
                    Precision Nutrition Level 1 Coach<br>
                    Yoga Alliance RYT-200 Certified<br>
                    Kettlebell Level 1 Certification</p>
                    <br>
                    <img src="faqimg1.jpg">
                    <p>No:-4374927489</p>
                </div>
            </div>
        </section>
        <section>
            <div class="info8">
                <p>
                <h1>Name: Jordan Taylor</h1><br>
                Specialty: Strength training and powerlifting for beginners and intermediate athletes.<br>
                Experience: 8 years of personal training, with 5 years specializing in powerlifting.<br>
                Certificates:
                Certified Strength and Conditioning Specialist (CSCS)<br>
                National Academy of Sports Medicine (NASM-CPT)<br>
                USA Powerlifting Coach Level 1<br>
                CPR/AED Certified</p>
                <br>
                <img src="faqimg2.jpg">
                <p>No:-4378843858</p>
            </div>
        </section>
        <section>
            <div class="faq3">
                <div class="info3">
                    <details>To join you must be 16 years old and above. We will only entertain members under 16 if they
                        are obese, are under doctor advisement and take up personal training.
                        All membership agreements for children under 16 years of age need to be authorised and signed by
                        a legal guardian.
                        <summary>
                            <b>How old do I have to be to join Fitness?</b>
                        </summary>
                    </details>
                </div>
                <div class="info4">
                    <details>Membership rates vary depending on the type of package that is best suited for you.
                        Please contact your preferred Fitness First club where our staff will be happy to discuss the
                        various membership options available.
                        <summary>
                            <b>How much is membership at the Gym?</b>
                        </summary>
                    </details>
                </div>
                <div class="info5">
                    <details>Unlike what most trainers would tell you,
                        if losing weight and getting lean are your goals, then you must do cardio after you’ve done
                        weights. Not the other way around.
                        <summary>
                            <b>Should I start or end with Cardio?</b>
                        </summary>
                    </details>
                </div>
                <div class="info6">
                    <details> All members receive a free fitness consultation when joining.
                        This consultation helps us customize a success plan specific to you and your needs! One-on-one
                        personal training is an additional service you can add on at any time
                        <summary>
                            <b>Does personal training cost extra?</b>
                        </summary>
                    </details>
                </div>
                <div class="info7">
                    <input type="text" placeholder="Ask any Questions?"><button type="submit">Submit</button>
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
                    <a href="faq.php">
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