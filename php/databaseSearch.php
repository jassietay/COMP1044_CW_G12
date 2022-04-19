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
        <title> Library Search </title>
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <div class="banner">
            
            <div class = "navbar">
                <img src="../images/NottsLogo1.png" class = "logo">
                <ul>
                    <li><a href="../html/homepage.html">Home</a></li>
                    <li><a href="../php/librarySearch.php">Search Library</a></li>
                    <li><a>Search Members</a></li>
                </ul>
            </div>
    
            <div class="search">
            <center>    
            <table class="searchTable"> 
                    <thead>
                        <tr>
                            <th> Book ID </th>
                            <th> Book Title </th>
                            <th> Category ID </th>
                            <th> Author </th>
                            <th> Book Copies </th>
                            <th> Publisher Name </th>
                            <th> ISBN </th>
                            <th> Copyright Year </th>
                            <th> Status </th>
                        </tr>
                    </thead>
                    <!-- Search by book title -->
                    <?php
                        if(isset($_POST['Submit_Search'])) {
                            $search = $_POST['Search'];
                            $category = $_POST['Category'];
                            $status = $_POST['Status'];
                            
                            $sql = "SELECT * FROM book WHERE book_title = '$search' ";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                            ?>
                                <tr>
                                <td> <?php echo $row['book_id'];?> </td>
                                <td> <?php echo $row['book_title'];?> </td>
                                <td> <?php echo $row['category_id'];?> </td>
                                <td> <?php echo $row['author'];?> </td>
                                <td> <?php echo $row['book_copies'];?> </td>
                                <td> <?php echo $row['publisher_name'];?> </td>
                                <td> <?php echo $row['isbn'];?> </td>
                                <td> <?php echo $row['copyright_year'];?> </td>
                                <td> <?php echo $row['status'];?> </td>
                                </tr>
                            <?php
                                }
                            }
                        } else {
                            header("location: ../php/librarySearch.php?error=NoRecords");
                            exit();
                        }
                    ?>
                    <!-- Search by book author -->
                    <?php
                        if(isset($_POST['Submit_Search'])) {
                            $search = $_POST['Search'];
                            $category = $_POST['Category'];
                            $status = $_POST['Status'];
                            
                            $sql = "SELECT * FROM book WHERE author = '$search' ";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                    ?>
                                <tr>
                                <td> <?php echo $row['book_id'];?> </td>
                                <td> <?php echo $row['book_title'];?> </td>
                                <td> <?php echo $row['category_id'];?> </td>
                                <td> <?php echo $row['author'];?> </td>
                                <td> <?php echo $row['book_copies'];?> </td>
                                <td> <?php echo $row['publisher_name'];?> </td>
                                <td> <?php echo $row['isbn'];?> </td>
                                <td> <?php echo $row['copyright_year'];?> </td>
                                <td> <?php echo $row['status'];?> </td>
                                </tr>
                    <?php
                                }
                            }
                        } else {
                            header("location: ../php/librarySearch.php?error=NoRecords");
                            exit();
                        }
                    ?>
                    <!-- Search by book ISBN -->
                    <?php
                        if(isset($_POST['Submit_Search'])) {
                            $search = $_POST['Search'];
                            $category = $_POST['Category'];
                            $status = $_POST['Status'];
                            
                            $sql = "SELECT * FROM book WHERE isbn = '$search' ";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                    ?>
                                <tr>
                                <td> <?php echo $row['book_id'];?> </td>
                                <td> <?php echo $row['book_title'];?> </td>
                                <td> <?php echo $row['category_id'];?> </td>
                                <td> <?php echo $row['author'];?> </td>
                                <td> <?php echo $row['book_copies'];?> </td>
                                <td> <?php echo $row['publisher_name'];?> </td>
                                <td> <?php echo $row['isbn'];?> </td>
                                <td> <?php echo $row['copyright_year'];?> </td>
                                <td> <?php echo $row['status'];?> </td>
                                </tr>
                    <?php
                                }
                            }
                        } else {
                            header("location: ../php/librarySearch.php?error=NoRecords");
                            exit();
                        }
                    ?>
                    <!-- Search by Publisher Name -->
                    <?php
                        if(isset($_POST['Submit_Search'])) {
                            $search = $_POST['Search'];
                            $category = $_POST['Category'];
                            $status = $_POST['Status'];
                            
                            $sql = "SELECT * FROM book WHERE publisher_name = '$search' ";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                    ?>
                                <tr>
                                <td> <?php echo $row['book_id'];?> </td>
                                <td> <?php echo $row['book_title'];?> </td>
                                <td> <?php echo $row['category_id'];?> </td>
                                <td> <?php echo $row['author'];?> </td>
                                <td> <?php echo $row['book_copies'];?> </td>
                                <td> <?php echo $row['publisher_name'];?> </td>
                                <td> <?php echo $row['isbn'];?> </td>
                                <td> <?php echo $row['copyright_year'];?> </td>
                                <td> <?php echo $row['status'];?> </td>
                                </tr>
                    <?php
                                }
                            }
                        } else {
                            header("location: ../php/librarySearch.php?error=NoRecords");
                            exit();
                        }
                    ?>
                    <!-- Search by Category -->
                    <?php
                        if(isset($_POST['Submit_Search'])) {
                            $search = $_POST['Search'];
                            $category = $_POST['Category'];
                            $status = $_POST['Status'];

                            if($status == 'None') {

                                $sql = "SELECT * FROM book WHERE category_id='$category'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                        ?>
                                    <tr>
                                    <td> <?php echo $row['book_id'];?> </td>
                                    <td> <?php echo $row['book_title'];?> </td>
                                    <td> <?php echo $row['category_id'];?> </td>
                                    <td> <?php echo $row['author'];?> </td>
                                    <td> <?php echo $row['book_copies'];?> </td>
                                    <td> <?php echo $row['publisher_name'];?> </td>
                                    <td> <?php echo $row['isbn'];?> </td>
                                    <td> <?php echo $row['copyright_year'];?> </td>
                                    <td> <?php echo $row['status'];?> </td>
                                    </tr>
                        <?php
                                    }
                                }
                            } else {
                                $sql = "SELECT * FROM book WHERE category_id='$category' AND status='$status'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                        ?>
                                    <tr>
                                    <td> <?php echo $row['book_id'];?> </td>
                                    <td> <?php echo $row['book_title'];?> </td>
                                    <td> <?php echo $row['category_id'];?> </td>
                                    <td> <?php echo $row['author'];?> </td>
                                    <td> <?php echo $row['book_copies'];?> </td>
                                    <td> <?php echo $row['publisher_name'];?> </td>
                                    <td> <?php echo $row['isbn'];?> </td>
                                    <td> <?php echo $row['copyright_year'];?> </td>
                                    <td> <?php echo $row['status'];?> </td>
                                    </tr>
                        <?php
                                    }
                                }
                            }
                            
                        } else {
                            header("location: ../php/librarySearch.php?error=NoRecords");
                            exit();
                        }
                    ?>
                    <!-- Search by Status -->
                    <?php
                        if(isset($_POST['Submit_Search'])) {
                            $search = $_POST['Search'];
                            $category = $_POST['Category'];
                            $status = $_POST['Status'];

                            if($category == '0') {

                                $sql = "SELECT * FROM book WHERE status = '$status'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                        ?>
                                    <tr>
                                    <td> <?php echo $row['book_id'];?> </td>
                                    <td> <?php echo $row['book_title'];?> </td>
                                    <td> <?php echo $row['category_id'];?> </td>
                                    <td> <?php echo $row['author'];?> </td>
                                    <td> <?php echo $row['book_copies'];?> </td>
                                    <td> <?php echo $row['publisher_name'];?> </td>
                                    <td> <?php echo $row['isbn'];?> </td>
                                    <td> <?php echo $row['copyright_year'];?> </td>
                                    <td> <?php echo $row['status'];?> </td>
                                    </tr>
                        <?php
                                    }
                                }
                            
                        } 
                            }  else {
                                header("location: ../php/librarySearch.php?error=NoRecords");
                                exit();
                            }
                        ?>
                </table> </center>
            </div>

        </div>    

    </body>
        
</html>