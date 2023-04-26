<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
  <style>
    *{
      padding: 0;
      margin: 0;
    }
    body{
    
    }

    .headline{
      text-align:center;
      margin: 40px 0px;
    }
    h3{
      font-size:18px;
      padding:10px 20px;
      border:1px solid black;
      display:inline-block;
    }
    #wrapper{
      max-width:1170px;
      margin:0 auto;
    }

    ul.product{
      list-style: none;
      display:flex;
      flex-wrap:wrap;
      justify-content: space-between;
    }

    ul.product li{
      flex-basis:20%;
      padding-left:15px;
      padding-right:15px;
      box-sizing:border-box;
      margin-bottom:30px;
    }

    /* chỉnh ảnh về 1 kích thước */
    ul.product li img{
      max-width:100%;
      height:auto;
    }

    ul.product li .product-top{
      position:relative;
      overflow:hidden;
    }

    ul.product li .product-top a.product-thumb{
      display:block;
    }

    ul.product li:hover .product-top .product-thumb img{
      filter: opacity(80%);
    }

    ul.product li .product-top a.buy-now{
      color:#e9e9e9;
      text-transform:uppercase;
      text-align:center;
      text-decoration:none;
      display:block;
      background-color:orange;
      padding:6px 0px;
      position: absolute;
      width: 100%;
      bottom:-36px;
      transition: 0.25s ease-in-out;
      opacity:0.85;
    }

    ul.product li:hover a.buy-now{
      bottom:0px;
    }
    ul.product li .product-infor {
      padding:10px 0px;
    }

    ul.product li .product-infor a{
      text-decoration:none;
    }

    ul.product li .product-infor a.product-cart{
      font-size:11px;
      text-transform: uppercase;
      color: #9e9e9e;
      padding:3px 0px;
    }

    ul.product li .product-infor a.product-name{
      padding: 3px 0px;
      color: #334862;

    }

    ul.product li .product-infor .product-price{
      color:#111;
      font-weight:600;
    }
    </style>


    <?php
        include('header.php');
    ?>
<div id="wrapper">    
    <div class="headline">
          <h3>CookWare</h3>
    </div>
    <ul class="product">
      <li>
        <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="images/cookware/cookware2.jpg">
              </a>
              <a href="" class="buy-now">Buy Now</a>
            </div>
            <div class="product-infor">
              <a href="" class="product-cart">Cookware</a><br>
              <a href="" class="product-name">Cooking Pans</a><br>
              <div class="product-price">$52</div>
            </div>
        </div>
      </li>
      <li>
        <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="images/cookware/cookware2.jpg" alt="">
              </a>
              <a href="" class="buy-now">Buy Now</a>
            </div>
            <div class="product-infor">
              <a href="" class="product-cart">Cookware</a><br>
              <a href="" class="product-name">Cookware Set</a><br>
              <div class="product-price">$125</div>
            </div>
        </div>
      </li>
      <li>
        <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="images/cookware/cookware2.jpg" alt="">
              </a>
              <a href="" class="buy-now">Buy Now</a>
            </div>
            <div class="product-infor">
              <a href="" class="product-cart">Cookware</a><br>
              <a href="" class="product-name">Cookware1</a><br>
              <div class="product-price">$52</div>
            </div>
        </div>
      </li>
      <li>
        <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="images/cookware/cookware2.jpg" alt="">
              </a>
              <a href="" class="buy-now">Buy Now</a>
            </div>
            <div class="product-infor">
              <a href="" class="product-cart">Cookware</a><br>
              <a href="" class="product-name">Cookware1</a><br>
              <div class="product-price">$52</div>
            </div>
        </div>
      </li>
      <li>
        <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="images/image2.png" alt="">
              </a>
              <a href="" class="buy-now">Buy Now</a>
            </div>
            <div class="product-infor">
              <a href="" class="product-cart">Cookware</a><br>
              <a href="" class="product-name">Cookware1</a><br>
              <div class="product-price">$52</div>
            </div>
        </div>
      </li>
      <li>
        <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="images/image2.png" alt="">
              </a>
              <a href="" class="buy-now">Buy Now</a>
            </div>
            <div class="product-infor">
              <a href="" class="product-cart">Cookware</a><br>
              <a href="" class="product-name">Cookware1</a><br>
              <div class="product-price">$52</div>
            </div>
        </div>
      </li>
      <li>
        <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="images/image2.png" alt="">
              </a>
              <a href="" class="buy-now">Buy Now</a>
            </div>
            <div class="product-infor">
              <a href="" class="product-cart">Cookware</a><br>
              <a href="" class="product-name">Cookware1</a><br>
              <div class="product-price">$52</div>
            </div>
        </div>
      </li>
      <li>
        <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="images/image2.png" alt="">
              </a>
              <a href="" class="buy-now">Buy Now</a>
            </div>
            <div class="product-infor">
              <a href="" class="product-cart">Cookware</a><br>
              <a href="" class="product-name">Cookware1</a><br>
              <div class="product-price">$52</div>
            </div>
        </div>
      </li>
      <li>
        <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="images/image2.png" alt="">
              </a>
              <a href="" class="buy-now">Buy Now</a>
            </div>
            <div class="product-infor">
              <a href="" class="product-cart">Cookware</a><br>
              <a href="" class="product-name">Cookware1</a><br>
              <div class="product-price">$52</div>
            </div>
        </div>
      </li>
      <li>
        <div class="product-item">
            <div class="product-top">
              <a href="" class="product-thumb">
                <img src="images/image2.png" alt="">
              </a>
              <a href="" class="buy-now">Buy Now</a>
            </div>
            <div class="product-infor">
              <a href="" class="product-cart">Cookware</a><br>
              <a href="" class="product-name">Cookware1</a><br>
              <div class="product-price">$52</div>
            </div>
        </div>
      </li>
    </ul>
<div>


<?php
        include('footer.php');
    ?>
</body>
</html>