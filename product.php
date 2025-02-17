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
                    <!-- <input type="search"> -->
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
                <div class="pro1">
                    <!-- <button class="buttonpro" onclick="plusDivs(-1)">&#10094;</button> -->
                    <img class="mySlides" src="profood.jpg">
                    <img class="mySlides" src="profood2.jpg">
                    <img class="mySlides" src="profood1.webp">
                    <!-- <button class="buttonpro1" onclick="plusDivs(+1)">&#10095;</button> -->
                    <script src="script.js"></script>
                </div>
            </section>
            <section>
                <div class="pro2">
                    <h1>Prioritize Your Health</h1>
                    <i class="fa-solid fa-magnifying-glass"></i><input type="search">
                </div>


           <section id="product-container"></section>

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
                        <a href="product.php">
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
                
                function addToCart(name, price,image) {
                    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                    const existingItem = cartItems.find(item => item.name === name);
                    if (existingItem) {
                        existingItem.quantity += 1;
                    } else {
                        cartItems.push({ name, price, quantity: 1,image });
                    }
                    localStorage.setItem('cartItems', JSON.stringify(cartItems));
                    alert(`${name} has been added to your cart.`);
                }
            </script>
           <script>
                         $(document).ready(function () {
                                fetchProducts();
                            });

                            function fetchProducts() {
                                $.ajax({
                                    url: 'productapi.php',  
                                    type: 'GET',
                                    dataType: 'json',
                                    success: function (response) {
                                        displayProducts(response);
                                    },
                                    error: function (xhr, status, error) {
                                        console.error('Error:', error);
                                    }
                                });
                            }

                            function displayProducts(products) {
                                const container = $('#product-container');
                                container.empty();

                                products.forEach(product => {
                                    const productCard = `
                                        <div class="pro7">
                                        <div class="p13">
                                            <img src="${product.image}" alt="${product.name}">
                                            <h2>${product.name}</h2>
                                            <p>${product.weight}</p>
                                            <p>₹${product.price}</p>
                                            <button onclick="addToCart('${product.name}', ${product.price}, '${product.image}' id="myBtn")">Add to Cart</button>
                                            <a href="addcart.php"><button>View Cart</button></a>
                                            </div>
                                        </div>
                                    `;
                                    container.append(productCard);
                                });
                            }

          </script>
    </body>

    </html>