<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ikhwan Wiratama Putra</title>
  <link rel="stylesheet" href="css/master.css">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> 
</head>
<body>
  <div class="container">
    <header class="header">
          <nav>
              <input type="checkbox" id="nav" class="hidden">
              <label for="nav" class="nav-btn">
                  <i></i>
                  <i></i>
                  <i></i>
              </label>
                  <div class="logo">
                      <img src="images/logo+.png">
                  </div>
                  <div class="nav-wrapper">
                      <ul class="">
                          <li><a href="#">Home</a></li>
                          <li><a href="#">News</a></li>
                          <li><a href="tambahartikel.php">Create Artikel</a></li>
                          <li><a href="#">Create Videos</a></li>
                          <li><a href="#">About</a></li>
                      </ul>
                  </div>
                  <div class="search-box">
                    <input class="search-txt" type="text" name="" placeholder="Type To Search">
                    <a class="search-btn" href="#">
                      <i class="fas fa-search"></i>
                    </a>
                  </div>
                  <div class="profile nav-wr">
                    <a href="#">
                      <i class="fas fa-user-circle fa-2x"></i>
                    </a>
                  </div>
          </nav>
          <div class="header-content">
            <br><br><br>
            <h1>Welcome</h1>
            <br>
        <h2>
          <span class="txt-type" data-wait="3000" data-words='["To Informatic Education", "Keep Learn", "And Never Stop Study"]'></span>
        </h2> 
          </div>
    </header>
    <section class="artikel">
      <div class="artikel-bg">
      <h1>Artikel</h1>
        <div class="carousel-container">
          <!-- Control Buttons -->
          <i class="fas fa-arrow-left" id="prevBtn"></i>
          <i class="fas fa-arrow-right" id="nextBtn"></i>
          <div class="carousel-slide" id="img-con">
            <img class="img" src="images/e.png" id="lastClone"> 
            <img class="img" src="images/a.png">
            <img class="img" src="images/b.jpg">
            <img class="img" src="images/c.jpg">
            <img class="img" src="images/d.png">
            <img class="img" src="images/e.png">
            <img class="img" src="images/a.png" id="firstClone">
          </div>        
        </div>
      </div>
      
        
    </section>
    <section class="video">
      <div class="video-bg">
        <h1>video</h1>
        <i class="fas fa-arrow-left" id="prevBtn2"></i>
        <i class="fas fa-arrow-right" id="nextBtn2"></i>
        <div class="video-slide">
          <img class="img" src="images/e.png" id="lastCloneVideo">
          <img class="img" src="images/a.png">
          <img class="img" src="images/b.jpg">
          <img class="img" src="images/c.jpg">
          <img class="img" src="images/d.png">
          <img class="img" src="images/e.png">
          <img class="img" src="images/a.png" id="firstCloneVideo">
        </div>
      </div>
    </section>
    <section class="about">
      <h1>About</h1>
      <div class="about-bg">
        <img src="images/logo+.png">
      </div>
      <div class="about-bg2">
      <h2>HISTORY</h2>
      <p>
        IE di buat sejak 01-03-2019, web-site ini di bentuk sebagai wadah pembelajaran di bidang informatika, web-site ini dapat di akses oleh umum dan sebagai wadah untuk meningkatkan kemampuan kreatif dan inovatif, website ini di bentuk sebagai bentuk pengembangan ilmu bagi masyarakat pada umumnya, di website ini masyarakat umum mampu menuangkan ide,gagasan,pemikiran di bidang informatika berupa video atau artikel artikel yang dapat bermanfaat untuk orang banyak.. 
      </p>
      </div>
      <div class="team-section" id="about">
        <div class="innear-width">
          <h1>MEET OUR TEAM</h1>
          <div class="pers">
            <div class="pe">
              <img src="images/adi.jpg">
              <div class="p-name">Adi Kurniawan</div>
              <div class="p-des">Designer</div>
              <div class="p-sm">
                <a href="#"><img src="images/1.png"></a>
                <a href="#"><img src="images/2.png"></a>
                <a href="#"><img src="images/3.png"></a>
                <a href="#"><img src="images/4.png"></a>
              </div>
            </div>
            <div class="pe">
              <img src="images/ikhwan.jpg">
              <div class="p-name">Ikhwan Wiratama Putra</div>
              <div class="p-des">Developer</div>
              <div class="p-sm">
                <a href="#"><img src="images/1.png"></a>
                <a href="#"><img src="images/2.png"></a>
                <a href="#"><img src="images/3.png"></a>
                <a href="#"><img src="images/4.png"></a>
              </div>
            </div>
            <div class="pe">
              <img src="images/mia.jpg">
              <div class="p-name">Mia Nuur Aini</div>
              <div class="p-des">Developer</div>
              <div class="p-sm">
                <a href="#"><img src="images/1.png"></a>
                <a href="#"><img src="images/2.png"></a>
                <a href="#"><img src="images/3.png"></a>
                <a href="#"><img src="images/4.png"></a>
              </div>
            </div>
          </div>
        </div>
      </div>    
    </section>
    <footer>
      Copyright &copy; Informatic Education 2019
    </footer>
    <script type="text/javascript" src="app.js"></script>
  </div>
</body>
</html>

<!-- <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 360px; overflow: hidden; border-radius: 1px;">
        <img src="https://images.pexels.com/photos/442559/pexels-photo-442559.jpeg?auto=compress&cs=tinysrgb" alt="Man with backpack"    
            class="d-block w-full">

  <div class="px-2 py-2">
    <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
      Travel
    </p>

    <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
      Planning your final summer trip
    </h1>

    <p class="mb-1">
      Summer is coming to a close just around the corner. But it's not too late to squeeze in another weekend trip &hellip;
    </p>

  </div>

  <a href="#0" class="text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
    Read More
  </a>

       

</div>

<div class="w-full bg-white py-1 px-2 clearfix" style="border-top: 1px solid rgba(0,0,0,0.12);">
        <span class="float-left">
            Inspiration 
            <a href="https://dribbble.com/shots/3786084-Article-Card-Hover-Interaction" class="styled-link">dribbble shot.</a> 
        </span>
        <span class="float-right">
            Coded by <a href="https://kalyanlahkar.github.io" class="styled-link">Kalyan Lahkar</a>
        </span>
    </div> -->