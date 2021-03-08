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
  <script>
  $(document).ready(function(){
  $("#Link").click(function(){
  alert("Confirm your brower to link this Website!!!!!!!!")
  });
  });
  </script>
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
    
    <div class="jumbotron text-center " id="AA" style="background-image: url('img/31.png') ;min-height: 630px;position:relative;margin-top: -30px;">
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
      <div style="background-color: #D0584F;padding:34px 0px 17px; opacity: 0.7;position: absolute;bottom: 0px;left: 0px;width: 100%;margin-left: 869px;margin-bottom: 85px;">
        <div style="padding-right: 880px;">
          <h3 style="color: #FFFFFF;">What Can I Do with a Master’s in Marketing?</h3>
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
              id="cell1Button"></input>
              </br>
              <span id="1FunctionResult"></span>
            </div>
          </div>
        </div>
      </div>
      
      
      <div class="container">
        <div class="row" style="background-color: #FFFFFF;">
          <div class="col-sm-12" style="text-align: left;">
            <h3>Digital marketing executive</h3>
            <p>The digital marketing landscape is a competitive space for businesses, and it requires a specific skill set to get a company noticed. This is reflected in the growth of digital marketing job roles, with more importance focused on this area of marketing than ever before. <br>
            One study found that 61% of surveyed companies plan to add digital marketers to their team this year. Every day is different for digital marketers, they need an understanding of multiple channels, content marketing and SEO, to a name few. With digital marketing only continuing to grow, it is a fast-paced and exciting role you can sink your teeth into. </p>
          </div>
          <div class="col-sm-12" style="text-align: left;">
            
            <h3>Skills</h3>
            <p>As you explore the world of digital marketing through your Master’s, you will discover the influence that new technology has on marketing practice. You will need a strong understanding of this impact, alongside the most recent trends and developments.
            Flexibility and versatility are both essential for the role as it encompasses many aspects, and the digital world is ever-changing. The ability to create an effective communication strategy will set you apart in this field.</p>
          </div>
          <div class="col-sm-12" style="text-align: left;">
            <img src="img/32.png" alt="" style="width: 100%;">
            <h3>Brand manager</h3>
            <p>A brand helps customers identify a product or service and importantly, distinguish it from others. It is critical to businesses because the brand is how others perceive them; responsible for driving business and increasing brand awareness. <br>
            It is the responsibility of a brand manager to shape the brand image and personality, protecting the brand and ensuring others follow set brand guidelines for consistency</p>
          </div>
          <div class="col-sm-12" style="text-align: left;">
            <img src="img/33.png" alt="" style="width: 100%;">
            <h3>How to get your dream marketing role</h3>
            <p>Gaining a Master’s in Marketing is a great step into the sector but industry experience is also key, particularly if you’re looking to change careers.  If you know marketing is the right direction for you, an online, part-time course allows you to study alongside your job, building experience and learning at the same time. <br>
              With such varied roles across different industries, the marketing landscape offers something unique. Demonstrating how the discipline encompasses all sectors, Marketing Week (2018) revealed that the top sectors for marketing included:
              <br><i class="fa fa-arrow-right" aria-hidden="true"></i>
              gaming and gambling<br><i class="fa fa-arrow-right" aria-hidden="true"></i>
              automotive<br><i class="fa fa-arrow-right" aria-hidden="true"></i>
              travel and leisure<br><i class="fa fa-arrow-right" aria-hidden="true"></i>
              education<br>
              This varied industry offers an abundance of job opportunities for the right candidate. The chance to work across the globe, from the office, from home, small business, huge business or even freelance. <br>
            If you have a passion for marketing, find the role and the company that suits you. A Master’s in Marketing will give you the skills you need, whether analytical, research, creativity, organisation or planning.</p>
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