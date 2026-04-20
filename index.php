<?php
include('include/header.php');
?>

<!-- slider -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
<!-- indicators -->
<div class="carousel-indicators">
      <button type="button" class="active" data-bs-target="#demo" data-bs-slide-to="0"></button>
       <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
   </div>

<!-- slideshow -->
     <div class="carousel-inner">
     	<div class="carousel-item active">
     		<img src="public\images\oly2 webp file.webp" alt="spreading smiles and gold medals vibes on the Olympic day"class="d-block w-100 slider-height">
     		<div class="carousel-caption">
     		<h3>spreading smiles and gold medals vibes on the Olympic day</h3>	
            <p>I like olympic games</p> 
     		</div>

     	</div>
     	<div class="carousel-item">
     		<img src="public\images\oly4.jpeg" alt="Eyes on the prize,heart in the game." class="d-block w-100 slider-height">
            <div class="carousel-caption">
                <h3>What is your favourite memory....</h3>
                <p>share here!</p>
                
            </div>
     	</div>
     
        <div class="carousel-item">
            <img src="public\images\oly3.jpeg" alt="Eyes on the prize,heart in the game." class="d-block w-100 slider-height">
            <div class="carousel-caption">
                <h3>Eyes on the prize,heart in the game.</h3>
                <p>We won...smile</p>
                
            </div>
        </div>
    </div>
     	<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
     		<span class="carousel-control-prev-icon"></span>
     	</button>
     	<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
     		<span class="carousel-control-next-icon"></span>
     		
     	</button>
     </div> 

      <div class="container">
        <h2 class="title mb-5 mt-5 bg-warning text-dark"><b>International Olympic Committee (IOC)</b></h2>
        <div class="discription mb-5 mt-5 text-dark" style="font-size: 20px;">
   	    <img src="public\images\ioc1.jpeg" width="400px" class="mx-auto d-block">
             Over the past century, there have been several changes. The host nation used to have a lot of influence over which sports were featured. Today, however, the International Olympic Committee is in control of making such decisions. Numerous sports have come and gone over the years. This also applies to demonstration sports. Many of these are tried but never included in the official sports games.
             The competitions that take place during the Summer Games are referred to by a variety of terms by the IOC. A particular competition that yields a medal is known as an “event.” For instance: An event is a 100-meter freestyle. It is a component of swimming’s broader “discipline.” Other competitions in the sport include backstroke, butterfly and breaststroke. A discipline in the “sport” of aquatics is swimming. This includes additional sports like diving and water polo.
         </div>
     </div>
     <div class="container">
        <h2 class="title mb-5 mt-5 bg-warning text-dark"><b>MEANING OF THE OLYMPIC RINGS</b></h2>
        <div class="content mb-5 mt-5">
           <marquee><img src="public\images\IOC.PNG" width="150px" class="mx-auto d-block"> </marquee>
           <img src="public\images\pierre.jpeg" class="rounded-circle mt-5" width="150px">
           <br>
             <b>"These five rings represent the five parts of the world now won over to the cause of olympism and ready to accept its fecund rivalries. What is more, the six colors thus combined reproduce those of all nations without exception."
           </b></div>
       </div>
    </section> 



<?php
include('include/footer.php');
?>