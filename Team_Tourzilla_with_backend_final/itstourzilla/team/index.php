<!DOCTYPE html>
<html>

<head>
  <title>Team: TourZilla</title>
  <?php include '../partials/_favicon.php';?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" />
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/team.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 
  <style>
    .scrolled {
      background-color: rgba(0, 0, 0, 0.3) !important;

    }

    .headtext h1:hover {
      color: yellow;
      cursor: pointer;
    }

    nav {
      transition: 0.45s ease-in all !important;
    }

    header {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/hotel/hero.jpg');
      background-size: 100% 100%;
      height: 98vh;
      z-index: -99;
    }
  </style>
</head>

<body>

  <!-- <?php include '../partials/_dbconnect.php';?> -->
  <?php include '../partials/_header.php';?>

<!-- ........header section............ -->
<section class="team">
    <div class="team_header">
        <h1 class="animate__animated  animate__zoomInDown   ">Meet Our Creative Team</h1>
       <center> <a href="#team " class="btn btn-primary mt-3 ">Explore Now</a></center>
    </div>
</section>
<!-- ........ End header section............ -->
<!-- ...............testimonial........ -->
<section class="text-gray-700 body-font testimonial "style="background:url('../img/email-pattern.png')";>
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0 h-100  " style="width:300px;height:300px;" >
        <img class=" zoom team-img img-fluid" alt="hero" src="../img/shweta1.png" style="height: 100%;width: 100% ;border-radius: 50%;">
        <center><br>
          <div class="social-icons">
          <i class="fa fa-facebook"></i>
          <i class="fa fa-twitter"></i>
          <i class="fa fa-linkedin"></i>
          <i class="fa fa-github"></i>
        </div>
        </center>
      </div>
      <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900  ">Shweta Yadav<br>
           
        </h1>
        <p class="" style="margin-top:-20px">(Front-End Developer)</p>
        <br>
       <br>
        <p class="text-left text-gray-600">I'm Shweta Yadav .<br>
        I'm a Front-End Developer.I am Pursuing <span title="Advanced Diploma in IT,Networking and Cloud Computing">IBM ADIT Diploma</span> From <span title="National Skills Training Institute ">NSTI.</span> Dehradun.I know Front-End
         Technologies like HTML5,CSS3 Bootstrap4, JavaScript and  Building websites that are responsive and usable.
          Implementing a mobile-first apporoach to existing websites and Identifying innovative ideas and proof of concepts according to project requirements. Monitoring website performance and rectifying front-end-related issues.
          Communicating technical issues in an understandable manner to the team. </p>
        <div class="flex justify-center">
          <button class="btn btn-outline-primary px-4 mt-3 py-2">Hire Me</button>
         
        </div>
      </div>
    </div>
  </section>
  <!-- ..........................second................ -->
  <section class="text-gray-700 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Himanshu Gulati
        </h1>
        <br class="hidden lg:inline-block">
        <p class="" style="margin-top:-20px">(Backend Developer)</p>
       
        <p class="text-left text-gray-600">I'm Himanshu .<br>
          I'm a Back-End Developer.I am Pursuing <span title="Advanced Diploma in IT,Networking and Cloud Computing">IBM ADIT Diploma</span> From <span title="National Skills Training Institute ">NSTI. Back-end Developer work hand-in-hand with front-end developer by providing the outward facing web</span> Dehradun.
        <div class="flex justify-center">
            <a href="mailto:himanshugulati@outlook.in"><button class="btn btn-outline-primary px-4 mt-3 py-2">Hire Me</button></a>
        
        </div>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6" style="width:300px;height:300px;">
        <img class="zoom team-img" alt="hero" src="../img/Himanshu.jpg"  style="height: 100%;width: 100% ;border-radius: 50%;">
        <center><br>
          <div class="social-icons">
            <a href="https://www.fb.com"><i class="fa fa-facebook"></i></a>
            <a href="https://www.fb.com"><i class="fa fa-twitter"></i></a>
            <a href="https://www.linkedin.com/in/ihimanshugulati/"><i class="fa fa-linkedin"></i></a>
            <a href="https://github.com/iamhimanshugulati"<i class="fa fa-github"></i></a>
          </div>
        </center>
      </div>
    </div>
  </section>
  <!-- ..........................second................ -->

  <section class="text-gray-700 body-font testimonial "style="background:url('../img/email-pattern.png')";>
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0 h-100  " style="width:300px;height:300px;" >
        <img class=" zoom team-img img-fluid" alt="hero" src="../img/Priyam.jpg" style="height: 100%;width: 100% ;border-radius: 50%;">
        <center><br>
          <div class="social-icons">
          <i class="fa fa-facebook"></i>
          <i class="fa fa-twitter"></i>
          <i class="fa fa-linkedin"></i>
          <i class="fa fa-github"></i>
        </div>
        </center>
      </div>
      <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center ">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Priyam Agnihotri
        </h1>
        <p class="" style="margin-top:-20px text-gray-600">(Content  Developer)</p>
        <p class="mb-8 leading-relaxed">I am priyam Agnihotri. I'm a trainee of IBM ADIT Diploma in NSTI DEHRADUN. I use my Knowledge and skills in programming and software as well as web-based technology to create and update website. Jobs may emphasize creative work, like copywrite.</p>
        <div class="flex justify-center">
          <button class="btn btn-outline-primary px-4 mt-3 py-2">Hire Me</button>
         
        </div>
      </div>
    </div>
  </section>



  <!-- <section class="text-gray-700 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <di v class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0 shadow" style="width:300px;height:300px;">
        <img class="zoom team-img" alt="hero" src="../img/Priyam.jpg"  style="height: 100%;width: 100% ;border-radius: 50%;">
        <center><br>
          <div class="social-icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-github"></i>
          </div>
      </center>
      </div>
      <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Priyam Agnihotri
        </h1>
        <p class="" style="margin-top:-20px text-gray-600">(Content  Developer)</p>
        <p class="mb-8 leading-relaxed">I am priyam Agnihotri. I'm a trainee of IBM ADIT Diploma in NSTI DEHRADUN. I use my Knowledge and skills in programming and software as well as web-based technology to create and update website. Jobs may emphasize creative work, like copywrite.</p>
        <div class="flex justify-center">
            <button class="btn btn-outline-primary px-4 mt-3 py-2">Hire Me</button>
         
        </div>
      </div>
    </div>
  </section> -->
  <!-- ...........third.................... -->

  <section class="text-gray-700 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Suryakant
        </h1>
        <br class="hidden lg:inline-block">
        <p class="" style="margin-top:-20px">(Research & Development)</p>
       
        <p class="text-left text-gray-600">I'm Suryankant.<br>
          I'm in Research & Development for this project.I am Pursuing <span title="Advanced Diploma in IT,Networking and Cloud Computing">IBM ADIT Diploma</span> From <span title="National Skills Training Institute ">NSTI. Back-end Developer work hand-in-hand with front-end developer by providing the outward facing web.</span> Dehradun.
        <div class="flex justify-center">
            <button class="btn btn-outline-primary px-4 mt-3 py-2">Hire Me</button>
        
        </div>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6" style="width:300px;height:300px;">
        <img class="zoom team-img" alt="hero" src="../img/surya.jpg"  style="height: 100%;width: 100% ;border-radius: 50%;">
        <center><br>
          <div class="social-icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-linkedin"></i>
            <i class="fa fa-github"></i>
          </div>
        </center>
      </div>
    </div>
  </section>
<!-- ...............testimonial End........ -->
  
  <?php include '../partials/_footer.php';?>  


  <!-- js files -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    $(window).scroll(function () {
      $('nav').toggleClass('scrolled', $(this).scrollTop() > 400);
    });
  </script>
   <script>
    AOS.init({
       offset: 300, // offset (in px) from the original trigger point
       
       duration: 2000,
     });
 </script>
</body>

</html>