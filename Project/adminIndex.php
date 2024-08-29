<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Administrator Account</title>
</head>
<body>

    <header>
        <nav>
            <div class="logo">
                <a href="adminIndex.php">
                <img src="img/LogoISA.png" alt="">
                </a>
            </div>
            <ul class="menu-nav">
                <li>
                    <a href="event_wise_guests.php">
                        Event Wise Guests
                    </a>
                </li>
                <li>
                    <a href="event_list.php">
                        Event List
                    </a>
                </li>
                <li>
                    <a href="guest_list.php">
                        Guest List
                    </a>
                </li>
                <li>
                    <a href="adminIndex.php" class="active">
                        Admin Panel
                    </a>
                </li>
                <li>
                    <a href="index.html" style="background: white; color: black; border-radius: 5px;" id="logout">
                        Logout <i class="fa fa-sign-in-alt" style="transform: rotate(180deg);"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="events" style="margin-top: 100px; margin-bottom: 230px;">
            <div class="container my-5 text-center">
                <h1 class="title display-4">Welcome To Admin Panel</h1>
            </div>
            <div class="eventBox container my-5 text-center text-white p-3">
                <h1 class="display-4">Manage </h1>
                <div class="container p-3">
                <a href="guest_list.php"><button class="btn btn-success">Guest Lists</button></a>
                <a href="event_list.php"><button class="btn btn-success">Event Lists</button></a>
                <a href="event_wise_guests.php"><button class="btn btn-success">Event Wise Guests</button></a>
                </div>

                <div class="container bg-primary rounded m-2 p-2">
                    <h3>You Can Manage the database from here, Like Viewing Guests, Event wise guests, Event Lists and can manipulate them as wanted.</h3>
                </div>
            </div>               
        </section>                
    </main>

    <footer>
        <div class="row">
            <div class="col">
                <img src="img/LogoISA.png" class="footerLogo">
                <p>ISA</p>
                <b>Representing India in Germany</b>    
            </div>
            <div class="col">
                <h3>Address</h3>
            <p>Hochschule University</p>
            <p>Hof,Germany</p>
            <p>95028</p>
            <p class="email">ISA.HOF.com</p>
            <h4>+4915510241482</h4>
            </div>
            <div class="col">
            <h3>Links</h3>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
            <div class="col">
                <h3>News Letter</h3>
                <form action="">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Enter Your email id " required>
                    <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
                </form>
                <div class="social">
                    <a href="https://www.facebook.com/shakib.khatri.9"><i class="fa-brands fa-facebook"></i> </a>
                    <a href="https://www.instagram.com/shakib_khatri?igsh=b21pYnJtZnZqMjll"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://twitter.com/ShakibKhatri"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/shakib-khatri/"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div> 
        </div>
     </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="../javascript/main.js"></script>
</body>
</html>