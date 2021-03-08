<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Study Abroad portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <script>
  $(document).ready(function(){
  $("#B").click(function(){
  alert("empty database")
  });
  });
  </script>
  <script>
  $(document).ready(function(){
  $("#W").click(function(){
  alert("Added this site to your browser wishlist!!!!")
  });
  });
  </script>
  <script>
  $(document).ready(function(){
  $("#G").click(function(){
  alert("Your browser need permission for google account access!!!!!")
  });
  });
  </script>
  <script>
  $(document).ready(function(){
  $("#F").click(function(){
  alert("Your browser need permission for Facebook account access!!!!!")
  });
  });
  </script>
  <script>
  $(document).ready(function(){
  $("#C").click(function(){
  $("#Login").toggle().style.display = "block";
  });
  });
  </script>
  <script>
  $(document).ready(function(){
  $("#X").click(function(){
  $("#Explore").toggle().style.display = "block";
  });
  });
  </script>
  <script>
  $(document).ready(function(){
  $("#Y").click(function(){
  $("#Decide").toggle().style.display = "block";
  });
  });
  </script>
  <script>
  $(document).ready(function(){
  $("#Z").click(function(){
  $("#Apply").toggle().style.display = "block";
  });
  });
  </script>
  <style>
  .A{background-color: #EDF3F6;
  display: inline-block;}
  .A:hover {
  background-color: #247BA0;
  }
  .A .B{
  max-height: 34px;
  margin-top: 93px;
  }
  .B:hover {
  max-height: 100%;
  margin-top:0px;
  }
  #I:hover {
  color:black;
  }
  </style>
  <body>
    <div class="container-fluid" style="background-color: #FFFFFF; position: -webkit-sticky;
      position: sticky;
      top: 0;z-index: 1;max-height: 72px;">
      
      <nav class="navbar navbar-expand-sm " style="background-color:#FFFFFF;">
        <ul class="navbar-nav" style="background-color: #FFFFFF;" >
          <li class="nav-item" >
            <a href="index.php"><img src="img/1.png" alt="" style="max-height: 40px;width:100px;margin-left: 10px; "></a>
          </li>
          <li class="nav-item">
            <a class="nav-link " id="X" href="#" onclick="showDiv()"><img src="img/2.png" alt="" style="max-height: 40px;width:107px;margin-left: 10px; ">
            </a>
            
          </li>
          
          <li class="nav-item">
            <a class="nav-link " id="Y" href="#" onclick="showDiv()"><img src="img/3.png" alt="" style="max-height: 40px;width:100px; margin-left: 10px;"></a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" id="Z" href="#"><img src="img/4.png" alt="" style="max-height: 40px;width:105px;margin-left: 10px; ">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="W"><img src="img/5.png" alt="" style="max-height: 40px;width:51px;margin-left: 640px; ">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="C"><img src="img/6.png" alt="" style="max-height: 40px;width:51px;margin-left: 1px; ">
            </a>
          </li>
        </ul>
      </nav>
      <br>
    </div>
    
    <div class="jumbotron text-center " id="AA" style="background-image: url('img/27.png') ;min-height: 630px;position:relative;margin-top: -30px;">
      <div id="Explore" style=" display:none;padding: 0px 132px 32px;
        margin-right: 967px;background-color: #FFFFFF;position: absolute;    margin-top: -34px;text-align: left;">
        <h4>View disciplines</h4><br>
        <i class="fa fa-tree" style="font-size:15px; "></i>
        <a href="AgForest.php" style="color: black; ">Agriculture & forest</a><br>
        <i class="fa fa-flask" style="font-size:15px;"></i>
        <a href="AppliedScience.php" style="color: black; ">Applied Science</a><br>
        <i class="fa fa-briefcase" style="font-size:15px;"></i>
        <a href="Art.php" style="color: black; ">Art,Design & Architecture</a><br>
        <i class="fa fa-laptop" style="font-size:15px;"></i>
        <a href="BS.php" style="color: black; ">Business &management</a><br>
        <i class="fa fa-book" style="font-size:15px;"></i>
        <a href="AgForest.php" style="color: black; ">Computer science & IT</a><br>
        <i class="fa fa-video-camera" style="font-size:15px;"></i>
        <a href="AgForest.php" style="color: black; ">Education & training</a><br>
        <i class="fa fa-flask" style="font-size:15px;"></i>
        <a href="AgForest.php" style="color: black; ">Humanities</a><br>
        <i class="fa fa-balance-scale" style="font-size:15px;"></i>
        
        <a href="AgForest.php" style="color: black; ">Law</a><br>
        <i class="fa fa-bullhorn" style="font-size:15px;"></i>
        <a href="AgForest.php" style="color: black; ">Social Science</a><br>
        
      </div>
      
      <div id="Decide" style=" display:none;padding: 0px 132px 32px;
        margin-right: 967px;background-color: #FFFFFF;position: absolute;    margin-top: -34px;">
        
        <h3 style="color: black;margin: 0px -90px 0px; ">University rankings per country</h3><br>
        <a href="Netherland.php" style="color: black;margin-right: 50px;">Netherland</a><br>
        <a href="Netherland.php" style="color: black;margin-right: 50px;">Uk</a><br>
        <a href="Netherland.php" style="color: black;margin-right: 50px;">Australia</a><br>
        <a href="Netherland.php" style="color: black;margin-right: 50px;">Canada</a><br>
        <a href="Netherland.php" style="color: black;margin-right: 50px;">Germany</a><br>
        <a href="Netherland.php" style="color: black;margin-right: 50px;">United States</a><br>
        <a href="Netherland.php" style="color: black;margin-right: 50px;">France</a><br>
        <a href="Netherland.php" style="color: black;margin-right: 50px;">Norway</a><br>
        <a href="Netherland.php" style="color: black;margin-right: 50px;">Japan</a><br>
        <a href="Netherland.php" style="color: black;margin-right: 50px;">Poland</a><br>
        
      </div>
      <div id="Apply" style=" display:none;padding: 0px 40px 32px;
        margin-right: 885px;background-color: #FFFFFF;position: absolute;    margin-top: -34px;text-align: left;">
        
        <h3 style="color: black;margin: 0px 0px -21px ;text-align: left;">Tips to Apply</h3><br>
        <a href="" style="color: black;text-align: left;">What is Transcript of Records and When Do Students need one?</a><br>
        <a href="" style="color: black;text-align: left;">Write a Sucessful Motivation Letter for Your Degree</a><br>
        <a href="" style="color: black;text-align: left;">How to Apply to University Worldwide in 2021</a><br>
        <a href="" style="color: black;text-align: left;">What Documents Do You need to Apply for a University Abroad? </a><br>
        <a href="" style="color: black;text-align: left;">6 Steps to Writing an Awesome CV for your Degree Application</a><br>
        
        
      </div>
      <div id="Login" style=" display:none;padding: 0px 16px 32px;
        margin-left: 885px;background-color: #FFFFFF;position: absolute;    margin-top: -34px;text-align: left;">
        
        <p style="color: black;margin: 0px 0px -21px ;text-align: center;">Free access to all our programmes and services</p><br>
        <div id="G" style="background-color: #4285F4;padding:3px 15px 3px;color: #FFFFFF;margin: 1px 46px 1px;">
          <a href=""><i class="fa fa-google-plus-square"  style="font-size:45px;color: #FFFFFF;margin: 1px 14px 1px; "><p style="font-size: 23px;
            float: right;
            margin-top: 9px;
          margin-left: 19px;">Continue With Google</p></i></a>
        </div>
        
        <div id="F" style="background-color: #4267B2;padding:0px 15px 0px;color: #FFFFFF;margin: 1px 46px 1px;">
          <a href=""><i class="fa fa-facebook-official" style="font-size:45px;color: #FFFFFF;margin: 1px 14px 1px; "><p style="font-size: 23px;
            float: right;
            margin-top: 9px;
          margin-left: 19px;">Continue With Facebook</p></i></a>
        </div>
        <div style="background-color: #FFFFFF;padding:3px 15px 3px;color: #FFFFFF;margin: 1px 46px 1px;    border: dotted;
          border-color: black;">
          <a href="registration/regform.php"><i class="fa fa-envelope" style="font-size:45px;color: black;margin: 1px 14px 1px; "><p style="font-size: 23px;
            float: right;
            margin-top: 9px;
          margin-left: 19px;">Continue With Email</p></i></a>
          s
        </div>
        <p style="text-align: center;">Have already a account? <span><a href="" style="color: #1E8558;">log in</a> </span></p>
        
      </div>
      <div style="background-color: orange;padding:34px 0px 17px; opacity: 0.7;position: absolute;bottom: 0px;left: 0px;width: 100%;margin-left: 869px;margin-bottom: 85px;">
        <div style="padding-right: 880px;">
          <h3 style="color: #FFFFFF;">The Stress-Free Way of Getting Great Accommodation as an International Student</h3>
          <h4 style="color: #FFFFFF;"><?php
          date_default_timezone_set("Asia/Dhaka");
          echo   " " . date("h:i:sa");
          ?></h4>
          <h4 style="color: #FFFFFF;"><?php
          date_default_timezone_set("Asia/Dhaka");
          echo   " " .date("Y-m-d");
          ?></h4>
        </div>
      </div>
      
    </div>
    <div class="jumbotron text-center" style="padding-right: 607px;">
      
      <div class="container" style=" position: -webkit-sticky;
        position: sticky;
        top: 0;font-size: 20px;padding-left: 394px;margin-left: 500px;margin-bottom: -336px;">
        <div class="card-deck mb-3 text-center">
          <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Attention!!</h4>
            </div>
            <!-- i have three cards below, each one has a button and an input field -->
            <div class="card-body d-flex flex-column">
              <!-- <h5 class="card-title" style="font-size: 200%">Longest Word</h5> -->
              <p class="card-text" style="font-size: 70%">Explore more than 60,000 Master's programmes from all around the world with Studyportals. </p>
              <input type="text" name="1Input" class="mt-auto" id="cell1Input">
              <input type="button" class="btn mt-auto btn-primary" placeholder="Where?(country,organisation)" name="1Button" value="Search"
              id="cell1Button" style="color: black;"></input>
              </br>
              <span id="1FunctionResult"></span>
            </div>
          </div>
        </div>
      </div>
      
      <h1>Types of student accommodation abroad</h1>
      <div class="container">
        <div class="row"style="background-color: #FFFFFF;">
          <div class="col-sm-12" style="text-align: left;">
            <h3>1. Student dorms provided by the university</h3>
            <p>You can apply for accommodation from the university. Dormitories and student residences are available at many universities in Europe. You may apply for accommodation at the same time you submit your study application or after you have received your admission confirmation.
            Advantages of living in a student residence usually include easy access to the campus grounds, the company of many international students and lower prices. The risk is that places are limited, and you might not get one. Also, living conditions are not always the best.</p>
          </div>
          <div class="col-sm-12" style="text-align: left;">
            <h3>2. Private accommodation</h3>
            <p>Many students consider private accommodation. Even in this instance, you can request assistance from the university staff to find apartments and fellow students interested in sharing rent. It is always a good idea to search for information on social network pages and student groups where you can find rent offers and other people looking for a place to stay.
            Additionally, now there are specialised online platforms designed to give you student accommodation options, such as Uniplaces (psss, you can get 25% off with this discount code: studyportalsuni).</p>
          </div>
          <div class="col-sm-12" style="text-align: left;">
            <h3>3. Living with a host</h3>
            <p>Because private accommodation can be expensive, sometimes students chose living with a host. This means you rent a room in a house or a flat of a host. While this is a cheap option, you don’t know how you will get along with the host. Plus, you won’t have a lot of intimacy.</p>
          </div>
          <div class="col-sm-12" style="text-align: left;">
            <h3>4. Hostels and other temporary accommodation</h3>
            <p>Students resort to hostels when they arrive in their new country before having found accommodation. Hostels and similar accommodation can be very cheap for a short period, but costly in the long run. So, you can use this option while looking for a more stable place to stay.</p>
          </div>
          <div class="col-sm-12" style="text-align: left;">
            <img src="img/28.png" alt="">
            <h3>The easy way to find student accommodation</h3>
            <p>Uniplaces and Studyportals help you pick the right place to stay with minimum effort and without worries of future complications. Uniplaces enables you to compare and contrast various accommodation options in 39 cities in 8 countries across Europe. Among the cities listed on Uniplaces are Lisbon, Porto, Barcelona, Madrid, Valencia, Rome, Bologna, Florence, and Milan. <br>
              Not only that, they include the following services:
              <br><i class="fa fa-arrow-right" aria-hidden="true"></i>
              Top quality apartments<br><i class="fa fa-arrow-right" aria-hidden="true"></i>
              Easy ways to see how rooms look<br><i class="fa fa-arrow-right" aria-hidden="true"></i>
              Up to date listings<br><i class="fa fa-arrow-right" aria-hidden="true"></i>
              Simple booking process<br><i class="fa fa-arrow-right" aria-hidden="true"></i>
              Secure payment<br><i class="fa fa-arrow-right" aria-hidden="true"></i>
              Discounts to students<br>
              The great news is that you can book accommodation with Uniplaces at a 25% discount on your service fee, by using our promocode: studyportalsuni
              Since launching in 2013, the focus of Uniplaces has been to help students find quality accommodation with little effort through trusted landlords across Europe. Collaborating with Studyportals this takes the students' experience to the next level!
            And remember! Whatever you choose, make sure you settle your accommodation arrangements before coming to study abroad, to avoid complications and start your studies carefree.</p>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="container-fluid" style="background-image: url('img/26.png') ;padding: 52px 111px 80px;display:inherit;z-index: 1;    margin-top: 35px;">
      <div class="row">
        <div class="col-sm-4" style="color:#FFFFFF;text-align: left; ">
          <h3>About Study portal</h3>
          <a href=""><p style="color:#FFFFFF;margin-left: 10px;">About Study portal</p></a>
          <a href=""><p style="color:#FFFFFF;margin-left: 10px;">Our Marketing Services</p></a>
          <a href=""><p style="color:#FFFFFF;margin-left: 10px;">Careers</p></a>
          <a href=""><p style="color:#FFFFFF;margin-left: 10px;">Contact Us</p></a>
          
        </div>
        <div class="col-sm-4" style="color:#FFFFFF;text-align: left; ">
          <h3>Our Websites</h3>
          <a href=""><p style="color:#FFFFFF;margin-left: 10px;">Bachelorsportal</p></a>
          <a href=""><p style="color:#FFFFFF;margin-left: 10px;">Mastersportal</p></a>
          <a href=""><p style="color:#FFFFFF;margin-left: 10px;">PhDportal</p></a>
          <a href=""><p style="color:#FFFFFF;margin-left: 10px;">Scholarshipportal</p></a>
          <a href=""><p style="color:#FFFFFF;margin-left: 10px;">ShortCoursesportal</p></a>
          <a href=""><p style="color:#FFFFFF;margin-left: 10px;">AdmissionTestportal</p></a>
          <a href=""><p style="color:#FFFFFF;margin-left: 10px;">EnglishTestportal</p></a>
          
        </div>
        <div class="col-sm-4" id="I" style="color:#FFFFFF;text-align: left; ">
          <h3>FolloW Us</h3>
          <a href=""><i class="fa fa-facebook I" id="I" style="font-size:45px;color: #FFFFFF;margin: 11px 14px 2px; "></i></a>
          <a href=""><i class="fa fa-linkedin I" id="I"  style="font-size:45px;color: #FFFFFF;margin: 11px 14px 2px; "></i></a>
          <a href=""><i class="fa fa-youtube I" id="I" style="font-size:45px;color: #FFFFFF; margin: 11px 14px 2px;"></i></a>
          <a href=""><i class="fa fa-skype I" id="I" style="font-size:45px;color: #FFFFFF;margin: 11px 14px 2px; "></i></a>
          <a href=""><i class="fa fa-instagram I" id="I" style="font-size:45px;color: #FFFFFF;margin: 11px 14px 2px; "></i></a>
          
        </div>
      </div>
    </div>
  </body>
</html>