<?php
shuffle($product_shuffle);
// request method post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['product_sale_submit'])) {
    // call method addToCart
    $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
  }
}
$item_id = $_GET['item_id'] ?? 1;
foreach ($product->getData() as $item):
  if ($item['item_id'] == $item_id):
?>
<section id="product" class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <img src="<?php echo $item['item_image'] ?>" alt="product" class="img-fluid">
        <div class="form-row row pt-4 font-size-16 font-arial">
          <div class="col">
            <a href="cart.php" type="submit" class="btn btn-danger form-control">Proceed
              to Buy</a>
          </div>
          <div class="col">
            <form method="post">
              <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
              <input type="hidden" name="user_id" value="<?php echo 1; ?>">
              <?php
    if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])) {
      echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">In the Cart</button>';
    } else {
      echo '<button type="submit" name="product_sale_submit" class="btn btn-warning font-size-16 form-control">Add to Cart</button>';
    }
                ?>
            </form>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <h5 class="font-baloo font-size-20">
          <?php echo $item['item_name'] ?? "Unknown"; ?>
        </h5>
        <small>by
          <?php echo $item['item_brand'] ?? "Brand"; ?>
        </small>
        <div class="d-flex">
          <div class="rating text-warning font-size-12">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="far fa-star"></i></span>
          </div>
          <a href="#" class="px-2 font-rale font-size-14">20,534 ratings |
            1000+ answered questions</a>
        </div>
        <hr class="m-0">
        <table class="my-3">
          <tr class="font-rale font-size-14">
            <td>M.R.P:</td>
            <td><strike>R
                <?php echo $item['item_price'] + 20 ?? 0; ?>.00
              </strike></td>
          </tr>
          <tr class="font-rale font-size-14">
            <td>Deal Price:</td>
            <td class="font-size-20 text-danger">R<span>
                <?php echo $item['item_price'] ?? 0; ?>
              </span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of
                all taxes</small></td>
          </tr>
          <tr class="font-rale font-size-14">
            <td>You Save:</td>
            <td><span class="font-size-16 text-danger">R20.00</span></td>
          </tr>
        </table>
        <!---    !product price -->

        <!--    #policy -->
        <div id="policy">
          <div class="d-flex">
            <div class="return text-center mr-5">
              <div class="font-size-20 my-2 color-secondary">
                <span class="fas fa-retweet border p-3 rounded-pill"></span>
              </div>
              <a href="#" class="font-rale font-size-12">10 Days <br>
                Replacement</a>
            </div>
            <div class="return text-center mr-5">
              <div class="font-size-20 my-2 color-secondary">
                <span class="fas fa-truck border p-3 rounded-pill"></span>
              </div>
              <a href="#" class="font-rale font-size-12">Daily Tuition
                <br>Delivered</a>
            </div>
            <div class="return text-center mr-5">
              <div class="font-size-20 my-2 color-secondary">
                <span class="fas fa-check-double border p-3 rounded-pill"></span>
              </div>
              <a href="#" class="font-rale font-size-12">1 Year <br>Warranty</a>
            </div>
          </div>
        </div>
        <hr>
        <!-- order-details -->
        <div id="order-details" class="font-rale d-flex flex-column
                text-dark">
          <small>Delivery by : Mar 29 - Apr 1</small>
          <small>Sold by <a href="#">Adidas </a>(4.5 out of 5 | 18,198
            ratings)</small>
          <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver
            to Customer - 424201</small>
        </div>


        <div class="row my-3">

          <div class="col-6">
            <!-- product qty section -->
            <!-- <div class="qty d-flex">
                    <h6 class="font-arial">Qty</h6>
                    <div class="px-4 d-flex font-rale">
                      <button class="qty-up border bg-light" data-id="pro1"><i
                          class="fas fa-angle-up"></i></button>
                      <input type="text" data-id="pro1" class="qty_input border
                        px-2 w-50 bg-light" disabled value="1" placeholder="1">
                      <button data-id="pro1" class="qty-down border bg-light"><i
                          class="fas fa-angle-down"></i></button>
                    </div>
                  </div> -->

          </div>
        </div>

        <!-- size -->
        <div class="size my-3">
          <h6 class="font-baloo">Size :</h6>
          <div class="d-flex justify-content-between w-75">
            <div class="font-rubik border p-2">
              <button class="btn p-0 font-size-14">Small</button>
            </div>
            <div class="font-rubik border p-2">
              <button class="btn p-0 font-size-14">Medium</button>
            </div>
            <div class="font-rubik border p-2">
              <button class="btn p-0 font-size-14">Large</button>
            </div>
            <div class="font-rubik border p-2">
              <button class="btn p-0 font-size-14">Extra Large</button>
            </div>
          </div>
        </div>


      </div>
      <div class="col-12 my-4">
        <h6 class="font-rubik">Product Description</h6>
        <hr>
        <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet
          consectetur adipisicing elit. Repellat inventore vero numquam
          error est ipsa, consequuntur temporibus debitis nobis sit,
          delectus officia ducimus dolorum sed corrupti. Sapiente optio
          sunt provident, accusantium eligendi eius reiciendis animi?
          Laboriosam, optio qui? Numquam, quo fuga. Maiores minus,
          accusantium velit numquam a aliquam vitae vel?</p>
        <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet
          consectetur adipisicing elit. Repellat inventore vero numquam
          error est ipsa, consequuntur temporibus debitis nobis sit,
          delectus officia ducimus dolorum sed corrupti. Sapiente optio
          sunt provident, accusantium eligendi eius reiciendis animi?
          Laboriosam, optio qui? Numquam, quo fuga. Maiores minus,
          accusantium velit numquam a aliquam vitae vel?</p>
      </div>



    </div>
  </div>
</section>
<?php
  endif;
endforeach;
      ?>