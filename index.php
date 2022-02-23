<?php
    session_start();
    include 'connect.php';
    $tickets = [];
    $sql = "SELECT * FROM tickets";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $tickets[] = $row;
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sanjalika Water Park</title>
        <link rel="stylesheet" href="./css/Home.css" />
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="./css/Home/owl.carousel.min.css" />
        <link rel="stylesheet" href="./css/Home/owl.theme.default.min.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <link rel="stylesheet" href="./css/footer.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <!-- javascript -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="./js/owl.carousel.min.js"></script>
    </head>

    <body>
        <div class="main">
            <header>
                <div class="header__contain container">
                    <a href="./" class="logo">Sanjalika</a>
                    <div class="header__main">
                        <ul id="main_menu">
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
                                <div class="dropdown-content">
                                    <a href="./" class="drop">Homepage</a>
                                    <a href="food" class="drop">Menu and Dishes</a>
                                    <a href="about" class="drop">About</a>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
                                <div class="dropdown-content">
                                    <a href="#" class="drop">Ticket</a>
                                    <a href="#" class="drop">Link 2</a>
                                    <a href="#" class="drop">Link 3</a>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
                                <div class="dropdown-content">
                                    <a href="#" class="drop">Link 1</a>
                                    <a href="#" class="drop">Link 2</a>
                                    <a href="#" class="drop">Contact</a>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropbtn"><?= isset($_SESSION['is_login']) ? 'Hi, ' . $_SESSION['name'] : 'Login' ?></a>
                                <div class="dropdown-content">
                                    <?php if (!isset($_SESSION['is_login'])): ?>
                                    <a href="Login" class="drop">Login</a>
                                    <?php else: ?>
                                    <a href="Logout" class="drop">Logout</a>
                                    <?php endif; ?>
                                </div>
                            </li>
                        </ul>
                        <div>
                            <button class="btnticker"><a href="" class="linkbtn">TICKER</a></button>
                        </div>
                    </div>
            </header>
            </div>
            <div class="banner owl-carousel owl-theme">
                <div class="item">
                    <div class="banner__item">
                        <img src="https://images.unsplash.com/photo-1546699718-5871c27b4197?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" alt="" class="banner__img" />
                        <div class="banner__text">
                            <h2>
                                EXPERINCE ENJOYMENT
                            </h2>
                            <p class="banner__desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, vitae maiores at odio quibusdam soluta id, expedita reprehenderit porro dolorum dolorem impedit iusto sed natus!
                            </p>
                            <button class="banner__button">VIEW NOW</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="banner__item">
                        <img src="https://images.unsplash.com/photo-1516134221268-19bdc6985125?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="" class="banner__img" />
                        <div class="banner__text">
                            <h2 class="banner__title">
                                A VACATION WONDERFUL
                            </h2>
                            <p class="banner__desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, vitae maiores at odio quibusdam soluta id, expedita reprehenderit porro dolorum dolorem impedit iusto sed natus!
                            </p>
                            <button class="banner__button">VIEW More</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="banner__item">
                        <img src="https://images.unsplash.com/photo-1628950992435-9f3acaf1adbe?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="" class="banner__img" />
                        <div class="banner__text">
                            <h2 class="banner__title">
                                GOOD PLACE FOR ENJOYMENT
                            </h2>
                            <p class="banner__desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, vitae maiores at odio quibusdam soluta id, expedita reprehenderit porro dolorum dolorem impedit iusto sed natus!
                            </p>
                            <button class="banner__button">DISCOVER</button>
                        </div>
                    </div>
                </div>

            </div>
            <section class="about section-padding">
                <div class="container">
                    <div class="row">
                        <div class="section-title">
                            <span> Welcome To</span>
                            <h2>Sanjalika Water Park</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="about-item">
                            <h2>Sanjalika Water Park</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, neque veniam? Iste odit rem pariatur aliquam, iure quae id laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis molestiae, culpa beatae,
                                veritatis odit iure ipsa quasi, dolor ea nemo consectetur. Pariatur laboriosam illo et! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod ipsam praesentium vitae quis explicabo! </p>
                            <button class="btn"><a href="">
              VIEW NOW
            </a></button>
                        </div>
                        <div class="about-item">
                            <div class="about-item-img">
                                <span>Fun and Entertainment</span>
                                <img src="./images/Home/images.jpg" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section class="course">
                <h2>Events that take place</h2>
                <div class="course-items container row">
                    <div class="course-item">
                        <h2>Swimming Competition</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, neque veniam? Iste odit rem pariatur aliquam, iure quae id laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    </div>
                    <div class="course-item">
                        <h2>Treasure Contest</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, neque veniam? Iste odit rem pariatur aliquam, iure quae id laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    </div>
                    <div class="course-item">
                        <h2>Dance Competition</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, neque veniam? Iste odit rem pariatur aliquam, iure quae id laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    </div>
                </div>
            </section>
            <div class="backround">
                <div class="section-theme container">
                    <div class="section-h2">
                        <span><i>Enjoy to stay</i></span>
                        <h2>PARTY POOL FACILITIES</h2>
                    </div>
                    <div class="section-about">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus tempore voluptatem id ipsa fugit quos, odit culpa, obcaecati at sit, veritatis nulla. Ipsam corporis est consequuntur! Sed facere doloribus consequuntur. Lorem
                            ipsum dolor sit amet consectetur adipisicing elit. Provident harum perspiciatis fuga, exercitationem unde vero nesciunt dolorum, labore pariatur nulla laudantium excepturi quidem sint sequi voluptatum quo animi iusto voluptatem.
                        </p>
                    </div>
                    <div class="icon-theme">
                        <div class="item-icon">
                            <div class="box-icon">
                                <i class="fas fa-fire"></i>
                            </div>
                            <div class="text-item">
                                <p>FIREPLACES FOR RENT</p>
                            </div>
                        </div>
                        <div class="item-icon">
                            <div class="box-icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="text-item">
                                <p>FIREPLACES FOR RENT</p>
                            </div>
                        </div>
                        <div class="item-icon">
                            <div class="box-icon">
                                <i class="fas fa-shower"></i>
                            </div>
                            <div class="text-item">
                                <p>FIREPLACES FOR RENT</p>
                            </div>
                        </div>
                        <div class="item-icon">
                            <div class="box-icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="text-item">
                                <p>FIREPLACES FOR RENT</p>
                            </div>
                        </div>
                        <div class="item-icon">
                            <div class="box-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <div class="text-item">
                                <p>FIREPLACES FOR RENT</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-enjoy">
                <span class="text__header">See Upcoming event</span>

                <div class="item-event">
                    <h2>Upcoming big event</h2>
                    <div class="item-theme container">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front" style="background-image: url(./images/Home/img1.jpg);">
                                    <div class="text-main">
                                        <p>BIG PARTIES</p>
                                        <p>LET'S TRY THEM</p>
                                        <p>01.</p>
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <i class="fas fa-swimmer"></i>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa.</p>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front" style="background-image: url(./images/Home/img2.jpg);">
                                    <div class="text-main">
                                        <p>BIG EVENT</p>
                                        <p>DISCOVERY THEM</p>
                                        <p>02.</p>
                                    </div>
                                </div>
                                <div class="flip-card-back ">
                                    <i class="fas fa-swimmer"></i>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa.</p>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card ">
                            <div class="flip-card-inner ">
                                <div class="flip-card-front" style="background-image: url(./images/Home/img3.jpg);">
                                    <div class="text-main">
                                        <p>DAILY NEW EVENT</p>
                                        <p>STARTING EXPERINCE BETTER</p>
                                        <p>03.</p>
                                    </div>
                                </div>
                                <div class="flip-card-back ">
                                    <i class="fas fa-swimmer"></i>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- code ticker xem phim -->
                <div class="box-tickets-movie">
                    <div class="box-select">
                        <div class="box-select__item name-select">
                            <span>Select day to use</span>
                        </div>
                        <div class="box-select__item date-time">
                            <input type="date" id="date-ticket" min="<?= date('Y-m-d') ?>">
                        </div>
                        <div class="box-select__item button-ticket">
                            <span id="ticket-button" style="cursor:pointer;">Tickets
                            </span>
                        </div>
                    </div>
                </div>

                <div class="box-item-movie" id="box-ticket">
                    <?php foreach ($tickets as $ticket): ?>
                        <div class="item-movie">
                            <div class="box-img">
                                <img src="<?= $ticket['image'] ?>" alt="<?= $ticket['name'] ?>">
                            </div>
                            <div class="box-name">
                                <span><?= $ticket['name'] ?> (<?= $ticket['type'] ?>)</span>

                            </div>
                            <div class="box-price">
                                <div class="price">
                                    <span>$<?= $ticket['price'] ?></span>
                                </div>
                                <div class="box-amount">
                                    <div class="number-input">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <input class="quantity" min="0" name="qty[]" value="0" type="number">
                                        <input type="hidden" name="ids[]" value="<?= $ticket['id'] ?>" />
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="box-accept">
                    <?php if (isset($_SESSION['is_login'])): ?>
                        <span onclick="addToCart()">Purchase</span>
                    <?php else: ?>
                        <span onclick="window.location.href='Login'">Please login before purchasing</span>
                    <?php endif; ?>
                </div>

            </div>

            <footer class="footer-distributed">

                <div class="footer-left">

                    <h3>Sanjalika<span>WATER</span></h3>

                    <p class="footer-links">
                        <a href="#" class="link-1">Home</a>

                        <a href="#">Blog</a>

                        <a href="#">Pricing</a>

                        <a href="#">About</a>

                        <a href="#">Faq</a>

                        <a href="#">Contact</a>
                    </p>

                    <p class="footer-company-name">Company Name © 2015</p>
                </div>

                <div class="footer-center">

                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
                    </div>

                    <div>
                        <i class="fa fa-phone"></i>
                        <p>+1.555.555.5555</p>
                    </div>

                    <div>
                        <i class="fa fa-envelope"></i>
                        <p><a href="mailto:support@company.com">support@company.com</a></p>
                    </div>

                </div>

                <div class="footer-right">

                    <p class="footer-company-about">
                        <span>About the company</span> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                    </p>

                    <div class="footer-icons">

                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-github"></i></a>

                    </div>

                </div>

            </footer>
            <div id="myModal" class="modal-ticket">
                <!-- Modal content -->
                <div class="modal-content-ticket">
                    <span class="close">&times;</span>
                    <table id="tickets">
                        <tr>
                            <th>ORDER</th>
                            <th>DATE</th>
                            <th>QUANTITY</th>
                        </tr>
                        <?php if (isset($_SESSION['shopping_cart']) && !is_null($_SESSION['shopping_cart'])): ?>
                            <?php foreach ($_SESSION['shopping_cart'] as $item): ?>
                                <?php
                                    $sql = "SELECT name FROM tickets WHERE id = " . $item['item_id'];
                                    $row = mysqli_fetch_assoc(mysqli_query($con, $sql));
                                ?>
                                <tr>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $item['date'] ?></td>
                                    <td><?= $item['item_qty'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="3" align="center">No ticket</td>
                            </tr>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
            <!-- javascript -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js " integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
            <script src="./js/Home/owl.carousel.min.js "></script>
            <script src="https://unpkg.com/aos@next/dist/aos.js "></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                AOS.init();
            </script>
            <script src="./js/Home/Home.js"></script>
            <script src="./js/Home/script.js"></script>
            <script src="./js/Home/modal.js"></script>
    </body>

    </html>