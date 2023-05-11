<?php
include 'header.php';
?>

<!--Seksioni i pare-->

<section class="sect1">
  <div class="container">
   <div class="row">
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-6">
          <div class="row">

          <div class="col-md-4">
          <div class="row"><img class="produkti1" src="Images/produkt1.png" alt=""></div>
          <div class="row"><img class="produkti1" src="Images/produkt1.png" alt=""></div>
          <div class="row"><img class="produkti1" src="Images/produkt1.png" alt=""></div>
          <div class="row"><img class="produkti1" src="Images/produkt1.png" alt=""></div>
          <div class="row"><img class="produkti1" src="Images/produkt1.png" alt=""></div>
          <div class="row"><img class="produkti1" src="Images/produkt1.png" alt=""></div>
          </div>

          <div class="col-md-8"><img class="produkti2" src="Images/manproduct.png" alt=""></div>
        
          </div>
        </div>
        
      </div>
    </div>
    <div class="col-md-6 col-right">
      
      <div class="product-name">
        <h3>Jeans with sequins</h3>
        <h4>$39,00</h4>
      </div>

      <div class="row drop-row">

      <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle mybtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Size
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">XL</a></li>
              <li><a class="dropdown-item" href="#">L</a></li>
              <li><a class="dropdown-item" href="#">M</a></li>
            </ul>
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle mybtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Color
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Blue</a></li>
              <li><a class="dropdown-item" href="#">Black</a></li>
              <li><a class="dropdown-item" href="#">White</a></li>
            </ul>
        </div>

        

      </div>

      <div class="two-btn">
          <button class="add-btn">Add To Cart</button>
          <button class="favorite-btn">&#9825; Add To Favorites</button>
        </div>

        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem id modi pariatur consequuntur velit illum dicta vitae recusandae dolorem temporibus. Fugiat voluptas, aperiam unde deserunt modi nulla! Debitis, ratione praesentium?</p>

    </div>
   </div>
  </div>

</section>


<!--Seksioni i dyte--> 

<section class="sect2">
<div class="details">
    <ul class="list3">
        <li><a href=""> <span class="description-text">Description</span></a></li>
        <li><a href=""> <span class="detail">Details</span> </a></li>
    </ul>
</div>

<div class="paragrafe">
    <p>Lorem ipsum dolor sit amet consectetur ad Molestiae omnis placeat aspernatur at atque pariatur vel amet qui ipsum enim. Error, incidunt? Corporis eius esse rerum, dignissimos voluptate sint delectus!</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisr quae velit veritatis a doloribus voluptate? Tenetur assumenda consectetur aspernatur. Eum adipisci non magni, neque similique veritatis mollitia praesentium!</p>
</div>

</section>


<!--Seksioni i trete--> 

<section class="sect3">
   <div class="title">
    <h2>Related Products</h2>
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

<!--Seksioni i katert--> 

<section class="sect4">
<div class="updates">
    <h3>Subscribe and Get 15% Off</h3>
  </div>
<div class="allinputs"> 
    <input type="text" class="form-control email" placeholder="Your Email" aria-label="Your Email" aria-describedby="button-addon2">
    <button class="btn btn-outline-secondary mysubcribebtn" type="button" id="button-addon2">&#8594;</button>
  </div>
</section>


<?php
include 'footer.php';
?>