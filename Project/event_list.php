<?php 
 //create a connection with the database
 $conn = new mysqli("localhost","root","","isadatabase");
        
 if(mysqli_connect_error()) {
     die('Connection Error: '.mysqli_connect_error());
 }
?>
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
    <title>Event Lists</title>
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
                    <a href="event_list.php" class="active">
                        Event List
                    </a>
                </li>
                <li>
                    <a href="guest_list.php">
                        Guest List
                    </a>
                </li>
                <li>
                    <a href="adminIndex.php">
                        Admin Panel
                    </a>
                </li>
                <li>
                    <a href="../index.html" style="background: white; color: black; border-radius: 5px;" id="logout">
                        Logout <i class="fa fa-sign-in-alt" style="transform: rotate(180deg);"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
    <section class="events" style="margin-top: 100px; margin-bottom: 230px;">
            <div class="container my-5 text-center">
                <h1 class="title display-4">Event List</h1>
                <h4 class="alert alert-info border rounded">You can Add or Delete an Event</h4>
            </div>
            <table class="table text-center shade">
                <thead>                
                    <tr>
                        <th>Event Name</th>
                        <th>No of Participents</th>
                        <th>Price</th>
                        <th>Event Date</th>
                        <th>Event Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $sQuery = "SELECT * FROM events LIMIT 25";
                        $result = $conn->query($sQuery);

                        while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row['event_name']; ?></td>
                            <td><?= $row['no_of_participents']; ?></td>
                            <td><?= $row['price']; ?></td>
                            <td><?= $row['event_date']; ?></td>
                            <td><?= $row['event_time']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
                <button class="btn btn-primary mx-5" id="addEvent"">Add Event</button>
                <button class="btn btn-danger" id="deleteEvent">Delete Event</button>
            <div class="container shadow p-5 my-5" id="addEventMethod" style="display: none">
                <h4>Add an Event</h4>
                <form action="addEvent.php" method="POST">
                    <div class="col-auto my-2">
                    <label>Select An Event To Delete:</label>
                    <br><select id="cars" name="event_name" class="form-control">
                        <option value="select">select</option>
                        <option value="CRYPTOHUNT">CRYPTOHUNT</option>
                        <option value="Search It">Search It</option>
                        <option value="Technical Quiz">Technical Quiz</option>
                        <option value="Coding">Coding</option>
                        <option value="PUBG">PUBG</option>
                        <option value="Counter Strike">Counter Strike</option>
                        <option value="Dance">Dance</option>
                        <option value="Singing">Singing</option>
                        <option value="Poornima Idol">Poornima Idol</option>
                        <option value="Cooking Without Fire">Cooking Without Fire</option>
                        <option value="Short Movie">Short Movie</option>
                        <option value="Mehandi">Mehandi</option>
                        <option value="Rangoli">Rangoli</option>
                        <option value="writer">writer</option>
                    </select><br>
                    </div>
                    <div class="col-auto my-2">
                        <input type="number" name="no_of_participents" placeholder="No. of participents" class="form-control">
                    </div>
                    <div class="col-auto my-2">
                        <input type="number" name="price" placeholder="Price" class="form-control">
                    </div>
                    <div class="col-auto my-2">
                        <input type="date" name="event_date" placeholder="Event Date" class="form-control">
                    </div>
                    <div class="col-auto my-2">
                        <input type="time" name="event_time" placeholder="Event Time" class="form-control">
                    </div>
                    <div class="col-auto my-2">
                        <input type="submit" name="registerEvent" class="btn btn-success">
                    </div>
                </form>
            </div>

            <div class="container shadow p-5 my-5" id="deleteEventMethod" style="display: none">
                <h4>Add an Event</h4>
                <form action="deleteEvent.php" method="POST">
                    <div class="col-auto my-2">
                    <label>Select An Event To Delete:</label>
                    <br><select id="cars" name="event_name" class="form-control">
                        <option value="select">select</option>
                        <option value="CRYPTOHUNT">CRYPTOHUNT</option>
                        <option value="Search It">Search It</option>
                        <option value="Technical Quiz">Technical Quiz</option>
                        <option value="Coding">Coding</option>
                        <option value="PUBG">PUBG</option>
                        <option value="Counter Strike">Counter Strike</option>
                        <option value="Dance">Dance</option>
                        <option value="Singing">Singing</option>
                        <option value="Poornima Idol">Poornima Idol</option>
                        <option value="Cooking Without Fire">Cooking Without Fire</option>
                        <option value="Short Movie">Short Movie</option>
                        <option value="Mehandi">Mehandi</option>
                        <option value="Rangoli">Rangoli</option>
                        <option value="writer">writer</option>
                    </select><br>
                    </div>
                    <div class="col-auto my-2">
                        <input type="submit" name="deleteEvent" class="btn btn-success">
                    </div>
                </form>
            </div>
        </section>                    
    </main>

    <footer>
        <div class="row">
            <div class="col">
                <img src="img/LogoISA.png" class="footerLogo">
                <p>ISA</p>
                <b>Representing India in Germany</b>            </div>
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

    <script>
        const addEvent = document.querySelector('#addEvent');
        const deleteEvent = document.querySelector('#deleteEvent');

        let showDeleteMethod = false;
        let showAddMethod = false;

        addEvent.addEventListener('click', function() {
            if(!showAddMethod) {
                document.getElementById('addEventMethod').style.display = "block";
                document.getElementById('deleteEventMethod').style.display= "none";
                showAddMethod = true;
            } 
            else {
                document.getElementById('addEventMethod').style.display="none"
                showAddMethod = false;
            }
        });

        deleteEvent.addEventListener('click', function() {
            if(!showDeleteMethod) {
                document.getElementById('deleteEventMethod').style.display = "block";
                document.getElementById('addEventMethod').style.display="none"
                showDeleteMethod = true;
            } 
            else {
                document.getElementById('deleteEventMethod').style.display="none"
                showDeleteMethod = false;
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="../javascript/main.js"></script>
</body>
</html>