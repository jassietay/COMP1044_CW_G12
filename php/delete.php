<?php
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "library";

    // Create connection
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf=8">
        <link rel="stylesheet" href="../css/style.css">
        <title> Record Deleted </title>
    </head>

    <body>
        <div class = "navbar">
            <img src="../images/NottsLogo.png" class = "logo">
            <ul>
                <li><a href="../html/homepage.html"> Home </a></li>
                <li><a href="../php/index.php"> Login </a></li>
            </ul>
        </div>

        <div class="login">
            <div class="signup_link">            
                    <?php
                        $bookID = $_GET['bid'];

                        $sql = "DELETE FROM book WHERE book_id='$bookID'";
                        $result = $conn->query($sql);
                        if ($result) {
                            ?>
                                Deleted successfully <br>
                            <?php    
                        }

                    ?>
                <a href="../php/librarySearch.php">  Back to Search </a>
            </div>
        </div>

    </body>
</html>

