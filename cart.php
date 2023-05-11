<?php
include 'header.php';
?>

<!--Seksioni i pare-->

<section class="cart">

<div class="cart-title">
    <h2>Shopping Cart</h2>
  </div>

</section>

<!--Seksioni i dyte-->

<section class="shopping">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
            <h5>Your order</h5>
            <hr>
                <div class="row">
                    <div class="col-md-2"><img src="Images/produkt1.png" alt=""></div>
                    <div class="col-md-10 product-info1">
                        <h5>Jeans with sequins</h5>
                        <h6>Size XL  Color Blue</h6>
                        <h5>$39,00 x2</h5>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-2">
                        <img src="Images/produkt1.png" alt="">
                    </div>
                    <div class="col-md-10 product-info1">
                        <h5>Linen shirt</h5>
                        <h5>$29,00</h5>
                    </div>
                </div>
                <hr>

                
                <div class="code">
                <div class="updates">
                    <h6>Do you have a discount?</h6>
                </div>
                <div class="inputs"> 
                <input type="text" class="form-control coupon" placeholder="Coupon code" aria-label="Coupon Code" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary mysubcribebtn" type="button" id="button-addon2">&#8594;</button>
                </div>
                </div>

            </div>

            

            <div class="col-md-6">
                <div class="info-you-need">
                <h5>Price</h5>
                <h5>Quantity</h5>
                <h5>Total</h5>
             </div>
                <hr>
                

                <div class="row">
                    <div class="col-md-4"><h6>$39,00</h6></div>
                    <div class="col-md-6">
                        <h6>2</h6>
                    </div>
                    <div class="col-md-2">
                        <h6>$78,00</h6>
                    </div>
                </div>
              <hr>

              <div class="row">
                    <div class="col-md-4"><h6>$39,00</h6></div>
                    <div class="col-md-6">
                        <h6>1</h6>
                    </div>
                    <div class="col-md-2">
                        <h6>$29,00</h6>
                    </div>
                </div>
              <hr>

              <div class="row">
                <div class=col-md-8>
                <label for="inputState">Shipping</label>
              <select id="inputState" class="form-control mycontrol1">
              <option selected>Express Delivery -$20</option>
              <option>Express Delivery -$10</option>
              <option>Express Delivery -$10</option>
              </select>
                </div>

              </div>
              
              <div class="row">
                <div class="col-md-4"><h6>Discount</h6></div>
                    <div class="col-md-6">
                        <h6>-$10</h6>
                    </div>
                </div>

                <div class="row">
                <div class="col-md-4"><h6>Total</h6></div>
                    <div class="col-md-6">
                        <h6>$117,00</h6>
                    </div>
                </div>

                <button class="btn-proceed">Proceed To Checkout</button>
                <hr>
                
            </div>
        </div>
    </div>

</section>















<?php
include 'footer.php';
?>