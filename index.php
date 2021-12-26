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
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiadaywisereport.php">IndiaDayWise</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">IndiaCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<div class="main_header">
    <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
            <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                <img src="images/1.png" width="300" height="300">
            </div>
        </div>

        <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
            <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                <h1>Let's Stay Safe & Fight Together Against Cor <span class="corona_rot"><img src="images/2.png" width="70" height="70"></span> na Virus</h1>
            </div>
        </div>
    </div>
</div>

<section class="corona_update container-fluid">
    <div class="mb-3">
        <h3 class="text-uppercase text-center">Covid-19 live updates of the world</h3>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center" id="tbval">
            <tr>
                <th>Country</th>
                <th>TotalConfirmed</th>
                <th>TotalRecovered</th>
                <th>TotalDeaths</th>
                <th>NewConfirmed</th>
                <th>NewRecovered</th>
                <th>NewDeaths</th>
            </tr>
        </table>
    </div>

    <div class="d-flex justify-content-around align-items-center count-style">
        <div>
            <h1 class="count">1,524,266</h1>
            <p>Passengers screened at airport</p>
        </div>
        <div>
            <h1 class="count">512</h1>
            <p>Active COVID-19 cases</p>
        </div>
        <div>
            <h1 class="count">40</h1>
            <p>Cured/discharged cases</p>
        </div>
        <div>
            <h1 class="count">9</h1>
            <p>Death cases</p>
        </div>
    </div>
</section>

