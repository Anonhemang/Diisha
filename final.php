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
                    url: 'ftable.php',
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


    <div class="container-fluid w-100 h-100 bg-secondary">
        <h1>Sectoral Screener</h1>
        <select name="" id="selPercent" class="mb-3 mt-3 me-5">
            <option value="select" id="value0">Select %</option>
            <option value="m10" id="">-10% - -5%</option>
            <option value="m5" id="">-5% - 0%</option>
            <option value="1" id="">0% - 10%</option>
            <option value="2" id="">10% - 20%</option>
            <option value="3" id="">20% - 30%</option>
            <option value="4" id="">30% - 40%</option>
            <option value="5" id="">40% - 50%</option>
            <option value="6" id="">50% - 60%</option>
            <option value="7" id="">60% - 70%</option>
            <option value="8" id="">70% - 80%</option>
            <option value="9" id="">80% - 90%</option>
            <option value="10" id="">90% - 100%</option>

        </select>
        <input type="search" name="Search" id="" placeholder="Search">
        <input type="submit" value="Go">
    </div>

    <div class="w-100 h-100 d-flex justify-content-center" id="sh">

        <?php
        error_reporting('0');
        //Between 0 to 10
        function zero()
        {
            // create database connection
            $conn = mysqli_connect('localhost', 'root', '', 'sm');
            // check if connection successful
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            // check if any records found
            $sql = "SELECT * FROM `sample` order by percent_change desc;";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {

                // display records in HTML table
                echo "<div class='w-100 h-100 d-flex justify-content-center'>";
                echo "<table class=' w-50 mt-5 table text-center' border='1'>";
                echo " <tr>
                <th>Name</th>
                <th>Value</th>
                <th>Change</th>
                <th>Change(in %)</th>
                <th>Open</th>
                <th>Hign</th>
                <th>Low</th>
                <th>Prev</th>
                    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr'>
                    <td>{$row['Name']}</td>
                    <td>{$row['Value']}</td>
                    <td>{$row['Changee']}</td>
                    <td>{$row['Percent_change']}</td>
                    <td>{$row['Open']}</td>
                    <td>{$row['High']}</td>
                    <td>{$row['Low']}</td>
                    <td>{$row['Prev']}</td>
                </tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        }

        zero();
        ?>


    </div>
</body>

</html>