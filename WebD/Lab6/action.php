<html>

<body>

    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>

    <?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $servername = "localhost";
    $username = "root";
    $password = "shivam@2002";
    $dbname = "webtech";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $a = $_POST['fnm'];
    $b = $_POST['lnm'];
    $c = $_POST['dob']
    $d = $_POST['email']
    $e = $_POST['phone']
    $f = $_POST['rno']
    $g = $_POST['sem']
    $h = $_POST['dept']

    $sql = "INSERT INTO info (fnm,lnm,dob,email,phone,regno,sem,dept)
    VALUES ('$a', '$b', '$c','$d','$e','$f','$g','$h')";
    echo $sql;

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    ?>

</body>

</html>