{{-- @extends('layouts.eshop_pages') --}}
    {{-- @section('all_products') --}}


    <div>
        @include('\layouts\partialTemplates\nagivation')
    </div>
    <div>
        {{-- @can('isAdmin')
        testing can
      @endcan --}}
            <h2 class="top-products">PRODUCTS</h2>

            <div class="products-list">
            <?php
           for ($i=0; $i < 24; $i++) {
                echo ' <div class="product"><a href="all_products/'.$i.'"><img src="/images/shoe2.jpg" alt="product image" class="product-image"></a>
                  <br>
                  <a href="all_products/'.$i.'"><div>product name</div></a>
                  <a href="all_products/'.$i.'"><div>product price</div></a>
                    </div>';
            }
            ?>
            </div>

            <br><br>

           

            <h2 class="top-products">YOUR RECENT SEARCH</h2>

            <div class="products-list">
            <?php
            for ($i=0; $i < 8; $i++) {
                echo ' <div class="product"><a href="all_products/'.$i.'"><img src="/images/shoe2.jpg" alt="product image" class="product-image"></a>
                  <br>
                  <a href="all_products/'.$i.'"><div>product name</div></a>
                  <a href="all_products/'.$i.'"><div>product price</div></a>
                    </div>';
            }
            ?>
            </div>
    </div>
    <br><br>
      <div>
          @include('\layouts\partialTemplates\footer')
    </div> 
    {{-- @endsection --}}
    {{-- @include('\layouts\partialTemplates\nagivation') --}}
    