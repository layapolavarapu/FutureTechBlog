<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f2f2f2;
        }
        
        .message {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            background-color: #333;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
        include 'db_conn.php';

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $name = validate($_POST['name']);
        $email = validate($_POST['email']);
        $subject = validate($_POST['subject']);
        $message = validate($_POST['message']);

        if (empty($message) || empty($name) || empty($email) || empty($subject)) {
            header("Location: contact.html");
        } else {
            $sql = "INSERT INTO message (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
            $res = mysqli_query($conn, $sql);

            if ($res) {
                echo '<div class="message">Your message was sent successfully!</div>';
            } else {
                echo '<div class="message">Your message could not be sent!</div>';
            }
        }
    } else {
        header("Location: contact.html");
    }
    ?>
</body>
</html>
