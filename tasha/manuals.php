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
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
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
        <a class="nav-link text-left" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Sales guide for newbies</a>
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
                select <b>Add to Cart</b> > select <b>Shopping Cart</b> (icon <i style="font-size:20px; color:#F75813" class="fa-solid fa-cart-shopping"></i>) > select the products you want to order >
                Adjust Quantity and Category of products (if any) > select <b>Purchase</b> > follow the rest of the steps as shown below. first</p>
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <p>Are you thinking of selling, online business or looking to promote online sales?</p>
            <p>In this article, we will give general tips on how to sell online for beginners effectively.No matter what product you want to sell, you
                can start selling online from home. Here's how to get started:</p>
            <h6>1. Find out the market demand and the product you want to sell</h6>
            <p>Most people who are just starting to sell online often make the mistake of finding a source for the product they want to sell and then finding out the market.
                However, the sequence should go from searching for market needs to knowing what users are looking for, then researching appropriate products that can meet that need.</p>
            <p>To determine which ideas are a good fit, combine exploration of current market interests, strengths, and needs. You can research at:</p>
            <ul>
                <li><b>Social networks</b>: Facebook, Instagram, Zalo,...,</li>
                <li><b>Join groups, communities, consulting</b> find out what problems your customers are having</li>
                <li><b>Keyword research</b> Google or <a href="https://trends.google.com/trends/?geo=VN" target="_blank" style="color: rgb(17, 85, 204); background-color: transparent;"><u>Google Trends</u></a>

                    to see which keywords many people want to find but there are few places to meet them</li>
                <li><b>Find out at e-commerce sites</b> to know which products and industries are developing and selling well.</li>
            </ul>
            <h6>2. Research competitors and understand customers</h6>
            <p>After market research, choose business products. Next, you should <b>get to know your opponent</b> what are you doing and how effective are the customers. Afterward
                <b>research your customers carefully</b>,who are they, where are they, what do they care about, what do they think when they shop online, their psychology, etc. The better you understand your customers,
                the better your sales plan and goals will be. online is more suitable.
            </p>
            <h6>3. Omnichannel selling and choosing the right sales channel</h6>
            <p>What product are you selling, who are the target customers that your product reaches, with what behavior or habits?
                With the digital age and the impact of the pandemic, you not only have a Facebook channel or a social network to sell online effectively, but also can
                <b>expand and combine more channels</b> to easily reach your target audience.
            </p>
            <h6>4. Check and optimize selling costs and shipping costs for online orders</h6>
            <p>The cost of selling online will vary according to different sales channels. <b>The cost of selling online will vary according to different sales channels.</b>
                Shipping costs are often a barrier for online shoppers, so minimizing the shipping costs of online orders helps your shop save costs and attract more customers.</p>
            <h6>5. Products come with quality pictures</h6>
            <p>Because of online sales, customers will not directly see, touch and feel the product and product quality. Therefore, beautiful images will help customers visualize the product details before closing the order,
                helping to promote purchase motivation.</p>
            <p><b>In order to have a product with a beautiful and attractive image, the Seller should:</b></p>
            <ul>
                <li>Take photos in a well-lit area</li>
                <li>Choose a simple background/photo background</li>
                <li>Limit the use of filters/filters</li>
                <li>Shoot different angles of the product</li>
            </ul>
            <h6>6. Detailed product description</h6>
            <p>Please <b>describe the product honestly and in detail</b> của bạn khi đăng bán online và bao gồm <b>correct and relevant keywords</b>
                make it easy for your products to show up in search results when buyers search for related products.</p>
            <h6>7. Invest in product advertising</h6>
            <p>Nowadays, the online sales market is extremely competitive, how can you get ahead of the competition or at least win more orders? That is investing in more advertising to increase reach with target customers.
                <b>Advertise with the right content with beautiful product images</b> will motivate customers to buy your product.
            </p>
            <h6>8. Focus on customer care and satisfaction</h6>
            <p>An immutable rule for success when selling online: <b>customer-centricity.</b> According to research from Retail Wire, customers trust product reviews of customers who have purchased as much as recommendations
                from friends and family. Therefore, online sellers must ensure to monitor reviews / reviews from customers, feedback to maintain good reviews for their shop.</p>
            <p>Besides, responding to customer messages also helps you improve the quality of customer care, creating a close relationship with buyers.</p>
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