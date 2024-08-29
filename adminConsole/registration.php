<?php
session_start();

// Initialize booked count if not set
if (!isset($_SESSION['bookedCount'])) {
    $_SESSION['bookedCount'] = 0;
}

// Set the capacity
$capacity = 100;

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    bookTicket();
}

function bookTicket() {
    global $capacity;

    if ($_SESSION['bookedCount'] < $capacity) {
        $ticketType = $_POST['ticketType'];

        // Create a confirmation message
        $message = "Ticket booked successfully! Type: $ticketType";

        // Update booked count
        $_SESSION['bookedCount']++;

        // Check if all slots are booked
        if ($_SESSION['bookedCount'] === $capacity) {
            $fullMessage = "All slots are fully booked.";
        }
    } else {
        $fullMessage = "All slots are fully booked.";
    }

    // Pass the messages to the HTML
    echo "<script>
            document.getElementById('confirmation').innerHTML = '<p>$message</p>';
            document.getElementById('fullMessage').innerHTML = '<p>$fullMessage</p>';
            document.querySelector('button').disabled = true;
          </script>";
}
?>
                    
                    <!-- //Print out some content for example purposes.
                    array_push($success, "Your details are successfully registered. Please be patient You,ll be redirected to Home Page.");
                    header("refresh:3; url = ../index.html");
                } else {
                    array_push($errors, "This Guest is already registered. Please be patient You,ll be redirected to Register Page.");
                    header("refresh:3; url = ../register.html");
                }
                $stmt->close();
                $conn->close();
        }

    } else {
        array_push($errors, "All Fields are Required. Please check once again. Please be patient You,ll be redirected to Register Page.");
        header("refresh:3; url = ../register.html");
        die();
    }


?> -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Exception Handling</title>
</head>
<body>
    <div class="alert alert-danger container my-5">
    <?php     
        $length = count($errors);
        for ($i = 0; $i < $length; $i++) {
        print $errors[$i];
        }; ?>
    </div>
    <div class="alert alert-success container my-5">
    <?php     
        $length = count($success);
        for ($i = 0; $i < $length; $i++) {
        print $success[$i];
        }; ?>
    </div>
</body>
</html>
