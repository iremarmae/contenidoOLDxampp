<?php
        function conectar_DB(){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "myDB";
        
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
        
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully<br>";
            return $conn;
            }
