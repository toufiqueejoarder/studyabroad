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
    
    <div class="jumbotron text-center " id="AA" style="background-image: url('img/7.png') ; position:relative;margin-top: -30px;">
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
      <div class="container-fluid"  >
        <div class="row">
          <div class="col-sm-12" style="margin-top: 200px;margin-bottom: 50px;">
            <h1 style="color: #FFFFFF;font-size: 65px;">FIND DREAM STUDY</h1>
            
            <p style="color: #FFFFFF;font-size: 30px;">Discover thousands of degrees worldwide!</p>
          </div>
          
        </div>
      </div>
      <div style="background-color: #0A323C;padding:34px 0px 17px; opacity: 0.7;position: absolute;bottom: 0px;left: 0px;width: 100%;">
        <div class="input-group mb-3" style="width: 75%;">
          <input type="text" class="form-control" placeholder=" What do you want to study? " aria-label="Recipient's username" aria-describedby="basic-addon2" style="margin-left: 350px;padding:3px 60px 3px;width: 15%;">
          <input type="text" class="form-control" placeholder="Where?(country,organisation)" aria-label="Recipient's username" aria-describedby="basic-addon2" style="padding:3px 60px 3px;width: 15%;">
          <div class="input-group-append" style="background-color: #E1664B ;">
            <input type="submit" id="B" class="btn btn-info" value="Search" style="background-color: #E1664B ;padding:3px 15px 3px;color: #FFFFFF;">
            
          </div>
        </div>
      </div>
    </div>
    <div class="jumbotron text-center">
      <h1>Browse Degrees Worldwide</h1>
      <p>Arranged by Name</p>
      <div class="container">
        <div class="row">
          <div class="col-sm-4" style="text-align: left;">
            <p style=""><a style ="color: black;" href="Netherland.php">Afganistan(1)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">Albania(8)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">Australia(3456)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">Austria(308)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">Azerbaijan(6)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">Bahran(13)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">Bangladesh(42)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">belgium(325)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">Brazil(17)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">Canada(2399)</a><br></p>
          </div>
          <div class="col-sm-4" style="text-align: left;">
            <p style=""><a style ="color: black;" href="Netherland.php">Chaina(426)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">Czech Republic(191)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">Denmark(301)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">Ecuador(10)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">Finland(374)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">France(880)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">Germany(1320)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">Greece(126)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">India(527)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">Italy(633)</a><br></p>
          </div>
          <div class="col-sm-4" style="text-align: left;">
            <p style=""><a style ="color: black;" href="Netherland.php">Japan(112)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">Malaysia(524)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">Pakistan(200)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">Russia(256)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">Singapur(247)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">South Africa(1014)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">United kingdom(16736)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">United State(28057)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">Vietnam(63)</a><br></p>
            <p style=""><a style ="color: black;" href="Netherland.php">Zimbabwe(29)</a><br></p>
          </div>
        </div>
      </div>
    </div>
    
    <H3 style="text-align: center;margin-top: 60px;">Where to study abroad?</H3>
    <div class="row" style="text-align: center;z-index: -1">
      <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 2px 0px 2px;position: relative;">
        <img src="img/12.png" height="100%" width="100%">
        <div class="B" style="position: absolute;top: 0;left: 0;background-color:#247BA0;opacity: 0.6;color: #FFFFFF; ">
          <H4>Esrail</H4>
          <p style="font-size: 11px;">Esrail is one of the best country to study for International students .They are  providing great acomondation with low cost and quality</p>
        </div>
      </div>
      <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 2px 0px 2px;position: relative;">
        <img src="img/13.png" height="100%" width="100%">
        <div class="B" style="position: absolute;top: 0;left: 0;background-color:#247BA0;opacity: 0.6;color: #FFFFFF; ">
          <H4>Poland</H4>
          <p style="font-size: 11px;">Poland is one of the best country to study for International students .They are  providing great acomondation with low cost and quality.</p>
        </div>
      </div>
      <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 2px 0px 2px;position: relative;">
        <img src="img/14.png" height="100%" width="100%">
        <div class="B" style="position: absolute;top: 0;left: 0;background-color:#247BA0;opacity: 0.6;color: #FFFFFF; ">
          <H4>Australia</H4>
          <p style="font-size: 11px;">Australia is one of the best country to study for International students .They are  providing great acomondation with low cost and quality.</p>
        </div>
      </div>
      <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 2px 0px 2px;position: relative;">
        <img src="img/15.png" height="100%" width="100%">
        <div class="B" style="position: absolute;top: 0;left: 0;background-color:#247BA0;opacity: 0.6;color: #FFFFFF; ">
          <H4>Norway</H4>
          <p style="font-size: 11px;">Norway is one of the best country to study for International students .They are  providing great acomondation with low cost and quality.</p>
        </div>
      </div>
      <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 2px 0px 2px;position: relative;">
        <img src="img/16.png" height="100%" width="100%">
        <div class="B" style="position: absolute;top: 0;left: 0;background-color:#247BA0;opacity: 0.6;color: #FFFFFF; ">
          <H4>Canada</H4>
          <p style="font-size: 11px;">Canada is one of the best country to study for International students .They are  providing great acomondation with low cost and quality.</p>
        </div>
      </div>
      <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 2px 0px 2px;position: relative;">
        <img src="img/17.png" height="100%" width="100%">
        <div class="B" style="position: absolute;top: 0;left: 0;background-color:#247BA0;opacity: 0.6;color: #FFFFFF; ">
          <H4>Bangladesh</H4>
          <p style="font-size: 11px;">Bangladesh is one of the best country to study for International students .They are  providing great acomondation with low cost and quality.</p>
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