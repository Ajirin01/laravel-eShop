    @extends('layouts.eshop')

        @section('e-shop-content')
        <div  class="headline">
                <h1 class="main-headline">Shop all you can here</h1>
                <h2 class="sub-headline">Best products at best price</h2>
                <h3 class="sub-headline">Convenient shopping</h3>
                <h3 class="sub-headline">Express delivery</h3>
                <h3 class="sub-headline">247 assistance</h3>
                 
                
             </div>
</div>

<div class="main-content">
 <h2 class="top-products">LATEST PRODUCTS</h2>

 <div class="products-list">
 <?php
 for ($i=0; $i < 12; $i++) {
                echo ' <div class="product"><a href="all_products/'.$i.'"><img src="/images/shoe2.jpg" alt="product image" class="product-image"></a>
                  <br>
                  <a href="all_products/'.$i.'"><div>product name</div></a>
                  <a href="all_products/'.$i.'"><div>product price</div></a>
                    </div>';
            }
 ?>
 </div>

 <div class="flash-advert">
     <div class="flash-detail"></div>
     <div class="flash-image"></div>   
 </div>
</div>

<div class="cont-brands">
 <div class="top-brands-cont">
     <?php
 for ($i=0; $i < 4; $i++) { 
     echo ' <div class="top-brands"><a href="#"><img src="/images/shoe1.jpg" alt="product image" class="brand-image"></a>
       <br>
         <a href="#"><div class="top-brands-name">brand name</div></div></a>';
 }
 ?>
 </div>
</div>


        @endsection
                    
                        