<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
    <div class="section_header text-center mb-5 mt-5">
        <h1>About COVID-19</h1>
    </div>

    <div class="row pt-5">
        <div class="col-lg-5 col-md-6 col-12 ml-5">
            <img src="images/3.jpg" class="img-fluid">
        </div>

        <div class="col-lg-6 col-md-6 col-12 about_res">
            <h2>What is COVID-19 (Corona-Virus)</h2>
            <p>COVID-19 is the infectious disease caused by the most recently discovered coronavirus. This new virus and disease were unknown before the outbreak began in Wuhan, China, in December 2019.</p>
            <p>Coronaviruses are a large family of viruses which may cause illness in animals or humans. In humans, several coronaviruses are known to cause repiratory infections ranging from the common cold to more severe diseases such as the Middle East Respiratory Syndrome(MERS) and Severe Acute Respiratory Stndrome(SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19.</p>
        </div>
    </div>
</div>

<div class="container-fluid pt-5 pb-5" id="sympid">
    <div class="section_header text-center mb-5 mt-5">
        <h1>Coronavirus Symptoms</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/4.png" class="img-fluid" width="120" height="120">
                <figcaption>Cough</figcaption>  
                </figure>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/5.png" class="img-fluid" width="120" height="120">
                <figcaption>Runny Nose</figcaption>  
                </figure>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/6.png" class="img-fluid" width="120" height="120">
                <figcaption>Fever</figcaption>  
                </figure>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/7.png" class="img-fluid" width="120" height="120">
                <figcaption>Cold</figcaption>  
                </figure>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/8.png" class="img-fluid" width="120" height="120">
                <figcaption>Tiredness</figcaption>  
                </figure>
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/9.png" class="img-fluid" width="120" height="120">
                <figcaption>Difficulty breathing (Severe Cases)</figcaption>  
                </figure>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
    <div class="section_header text-center mb-5 mt-5">
        <h1>6 Steps Prevention Against Coronavirus</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                    <img src="images/10.png" class="img-fluid" width="90" height="90">  
                    </figure>
                    </div>

                    <div class="col-lg-8 col-md-8 col-12">
                    <p>Wash your hands regularly for 20 seconds with soap and water or alcohol-based hand rub.</p>
                    </div>
                </div>
                
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                    <img src="images/11.png" class="img-fluid" width="90" height="90">  
                    </figure>
                    </div>

                    <div class="col-lg-8 col-md-8 col-12">
                    <p>Cover your nose and mouth with a disposable tissue or a flexed elbow when you cough or sneeze.</p>
                    </div>
                </div>
                
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                    <img src="images/12.png" class="img-fluid" width="90" height="90">  
                    </figure>
                    </div>

                    <div class="col-lg-8 col-md-8 col-12">
                    <p>Avoid close contact (1 meter or 3 feet) with people who are unwell.</p>
                    </div>
                </div>
                
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                    <img src="images/13.png" class="img-fluid" width="90" height="90">  
                    </figure>
                    </div>

                    <div class="col-lg-8 col-md-8 col-12">
                    <p>Stay home and self-isolate from others in the household if you feel unwell.</p>
                    </div>
                </div>
                
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                    <img src="images/14.png" class="img-fluid" width="90" height="90">  
                    </figure>
                    </div>

                    <div class="col-lg-8 col-md-8 col-12">
                    <p>Stay informed by watching news and follow the recommended practices.</p>
                    </div>
                </div>
                
            </div>

            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                    <img src="images/15.png" class="img-fluid" width="90" height="90">  
                    </figure>
                    </div>

                    <div class="col-lg-8 col-md-8 col-12">
                    <p>If you have fever, cough and difficulty breathing, seek medical care early.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="container-fluid pt-5 pb-5" id="contactid">
    <div class="section_header text-center mb-5 mt-5">
        <h1>CONTACT US ASAP</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
    <form action="" method="POST">
  
    <div class="form-group">
    <label>username</label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email" placeholder="email" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label>mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
  </div>

  <div class="form-group">
      <label>Select Symptoms</label><br>

      <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
          <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
          <label class="custom-control-label" for="customcheckbox1">Cold</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
          <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
          <label class="custom-control-label" for="customcheckbox2">Fever</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
          <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
          <label class="custom-control-label" for="customcheckbox3">Difficulty in breathing</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
          <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
          <label class="custom-control-label" for="customcheckbox4">Feeling weak</label>
      </div>
  </div>
  
  <div class="form-group">
    <label>Describe how you are feeling</label>
    <textarea name="msg" class="form-control" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
            </div>
        </div>
    </div>

</div>

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
    jQuery(document).ready(function(){
            $('.count').counterUp({
            delay: 10,
            time: 3000
        });
    });

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

    function fetch() {
        $.get("https://api.covid19api.com/summary",
         function(data) {
            //  console.log(data['Countries'].length);
            var tbval = document.getElementById('tbval');
            for(var i=1; i<(data['Countries'].length); i++) {
                var x = tbval.insertRow();
                x.insertCell(0);
                tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                tbval.rows[i].cells[0].style.background = '#7a4a91';
                tbval.rows[i].cells[0].style.color = '#fff';
                x.insertCell(1);
                tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                tbval.rows[i].cells[1].style.background = '#4bb7d8';
                x.insertCell(2);
                tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                tbval.rows[i].cells[2].style.background = '#4bb7d8';
                x.insertCell(3);
                tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                tbval.rows[i].cells[3].style.background = '#f36e23';
                x.insertCell(4);
                tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
                tbval.rows[i].cells[4].style.background = '#4bb7d8';
                x.insertCell(5);
                tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                tbval.rows[i].cells[5].style.background = '#9cc850';
                x.insertCell(6);
                tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
                tbval.rows[i].cells[6].style.background = '#f36e23';
            }
         }
        );
    }
</script>
</html>

<?php 

include 'dbcon.php';

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symp = $_POST['coronasym'];
    $msg = $_POST['msg'];

    $chk = "";

    foreach ($symp as $chk1) {
        $chk .= $chk1.",";
    }
    $insertquery = "insert into coronacase(username, email, mobile, symp, message) values('$username', '$email', '$mobile', '$chk', '$msg')";

    $query = mysqli_query($con, $insertquery);
    if($query) {
        ?>
        <script>
            alert("Data inserted successfully");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Data not inserted");
        </script>
        <?php
    }
}

?>