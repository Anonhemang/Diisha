<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Sectoral</title>
</head>

<body>
<script>
        $(document).ready(function() {
           
            $("#selPercent").change(function() {
                var selVal = this.value;
                console.log(selVal);
                $.ajax({
                    url: 'AATable.php',
                    data: {
                        id: selVal
                    },
                    success: function(responce) {
                        $('#sh').html(responce);
                    }
                })
            });
        })
    </script>

<div class="container-fluid w-auto h-auto bg-secondary mt-2">
        <h1>Changes in Stock Market</h1>
        <select name="" id="selPercent" class="mb-3 mt-3 me-5">
            <option value="all" id="">Select %</option>
            <option value="m10" id="">-100% - -91%</option>
            <option value="m9" id="">-90% - -81%</option>
            <option value="m8" id="">-80% - -71%</option>
            <option value="m7" id="">-70% - -61%</option>
            <option value="m6" id="">-60% - -51%</option>
            <option value="m5" id="">-50% - -41%</option>
            <option value="m4" id="">-40% - -31%</option>
            <option value="m3" id="">-30% - -21%</option>
            <option value="m2" id="">-20% - -11%</option>
            <option value="mone" id="">-10% - -1%</option>
            <option value="zero" id="">0% - 10%</option>
            <option value="one" id="">11% - 20%</option>
            <option value="two" id="">21% - 30%</option>
            <option value="three" id="">31% - 40%</option>
            <option value="four" id="">41% - 50%</option>
            <option value="five" id="">51% - 60%</option>
            <option value="six" id="">61% - 70%</option>
            <option value="seven" id="">71% - 80%</option>
            <option value="eight" id="">81% - 90%</option>
            <option value="nine" id="">91% - 100%</option>

        </select>
        <input type="search" name="Search" id="" placeholder="Search">
        <input type="submit" value="Go">
        </div>



        <div class="w-auto overflow-scroll d-flex " style="overflow-x: scroll; height:500px;" id="sh">

        <?php
        error_reporting('0');
        //Between 0 to 10
        function disp()
        
        {
            // create database connection
             $conn = mysqli_connect('localhost', 'saurabh', 'deepakgoyal1995', 'Diisha');
           
            // check if connection successful
            if (!$conn) {
                die("Connection failed_nottttt: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `stockdata` limit 8 ";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // display records in HTML table
                echo "<div class='w-auto m-auto h-100 d-flex justify-content-center'>";
                echo "<table class='w-auto mt-5 table text-center m-auto' border='1'>";
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

        disp();
        ?>


    </div>
</body>

</html>