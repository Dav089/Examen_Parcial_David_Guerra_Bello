<!DOCTYPE html>
<html lang="en">
<?php 
    function getRefranes (){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "examen";

        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = SELECT sentence FROM refranero WHERE sentence LIKE ‘[info a buscar]%’;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<option value='.$row['printable_name'].'>'.$row['printable_name'].'</option>';
            }
        }
        $conn->close();
    }
?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Fjalla+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/main.css" type="text/css">
        <title> - Spanish Quotes - </title>
    </head>
    <body>
       <center>
            <h1 class="title">Spanish Quotes Generetor</h1>
            <input class="minimalist_input">
       
            <div id="suggestions" class="suggestions_panel">
                    <!-- SEARCH RESULTS GO HERE -->
                    <p> [NO RESULTS] </p>
            </div>
       </center>
    </body>
</html>

<script src="js/main.js"></script>

