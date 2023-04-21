<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <title>Loss</title>
    <style>
        .box {
            width: 50%;
            background-color: aquamarine;
        }

        .align_s {
            text-align: start;
        }

        .align_e {
            text-align: end;
        }

        .hover:hover {
            background-image: linear-gradient(lightgray,lightcoral);

        }

        .gain:hover {
            background-color: rgb(60, 179, 113);
        }

        .loss:hover {
            background-color: lightcoral;
        }
    </style>
</head>

<body>
    <div class="w-100">
        <table class="w-100 table">
            <!--<tr>
                <td> <button class="float-end loss">Loss</button>
                    <a href="top_stocks_API.php"> <button class="float-end gain">Gain</button> </a>
                </td>
            </tr>-->

            <div class="w-100 m-2">
                <!--                                               Loser                                      -->
                <tr>
                    <td class="p-2">
                        <div class="hover w-auto rounded shadow">
                            <div class="border-bottom ">
                                <div class="align_s"> <samp id="ln"> </div>
                                <div class="align_s"> <samp id="ls"> </div>
                                <div class="align_e">₹<samp id="lp"></samp></div>
                                <div class="align_e">(<samp id="lc"></samp>%)<b>↓</b></div>
                            </div>
                        </div>
                    </td>
                </tr>



                <script>
                    const opt = {
                        method: 'GET',
                        headers: {
                            'X-RapidAPI-Key': 'abd5c0ddb3mshaef7fb9da4c9b96p12fc7fjsn14b6b93095cc',
                            'X-RapidAPI-Host': 'real-time-finance-data.p.rapidapi.com'
                        }
                    };

                    fetch('https://real-time-finance-data.p.rapidapi.com/market-trends?trend_type=LOSERS&country=IN&language=en', options)
                        .then(response => response.json())
                        .then(response => {
                            document.getElementById('ls').innerHTML = response.data.trends[0].symbol;
                            document.getElementById('ln').innerHTML = response.data.trends[0].name;
                            document.getElementById('lp').innerHTML = response.data.trends[0].price;
                            document.getElementById('lc').innerHTML = response.data.trends[0].change_percent;
                        })
                        .catch(err => console.error(err));
                </script>








                <!--                                        box-2                                             -->
                <!--                                               Loser                                      -->

                <tr>
                    <td class="p-2">
                        <div class="hover w-auto rounded shadow mt-3">
                            <div class="border-bottom ">
                                <div class="align_s"> <samp id="lna"> </div>
                                <div class="align_s"> <samp id="lsy"> </div>
                                <div class="align_e">₹<samp id="lpr"></samp></div>
                                <div class="align_e">(<samp id="lch"></samp>%)<b>↓</b></div>
                            </div>
                        </div>
                    </td>
                </tr>



                <script>
                    const Opt = {
                        method: 'GET',
                        headers: {
                            'X-RapidAPI-Key': 'abd5c0ddb3mshaef7fb9da4c9b96p12fc7fjsn14b6b93095cc',
                            'X-RapidAPI-Host': 'real-time-finance-data.p.rapidapi.com'
                        }
                    };

                    fetch('https://real-time-finance-data.p.rapidapi.com/market-trends?trend_type=LOSERS&country=IN&language=en', options)
                        .then(response => response.json())
                        .then(response => {
                            document.getElementById('lsy').innerHTML = response.data.trends[1].symbol;
                            document.getElementById('lna').innerHTML = response.data.trends[1].name;
                            document.getElementById('lpr').innerHTML = response.data.trends[1].price;
                            document.getElementById('lch').innerHTML = response.data.trends[1].change_percent;
                        })
                        .catch(err => console.error(err));
                </script>







                <!--                                                   box-3                                   -->

                <!--                                               Loser                                      -->

                <tr>
                    <td class="p-2">
                        <div class="hover w-auto rounded shadow mt-3">
                            <div class="border-bottom ">
                                <div class="align_s"> <samp id="lN"> </div>
                                <div class="align_s"> <samp id="lS"> </div>
                                <div class="align_e">₹<samp id="lP"></samp></div>
                                <div class="align_e">(<samp id="lC"></samp>%)<b>↓</b></div>
                            </div>
                        </div>
                    </td>
                </tr>



                <script>
                    const oPt = {
                        method: 'GET',
                        headers: {
                            'X-RapidAPI-Key': 'abd5c0ddb3mshaef7fb9da4c9b96p12fc7fjsn14b6b93095cc',
                            'X-RapidAPI-Host': 'real-time-finance-data.p.rapidapi.com'
                        }
                    };

                    fetch('https://real-time-finance-data.p.rapidapi.com/market-trends?trend_type=LOSERS&country=IN&language=en', options)
                        .then(response => response.json())
                        .then(response => {
                            document.getElementById('lS').innerHTML = response.data.trends[2].symbol;
                            document.getElementById('lN').innerHTML = response.data.trends[2].name;
                            document.getElementById('lP').innerHTML = response.data.trends[2].price;
                            document.getElementById('lC').innerHTML = response.data.trends[2].change_percent;
                        })
                        .catch(err => console.error(err));
                </script>




                <!--                                                   box-4                                   -->


                <!--                                               Loser                                      -->

                <tr>
                    <td class="p-2">
                        <div class="hover w-auto rounded shadow mt-3">
                            <div class="border-bottom ">
                                <div class="align_s"> <samp id="lnA"> </div>
                                <div class="align_s"> <samp id="lsY"> </div>
                                <div class="align_e">₹<samp id="lpR"></samp></div>
                                <div class="align_e">(<samp id="lcH"></samp>%)<b>↓</b></div>
                            </div>
                        </div>
                    </td>
                </tr>
                <script>
                    const opT = {
                        method: 'GET',
                        headers: {
                            'X-RapidAPI-Key': 'abd5c0ddb3mshaef7fb9da4c9b96p12fc7fjsn14b6b93095cc',
                            'X-RapidAPI-Host': 'real-time-finance-data.p.rapidapi.com'
                        }
                    };

                    fetch('https://real-time-finance-data.p.rapidapi.com/market-trends?trend_type=LOSERS&country=IN&language=en', options)
                        .then(response => response.json())
                        .then(response => {
                            document.getElementById('lsY').innerHTML = response.data.trends[3].symbol;
                            document.getElementById('lnA').innerHTML = response.data.trends[3].name;
                            document.getElementById('lpR').innerHTML = response.data.trends[3].price;
                            document.getElementById('lcH').innerHTML = response.data.trends[3].change_percent;
                        })
                        .catch(err => console.error(err));
                </script>



                <!--                                                   box-5                                   -->


                <!--                                               Loser                                      -->

                <tr>
                    <td class="p-2">
                        <div class="hover w-auto rounded shadow mt-3">
                            <div class="border-bottom ">
                                <div class="align_s"> <samp id="lnaM"> </div>
                                <div class="align_s"> <samp id="lsyM"> </div>
                                <div class="align_e">₹<samp id="lprI"></samp></div>
                                <div class="align_e">(<samp id="lchA"></samp>%)<b>↓</b></div>
                            </div>
                        </div>
                    </td>
                </tr>


                <script>
                    const optI = {
                        method: 'GET',
                        headers: {
                            'X-RapidAPI-Key': 'abd5c0ddb3mshaef7fb9da4c9b96p12fc7fjsn14b6b93095cc',
                            'X-RapidAPI-Host': 'real-time-finance-data.p.rapidapi.com'
                        }
                    };

                    fetch('https://real-time-finance-data.p.rapidapi.com/market-trends?trend_type=LOSERS&country=IN&language=en', options)
                        .then(response => response.json())
                        .then(response => {
                            document.getElementById('lsyM').innerHTML = response.data.trends[4].symbol;
                            document.getElementById('lnaM').innerHTML = response.data.trends[4].name;
                            document.getElementById('lprI').innerHTML = response.data.trends[4].price;
                            document.getElementById('lchA').innerHTML = response.data.trends[4].change_percent;
                        })
                        .catch(err => console.error(err));
                </script>

            </div>
        </table>
    </div>
</body>

</html>