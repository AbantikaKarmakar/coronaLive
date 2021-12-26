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
    <table class="table text-center" id="tbl">

    <?php 

    $data = file_get_contents('https://data.covid19india.org/data.json');
    $coronadata = json_decode($data, true);

    echo "<pre";
    // print_r($coronadata);
    $totalcount = count($coronadata['cases_time_series']);

    $i = 0;
    while($i < $totalcount) {
        ?>

        <tr>
            <th class="text-left">Date & Month</th>
            <th colspan="5"></th>
        </tr>
        <tr>
            <td colspan="6" class="text-left"><?php echo $coronadata['cases_time_series'][$i]['date']."<br>"; ?> </tr>
            <tr class="text-capitalize text-white">
                <th style="color: #fff; background: #2196f3;">total confirmed</th>
                <th style="color: #fff; background: #ffc107;">daily confirmed</th>
                <th style="color: #fff; background: #008C76FF;">daily recovered</th>
                <th style="color: #fff; background: #e91e7f;">daily deceased</th>
                <th style="color: #fff; background: #4caf50;">total recovered</th>
                <th style="color: #fff; background: #EE2737FF;">total deceased</th>
            </tr>

        <tr class="mb-5">
            <td style="background: #bed2f3;"><?php echo $coronadata['cases_time_series'][$i]['totalconfirmed']."</br>"; ?></td>
            <td style="background: #ffe493;"><?php echo $coronadata['cases_time_series'][$i]['dailyconfirmed']."</br>"; ?></td>
            <td style="background: #9ED9CCFF;"><?php echo $coronadata['cases_time_series'][$i]['dailyrecovered']."</br>"; ?></td>
            <td style="background: #fc95c6;"><?php echo $coronadata['cases_time_series'][$i]['dailydeceased']."</br>"; ?></td>
            <td style="background: #88d28b;"><?php echo $coronadata['cases_time_series'][$i]['totalrecovered']."</br>"; ?></td>
            <td style="background: #fb99a1;"><?php echo $coronadata['cases_time_series'][$i]['totaldeceased']."</br>"; ?></td>
        </tr>

        <?php
        $i++;
    }

    //passing true as the second argument to json_decode()
    // when you do this, instead of objects you'll get associative arrays - arrays with strings for keys.
    // again you access the elements thereof as usual, e.g. $array['key'].

    ?>
    </table>

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