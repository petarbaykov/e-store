<section>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="left-sidebar">
            <h2>Category</h2>
            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
              <?php $parent_name = ""; generateList(0,$categories);?>

              
              
             
              
            </div><!--/category-products-->
          

            
            <div class="shipping text-center"><!--shipping-->
              <img src="images/home/shipping.jpg" alt="" />
            </div><!--/shipping-->
          
          </div>
        </div>
        
        <div class="col-sm-9 padding-right">
          <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Features Items</h2>
           
            @foreach($products as $product)
              <div class="col-sm-4">
                <div class="product-image-wrapper">
                  <div class="single-products">
                      <div class="productinfo text-center">
                        <img src="{{asset('product-images/'.$product->product_image)}}" alt="" />
                        <h2>${{ $product->product_price}}</h2>
                        <p><a href="{{asset('product/'.$product->id)}}">{{ $product->product_name}}</a></p>
                        <a href="{{asset('products/add-to-cart/'.$product->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                      </div>
                      
                  </div>
                  <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                      <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                      <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                    </ul>
                  </div>
                </div>
              </div>

            @endforeach
           
          
         
            
            
          </div><!--features_items-->
          
        </div>
      </div>
    </div>
  </section>