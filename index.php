<html>
<head>
    <meta charset="UTF-8">
    <title>Learn PHP</title>
</head>
<body>
    <?php
        /**
         * Created by PhpStorm.
         * User: fazeli
         * Date: 5/25/19
         * Time: 10:37 AM
         */
        // echo "Hello";
//    phpinfo();
    $mix = array(1 , 2 , array("ali","hasan","hosein"));
    echo $mix[2];
    echo $mix[2][1];
    ?>
    <pre>
        <?php
        print_r($mix);
        ?>
        ?>
    </pre>


    <?php
        $servername = "localhost";
        $username = "phpmyadmin";
        $password = "phpmyadmin";
        $dbname = "dd";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //don't show ???? ????
        $conn->query("SET NAMES 'utf8'");
        $sql = "SELECT * FROM x_user";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "user id: " . $row["user_id"]. " <br />" . " - Full Name: " . $row["fullname"]. "<br />" . "&nbsp registerTime: " . $row["registerTime"]. "<br />";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    ?>

</body>
</html>
