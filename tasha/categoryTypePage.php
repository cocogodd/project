<style>
    .category-type {
        display: inline-flex;
        list-style: none;
    }

    .category-type li {
        border: 1px solid #ccc;
        padding: 10px;
        margin: 0px 10px;
    }
</style>
<?php
include('header.php');
?>
<div style="padding:20px">
    <h3 style="text-align: center;">CookWare</h3>
    <ul class="category-type">
        <li>
            <div class="product-item">
                <h5>Cooking Pans</h5>
                <a href="categoryPage.php?category_type_id=1" class="product-name">Show Product</a><br>
            </div>
        </li>
        <li>
            <div class="product-item">
                <h5>Frying Pans</h5>
                <a href="categoryPage.php?category_type_id=1" class="product-name">Show Product</a><br>
            </div>
        </li>
    </ul>
</div>


    <?php
    include('footer.php');
    ?>