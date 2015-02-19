<?php
/////////////////////// CUSTOM Button for "CUSTOMIZE" on single product page to be appeared under "Add To Cart" //////////////////////////////////////////////////////
//// TO SHOW "ADD TO CART" BUTTON, display:block to single_variation_wrap in custom CSS
$product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );
$single_cat = array_shift( $product_cats );
	add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_custBtn1', 20 );
		function woocommerce_template_single_custBtn1() { 
			$product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );
			 $single_cat = array_shift( $product_cats );
			 if($single_cat->name == "Designer Wear" || $single_cat->name == "ADDesigns" || $single_cat->name == "ADDesign_Exquisite") {
			?>

			<br>
				<!--<H2 style="font-size:20px;">OR</H2>-->
				<br>
					<?php 
					if(is_user_logged_in() ){ }
					else{
						$message = "You need to be logged in to purchase the product!";
						wc_add_notice( $message, $notice_type = 'error' );
					}	
					?>
					<button id="customizeBtn" class="customizeBtn vc_btn vc_btn_md vc_btn_square" style="color:#ffffff; background-color:#000000; border:none;">
						Customize
					</button>
					<br>
	<?php } }


		/**
		 * The following hook will add a input field right before "add to cart button"
		 * will be used for getting Name on t-shirt 
		 */


		function add_multiple_field() {
				    echo '
				    
				   <div id="meazureID" class="meazureClass" style="display:none;">
								Neck Front: &nbsp;&nbsp;&nbsp
								<select name="properties[neckTypeFront]" id="neckTypeFront" class="neckTypeFront" style="">
									<option value="neckFront-na">Select Neck Type</option>
									<option value="neckFront-round">Round</option>
									<option value="neckFront-vneck">V-Neck</option>
									<option value="neckFront-deepneck">Deep Neck</option>
								</select>
								<br><br>

								Neck Back: &nbsp;&nbsp;&nbsp
								<select name="properties[neckTypeBack]" id="neckTypeBack" class="neckTypeBack" style="">
									<option value="neckBack-na">Select Neck Type</option>
									<option value="neckBack-round">Round</option>
									<option value="neckBack-vneck">V-Neck</option>
									<option value="neckBack-dneck">Deep Neck</option>
								</select>
								<br><br>

								Shoulder(cm): &nbsp;&nbsp;&nbsp
								<select name="properties[shoulderSize]" id="shoulderSize" class="shoulderSize" style="">
									<option value="shoulder-na">Select</option>
									<option value="shoulder-20">20</option>
									<option value="shoulder-30">30</option>
									<option value="shoulder-40">40</option>
								</select>
								<br><br>

								Armhole(cm): &nbsp;&nbsp;&nbsp
								<select name="properties[armholeSize]" id="armholeSize" class="armholeSize" style="">
									<option value="armhole-na">Select</option>
									<option value="armhole-20">20</option>
									<option value="armhole-30">30</option>
									<option value="armhole-40">40</option>
								</select>
								<br><br>

								Sleeve Length(cm): &nbsp;&nbsp;&nbsp
								<select name="properties[sleeveSize]" id="sleeveSize" class="sleeveSize" style="">
									<option value="sleeveLength-na">Select</option>
									<option value="sleeveLength-20">20</option>
									<option value="sleeveLength-30">30</option>
									<option value="sleeveLength-40">40</option>
								</select>
								<br><br>

								Sleeve Round(cm): &nbsp;&nbsp;&nbsp
								<select name="properties[sleeveRSize]" id="sleeveRSize" class="sleeveRSize" style="">
									<option value="sleeveRound-na">Select</option>
									<option value="sleeveRound-20">20</option>
									<option value="sleeveRound-30">30</option>
									<option value="sleeveRound-40">40</option>
								</select>
								<br><br>

								Bust(in): &nbsp;&nbsp;&nbsp
								<select name="properties[bustSize]" id="bustSize" class="bustSize" style="">
									<option value="bust-na">Select</option>
									<option value="bust-20">20</option>
									<option value="bust-30">30</option>
									<option value="bust-40">40</option>
								</select>
								<br><br>

								Bust Cup: &nbsp;&nbsp;&nbsp
								<select name="properties[bustcSize]" id="bustcSize" class="bustcSize" style="">
									<option value="bustCup-na">Select</option>
									<option value="bustCup-A">A</option>
									<option value="bustCup-B">B</option>
									<option value="bustCup-C">C</option>
									<option value="bustCup-D">D</option>
									<option value="bustCup-DD">Double D</option>
								</select>
								<br><br>

								Waist(cm): &nbsp;&nbsp;&nbsp
								<select name="properties[waistSize]" id="waistSize" class="waistSize" style="">
									<option value="waist-na">Select</option>
									<option value="waist-20">20</option>
									<option value="waist-30">30</option>
									<option value="waist-40">40</option>
								</select>
								<br><br>

								Hip(cm): &nbsp;&nbsp;&nbsp
								<select name="properties[hipSize]" id="hipSize" class="hipSize" style="">
									<option value="hip-na">Select</option>
									<option value="hip-20">20</option>
									<option value="hip-30">30</option>
									<option value="hip-40">40</option>
								</select>
								<br><br>

								Length Of The Lining(cm): &nbsp;&nbsp;&nbsp
								<select name="properties[lotlSize]" id="lotlSize" class="lotlSize" style="">
									<option value="lengthOfThelining-na">Select</option>
									<option value="lengthOfThelining-20">20</option>
									<option value="lengthOfThelining-30">30</option>
									<option value="lengthOfThelining-40">40</option>
								</select>
								<br><br>

								Length Of The Dress(cm): &nbsp;&nbsp;&nbsp
								<select name="properties[lotdSize]" id="lotdSize" class="lotdSize" style="">
									<option value="lengthOfTheDress-na">Select</option>
									<option value="lengthOfTheDress-20">20</option>
									<option value="lengthOfTheDress-30">30</option>
									<option value="lengthOfTheDress-40">40</option>
								</select>
								<br><br>

								Shoulder To Waist(cm): &nbsp;&nbsp;&nbsp
								<select name="properties[stwSize]" id="stwSize" class="stwSize" style="">
									<option value="shoulderToWaist-na">Select</option>
									<option value="shoulderToWaist-20">20</option>
									<option value="shoulderToWaist-30">30</option>
									<option value="shoulderToWaist-40">40</option>
								</select>
								<br><br>
						</div>
				    ';
				}
		
		add_action( 'woocommerce_before_add_to_cart_button', 'add_multiple_field' );

