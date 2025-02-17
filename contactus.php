<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylefit.css">
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
        <section id="contact-container">
           
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
                    <a href="contactus.php">
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
         <script>
                $(document).ready(function () {
                    fetchProducts();
                });

                function fetchProducts() {
                    $.ajax({
                        url: 'contactapi.php',  
                        type: 'GET',
                        dataType: 'json',
                        success: function (response) {
                            if (response.status === 'success') {
                                displayProducts(response.data); 
                            } else {
                                console.error('Error:', response.message);
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error('AJAX Error:', error);
                        }
                    });
                }

                function displayProducts(contacts) {
                    const container = $('#contact-container');
                    container.empty();

                    contacts.forEach(contact => {
                        const contactcard = `
                            <div class="contact1">
                                <div class="loc">
                                    <img src="location.png" alt="Location Icon">
                                </div>
                                <div class="act">
                                    <p><i class="fa-solid fa-map-location-dot"></i> Our Address: ${contact.address}</p>
                                    <p><i class="fa-solid fa-business-time"></i> Timings: ${contact.time}</p>
                                    <p><i class="fa-solid fa-envelope-open-text"></i> Email: ${contact.email}</p>
                                    <p><i class="fa-solid fa-phone-volume"></i> Phone no: ${contact.phone}</p>
                                </div>
                            </div>
                        `;
                        container.append(contactcard);
                    });
                }


          </script>
</body>

</html>