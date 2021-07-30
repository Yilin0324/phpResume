<?php include_once "base.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="mediaResume/favicon.ico">
    <!-- font icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- bootstarp -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/custom21.css">

    <title>我的線上履歷表</title>
</head>
<body  id="top">
    <!-- 導覽列 -->
<header class="fixed-top" id="Menu">
    <nav class="navbar  navbar-expand-md navbar-dark" id="header-nav">
      <div class="container"><a class="link-dark navbar-brand site-title mb-0" href="#hero"><i class="far fa-smile"></i>
          Resume</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mr-2">
            <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="#resume">Experience</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="#skills">Skills</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="#biography">Biography</a></li>
          </ul>
        </div>
      </div>
    </nav>
</header>
 <!-- home -->
  <section id="hero" 
  style="background: url('img/hero2.jpg') top right; background-size: cover;
  object-fit: cover; background-attachment: fixed;">
    <div class="hero-container">
      <div class="col">
      <h1 data-aos="fade-up">Yi-Lin Chang</h1>
      <h2 class="mt-4" data-aos="fade-up" data-aos-delay="500"> Web designer & performing artist</h2>
      <p class="col" data-aos="fade-up" data-aos-delay="1000">
      我是張貽琳，畢業於國立台灣戲曲學院戲曲音樂系，
      對生活充滿好奇心，樂於嘗試不同的可能性，並探索自己的能力，勇於挑戰極限。
      <br><br>
      因緣際會接觸到前端技術並且產生強烈的熱忱，便毅然跨出舒適圈，專心學習程式技術。
      </p>
      </div>
    </div>
  </section><!-- End home Section -->

<div class="container">
    
<section id="about" class="about">
    <div class="container">
    <div class="section-title">
    <h2>about me</h2>
    </div>

<div class="row my-3 mx-2">
    <div class="image col-lg-4 mb-2" style='height:380px;width:350px'  data-aos="fade-right">
        <img src="img/<?=$Image->find(['sh'=>1])['img'];?>" class="h-100">
    </div>
    <div class="col-lg-8"  data-aos="fade-left" data-aos-delay="100">
    <div class="content">
        <h5 class="mt-4"><strong>張貽琳</strong></h5> 
        <h5 class="mt-2">CHANG YI LIN</h5>
        <div class="mt-4">
        <?php
            $objective=$Job->all(['sh'=>1]);
            foreach($objective as $job){
        ?>
            <p><?=$job['text'];?></p>

        <?php        
            }
        ?>
        </div>
        <div>
        <ul class="list-unstyled list-social d-flex flex-row mt-3">
            <li class="mr-2"><a href="#"><i class="fab fa-github"></i></a></li>
            <li class="mx-2"><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li class="mx-2"><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="mx-2"><a href="#"><i class="fab fa-linkedin"></i></a></li>
      </ul>
        </div>

        <div>
        <?php
            $myself=$Personal->all(['sh'=>1]);
            foreach($myself as $my){
        ?>
            <p><?=$my['text'];?></p>

        <?php        
            }
        ?>

            </div>
        </div>
    </div>
</div>

    </div>
</section><!-- End About Section -->

<!-- <div class="row border-bottom pt-2"></div> -->
<!-- Resume -->
<section id="resume" class="resume section-bg">
    <div class="container">

    <div class="section-title">
        <h2>experience</h2>
      </div>

      <div class="row">
        <div class="col-lg-6 g-lg-5">
            <h3 class="resume-title mb-3" data-aos="fade-up">學歷</h3>

        <?php
        $educations=$Education->all(['sh'=>1]);

        foreach($educations as $education){
        ?>

          <div class="resume-item" data-aos="fade-up"> 
            <h4><?=$education['title'];?></h4>
            <h5><?=$education['dwork'];?></h5>
            <p><?=$education['text'];?></p>
          </div>

        <?php
        }
        ?>
        </div>

        <div class="col-lg-6 g-lg-5">
            <h3 class="resume-title mb-3" data-aos="fade-up">經歷</h3>

        <?php
        $experiences=$Experience->all(['sh'=>1]);

        foreach($experiences as $experience){
        ?>

          <div class="resume-item" data-aos="fade-up">
            <h4><?=$experience['title'];?></h4>
            <h5><?=$experience['dwork'];?></h5>
            <p><?=$experience['text'];?></p>
          </div>

          <?php
        }
        ?>
        </div>
        </div>
    </div>
</section><!-- End Resume Section -->

<!-- skills -->
    <section id="skills" class="skills section-bg">
    <div class="container">

    <div class="section-title my-2">
        <h2>skills</h2>
        <p class="mb-2" data-aos="fade-up">I am a quick learner and specialize in multitude of skills required for Web Application Development and Product Design</p>
    </div>

    <div class="row skills-content">
    <?php
        $skillss=$Skills->all(['sh'=>1]);

        foreach($skillss as $skills){
    ?>

        <div class="col-sm-6 col-lg-3"  data-aos="zoom-in" data-aos-delay="500">
            <h4><?=$skills['subject'];?></h4>
            <hr>
            <p><?=$skills['text'];?></p>
        </div>
    <?php
    }
    ?>
        
    </div>

    </div>
</section><!-- End Skills Section -->

<!-- Portfolio -->
<section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
      </div>

    <div class="row">
    <?php
        $ports=$Portfolio->all(['sh'=>1]);

        foreach($ports as $port){
        ?>

    <div class="col-sm-6 col-lg-3 mb-4" data-aos="flip-left">
        <div class="card portfolio-item">
            <a href="<?=$port['href'];?>"><img src="img/<?=$port['img'];?>" class="card-img"></a>
            <div class="card-body">
              <h5 class="card-title"><?=$port['subject'];?></h5>
              <p class="card-text"><?=$port['text'];?></p>
            </div>
        </div>
    </div>
    
    <?php
    }
    ?>

    </div>
    </div>
</section><!-- End My Portfolio Section -->

<!-- biography -->
<section id="biography" class="biography">
    <div class="container">

      <div class="section-title">
        <h2>Biography</h2>
      </div>

    <div class="row">
    <?php
        $biographys=$Biography->all(['sh'=>1]);

        foreach($biographys as $biography){
        ?>

    <div class="col mb-4"  data-aos="fade-up">
        <p><?=$biography['text'];?></p>
    </div>
    
    <?php
    }
    ?>

    </div>
    </div>
</section><!-- End My Biography Section -->
</div>

<!-- footer -->
<footer class="bg-dark text-muted text-center py-3">
    <small>
      Designed by Yi-lin<br>
      copyright &copy; <span>sanny</span>. all rights reserved
    </small>
    <div id="Arrow" class="position-fixed">
      <a href="#hero" class="btn btn-warning text-white rounded-circle p-2 border-0">
        <i class="fas fa-angle-up"></i>
      </a>
    </div>
  </footer><!-- End footer Section -->





<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="js/custom.js"></script>
</body>
</html>