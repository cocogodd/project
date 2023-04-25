<?php
include('header.php');
?>
<!-- Câu lệnh bên trên là import phần header chung từ file header.php -->

<!-- Code dưới đây là phần viết nội dung cho trang home -->
<div id="homePage">
    <!-- banner home là phần banner slider => dùng bootstrap để viết -->
    <div id="bannerHome" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#bannerHome" data-slide-to="0" class="active"></li>
            <li data-target="#bannerHome" data-slide-to="1"></li>
            <li data-target="#bannerHome" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/images/slide1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/slide2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/slide3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/slide4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/slide5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#bannerHome" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#bannerHome" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<!-- banner home là phần danh mục sản phẩm chính => dùng grid và card bootstrap  để viết -->
    <div id="categoryBox"class="container">
        <div class="row">
            <div class="col-6">
                <!-- class card của bootstrap -->
                <div class="card bg-dark text-white">
                    <img src="./assets/images/slide5.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Cookware</h5>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
            <div class="card bg-dark text-white">
                    <img src="./assets/images/slide11.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Refrigeration</h5>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
            <div class="card bg-dark text-white">
                    <img src="./assets/images/slide8.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Appliances</h5>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
            <div class="card bg-dark text-white">
                    <img src="./assets/images/slide4.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Food Storage</h5>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Câu lệnh bên dướI là import phần footer chung từ file footer.php -->
<?php
include('footer.php');
?>