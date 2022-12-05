<?php
shuffle($product_shuffle);
?>
<section id="top-sale">
    <div class="container py-5">
      <h4 class="font-arial font-size-20">Top Sale</h4> 
      <hr>
       <!-- owl-carousel -->
        <div class="owl-carousel owl-theme">
          <?php foreach ($product_shuffle as $item) { ?>
          <div class="item py-2">
            <div class="product font-arial">
              <a href="">
                <img src="<?php echo $item['item_image'] ?? "./static/assets/images/1.png"; ?>" alt="product1" class="img-fluid product-image">
                <div class="text-center">
                  <h6><?php echo  $item['item_name'] ?? "Unknown";  ?></h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>R<?php echo $item['item_price'] ?? '0' ; ?></span>
                  </div>
                  <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                </div>
              </a>
            </div>
          </div>
          <?php } // closing foreach function ?>
          
          </div>
        </div>

    </div>
  </section>
  