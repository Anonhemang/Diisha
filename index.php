<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stocks</title>
    <link rel="shortcut icon" type="img/jpg" href="Logo.jpeg">




    <!-- bootstrap link css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <style>
                                       /* STARTING OF HEADER CSS */

        .Headerp1 {
            background-color: #ffffff;
            margin: 0px;
            padding: 0px;
        }

        .nav-bar-1 {
            display: flex;
            border-bottom: 1px #cccccc solid;
            padding: 16px;
            justify-content: space-around;
            height: 45px;
            align-items: center;
        }

        .dir-con-lists {
            list-style-type: none;
            overflow: hidden;
            padding: 0;
            margin: 0;

        }

        .con-lin-dec {
            float: left;
            font-weight: 400;

        }

        .links-dr-1 {
            color: #111827;
            font-size: 17px;
            padding: 10px 10px;
            text-decoration: none
        }

        #nav-div-2 {
            display: flex;

        }

        .sec-div-1 {
            display: flex;

        }

        .dir-con-lists {
            display: flex;
            flex-direction: row;
        }

        .link-hl-1 {
            margin: 10px;
        }

        #cmp-lgo-img {
            justify-content: left;
            margin-right: 450px;
            color: #7e22ce;
            font-weight: 600;
            font-size: 20px;
        }

        #navb1 {
            color: aliceblue;
            background-color: #7e22ce;
            font-weight: 600;
            padding: 4.5px;
            border-radius: 10px;
            border: none;

        }

        #navb1:hover {
            background-color: #582c84;
        }

        #navb2 {
            color: aliceblue;
            background-color: #7e22ce;
            font-weight: 600;
            padding: 4.5px;
            border-radius: 10px;
            margin-left: 10px;
            border: none;
        }

        #navb2:hover {
            background-color: #582c84;
        }

        .cnt-hd-1 {
            width: 100%;
            border-bottom: 1px solid #cccccc;
            color: #7e22ce;
            font-size: 17px;
            align-items: center;
            display: flex;
            padding: 10px 0px;
            justify-content: center;
            box-shadow: -2px 8px 20px .1px rgb(174, 174, 174);
            font-weight: 500;

        }

        .srch-div-1 {
            width: auto;
            text-align: center;
        }

        .header {
            position: fixed;
        }

        .m-content-div {
            height: 30rem;
            display: flex;
        }


        .news-div-new {
            background-color: white;
            width: 50%;
        }

        .nfty-det {
            background-color: white;
            width: 50%;
        }


        #srchbr {
            width: 19rem;
            height: 1.8rem;
            border-radius: 10px;
        }

        .links-dr-1 {
            margin: 10px;
        }

        .con-lin-dec :hover {
            text-decoration: underline;
        }

        input[type="text"]:focus {
            border: 2px solid #7e22ce;
            /* Change this to the highlight color of your choice */
            outline: none;
        }

        /* hidden drop-dn-con-1 menu */

        .drop-dn-btn-1 {
            background-color: #7e22ce;
            color: white;
            padding: 10px;
            font-size: 15px;
            border: none;
            cursor: pointer;
            border-radius: 10px;
        }

        .drop-dn-con-1 {
            position: relative;
            display: inline-block;
        }

        .drop-dn-con-1-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .drop-dn-con-1-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .drop-dn-con-1-content a:hover {
            background-color: #f1f1f1
        }

        .drop-dn-con-1:hover .drop-dn-con-1-content {
            display: block;
        }

        .drop-dn-con-1:hover .drop-dn-btn-1 {
            background-color: #582c84;
        }

        /* Responsivness */

        @media screen and (min-width: 320px) and (max-width : 479px) {

            .m-content-div {

                display: flex;
                flex-direction: column;
                width: 100%;
                height: auto;
                margin-top: 48px;
            }

            .cnt-hd-1 {
                padding: 5px 0px 5px 0px;
                width: 100%;
                justify-content: start;
            }

            .sec-div-1 {
                display: none;
                width: 20%;
            }

            #navb1,
            #navb2 {
                display: none;
            }


            #srchbr {
                width: 8rem;
                height: 1rem;
                float: left;
            }

            .srch-div-1 {
                padding-left: 9px;
                width: 7.5rem;
            }

            #cmp-lgo-img {
                margin: 0;
            }

            .navbar2 {
                float: left;
                width: 100%;
            }

            .nav-bar-1 {
                justify-content: start;
                text-align: left;
                width: 100%;
                padding: 0px;
            }

            .news-div-new {
                width: 100%;
                height: auto;
            }

            .nfty-det {
                width: 100%;
                height: auto;
            }

            .drop-dn-btn-1 {
                padding-bottom: 5px;
            }

            .drop-dn-con-1 {
                margin-left: 30px;
                width: 20px;
            }

            .nav-bar-1 {
                justify-content: center;
            }

            .drop-dn-con-1-content {
                max-width: 20px;
            }
        }

        @media screen and (min-width: 480px) and (max-width : 768px) {

            .m-content-div {

                display: flex;
                flex-direction: row;
            }

            .m-content-div {

                display: flex;
                flex-direction: column;
                width: 100%;
                height: auto;
                margin-top: 49px;
            }

            .cnt-hd-1 {
                padding: 5px 0px 5px 0px;

                width: 100%;
            }

            .sec-div-1 {
                display: none;
                width: 20%;
            }

            #navb1,
            #navb2 {
                display: none;
            }


            #srchbr {
                width: 11rem;
                height: 1.5rem;
                float: left;
            }

            .srch-div-1 {
                width: 8rem;
            }

            #cmp-lgo-img {
                margin: 0;
            }

            .navbar2 {
                float: left;
                width: 100%;
            }

            .nav-bar-1 {
                justify-content: start;
                text-align: left;
                width: 100%;
                padding: 0px;
            }

            .news-div-new {
                width: 100%;
                height: auto;
            }

            .nfty-det {
                width: 100%;
                height: auto;

            }

            .drop-dn-btn-1 {
                margin-left: 40px;
                padding-bottom: 5px;
            }

            .drop-dn-con-1 {
                margin-left: 30px;
                width: 20px;
            }

            .nav-bar-1 {
                justify-content: center;
            }

        }

        @media screen and (min-width: 769px) and (max-width : 959px) {

            .m-content-div {

                display: flex;
                flex-direction: row;
            }

            .drop-dn-btn-1 {
                display: none;
            }

            #cmp-lgo-img {
                margin-right: 200px;
            }

            .cnt-hd-1 {
                width: 100%;
                padding: 10px 0px 10px 0px;
            }

        }

        @media screen and (min-width: 960px) and (max-width : 1023px) {

            .m-content-div {

                display: flex;
                flex-direction: row;
            }

            .drop-dn-btn-1 {
                display: none;
            }

            #cmp-lgo-img {
                margin-right: 300px;
            }
        }

        @media screen and (min-width: 1024px) {

            .m-content-div {

                display: flex;
                flex-direction: row;
            }

            .drop-dn-btn-1 {
                display: none;
            }

            #cmp-lgo-img {
                margin-right: 387px;
            }
        }

        .logo{
            width:140px; 
            height:90px;
            
        }


        /* Ending of Header css */
    </style>