if($single_cat->name == "Designer Wear" || $single_cat->name == "ADDesigns" || $single_cat->name == "ADDesign_Exquisite") {
		function save_custom_field_in_session( $cart_item_key, $product_id = null, $quantity= null, $variation_id= null, $variation= null ) {
			WC()->session->set( $cart_item_key.'_custom_fields_data', $_REQUEST['properties'] );
			
		}
		add_action( 'woocommerce_add_to_cart', 'save_custom_field_in_session', 1, 5 );


		function render_meta_on_cart_item( $title = null, $cart_item = null, $cart_item_key = null ) {
			if( $cart_item_key) {
				$custom_fields = WC()->session->get( $cart_item_key.'_custom_fields_data' );
				echo $title. '<dl class="">
						 		<dt class="">Neck Type(Front) : </dt>
						 		<dd class=""><p>'. $custom_fields['neckTypeFront'] .'</p></dd>
					  		</dl>
						 	<dl class="">
						 		<dt class="">Neck Type(Back) : </dt>
						 		<dd class=""><p>'. $custom_fields['neckTypeBack'] .'</p></dd>
					  		</dl>
						 	<dl class="">
						 		<dt class="">Shoulder Size : </dt>
						 		<dd class=""><p>'. $custom_fields['shoulderSize'] .'</p></dd>
					  		</dl>
					  		<dl class="">
						 		<dt class="">Armhole : </dt>
						 		<dd class=""><p>'. $custom_fields['armholeSize'] .'</p></dd>
					  		</dl>
					  		<dl class="">
						 		<dt class="">Sleeve Size : </dt>
						 		<dd class=""><p>'. $custom_fields['sleeveSize'] .'</p></dd>
					  		</dl>
					  		<dl class="">
						 		<dt class="">Sleeve Round Size : </dt>
						 		<dd class=""><p>'. $custom_fields['sleeveRSize'] .'</p></dd>
					  		</dl>
					  		<dl class="">
						 		<dt class="">Bust : </dt>
						 		<dd class=""><p>'. $custom_fields['bustSize'] .'</p></dd>
					  		</dl>
					  		<dl class="">
						 		<dt class="">Cup : </dt>
						 		<dd class=""><p>'. $custom_fields['bustcSize'] .'</p></dd>
					  		</dl>
					  		<dl class="">
						 		<dt class="">Waist Size : </dt>
						 		<dd class=""><p>'. $custom_fields['waistSize'] .'</p></dd>
					  		</dl>
					  		<dl class="">
						 		<dt class="">Hip : </dt>
						 		<dd class=""><p>'. $custom_fields['hipSize'] .'</p></dd>
					  		</dl>
					  		<dl class="">
						 		<dt class="">Length Of The Lining : </dt>
						 		<dd class=""><p>'. $custom_fields['lotlSize'] .'</p></dd>
					  		</dl>
					  		<dl class="">
						 		<dt class="">Length Of The Dress : </dt>
						 		<dd class=""><p>'. $custom_fields['lotdSize'] .'</p></dd>
					  		</dl>
					  		<dl class="">
						 		<dt class="">Shoulder To Waist : </dt>
						 		<dd class=""><p>'. $custom_fields['stwSize'] .'</p></dd>
					  		</dl>';
			}else {
				echo $title;
			}
		}
		add_filter( 'woocommerce_cart_item_name', 'render_meta_on_cart_item', 1, 3 );


		function render_meta_on_checkout_order_review_item( $quantity = null, $cart_item = null, $cart_item_key = null ) {
			if( $cart_item_key ) {
				$custom_fields = WC()->session->get( $cart_item_key.'_custom_fields_data' );
				echo $quantity. '<dl class="">
						 		<dt class="">Neck Type(Front) : </dt>
						 		<dd class=""><p>'. $custom_fields['neckTypeFront'] .'</p></dd>
					  		</dl>
						 	<dl class="">
						 		<dt class="">Neck Type(Back) : </dt>
						 		<dd class=""><p>'. $custom_fields['neckTypeBack'] .'</p></dd>
					  		</dl>
						 	<dl class="">
						 		<dt class="">Shoulder Size : </dt>
						 		<dd class=""><p>'. $custom_fields['shoulderSize'] .'</p></dd>
					  		</dl>
					  		<dl class="">
						 		<dt class="">Armhole : </dt>
						 		<dd class=""><p>'. $custom_fields['armholeSize'] .'</p></dd>
					  		</dl>
					  		<dl class="">
						 		<dt class="">Sleeve Size : </dt>
						 		<dd class=""><p>'. $custom_fields['sleeveSize'] .'</p></dd>
					  		</dl>
					  		<dl class="">
						 		<dt class="">Sleeve Round Size : </dt>
						 		<dd class=""><p>'. $custom_fields['sleeveRSize'] .'</p></dd>
					  		</dl>
					  		<dl class="">
						 		<dt class="">Bust : </dt>
						 		<dd class=""><p>'. $custom_fields['bustSize'] .'</p></dd>
					  		</dl>
					  		<dl class="">
						 		<dt class="">Cup : </dt>
						 		<dd class=""><p>'. $custom_fields['bustcSize'] .'</p></dd>
					  		</dl>
					  		<dl class="">
						 		<dt class="">Waist Size : </dt>
						 		<dd class=""><p>'. $custom_fields['waistSize'] .'</p></dd>
					  		</dl>
					  		<dl class="">
						 		<dt class="">Hip : </dt>
						 		<dd class=""><p>'. $custom_fields['hipSize'] .'</p></dd>
					  		</dl>
					  		<dl class="">
						 		<dt class="">Length Of The Lining : </dt>
						 		<dd class=""><p>'. $custom_fields['lotlSize'] .'</p></dd>
					  		</dl>
					  		<dl class="">
						 		<dt class="">Length Of The Dress : </dt>
						 		<dd class=""><p>'. $custom_fields['lotdSize'] .'</p></dd>
					  		</dl>
					  		<dl class="">
						 		<dt class="">Shoulder To Waist : </dt>
						 		<dd class=""><p>'. $custom_fields['stwSize'] .'</p></dd>
					  		</dl>';
			}
		}
		add_filter( 'woocommerce_checkout_cart_item_quantity', 'render_meta_on_checkout_order_review_item', 1, 3 );


		function tshirt_order_meta_handler( $item_id, $values, $cart_item_key ) {
			$custom_fields = WC()->session->get( $cart_item_key.'_custom_fields_data' );
			wc_add_order_item_meta( $item_id, "neckTypeFront", $custom_fields['neckTypeFront'] );
			wc_add_order_item_meta( $item_id, "neckTypeBack", $custom_fields['neckTypeBack'] );
			wc_add_order_item_meta( $item_id, "shoulderSize", $custom_fields['shoulderSize'] );
			wc_add_order_item_meta( $item_id, "armholeSize", $custom_fields['armholeSize'] );
			wc_add_order_item_meta( $item_id, "sleeveSize", $custom_fields['sleeveSize'] );
			wc_add_order_item_meta( $item_id, "sleeveRSize", $custom_fields['sleeveRSize'] );
			wc_add_order_item_meta( $item_id, "bustSize", $custom_fields['bustSize'] );
			wc_add_order_item_meta( $item_id, "bustcSize", $custom_fields['bustcSize'] );
			wc_add_order_item_meta( $item_id, "waistSize", $custom_fields['waistSize'] );
			wc_add_order_item_meta( $item_id, "hipSize", $custom_fields['hipSize'] );
			wc_add_order_item_meta( $item_id, "lotlSize", $custom_fields['lotlSize'] );
			wc_add_order_item_meta( $item_id, "lotdSize", $custom_fields['lotdSize'] );
			wc_add_order_item_meta( $item_id, "stwSize", $custom_fields['stwSize'] );
		}
		add_action( 'woocommerce_add_order_item_meta', 'tshirt_order_meta_handler', 1, 3 );


		function tshirt_force_individual_cart_items($cart_item_data, $product_id) {
			$unique_cart_item_key = md5( microtime().rand() );
			$cart_item_data['unique_key'] = $unique_cart_item_key;

			return $cart_item_data;
		}
		add_filter( 'woocommerce_add_cart_item_data','tshirt_force_individual_cart_items', 10, 2 );
}

	
/////////////////////// CUSTOM Button for "CUSTOMIZE" on single product page to be appeared under "Add To Cart" //////////////////////////////////////////////////////
