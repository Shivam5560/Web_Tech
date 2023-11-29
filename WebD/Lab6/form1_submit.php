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

    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];

    $sql = "INSERT INTO student (name, city, email)
    VALUES ('$name', '$city', '$email')";
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