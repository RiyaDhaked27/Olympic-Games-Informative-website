 <?php
 include('include/header.php');
 ?>
 <div class="container">
    <h2 class="sport" style="font-size: 100px;"><b>SPORTS<b></h2>
    </div>

    <div class="container">
        <h3 class="filter" style="font-size: 20px;">Filter by:</h3>
    </div>

    <!-- Dropdown -->

    <div class="dropdown mt-3">
        <button type="button" style="width: 200px; margin-left: 80px;" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"><b>Select<b></button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="olympic games.php">Olympic Games</a></li>
          <li><a class="dropdown-item" href="olympic winter games.php">Olympic Winter Games</a></li>
          <li><a class="dropdown-item" href="summer youth games.php">Summer Youth Games</a></li>
      </ul>

  </div>


  <div class="container">
    <div class="row">
        <div class="col">
            <img src="public\images\paralympic.avif" width="600px" class="image mt-5 mx-auto d-block">
        </div>
        <div class="col">
            <h2 class="title mt-5 text-dark bg-warning"><b>Paralympic Games</b></h2>
            <div class="description mt-3" style="margin-left: 100px">
             The Paralympic Games provide a platform for Para athletes with a diverse range of impairments to showcase their outstanding abilities to millions of spectators and billions of TV viewers
         </div>
         <a href="https://www.paralympic.org/"><button type="button" style="margin-left:50px;" class="btn btn-dark paralympic-btn bg-dark text-white mt-5"><b>Learn more at Paralympic</b></button></a>
     </div>
 </div>
</div>

<div class="container">
    <h2 class="title mt-5 text-dark bg-warning">Sports Latest News</h2>
    <div class="row">
        <div class="col">
            <img src="public\images\mondo.avif" style="width: 550px;">
            <ul>
                <li><a class="link" href="https://olympics.com/en/news/athletics-armand-mondo-duplantis-hengelo-pole-vault-2022"target="_blank">Mondo Duplantis wins Hengelo pole vault with new 2022 world lead clearance</a></li>
            </ul>
        </div>
        <div class="col">
            <img src="public\images\balkan.avif" style="width: 450px; height: 300px;">
            <ul>
                <li><a class="link" href="https://olympics.com/en/news/balkan-relay-cup-2022-indian-athletes-results">Balkan Relay Cup: Indian women's 4x100m team wins gold; men’s 4x400m team bags silver</a></li>

            </ul>
        </div>
        
    </div>

</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-lg-4">
            <img class="image1" src="public\images\PV.avif">
            <ul>
                <li class="dis1" ><a class="link" href="https://olympics.com/en/news/indonesia-masters-2022-badminton-india-live-streaming-telecast-tv-channel">Indonesia Masters badminton 2022: India’s PV Sindhu, Lakshya Sen among top contenders - watch live streaming</a></li>

            </ul>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4">
            <video class="vid" src="public\videos\video gangwon.mp4" controls class="video"></video>
            <ul>
                <li class="dis1"><a class="link" href="https://olympics.com/en/video/memories-winter-youth-olympic-games-gangwon-2024">Memories | Winter Youth Olympic Games Gangwon 2024</a> <a class="btn btn-warning btn-sm" href="https://olympics.com/en/video/memories-winter-youth-olympic-games-gangwon-2024">Exclusive</a> </li>
            </ul>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4">
           <img class="image2" src="public\images\karlos.avif"> 
           <ul>
               <li class="dis1"><a class="link" href="https://olympics.com/en/news/paris-2024-mens-weightlifting-results-karlos-nasar-89kg-gold-world-record">Paris 2024 men's weightlifting: All results as Karlos Nasar wins 89kg gold and breaks World Record</a></li>
           </ul>     
       </div>
   </div>
</div>

<!-- cards -->
<div class="container">
    <h2 class="title mt-5 text-dark bg-warning">Live events</h2>
    <div class="section-card">
        <div class="card">
          <h3 class="subtitle" style="margin-top: 20px;"><b>26July-11Aug</b></h3><br>
          <a class="link" href="https://olympics.com/en/sport-events/paris-2024"><h4 class="sub text-dark">Paris 2024 | Olympic Games</h4></a>
          <img class="cardimage" src="public\images\13aug.avif">
      </div>
      <div class="card">
          <h3 class="subtitle" style="margin-top: 20px;"><b>13Aug-17Aug</b></h3><br>
          <a class="link" href="https://olympics.com/en/sport-events/2024-wdsf-dancesport-grandslam-standard-latin-stuttgart"><h4 class="sub text-dark">DanceSports | GrandSlam Standard & Latin | Stuttgart</h4></a>
          <img class="cardimage" src="public\images\17aug.avif">
      </div>
      <div class="card">
        <h3 class="subtitle" style="margin-top: 20px;"><b>16Aug-17Aug</b></h3><br>
        <a class="link" href="https://olympics.com/en/sport-events/2024-fiba-3x3-basketball-world-tour-lausanne"><h4 class="sub text-dark">3x3 Basketball | World Tour | lausanne</h4></a>
        <img class="cardimage" src="public\images\card3.avif">
    </div>        
</div>
</div>




        <?php
        include('include/footer.php');
        ?>