</head>

<body>


    <!-- CODE FOR HEADER  -->

    <header class="Headerp1">

        <!-- Top navigation bar -->

        <div class="nav-bar-1 h-auto">
            <div id="cmp-lgo-img">
                <span class="cmp-nm">
                <img src="Logo.jpeg" class="logo" >
                </span>
            </div>

            <!-- Navigation bar Contact Details -->

            <div class="sec-div-1">

                <ul class="dir-con-lists">
                    <li class="con-lin-dec"> <a href="#" class="links-dr-1">Contact Us</a></li>
                    <li class="con-lin-dec"> <a href="#" class="links-dr-1">Work with Us</a></li>
                </ul>


            </div>

            <!-- Login Signup Button -->

            <div class="navdiv">
                <button id="navb1">Login</button>
                <button id="navb2">Signup</button>
            </div>
        </div>

        <!-- srch-div-1 box second navigation bar -->

        <div class="navbar2">
            <div class="cnt-hd-1">
                <div class="srch-div-1">
                    <input type="text" name="srch-div-1" id="srchbr">
                </div>

                <!-- hidden drop down menu -->

                <div class="drop-dn-con-1">
                    <button class="drop-dn-btn-1">More</button>
                    <div class="drop-dn-con-1-content">
                        <a href="#">Login</a>
                        <a href="#">Signup</a>
                        <a href="#">Contact Us</a>
                        <a href="#">Work with Us</a>
                    </div>
                </div>

            </div>
        </div>

        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright">
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                    {
                        "symbols" = [{
                                "proName": "FOREXCOM:SPXUSD",
                                "title": "S&P 500"
                            },
                            {
                                "proName": "FOREXCOM:NSXUSD",
                                "title": "US 100"
                            },
                            {
                                "proName": "FX_IDC:EURUSD",
                                "title": "EUR/USD"
                            },
                            {
                                "proName": "BITSTAMP:BTCUSD",
                                "title": "Bitcoin"
                            },
                            {
                                "proName": "BITSTAMP:ETHUSD",
                                "title": "Ethereum"
                            }
                        ],
                        "showSymbolLogo"= true,
                        "colorTheme"= "light",
                        "isTransparent"= false,
                        "displayMode"= "adaptive",
                        "locale"= "in"
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->



            <!-- Start of Gold And Silver Price -->
            <!-- Removed name  -->
            <?php
            include('');
            ?>




            <!-- STARTING OF STOCK DATA -->

            
            <div class="">
  <!-- Removed name  -->

                <table id="forex" class="">
                <?php 
            include('');
            ?>
                </table>
                </div>

        </div>

        <div class="container"></div>
        <!-- ENDING OF STOCK -->



    
        <div class="w-100 d-inline-block">
            <div class=" m-auto">

  <!-- Removed name  -->
                <!--                                         Top 10 Stocks                                  -->
                <div class=" w-100 justify-content-center">
                    <?php
                    include('');
                    ?>
                </div>
               


        </div> 
        <!--                                    ETF's                                           -->

        <div class="">
            <?php
            include('ETF.php');
            ?>

        </div>

        <!--                                          Analysis                                 -->
        <div class="w-100">
            <?php
            include('Analysis.php');
            ?>
        </div>



        </section>

        <!-- bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script>
            // fetch("https://www.alphavantage.co/query?function=TIME_SERIES_DAILY_ADJUSTED&symbol=RELIANCE.BSE&outputsize=full&apikey=MUVG2COHDX3CW6HQ").then((res) => {
            //   return res.json();
            // }).then((data) => {
            //   console.log(data)
            //   const name = data.;
            //   console.log(name)
            // }).catch((err)=>{
            //   console.log(err)
            // })
            const axisFund = fetch("https://api.mfapi.in/mf/125354") //2285
            const tataFund = fetch("https://api.mfapi.in/mf/100416") //2790
            const hdfcFund = fetch("https://api.mfapi.in/mf/102145") //2942
            const landtFund = fetch("https://api.mfapi.in/mf/119417") //2435
            const sbiFund = fetch("https://api.mfapi.in/mf/119827") //2514
            const quantFund = fetch("https://api.mfapi.in/mf/100172") //3656
            const licFund = fetch("https://api.mfapi.in/mf/101202") //2262
            const idfcFund = fetch("https://api.mfapi.in/mf/118421") //2514
            const taurusFund = fetch("https://api.mfapi.in/mf/118881") //2517


            // .then((res)=>{
            //   return res.json();

            // }).then((data)=>{
            //   console.log(data)
            //   document.getElementById("mutual_fund1").innerHTML = data.meta.fund_house;
            // })
            Promise.all([axisFund, tataFund, hdfcFund, landtFund, sbiFund, quantFund, licFund, idfcFund, taurusFund]).then((res) => {
                return Promise.all(res.map(val => val.json()));
            }).then((data) => [
                console.log(data),

                document.getElementById("mutual_fund1").innerHTML = data[0].meta.fund_house,
                document.getElementById("mutual_fund2").innerHTML = data[1].meta.fund_house,
                document.getElementById("mutual_fund3").innerHTML = data[2].meta.fund_house,
                document.getElementById("mutual_fund4").innerHTML = data[3].meta.fund_house,
                document.getElementById("mutual_fund5").innerHTML = data[4].meta.fund_house,
                document.getElementById("mutual_fund6").innerHTML = data[5].meta.fund_house,
                document.getElementById("mutual_fund7").innerHTML = data[6].meta.fund_house,
                document.getElementById("mutual_fund8").innerHTML = data[7].meta.fund_house,
                document.getElementById("mutual_fund9").innerHTML = data[8].meta.fund_house,

                // document.getElementById("axis-5yr").innerHTML = 

            ]).catch((err) => {
                console.log(err)
            })
        </script>

        <script src="index.js"></script>

<?php 
include('footer.php')
?>



</body>

</html>

<!-- mutualFund api -->
<!-- https://www.mfapi.in/ -->