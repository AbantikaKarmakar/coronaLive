<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'links.php'; ?>
    <?php include 'style.php'; ?>
    
</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="index.php">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#preventid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiadaywisereport.php">IndiaDayWise</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">IndiaCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#contactid">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<section class="corona_update container-fluid">
    <div class="my-5">
        <h3 class="text-uppercase text-center">Covid-19 live updates of india</h3>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
            <tr>
                <th class="text-capitalize">Lastupdatedtime</th>
                <th class="text-capitalize">State</th>
                <th class="text-capitalize">Confirmed</th>
                <th class="text-capitalize">Active</th>
                <th class="text-capitalize">Recovered</th>
                <th class="text-capitalize">Deaths</th>
            </tr>

            <?php

                $data = file_get_contents('https://data.covid19india.org/data.json');
                $coronalive = json_decode($data, true); //associative array
                // echo "<pre>";
                // print_r($coronalive);
                // echo "</pre>";
                $statescount = count($coronalive['statewise']);
                // echo $coronalive['statewise'][1]['state'];

                $i = 1;
                while($i < $statescount) {

                    ?>
                    <tr>
                        <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
                        <td><?php echo $coronalive['statewise'][$i]['state'] ?></td>
                        <td><?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
                        <td><?php echo $coronalive['statewise'][$i]['active'] ?></td>
                        <td><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
                        <td><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>
                    </tr>
                    <?php
                    $i++;
                }

            ?>

        </table>
    </div>
</section>

<div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>

<footer class="mt-5">
    <div class="footer_style text-white text-center container-fluid">
        <p>Copyright by Abantika 2021</p>
    </div>
</footer>

</body>

<script>

    jQuery.noConflict();

    mybutton = document.getElementById("myBtn");
    // when the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // when the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // for safari
        document.documentElement.scrollTop = 0; //for schrome, firefox, IE and Opera
    }

    
</script>
</html>

<?php 