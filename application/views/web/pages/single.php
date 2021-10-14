<div class="main">
    <div class="content">
        <div class="section group">
            <div class="cont-desc span_1_of_2">				
                <div class="grid images_3_of_2">
                <img data-enlargeable style="cursor: zoom-in" src="<?php echo  base_url('uploads/'.$get_single_product->product_image)?>" alt="" />
                    <!-- <img src="<?php //echo base_url('uploads/'.$get_single_product->product_image)?>" alt="" /> -->
                </div>
                <div class="desc span_3_of_2">
                    <h2><?php echo $get_single_product->product_title?></h2>
                    <p><?php echo $get_single_product->product_short_description?></p>					
                    <div class="price">
                        <p>Price: <span>Rs.<?php echo $this->cart->format_number($get_single_product->product_price)?></span></p>
                        <p>Category: <span><?php echo $get_single_product->category_name?></span></p>
                        <p>Brand:<span><?php echo $get_single_product->brand_name?></span></p>
                    </div>
                    <div class="add-cart">
                        <form action="<?php echo base_url('save/cart');?>" method="post">
                            <input type="number" class="buyfield" name="qty" value="1"/>
                            <input type="hidden" class="buyfield" name="product_id" value="<?php echo $get_single_product->product_id?>"/>
                            <input type="submit" class="buysubmit" name="submit" value="Buy Now"/>
                        </form>				
                    </div>
                </div>
                <div class="product-desc">
                    <h2>Product Details</h2>
                    <p><?php echo $get_single_product->product_long_description?></p>
                </div>

            </div>
            <div class="rightsidebar span_3_of_1">
                <h2>CATEGORIES</h2>
                <ul>
                    <?php foreach($get_all_category as $single_category){?>
                    <li><a href="<?php echo base_url('get/category/'.$single_category->id);?>"><?php echo $single_category->category_name?></a></li>
                    <?php }?>
                </ul>

            </div>
        </div>
    </div>
</div>


<script>
	$('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
    var src = $(this).attr('src');
    var modal;
  
    function removeModal() {
	modal.remove();
	$('body').off('keyup.modal-close');
    }
    modal = $('<div>').css({
	background: 'RGBA(0,0,0,0.7) url(' + src + ') no-repeat center',
	backgroundSize: 'contain',
	width: '100%',
	height: '100%',
	position: 'fixed',
	zIndex: '10000',
	top: '0',
	left: '0',
	cursor: 'zoom-out'
    }).click(function() {
	removeModal();
    }).appendTo('body');
    //handling ESC
    $('body').on('keyup.modal-close', function(e) {
	if (e.key === 'Escape') {
	removeModal();
	}
    });
	});
	</script>