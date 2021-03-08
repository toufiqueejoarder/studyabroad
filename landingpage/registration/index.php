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
<style>
.A{background-color: #EDF3F6;}  
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
</style>
<body>
<div class="container-fluid" style="background-color: #FFFFFF; position: -webkit-sticky;
  position: sticky;
  top: 0;z-index: 1;max-height: 72px;">
  
<nav class="navbar navbar-expand-sm " style="background-color:#FFFFFF;">
  <ul class="navbar-nav" style="background-color: #FFFFFF;" >
    <li class="nav-item" >
      <img src="img/1.png" alt="" style="max-height: 40px;width:100px;margin-left: 10px; ">
    </li>
    <li class="nav-item">
      <a class="nav-link " id="X" href="#" onclick="showDiv()"><img src="img/2.png" alt="" style="max-height: 40px;width:107px;margin-left: 10px; ">
        </a>
        <div id="Explore" style=" display:none;">
          
            <a href="" style="color: black; ">Agriculture & forest</a>
            <a href="" style="color: black; ">Applied Science &proffessions</a>
            <a href="" style="color: black; ">Art,Design & Architecture</a>
            <a href="" style="color: black; ">Business &management</a>
            <a href="" style="color: black; ">Computer science & IT</a>
            <a href="" style="color: black; ">Education & training</a>
            <a href="" style="color: black; ">Humanities</a>
            <a href="" style="color: black; ">Agriculture & forest</a>
            <a href="" style="color: black; ">Law</a>
            <a href="" style="color: black; ">Social Science</a>
          
        </div>
    </li>
    <li class="nav-item">
      <a class="nav-link " id="Y" href="#" onclick="showDiv()"><img src="img/3.png" alt="" style="max-height: 40px;width:100px; margin-left: 10px;"></a>
        <div id="Decide" style=" display:none;">
          
            <h3 style="color: black; ">University rankings per country</h3>
            <a href="" style="color: black;margin-right: 50px; ">Netherland</a>
            <a href="" style="color: black;margin-right: 50px; ">Uk</a>
            <a href="" style="color: black;margin-right: 50px; ">Australia</a>
            <a href="" style="color: black;margin-right: 50px; ">Canada</a>
            <a href="" style="color: black;margin-right: 50px; ">Germany</a>
            <a href="" style="color: black; margin-right: 50px;">United States</a>
            <a href="" style="color: black; margin-right: 50px;">France</a>
            <a href="" style="color: black; margin-right: 50px;">Norway</a>
            <a href="" style="color: black; margin-right: 50px;">Japan</a>
            <a href="" style="color: black; margin-right: 50px;">Poland</a>
          
        </div>    
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><img src="img/4.png" alt="" style="max-height: 40px;width:105px;margin-left: 10px; ">
        </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><img src="img/5.png" alt="" style="max-height: 40px;width:51px;margin-left: 640px; ">
        </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="regform.php"><img src="img/6.png" alt="" style="max-height: 40px;width:51px;margin-left: 1px; ">
        </a>
    </li>
  </ul>
</nav>
<br>
</div>

<div class="jumbotron text-center" style="background-image: url('img/7.png') ; position:relative;margin-top: -30px;">
  <div class="container-fluid"  >
  <div class="row">
    <div class="col-sm-12" style="margin-top: 200px;margin-bottom: 50px;">
      <h1 style="color: #FFFFFF;font-size: 65px;">FIND YOUR DREAM STUDY</h1>
      
      <p style="color: #FFFFFF;font-size: 30px;">Discover thousands of degrees worldwide!</p>
    </div>
   
   </div>

 </div>
 <div style="background-color: #0A323C;padding:34px 0px 17px; opacity: 0.7;position: absolute;bottom: 0px;left: 0px;width: 100%;">
     <div class="input-group mb-3" style="width: 75%;">
      <input type="text" class="form-control" placeholder=" What do you want to study? " aria-label="Recipient's username" aria-describedby="basic-addon2" style="margin-left: 350px;padding:3px 60px 3px;width: 15%;">
  <input type="text" class="form-control" placeholder="Where?(country,organisation)" aria-label="Recipient's username" aria-describedby="basic-addon2" style="padding:3px 60px 3px;width: 15%;">
  <div class="input-group-append" style="background-color: #E1664B ;">
    <input type="submit" class="btn btn-info" value="Search" style="background-color: #E1664B ;padding:3px 15px 3px;color: #FFFFFF;">
    
  </div>
</div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-sm-3" style="text-align: center;">
        <img src="img/8.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236" style="width: 90PX;"> 
      <h3>Explore</h3>
      <p>You can browse more than 71.000 Master’s programmes from all over the world.</p>
    </div>
    <div class="col-sm-3" style="text-align: center;">
        <img src="img/9.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236" style="width: 90PX;"> 
      <h3>Compare</h3>
      <p>Make a wishlist of your favourite programmes, check your fit with them, and read what other students are saying.</p>
    </div>
      
    <div class="col-sm-3" style="text-align: center;">
        <img src="img/10.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236" style="width: 90PX;"> 
      <h3>Decide</h3>
      <p>Now that you have your top programmes shortlisted, you can pick the ones that fit you the best</p>
    </div>
    <div class="col-sm-3" style="text-align: center;">
        <img src="img/11.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236" style="width: 90PX;"> 
      <h3>Apply</h3>
      <p>When you feel confident about your programme choice, you can apply.</p>
    </div>
  </div>
  <H3 style="text-align: center;margin-top: 60px;">Browse by Discipline</H3>
  <div class="row" style="text-align: center;">

    <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 38px 0px 25px;">
      <i class="fa fa-tree" style="font-size:45px; "></i>
      <p>Agriculture & Forestry</p>
    </div>
    <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 38px 0px 25px;">
     <i class="fa fa-flask" style="font-size:45px;"></i>
      <p>Applied Science & professions</p>
    </div>
    <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 38px 0px 25px;">
      <i class="fa fa-briefcase" style="font-size:45px;"></i>
      <p>Business & Management</p>
    </div>
    <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 38px 0px 25px;">
      <i class="fa fa-laptop" style="font-size:45px;"></i>
      <p>Computer Science & IT</p>
    </div>
    <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 38px 0px 25px;">
      <i class="fa fa-book" style="font-size:45px;"></i>
      <p>Education & Training</p>
    </div>
    <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 38px 0px 25px;">
      <i class="fa fa-cogs" style="font-size:45px;"></i>
      <p>Engineering & Techbology</p>
    </div>
  </div>
  <div class="row" style="text-align: center;">

    <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 38px 0px 25px;">
      <i class="fa fa-globe" style="font-size:45px; "></i>
      <p>Environment Studies & Earth Science</p>
    </div>
    <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 38px 0px 25px;">
     <i class="fa fa-video-camera" style="font-size:45px;"></i>
      <p>Journalism & Media</p>
    </div>
    <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 38px 0px 25px;">
      <i class="fa fa-balance-scale" style="font-size:45px;"></i>
      <p>Law</p>
    </div>
    <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 38px 0px 25px;">
      <i class="fa fa-medkit" style="font-size:45px;"></i>
      <p>Medicine & Health</p>
    </div>
    <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 38px 0px 25px;">
      <i class="fa fa-flask" style="font-size:45px;"></i>
      <p>natural Sciences & Mathmatics</p>
    </div>
    <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 38px 0px 25px;">
      <i class="fa fa-bullhorn" style="font-size:45px;"></i>
      <p>Social Sciences</p>
    </div>
  </div>
  <div class="row" style="">

    <div class="col-sm-12 " style="background-color: #247BA0;padding: 13px 0px 13px;">
      
      <h4 style="float: left;color: #FFFFFF;margin-left: 10px;">Find out which programmes match your personality!</h4>
      <button type="button" class="btn btn-light" style="    margin-left: 323px;
    border-radius: 0px;">Take a free test!</button>
    </div>
   
  </div>
<H3 style="text-align: center;margin-top: 60px;">Where to study abroad?</H3>
<div class="row" style="text-align: center;">

    <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 2px 0px 2px;position: relative;">
      <img src="img/12.png" height="100%" width="100%">
      <div class="B" style="position: absolute;top: 0;left: 0;background-color:#247BA0;opacity: 0.6;color: #FFFFFF; ">
        <H4>Esrail</H4>
        <p style="font-size: 11px;">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Laborum, voluptas, inventore. Ratione autem id earum perferendis quod labore officia nobis.</p>
      </div>
    </div>
    <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 2px 0px 2px;position: relative;">
      <img src="img/13.png" height="100%" width="100%">
      <div class="B" style="position: absolute;top: 0;left: 0;background-color:#247BA0;opacity: 0.6;color: #FFFFFF; ">
        <H4>Poland</H4>
        <p style="font-size: 11px;">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Laborum, voluptas, inventore. Ratione autem id earum perferendis quod labore officia nobis.</p>
      </div>
    </div>
    <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 2px 0px 2px;position: relative;">
      <img src="img/14.png" height="100%" width="100%">
      <div class="B" style="position: absolute;top: 0;left: 0;background-color:#247BA0;opacity: 0.6;color: #FFFFFF; ">
        <H4>Australia</H4>
        <p style="font-size: 11px;">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Laborum, voluptas, inventore. Ratione autem id earum perferendis quod labore officia nobis.</p>
      </div>
    </div>
    <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 2px 0px 2px;position: relative;">
      <img src="img/15.png" height="100%" width="100%">
      <div class="B" style="position: absolute;top: 0;left: 0;background-color:#247BA0;opacity: 0.6;color: #FFFFFF; ">
        <H4>Norway</H4>
        <p style="font-size: 11px;">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Laborum, voluptas, inventore. Ratione autem id earum perferendis quod labore officia nobis.</p>
      </div>
    </div>
    <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 2px 0px 2px;position: relative;">
      <img src="img/16.png" height="100%" width="100%">
      <div class="B" style="position: absolute;top: 0;left: 0;background-color:#247BA0;opacity: 0.6;color: #FFFFFF; ">
        <H4>Canada</H4>
        <p style="font-size: 11px;">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Laborum, voluptas, inventore. Ratione autem id earum perferendis quod labore officia nobis.</p>
      </div>
    </div>
    <div class="col-sm-2 A" style="border: solid #FFFFFF;padding: 2px 0px 2px;position: relative;">
      <img src="img/17.png" height="100%" width="100%">
      <div class="B" style="position: absolute;top: 0;left: 0;background-color:#247BA0;opacity: 0.6;color: #FFFFFF; ">
        <H4>Bangladesh</H4>
        <p style="font-size: 11px;">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Laborum, voluptas, inventore. Ratione autem id earum perferendis quod labore officia nobis.</p>
      </div>
    </div>
  </div>
  <div class="row" style="">

    <div class="col-sm-12 " style="text-align: center; margin: 12px auto 41px;">
      
      <a href="" style="color: #1E8558;">View all countries</a>
    </div>
   
  </div>

  <div class="row" style="">

    <div class="col-sm-12 " style="background-color: #05293C;padding: 13px 0px 13px;">
      
      <h4 style="float: left;color: #FFFFFF;margin-left: 10px;">Find out which country would be the best fit for a student like you!</h4>
      <button type="button" class="btn btn-light" style="    margin-left: 166px;
    border-radius: 0px;">Take a free test!</button>
    </div>
   
  </div>
</div>
<div class="container-fluid" style="background-color:#EDF3F6; ">
  <div class="row" style="margin: 35px 100px 0px;
    padding: 40px 99px 40px;">
    <div class="col-sm-4">
      
      <a href=""><img src="img/18.png" style="width: 100%;height: 100%;"></a>
    </div>
    <div class="col-sm-4">
       <a href=""><img src="img/19.png" style="width: 100%;height: 100%;"></a>
    </div>
    <div class="col-sm-4">
       <a href=""><img src="img/20.png" style="width: 100%;height: 100%;"></a>
    </div>
  </div>
</div>
<div class="jumbotron text-center" style="background-color: #FFFFFF;">
  <h1 style="margin-bottom: 41px;">What Students are Saying About Studyportals</h1>
  <hr>
</div>

<div class="container">
  <div class="row" style="margin-bottom: 100px;">
    <div class="col-sm-3">
      <img src="img/21.png" style="width: 100%;height: 25%;">
      <p>I have used it to find my programme and I know how much it can help students in making the right decision. Even now that I am already registered, I still use Studyportals to find summer programmes and I am constantly recommending it to friends that are going through the same struggle that I went through when I had to choose a study.</p>
    </div>
    <div class="col-sm-3">
      <img src="img/22.png" style="width: 100%;height: 25%;">
      <p>I was looking for universities for roughly over a year through Studyportals and I finally found my university through them. Moving from home might have some doubts but it is worth it to experience the world and get a taste of what is truly out there.</p>
    </div>
    <div class="col-sm-3">
      <img src="img/23.png" style="width: 100%;height: 25%;">
      <p>Studyportals helped me find my dream program in Bioarchaeological and Forensic Anthropology. If you have the opportunity, take the leap! There are no words to describe how much it's worth it.</p>
    </div>
    <div class="col-sm-3">
     <img src="img/24.png" style="width: 100%;height: 25%;">
      <p>Studyportals is the main factor that I am here. It was my best decision of my life. Now I am living my dream, to study, work and live abroad. I got to know amazing people from all around the world, learned some German, and I love the University programme, is intense, involving and helps students to grow in the personal and professional aspect.</p>
    </div>
    
  </div>
</div>
<hr>

<div class="container-fluid" style="padding: 14px 320px 31px;background-color:#EDF3F6;">
  <div class="row">
    <div class="col-sm-12">
      <a href=""><img src="img/25.png" style="width: 100%;height: 100%;"></a>
    </div>
    
  </div>
</div>
<div class="text-center" style="margin-top: 25px;">
  <h1>Interesting Articles</h1>
  
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <a href="" style="color: black;"><h5>The Stress-Free Way of Getting Great Accommodation as an International Student</h5></a>
      <p>Find the best student accommodation while getting your degree abroad. Discover how Uniplaces can help you!</p>
    </div>
    <div class="col-sm-6">
      <a href="" style="color: black;"><h5>How Student Reviews Can Help You Find the Best University for You in 2021 </h5></a>
      <p>Student reviews of universities and why they are important. The difference between student reviews and university rankings.</p>
    </div>
    <div class="col-sm-6">
      <a href=""  style="color: black;"><h5>What Can I Do with a Master’s in Marketing?</h5></a>
      <p>Best jobs with a Master's degree in Marketing: brand managers, social media specialist, market research, and others. Essential skills for marketers and the importance of studying a Marketing degree.</p>
    </div>
    <div class="col-sm-6">
      <a href=""  style="color: black;"><h5>Top 5 Reasons to Study a Master's in Medicine</h5></a>
      <p>Already graduated with a Bachelor's in Medicine? While this degree will open many doors for you, some will require a Master's diploma. Read more to discover the most important reasons for applying to a postgraduate degree in Medicine.</p>
    </div>

  </div>
  <div class="row" style="">

    <div class="col-sm-12 " style="text-align: right; margin: 12px auto 41px;">
      
      <a href="" style="color: #1E8558;">More Articles</a>
    </div>
   
  </div>
</div>

<script>
  function showDiv() {
   document.getElementById('Explore').style.display = "block";
}
});
</script>
</body>
</html>
