<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chorme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cw2</title>
</head>
<body>
<form action="1234.php" method="post">
    Book ID:  <input type="text" name="book_id"> <br>
    Book Title: <input type="text" name="book_title"><br>
    Category: <input type="text" name="category_id"><br>
    Author: <input type="text" name="author"><br>
    Book Copies: <input type="text" name="book_copies"><br>
    Book Publication: <input type="text" name="book_pub"><br>
    Publisher Name: <input type="text" name="publisher_name"><br>
    Isbn: <input type="text" name="isbn"><br>
    Copyright Year: <input type="text" name="copyright_year"><br>
    Receive Date: <input type="text" name="date_receive"><br>
    Added Date: <input type="text" name="date_added"><br>
    Status: <input type="text" name="status"><br>
    <input type="submit" name="Submit_book"> 
    </form>

    <form action="1234.php" method="post">
    Member ID:  <input type="text" name="member_id"> <br>
    Firstname: <input type="text" name="firstname"><br>
    Lastname: <input type="text" name="lastname"><br>
    Gender: <input type="text" name="gender"><br>
    Address: <input type="text" name="address"><br>
    Contact Number: <input type="text" name="contact"><br>
    Borrower Type: <input type="text" name="borrowertype"><br>
    Year Level: <input type="text" name="year_level"><br>
    Status: <input type="text" name="status"><br>
    <input type="submit" name="Submit_member"> 
    </form>

    <form action="1234.php" method="post">
    Search Book By Book Title:  <input type="text" name="book_title1"> <br>
    <input type="submit" name="Submit_searchname"> 
    </form>

    <form action="1234.php" method="post">
    Search Book By Book ID:  <input type="text" name="book_id1"> <br>
    <input type="submit" name="Submit_searchid"> 
    </form>

    <form action="1234.php" method="post">
    Search Book By Author:  <input type="text" name="author1"> <br>
    <input type="submit" name="Submit_searchauthor"> 
    </form>

    <form action="1234.php" method="post">
    Search Book By Status:  <input type="text" name="status1"> <br>
    <input type="submit" name="Submit_searchstatus"> 
    </form>

    <form action="1234.php" method="post">
    Search Book By Book Publication:  <input type="text" name="publication"> <br>
    <input type="submit" name="Submit_searchpublication"> 
    </form>

    <form action="1234.php" method="post">
    Search Book By Publisher:  <input type="text" name="publisher"> <br>
    <input type="submit" name="Submit_searchpublisher"> 
    </form>

    <form action="1234.php" method="post">
    Search Member By MemberId:  <input type="text" name="memberid"> <br>
    <input type="submit" name="Submit_memberid"> 
    </form>

    <form action="1234.php" method="post">
    Search Member By Member Name:  <br>
    First Name: <input type="text" name="memberfirst"> <br>
    Last Name: <input type="text" name="memberlast"> <br>
    <input type="submit" name="Submit_membername"> 
    </form>

    <form action="1234.php" method="post">
    Search Member By Member Address:  <input type="text" name="memberaddress"> <br>
    <input type="submit" name="Submit_memberaddress"> 
    </form>

    <form action="1234.php" method="post">
    Search Member By Contact:  <input type="text" name="membercontact"> <br>
    <input type="submit" name="Submit_contact"> 
    </form>

    <form action="1234.php" method="post">
    Search Member By Borrower Type:  <input type="text" name="memberborrower"> <br>
    <input type="submit" name="Submit_borrowertype"> 
    </form>

    <form action="1234.php" method="post">
    Search Member By Year Level:  <input type="text" name="memberlevel"> <br>
    <input type="submit" name="Submit_yearlevel"> 
    </form>

    <form action="1234.php" method="post">
    Enter Borrower Details ID: <input type="text" name="detailsid"> <br>
    Enter Book ID: <input type="text" name="bookid"> <br>
    Enter Borrow ID: <input type="text" name="borrowid"> <br>
    Update Borrow Status:  <input type="text" name="borrowstatus"> <br>
    <input type="submit" name="Submit_borrowstatus"> <br>

    <form action="1234.php" method="post">
    Warning: You can change every detials except your <b><em><mark> MemberID and Your Name</b></em></mark>.<br>
    Member ID:  <input type="text" name="Memberid"> <br>
    Firstname:  <input type="text" name="Firstname"> <br>
    Lastname:  <input type="text" name="Lastname"> <br>
    Gender: <input type="text" name="Gender"> <br>
    Address:  <input type="text" name="Address"> <br>
    Contact:  <input type="text" name="Contact"> <br>
    Borrower Type:  <input type="text" name="Borrowertype"> <br>
    Year Level:  <input type="text" name="Yearlevel"> <br>
    Status:  <input type="text" name="Status"> <br>
    <input type="submit" name="Submit_updatemember"> 
    </form>

    <form action="1234.php" method="post">
    Delete Book By Book Title:  <input type="text" name="booktitle"> <br>
    <input type="submit" name="Submit_deletebook1"> 
    </form>

    <form action="1234.php" method="post">
    Delete Book By BookID:  <input type="text" name="bookID"> <br>
    <input type="submit" name="Submit_deletebook2"> 
    </form>

    <form action="1234.php" method="post">
    Delete Member By MemberID:  <input type="text" name="memberID"> <br>
    <input type="submit" name="Submit_deletemember1"> 
    </form>

    <form action="1234.php" method="post">
    Delete Member By Member Name:  <br>
    First Name: <input type="text" name="first"> <br>
    Last Name: <input type="text" name="last"> <br>
    <input type="submit" name="Submit_deletemember2"> 
    </form>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cw2";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

    // add books
    if(isset($_POST['Submit_book'])){
        $book_id = $_POST ['book_id'];
        $book_title = $_POST ['book_title'];
        $category_id = $_POST ['category_id'];
        $author = $_POST ['author'];
        $book_copies = $_POST ['book_copies'];
        $book_pub = $_POST ['book_pub'];
        $publisher_name = $_POST ['publisher_name'];
        $isbn = $_POST ['isbn'];
        $copyright_year = $_POST ['copyright_year'];
        $date_receive = $_POST ['date_receive'];
        $date_added = $_POST ['date_added'];
        $status = $_POST ['status'];
        $sql = "INSERT INTO book (book_id, book_title, category_id, author, book_copies, book_pub, 
        publisher_name, isbn, copyright_year, date_receive, date_added, status) VALUES ('$book_id', '$book_title', '$category_id', '$author', '$book_copies', '$book_pub', 
        '$publisher_name', '$isbn', '$copyright_year', '$date_receive', '$date_added', '$status')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
    }

    //add member
    if(isset($_POST['Submit_member'])){
        $member_id = $_POST ['member_id'];
       $firstname = $_POST ['firstname'];
       $lastname = $_POST ['lastname'];
       $gender = $_POST ['gender'];
       $address = $_POST ['address'];
       $contact = $_POST ['contact'];
       $borrowertype = $_POST ['borrowertype'];
       $year_level = $_POST ['year_level'];
       $status = $_POST ['status'];
       $sql = "INSERT INTO member (member_id, firstname, lastname, gender, address, contact, 
       borrowertype, year_level, status) VALUES ('$member_id', '$firstname', '$lastname', '$gender',
      '$address', '$contact', '$borrowertype','$year_level', '$status')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
    }

    //searching book
    // search by book name
    if(isset($_POST['Submit_searchname'])){
        $book_title1 = $_POST['book_title1'];
        $sql = "SELECT * FROM book WHERE book_title = '$book_title1' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Book ID: " . $row["book_id"]. " - Book Title: " . $row["book_title"]. " - Category: " .$row["category_id"]. 
                " - Author: " .$row["author"]. " - Book Copies: ".$row["book_copies"]." - Book Publication: ".$row["book_pub"]." - Publisher Name: ".$row["publisher_name"].
                " - isbn: " .$row["isbn"]. " - Copyright Year: " .$row["copyright_year"]. " - Receive Date: " .$row["date_receive"]. " - Added Date: " .$row["date_added"].
                " - Status: " .$row["status"]. "<br>";
            }
        } else {
        echo "0 results";
        }
    }
    //search by book id
    if(isset($_POST['Submit_searchid'])){
        $book_id1 = $_POST['book_id1'];
        $sql = "SELECT * FROM book WHERE book_id = '$book_id1' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Book ID: " . $row["book_id"]. " - Book Title: " . $row["book_title"]. " - Category: " .$row["category_id"]. 
                " - Author: " .$row["author"]. " - Book Copies: ".$row["book_copies"]." - Book Publication: ".$row["book_pub"]." - Publisher Name: ".$row["publisher_name"].
                " - isbn: " .$row["isbn"]. " - Copyright Year: " .$row["copyright_year"]. " - Receive Date: " .$row["date_receive"]. " - Added Date: " .$row["date_added"].
                " - Status: " .$row["status"]. "<br>";
            }
        } else {
        echo "0 results";
        }
    }
    //search by author
    if(isset($_POST['Submit_searchauthor'])){
        $author1 = $_POST['author1'];
        $sql = "SELECT * FROM book WHERE author = '$author1' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Book ID: " . $row["book_id"]. " - Book Title: " . $row["book_title"]. " - Category: " .$row["category_id"]. 
                " - Author: " .$row["author"]. " - Book Copies: ".$row["book_copies"]." - Book Publication: ".$row["book_pub"]." - Publisher Name: ".$row["publisher_name"].
                " - isbn: " .$row["isbn"]. " - Copyright Year: " .$row["copyright_year"]. " - Receive Date: " .$row["date_receive"]. " - Added Date: " .$row["date_added"].
                " - Status: " .$row["status"]. "<br>";
            }
        } else {
        echo "0 results";
        }
    }
    //search by status
    if(isset($_POST['Submit_searchstatus'])){
        $status1 = $_POST['status1'];
        $sql = "SELECT * FROM book WHERE status = '$status1' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Book ID: " . $row["book_id"]. " - Book Title: " . $row["book_title"]. " - Category: " .$row["category_id"]. 
                " - Author: " .$row["author"]. " - Book Copies: ".$row["book_copies"]." - Book Publication: ".$row["book_pub"]." - Publisher Name: ".$row["publisher_name"].
                " - isbn: " .$row["isbn"]. " - Copyright Year: " .$row["copyright_year"]. " - Receive Date: " .$row["date_receive"]. " - Added Date: " .$row["date_added"].
                " - Status: " .$row["status"]. "<br>";
            }
        } else {
        echo "0 results";
        }
    }
    //search by book publication
    if(isset($_POST['Submit_searchpublication'])){
        $publication = $_POST['publication'];
        $sql = "SELECT * FROM book WHERE book_pub = '$publication' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Book ID: " . $row["book_id"]. " - Book Title: " . $row["book_title"]. " - Category: " .$row["category_id"]. 
                " - Author: " .$row["author"]. " - Book Copies: ".$row["book_copies"]." - Book Publication: ".$row["book_pub"]." - Publisher Name: ".$row["publisher_name"].
                " - isbn: " .$row["isbn"]. " - Copyright Year: " .$row["copyright_year"]. " - Receive Date: " .$row["date_receive"]. " - Added Date: " .$row["date_added"].
                " - Status: " .$row["status"]. "<br>";
            }
        } else {
        echo "0 results";
        }
    }
    //search by publisher name
    if(isset($_POST['Submit_searchpublisher'])){
        $publisher = $_POST['publisher'];
        $sql = "SELECT * FROM book WHERE publisher_name = '$publisher' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Book ID: " . $row["book_id"]. " - Book Title: " . $row["book_title"]. " - Category: " .$row["category_id"]. 
                " - Author: " .$row["author"]. " - Book Copies: ".$row["book_copies"]." - Book Publication: ".$row["book_pub"]." - Publisher Name: ".$row["publisher_name"].
                " - isbn: " .$row["isbn"]. " - Copyright Year: " .$row["copyright_year"]. " - Receive Date: " .$row["date_receive"]. " - Added Date: " .$row["date_added"].
                " - Status: " .$row["status"]. "<br>";
            }
        } else {
        echo "0 results";
        }
    }
    //search member
    //search member by id
    if(isset($_POST['Submit_memberid'])){
        $memberid = $_POST['memberid'];
        $sql = "SELECT * FROM member WHERE member_id = '$memberid' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Member ID: " . $row["member_id"]. " - First Name: " . $row["first_name"]. " - Last Name: " .$row["last_name"]. 
                " - Gender: " .$row["gender"]. " - Address: ".$row["address"]." - Contact: ".$row["contact"]." - Borrower Type: ".$row["borrowertype"].
                " - Year Level: " .$row["year_level"]." - Status: " .$row["status"]. "<br>";
            }
        } else {
        echo "0 results";
        }
    }

    //search by member name
    if(isset($_POST['Submit_membername'])){
        $memberfirst = $_POST['memberfirst'];
        $memberlast = $_POST['memberlast'];
        $sql = "SELECT * FROM member WHERE firstname = '$memberfirst' AND lastname = '$memberlast'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Member ID: " . $row["member_id"]. " - First Name: " . $row["first_name"]. " - Last Name: " .$row["last_name"]. 
                " - Gender: " .$row["gender"]. " - Address: ".$row["address"]." - Contact: ".$row["contact"]." - Borrower Type: ".$row["borrowertype"].
                " - Year Level: " .$row["year_level"]." - Status: " .$row["status"]. "<br>";
            }
        } else {
        echo "0 results";
        }
    }
    //search by member address
    if(isset($_POST['Submit_memberaddress'])){
        $memberaddress = $_POST['memberaddress'];
        $sql = "SELECT * FROM member WHERE address = '$memberaddress' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Member ID: " . $row["member_id"]. " - First Name: " . $row["first_name"]. " - Last Name: " .$row["last_name"]. 
                " - Gender: " .$row["gender"]. " - Address: ".$row["address"]." - Contact: ".$row["contact"]." - Borrower Type: ".$row["borrowertype"].
                " - Year Level: " .$row["year_level"]." - Status: " .$row["status"]. "<br>";
            }
        } else {
        echo "0 results";
        }
    }
    //search by contact
    if(isset($_POST['Submit_contact'])){
        $membercontact = $_POST['membercontact'];
        $sql = "SELECT * FROM member WHERE contact = '$membercontact' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Member ID: " . $row["member_id"]. " - First Name: " . $row["first_name"]. " - Last Name: " .$row["last_name"]. 
                " - Gender: " .$row["gender"]. " - Address: ".$row["address"]." - Contact: ".$row["contact"]." - Borrower Type: ".$row["borrowertype"].
                " - Year Level: " .$row["year_level"]." - Status: " .$row["status"]. "<br>";
            }
        } else {
        echo "0 results";
        }
    }
    //search by borrower type
    if(isset($_POST['Submit_borrowertype'])){
        $memberborrower = $_POST['memberborrower'];
        $sql = "SELECT * FROM member WHERE borrowertype = '$memberborrower' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Member ID: " . $row["member_id"]. " - First Name: " . $row["first_name"]. " - Last Name: " .$row["last_name"]. 
                " - Gender: " .$row["gender"]. " - Address: ".$row["address"]." - Contact: ".$row["contact"]." - Borrower Type: ".$row["borrowertype"].
                " - Year Level: " .$row["year_level"]." - Status: " .$row["status"]. "<br>";
            }
        } else {
        echo "0 results";
        }
    }
    //search by year level
    if(isset($_POST['Submit_yearlevel'])){
        $memberlevel = $_POST['memberlevel'];
        $sql = "SELECT * FROM member WHERE year_level = '$memberlevel' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Member ID: " . $row["member_id"]. " - First Name: " . $row["first_name"]. " - Last Name: " .$row["last_name"]. 
                " - Gender: " .$row["gender"]. " - Address: ".$row["address"]." - Contact: ".$row["contact"]." - Borrower Type: ".$row["borrowertype"].
                " - Year Level: " .$row["year_level"]." - Status: " .$row["status"]. "<br>";
            }
        } else {
        echo "0 results";
        }
    }

    //Update borrow details record in the database
    //update borrow status
    if(isset($_POST['Submit_borrowstatus'])){
        $borrowstatus = $_POST['borrowstatus'];
        $detailsid = $_POST['detailsid'];
        $borrowid = $_POST['borrowid'];
        $bookid = $_POST['bookid'];
        $time = date("Y-m-d H:i:s");
        $sql = "UPDATE `borrowdetails` SET `borrow_status` = '$borrowstatus' WHERE `borrowdetails`.`borrow_details_id` = '$detailsid' ";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->errorxw;
        }
        $sql = "UPDATE borrowdetails SET date_returned = '$time' WHERE `borrowdetails`.`borrow_details_id` = '$detailsid'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    //Update member details in the database
    if(isset($_POST['Submit_updatemember'])){
        $Memberid= $_POST['Memberid'];
        $Firstname = $_POST ['Firstname'];
        $Lastname = $_POST['Lastname'];
        $Gender = $_POST['Gender'];
        $Address = $_POST['Address'];
        $Contact = $_POST['Contact'];
        $Borrowertype = $_POST['Borrowertype'];
        $Yearlevel = $_POST['Yearlevel'];
        $Status = $_POST['Status'];
        $sql = "UPDATE member SET gender = '$Gender', address = '$Address', contact = '$Contact',
        borrowertype = '$Borrowertype', year_level = '$Yearlevel', status = '$Status'
        WHERE member_id = '$Memberid' AND firstname = '$Firstname' AND lastname = '$Lastname' ";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    //Deleting a book from the database
    //delete by book title
    if(isset($_POST['Submit_deletebook1'])){
        $booktitle = $_POST['booktitle'];
    $sql = "DELETE FROM book WHERE book_title = '$booktitle'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";     
        } else {    
        echo "Error deleting record: " . $conn->error;    
        }
    }
    //delete by book id
    if(isset($_POST['Submit_deletebook2'])){
        $bookID = $_POST['bookID'];
    $sql = "DELETE FROM book WHERE book_id = '$bookID'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";     
        } else {    
        echo "Error deleting record: " . $conn->error;    
        }
    }

    //Deleting a member from the database
    //delete by member id
    if(isset($_POST['Submit_deletemember1'])){
        $memberID = $_POST['memberID'];
    $sql = "DELETE FROM member WHERE member_id = '$memberID'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";     
        } else {    
        echo "Error deleting record: " . $conn->error;    
        }
    }
    //delete by member name
    if(isset($_POST['Submit_deletemember2'])){
        $first = $_POST['first'];
        $last = $_POST['last'];
    $sql = "DELETE FROM member WHERE firstname = '$first' AND lastname = '$last'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";     
        } else {    
        echo "Error deleting record: " . $conn->error;    
        }
    }
    $conn->close();
    ?>
</body>
</html>