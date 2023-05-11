<?php
include 'header.php';
?>

<!--Seksioni i pare-->

<section class="first-sec">
    <div class="sfond">
    <button class="display-left" onclick="plusDivs(-1)">&#10094;</button>
    <img class="mySlides" src="Images/slide3.png" alt="">
    <img class="mySlides" src="Images/slide2.0.png" alt="">
    <img class="mySlides" src="Images/slide1.png" alt="">
    <button class="display-right" onclick="plusDivs(+1)">&#10095;</button>
    </div>

    <div class="text-btn">
        <h2>New collection</h2>
        <button class="shop-btn">Shop Now</button>
    </div>

</section>

<!--Seksioni i dyte--> 

<section class="sec2">
<div class="container">
    <div class="row">
    <div class="col-md-6 mycol1">
      <img class="img1" src="Images/img1.png" alt="">
      <h3 class="new">New Texture</h3>
      <button class="btn1">&#8594;</button>
    </div>
    <div class="col-md-6 mycol2">
      <div class="row">
        <div class="col-md-6 mycol3">
          <div class="row onerow">
            <img class="img2" src="Images/img2.png" alt="">
            <h3 class="party">Party Shoes</h3>
            <button class="btn2">&#8594;</button>
          </div>
          <div class="row tworow">
            <img class="img3" src="Images/img3.png" alt="">
            <h3 class="sun">Summer</h3>
            <button class="btn3">&#8594;</button>
          </div>
        </div>
        <div class="col-md-6 mycol4">
          <img class="img4" src="Images/img4 copy.png" alt="">
          <h3 class="natural">Natural Fibers</h3>
          <button class="btn4">&#8594;</button>
        </div>
      </div>
    </div>
  </div>
</div>
</section>


<!--Seksioni i trete--> 

<section class="sec3">
  <div class="paragraph">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptates laborum consectetur repudiandae, quam consequuntur id recusandae libero quasi non itaque natus necessitatibus ducimus neque asperiores sunt quae velit ullam.</p>
  </div>
</section>

<!--Seksioni i katert--> 

<section class="sec4">
   <div class="texttwo">
    <h2>Featured Products</h2>
    <div class="text3">
    <ul class="all-info">
      <li><a href=""> <span class="all">All</span> </a></li>
      <li><a href="">Popular</a></li>
      <li><a href="">New</a></li>
      <li><a href="">Sale</a></li>
    </ul>
   </div>
   </div>

   <div class="container con-one">
    <div class="row">

      <div class="col-md-3">
        <div class="card mycard">
          <img class="card-img-top product1" src="Images/img8 copy.png" alt="Card image cap">
          <div class="card-body">
            <div class="description-price">
              <h4>Leather boots</h4>
              <h5>$29,00</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card mycard">
          <img class="card-img-top product2" src="Images/img9.png" alt="Card image cap">
          <div class="card-body">
            <div class="description-price">
              <h4>Cotton brown shirt</h4>
              <h5> <span class="old-price">$84,00</span> $49,00</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card mycard">
          <img class="card-img-top product3" src="Images/img10 copy.png" alt="Card image cap">
          <div class="card-body">
            <div class="description-price">
              <h4>Cotton pajamas</h4>
              <h5>$19,00</h5>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="card mycard">
          <img class="card-img-top product4" src="Images/img11.png" alt="Card image cap">
          <div class="card-body">
            <div class="description-price">
              <h4>Backpacks</h4>
              <h5>$79,00</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<!--Seksioni i peste--> 

<section class="sec5">
<div class="updates">
    <h3>Subscribe and Get 15% Off</h3>
  </div>
<div class="allinputs"> 
    <input type="text" class="form-control email" placeholder="Your Email" aria-label="Your Email" aria-describedby="button-addon2">
    <button class="btn btn-outline-secondary mysubcribebtn" type="button" id="button-addon2">&#8594;</button>
  </div>
</section>

<hr>




<!--scripti per butonat e seksionit 1--> 
<script>
    var slideIndex = 1;
  showDivs(slideIndex);
  
  function plusDivs(n) {
    showDivs(slideIndex += n);
  }
  
  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    x[slideIndex-1].style.display = "block"; 
  }
</script>


<?php
include 'footer.php';
?>
