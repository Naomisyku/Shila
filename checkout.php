<?php
include 'header.php';
?>

<!--Seksioni i pare-->

<section class="checkout">

<div class="checkout-title">
    <h2>Checkout</h2>
  </div>

</section>

<!--Seksioni i dyte-->

<section class="form">

    <div class="container form-cont">
        <div class="row">
            <div class="col-md-8">
                <form>
                <div class="form-row">
                <div class="form-group col-md-6">
                <label class="label-text" for="inputEmail4">Email</label>
                <input type="email" class="form-control mycontrol" id="inputEmail4" placeholder="Email">
                </div>

                <div class="form-group col-md-6">
                <label class="label-text" for="inputPassword4">Phone</label>
                 <input type="password" class="form-control mycontrol" id="inputPassword4" placeholder="Phone">
                 </div>
                </div>

               <h5>Shipping address</h5>

               <div class="form-row">
                <div class="form-group col-md-6">
                <label class="label-text" for="inputEmail4">First Name</label>
                <input type="email" class="form-control mycontrol" id="inputEmail4" placeholder="First Name">
                </div>

                <div class="form-group col-md-6">
                <label class="label-text" for="inputPassword4">Last Name</label>
                 <input type="password" class="form-control mycontrol" id="inputPassword4" placeholder="Last Name">
                 </div>
                </div>

                <div class="form-row">
                <div class="form-group col-md-8">
                <label class="label-text" for="inputEmail4">Address</label>
                <input type="email" class="form-control mycontrol" id="inputEmail4" placeholder="Address">
                </div>

                <div class="form-group col-md-4">
                <label class="label-text" for="inputPassword4">Apt,suite,etc*</label>
                 <input type="password" class="form-control mycontrol" id="inputPassword4" placeholder="Apt,suite,etc*">
                 </div>
                </div>

                <div class="form-row">
                <div class="form-group col-md-6">
                <label class="label-text" for="inputCity">City</label>
                 <input type="text" class="form-control mycontrol" id="inputCity">
                </div>

                 <div class="form-group col-md-4">
                 <label class="label-text" for="inputState">Country</label>
                 <select id="inputState" class="form-control mycontrol">
                 <option selected>United Kingdom</option>
                 <option>Italy</option>
                 <option>United States</option>
                 <option>Japan</option>
                 </select>
                 </div>
                 </div>

                 <div class="form-row">
                 <div class="form-group col-md-6">
                 <label class="label-text" for="inputPassword4">Postal Code</label>
                 <input type="password" class="form-control mycontrol" id="inputPassword4" placeholder="Postal Code">
                 </div>
                 </div>

                  
                 <h5>Payment method</h5>

                 <div class="form-check form-check-inline">
                 <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                 <label  class="form-check-label" for="inlineCheckbox1">Visa/Mastercard</label>
                 </div>
                 <div class="form-check form-check-inline">
                 <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                 <label class="form-check-label" for="inlineCheckbox2">PayPal</label>
                 </div>

                 <button class="payment-btn">Proceed To Payment</button>
                </form>

            </div>

            <div class="col-md-4">
                <h5>Your order</h5>
                <div class="row">
                    <div class="col-md-4"><img src="Images/produkt1.png" alt=""></div>
                    <div class="col-md-8 product-info1">
                        <h5>Jeans with sequins</h5>
                        <h6>Size XL  Color Blue</h6>
                        <h5>$39,00 x2</h5>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-4">
                        <img src="Images/produkt1.png" alt="">
                    </div>
                    <div class="col-md-8 product-info1">
                        <h5>Linen shirt</h5>
                        <h5>$29,00</h5>
                    </div>
                </div>
                <hr>

                <div class="row">

                    <div class="col-md-4 deliveri">
                        <h6>Deliveri</h6>
                        <h6>Discount</h6>
                    </div>

                    <div class="col-md-8 express-price">
                    <h6>$20(Express Delivery)</h6>
                    <h6>-$10</h6>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-4"><h5>Total</h5></div>
                    <div class="col-md-8"><h5>$117,00</h5></div>
                </div>

            </div>

        </div>
    </div>

</section>


<hr>


<?php
include 'footer.php';
?>