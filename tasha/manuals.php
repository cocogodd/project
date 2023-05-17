<?php
include('header.php');
?>
<style>
    h6 {
        color: #F75813;
        font-size: 20px;
    }

    .useful {
        display: flex;
        background-color: #FAFAFA;
        margin: 50px;
        justify-content: center;
    }

    .useful p {
        padding: 20px;
    }

    .felling i {
        color: #F75813;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        background-color: #F75813;
    }
</style>
<div class="container text-justify">
    <div class="text-center mt-5 mb-5">
        <h3>Manuals</h3>
    </div>

    <div class="row">
        <div class="col-2 nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active text-left" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Shopping Guide</a>
            <a class="nav-link text-left" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Guarantee Policy</a>
        </div>
        <div class=" col-10 tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <p>Users can order one or more products easily on <a href="homePage.php" style="color:rgb(17, 85, 204);background-color: transparent;" target="_blank"><u>Tasha's web platform</u></a></p>
                <p>Before ordering the product, you need:</p>
                <ul>
                    <li>Successfully registered and logged in a valid Tasha account, and this account needs to be verified/updated with the necessary personal information to may be used</li>
                    <li>Browse and choose the right product. Some information to know when choosing a product:</li>
                    <li>Image, product name</li>
                    <li>Seller Classification (Regular Shop, Favorite Shop, Favorite Shop+)</li>
                    <li>Product price (original price / discount price)</li>
                    <li>Place of sale (province/city)</li>
                    <li>Product Reviews</li>
                    <li>Number of products sold</li>
                    <li>Structure information, features, warranty (if any)</li>
                </ul>
                <p>After searching and selecting the product you want to buy, you can place an order in 01 of the following 02 ways:</p>
                <h6>1. Buy and pay now</h6>
                <p>Select <b>Buy now </b>> select <b>Category</b> and <b>Quantity</b> of products you want to order > select <b>Buy now</b> >
                    select <b>Order</b> > select <b>Checkout</b> and complete the verification steps depending on the payment method to complete the order</p>
                <h6>2. Add products to Cart before checkout</h6>
                <p>On the <b>Product Information</b> page of the product, select <b>Add to Cart</b> > select <b>Category</b> and <b>Quantity</b> of Products you want to order >
                    select <b>Add to Cart</b> > select <b>Shopping Cart</b> (icon <i style="font-size:20px; color:#F75813" class="fa-solid fa-cart-shopping"></i>). Follow the rest of the steps as shown below.</p>
                <b class="mb-4">Step1</b>
                <img class="w-100" src="./assets/images/buynow.png" alt="">
                <b class="mb-4">Step2</b>
                <img class="w-100" src="./assets/images/buynow1.png" alt="">
                <b class="mb-4">Step3</b>
                <img class="w-100" src="./assets/images/step3.png" alt="">
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h6>1. Wrranty Conditions:</h6>
                <p><b>The product is warranted free of charge if it meets the following conditions:</b></p>
                <ul>
                    <li>The product has a technical defect due to the manufacturer</li>
                    <li>Still within the warranty period (on the warranty card or on the electronic warranty system)</li>
                    <li>Have an electronic invoice (when requested by the Buyer) or an order number (order ID)</li>
                    <li>All cases where customers report errors with unclear or uncertain information must be transferred to the Warranty Center for evaluation before making a decision on warranty or return of goods.</li>
                </ul>
                <p><b>Cases that are not covered by warranty or incur warranty fees:</b></p>
                <ul>
                    <li>Invalid product model and serial number (does not match the information on the Warranty Card or on the electronic warranty system)</li>
                    <li>Customers arbitrarily intervene to repair products or repair at warranty centers that are not authorized by the Company</li>
                    <li>The product is damaged due to user error, and the defect is not covered by the manufacturer's warranty</li>
                </ul>
                <h6>2. Guarantee time </h6>
                <p>The warranty period is calculated from the date of purchase or the date of receipt of the product, depending on the product of each different manufacturer.</p>
                <p>For electronic warranty products, the warranty period is calculated from the time of electronic warranty activation</p>
                <p>Note: Buyers can send VAT invoice request to Tasha Customer Care for assistance</p>
                <h6>3. Service Center</h6>
                <p>Information of the service center will be recorded in the warranty card attached to the product or on the detailed information description of the product. Please contact the warranty center directly for support in the shortest time</p>
                <p>In case you have difficulty contacting the service center, are too far away from the service center or have inconveniences that cannot be reached directly, you can contact Customer Care. Tasha customer care for support:</p>
                <p>1. Hotline: 1-800-234-9000</p>
                <p>2. Email: tasha@yourcompany.com</p>
                <h6>4. Warranty period</h6>
                <p><b>a. Manufacturer's warranty</b></p>
                <p>The supplied products are guaranteed to be genuine, so Shopee encourages you to send the product directly to the warranty address mentioned in the detailed description of the product for warranty support in the fastest time.</p>
                <p>The average warranty period is from a few days depending on the parts that need to be replaced and the Service Center will notify you specifically.</p>
                <div class="d-flex justify-content-center"><img src="./assets/images/manuals.jpg" alt=""></div>
                <p><b>b. Warranty through Tasha</b></p>
                <p>In case you send a warranty product to Tasha, we will send a confirmation message to you when Tasha receives the product.</p>
                <p>Your product warranty period is expected from 20 days to 45 working days from the time Tasha receives the product, depending on the company's replacement parts and Tasha will notify you in detail after there is information from the warranty party</p>
                <p>* For details or questions, please contact Tasha for support. Sincerely thank.</p>
            </div>
        </div>
    </div>

    <div class="useful">
        <p style="padding-right:50px ;padding-left:50px; " class="mb-0"><i>Is this article helpful for you?</i></p>
        <p style="font-size: 18px;" class="mb-0" id="yes"><i style="font-size:20px;" class="fa-solid fa-face-smile mr-2"></i>Yes</p>
        <p style="font-size: 18px;" class="mb-0" id="no"><i style="font-size:20px;" class="fa-solid fa-face-sad-tear mr-2"></i>No</p>
    </div>
</div>

<?php
include('footer.php');
?>
<script>
    $('#yes').on('click', function() {
        $(this).addClass("felling");
        $('#no').removeClass("felling");

    });

    $('#no').on('click', function() {
        $(this).addClass("felling");
        $('#yes').removeClass("felling");
    });
</script>