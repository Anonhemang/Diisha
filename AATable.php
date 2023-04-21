<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</head>

<body>
    
    
    
    <?php
    error_reporting('0');

    if ($_GET['id'] == 'all') {
        function all()
        {
            // create database connection
          $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
            // check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM stockdata limit 10 ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
              
                echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 m-auto table text-center' border='1'>";
                echo " <tr>
                        <th>Symbol</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                                         
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    
                     <td>{$row['Symbol']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                   
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        all();
    }
    ?>
    
    <!-- FOR DATA BETWEEN -100 to -91  -->
    <?php
    error_reporting('0');

    if ($_GET['id'] == 'm10') {
        function minusten()
        {
         $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
            //check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between -100 and -91";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                // echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 m-auto table text-center' border='1'>";
                echo " <tr>
                        <th>Symbol</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        minusten();
    }
    ?>
    
    
    
    <!-- FOR DATA BETWEEN -90 to -81  -->
    <?php
    error_reporting('0');

    if ($_GET['id'] == 'm9') {
        function minusnine()
        {
         $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
            //check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between -90 and -81";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                // echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 m-auto table text-center' border='1'>";
                echo " <tr>
                        <th>Symbol</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        minusnine();
    }
    ?>
    
    
    <!-- FOR DATA BETWEEN -80 to -71  -->
    <?php
    error_reporting('0');

    if ($_GET['id'] == 'm8') {
        function minuseight()
        {
         $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
            //check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between -80 and -71";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                // echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 m-auto  table text-center' border='1'>";
                echo " <tr>
                        <th>Symbol</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        minuseight();
    }
    ?>


 <!-- FOR DATA BETWEEN -70 to -61  -->
    <?php
    error_reporting('0');

    if ($_GET['id'] == 'm7') {
        function minusseven()
        {
         $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
            //check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between -70 and -61";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                // echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 m-auto  table text-center' border='1'>";
                echo " <tr>
                        <th>Symbol</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        minusseven();
    }
    ?>




 <!-- FOR DATA BETWEEN -60 to -51  -->
    <?php
    error_reporting('0');

    if ($_GET['id'] == 'm6') {
        function minussix()
        {
         $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
            //check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between -60 and -51";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                // echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 m-auto  table text-center' border='1'>";
                echo " <tr>
                        <th>Symbol</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        minussix();
    }
    ?>
    
    
    
    


  <!-- FOR DATA BETWEEN -50 to -41  -->
    <?php
    error_reporting('0');

    if ($_GET['id'] == 'm5') {
        function minusfive()
        {
         $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
            //check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between -50 and -41";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                // echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 m-auto  table text-center' border='1'>";
                echo " <tr>
                        <th>Symbol</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        minusfive();
    }
    ?>


    <!-- FOR DATA BETWEEN -40 to -31  -->
    <?php
    error_reporting('0');

    if ($_GET['id'] == 'm4') {
        function minusfour()
        {
         $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
            //check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between -40 and -31";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                // echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 m-auto table text-center' border='1'>";
                echo " <tr>
                        <th>Symbol</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        minusfour();
    }
    ?>

      
<!-- FOR DATA BETWEEN -30 to -21  -->
<?php
    error_reporting('0');

    if ($_GET['id'] == 'm3') {
        function minusthree()
        {
          $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
            //check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between -30 and -21";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                // echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 m-auto table text-center' border='1'>";
                echo " <tr>
                        <th>Symbol</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        minusthree();
    }
    ?>


    
<!-- FOR DATA BETWEEN -11 to -20  -->
<?php
    error_reporting('0');

    if ($_GET['id'] == 'm2') {
        function minustwo()
        {
          $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
            //check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between -20 and -11";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                // echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 m-auto table text-center' border='1'>";
                echo " <tr>
                        <th>Symbol</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        minustwo();
    }
    ?>
    
 <!-- From -10 To -1 -->
<?php
    error_reporting('0');

    if ($_GET['id'] == 'mone') {
        function minusone()
        {
          $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
            //check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between -10 and -1";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                // echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 m-auto table text-center' border='1'>";
                echo " <tr>
                        <th>Symbol</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        minusone();
    }
    ?>


<!-- From 0 To 10 -->
 
<?php
    error_reporting('0');

    if ($_GET['id'] == 'zero') {
        function one()
        {
          $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
            //check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between 0 and 10";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                // echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 m-auto table text-center' border='1'>";
                echo " <tr>
                        <th>Symbol</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        one();
    }
    ?>

<!-- From 11 To 20 -->
 
<?php
    error_reporting('0');

    if ($_GET['id'] == 'one') {
        function one()
        {
          $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
            //check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between 11 and 20";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                // echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 m-auto table text-center' border='1'>";
                echo " <tr>
                        <th>Symbol</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        one();
    }
    ?>

    <!-- From 21 To 30 -->
 
<?php
    error_reporting('0');

    if ($_GET['id'] == 'two') {
        function two()
        {
          $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
            //check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between 21 and 30";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                // echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 m-auto table text-center' border='1'>";
                echo " <tr>
                        <th>Symbol</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        two();
    }
    ?>

<!-- From 31 To 40 -->
<?php
    error_reporting('0');

    if ($_GET['id'] == 'three') {
        function three()
        {
          $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
            //check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between 31 and 40";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                // echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 m-auto table text-center' border='1'>";
                echo " <tr>
                        <th>Symbol</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        three();
    }
    ?>



    <!-- From 41 To 50 -->
<?php
    error_reporting('0');

    if ($_GET['id'] == 'four') {
        function four()
        {
          $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
            //check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between 41 and 50";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                // echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 m-auto table text-center' border='1'>";
                echo " <tr>
                        <th>Symbol</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        four();
    }
    ?>
    
    
    
    <!-- From 51 To 60 -->
<?php
    error_reporting('0');

    if ($_GET['id'] == 'five') {
        function five()
        {
          $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
            //check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between 51 and 60";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                // echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 m-auto table text-center' border='1'>";
                echo " <tr>
                        <th>Symbol</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        five();
    }
    ?>
    
    
    <!-- From 61 To 70 -->
<?php
    error_reporting('0');

    if ($_GET['id'] == 'six') {
        function six()
        {
          $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
            //check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between 61 and 70";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                // echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 m-auto table text-center' border='1'>";
                echo " <tr>
                        <th>Symbol</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        six();
    }
    ?>

    
    
    <!-- From 71 To 80 -->
<?php
    error_reporting('0');

    if ($_GET['id'] == 'seven') {
        function seven()
        {
          $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
            //check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between 71 and 80";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                // echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 m-auto table text-center' border='1'>";
                echo " <tr>
                        <th>Symbol</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        seven();
    }
    ?>
    
    
    
    
    
    <!-- From 81 To 90 -->
<?php
    error_reporting('0');

    if ($_GET['id'] == 'eight') {
        function eight()
        {
          $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
            //check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between 81 and 90";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                // echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 m-auto table text-center' border='1'>";
                echo " <tr>
                        <th>Symbol</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        eight();
    }
    ?>
    
    
    
    <!-- From 91 To 100 -->
<?php
    error_reporting('0');

    if ($_GET['id'] == 'nine') {
        function nine()
        {
          $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
            //check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` where Percent_change between 91 and 100";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                // echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class='w-50 mt-5 m-auto table text-center' border='1'>";
                echo " <tr>
                        <th>Symbol</th>
                        <th>Open</th>
                        <th>High</th>
                        <th>Low</th>
                        <th>Close</th>
                        <th>Change(in %)</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Symbol']}</td>
                    <td>{$row['Openn']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Closee']}</td>
                                      
                    <td>{$row['Percent_change']}</td>

                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }
        nine();
    }
    ?>



 


    </body>

</html>