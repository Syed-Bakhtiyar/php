<html>

<head>

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>
</head>


<br>
<br>
<?php
//FuHdpSgJFH


//isset($_POST[name]) ? $_POST[name] : '';

////app link:
////https://stark-bayou-99693.herokuapp.com/
////
////myAdmin link:
////http://www.phpmyadmin.co/

//$servername = "localhost";
//$username = "user1";
//$password = "user1";
//$dbname = "mydb";
$servername = "sql6.freemysqlhosting.net";
$username = "sql6110552";
$password = "FuHdpSgJFH";
$dbname = "sql6110552";
//
//Host: sql6.freemysqlhosting.net
//Database name: sql6108017
//Database user: sql6108017
//Database password: qy4WKEwXIR
//Port number: 3306


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


echo " Successfully Connected to Cloud Server ";


//$sql = "INSERT INTO `classroom`(`name`, `roll`, `gender`) VALUES('$_POST[fname]','$_POST[roll]','$_POST[gender]')";


$sql = "      INSERT INTO `mytable`(`name`, `roll`, `gender`) VALUES ('$_POST[fname]'  ,  '$_POST[roll]' , '$_POST[gender]' )           ";


if ($conn->query($sql) === TRUE) {

    echo "<h3><br>" . "Congregulation " . $_POST['fname'] . "! Your Record is Added to Database" . "<br></h3>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


    $sql = "SELECT * FROM `mytable` WHERE 1";

    $result = $conn->query($sql);
?>

<table style="width:100%">
    <tr>        <th>id#</th>   <th>Name</th>     <th>Roll#</th>     <th>Gender</th>    </tr>


    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            //echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["roll"] . "</td></tr>";

            echo "<tr>    <td>". $row["id"] . "</td>    <td>". $row["name"] ."</td><td>". $row["roll"] ."</td><td>". $row["gender"] ."</td>   </tr>";

        }
    } else {
        echo "0 results";
    }
    ?>

</table>


<?php

//close connection
$conn->close();

?>
</body>
</html>


























