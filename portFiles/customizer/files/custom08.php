<link href='https://fonts.googleapis.com/css?family=Nosifer|League+Script|Yellowtail|Permanent+Marker|Codystar|Eater|Molle:400italic|Snowburst+One|Shojumaru|Frijole|Gloria+Hallelujah|Calligraffitti|Tangerine|Monofett|Monoton|Arbutus|Chewy|Playball|Black+Ops+One|Rock+Salt|Pinyon+Script|Orbitron|Sacramento|Sancreek|Kranky|UnifrakturMaguntia|Creepster|Pirata+One|Seaweed+Script|Miltonian|Herr+Von+Muellerhoff|Rye|Jacques+Francois+Shadow|Montserrat+Subrayada|Akronim|Faster+One|Megrim|Cedarville+Cursive|Ewert|Plaster' rel='stylesheet' type='text/css'>

<link href="files/css/style.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<script type="text/javascript" src="files/js/html2canvas.js"></script>
<script src="files/js/jquery.form.js"></script>
<script src="files/js/main8.js"></script>
<link rel="stylesheet" href="files/css/jquery-ui.css" />
<script src="files/js/jquery-ui.js"></script>
<!--For mobile compatible draggable objects-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

<script type="text/javascript">
	function changeval() {
		$total = parseInt($("#small").val()) + parseInt($("#medium").val()) + parseInt($("#large").val()) + parseInt($("#xlarge").val()) + parseInt($("#xxlarge").val()) + parseInt($("#xxxlarge").val()) + parseInt($("#xxxxlarge").val());
		//alert($total);
		$('.small').val($("#small").val());
		$('.medium').val($("#medium").val());
		$('.large').val($("#large").val());
		$('.xlarge').val($("#xlarge").val());
		$('.xxlarge').val($("#xxlarge").val());
		$('.xxxlarge').val($("#xxxlarge").val());
		$('.xxxxlarge').val($("#xxxxlarge").val());
		$('.total').val($total);
	}

	function changeval2() {
		$total = parseInt($("#small2").val()) + parseInt($("#medium2").val()) + parseInt($("#large2").val()) + parseInt($("#xlarge2").val()) + parseInt($("#xxlarge2").val()) + parseInt($("#xxxlarge2").val()) + parseInt($("#xxxxlarge2").val());
		//alert($total);
		$('.small').val($("#small2").val());
		$('.medium').val($("#medium2").val());
		$('.large').val($("#large2").val());
		$('.xlarge').val($("#xlarge2").val());
		$('.xxlarge').val($("#xxlarge2").val());
		$('.xxxlarge').val($("#xxxlarge2").val());
		$('.xxxxlarge').val($("#xxxxlarge2").val());
		$('.total').val($total);
	}

	function b() {
		$('#custom_text').toggleClass('bold_text');
		$("#bold_button").toggleClass('box-shadow', '0 0 10px inset #3c3c3c');
	}

	function i() {
		$('#custom_text').toggleClass('italic_text');
	}

	function changeFont(_name) {
		$('#custom_text').css("font-family", _name);
	}

	function changeFontSize(_size) {
		$('#custom_text').css("font-size", _size);
	}

	function changeColor(_color) {
		$('#custom_text').css("color", _color);
	}
</script>
<div class="container design_api_container">
	<div class='design_api'>
		<!--=============================================================-->
		<div id="menu">
			<div class="menu_option sel_color">
				<i class="fa fa-paint-brush fa-2x"></i>
				<P style="font-size: 10px;margin-top: 10px;">Product Colors</P>
			</div>
			<div class="menu_option sel_custom_icon">
				<i class="fa fa-cloud fa-2x"></i>
				<P style="font-size: 10px;margin-top: 10px;">Upload</P>
			</div>
			<div class="menu_option sel_text">
				<i class="fa fa-font fa-2x"></i>
				<P style="font-size: 10px;margin-top: 10px;">Add Text</P>
			</div>
		</div>
		<!--=============================================================-->
		<div id='options'>
			<div class="color_pick">
				<h4>Choose Your Product Color</h4>
				<P>Colors: </P>
				<div class="colors">
					<div class="color_radio_div" id="white"></div>
					<div class="color_radio_div" id="black"></div>
					<div class="color_radio_div" id="navy"></div>
				</div>
			</div>
			<div class="default_samples">


				<?php
				$dir    = 'files/images/Images';
				$files1 = scandir($dir);
				//$files2 = scandir($dir, 1);
				foreach ($files1 as &$value) {
					if (strpos($value, '.png') !== false) {
						//echo 'true';
						echo '<div class="sample_icons"><img src="files/images/Images/' . $value . '" width="100%" height="100%" /></div>';
					} elseif (strpos($value, '.') === false) {
					}
				}
				?>
			</div>
			<div class="custom_icon">
				<form id="form1" runat="server">
					<h4>Unleash your creativity! Personalize your shirt by uploading your own picture here.</h4><br>
					<p>We recommend using the following file types for optimal results (maximum size: 5 MB):</p><br>
					<p>When it comes to graphics, the .png file format truly shines when printed, resulting in stunning visual quality.</p><br>
					<p>When it comes to photos, we highly recommend using the .jpg file format. Additionally, we gladly accept files in .JPEG and .PSD formats as well.</p><br>
					<span class="btn btn-default btn-file"> Browse
						<input type='file' id="imgInp" />
					</span>

				</form>
			</div>

			<div class="custom_font">

				<select id="fs" onchange="changeFont(this.value);">
					<option value="arial">Arial</option>
					<option value="Nosifer, cursive">Nosifer</option>
					<option value="League Script, cursive">League Script</option>
					<option value="Yellowtail, cursive">Yellowtail</option>
					<option value="Permanent Marker, cursive">Permanent Marker</option>
					<option value="Codystar, cursive">Codystar</option>
					<option value="'Eater', cursive">Eater</option>
					<option value="Molle, cursive">Molle</option>
					<option value="Snowburst One, cursive">Snowburst One</option>
					<option value="Shojumaru, cursive">Shojumaru</option>
					<option value="Frijole, cursive">Frijole</option>
					<option value="Gloria Hallelujah, cursive">Gloria Hallelujah</option>
					<option value="Calligraffitti, cursive">Calligraffitti</option>
					<option value="Tangerine, cursive">Tangerine</option>
					<option value="Monofett, cursive">Monofett</option>
					<option value="Monoton, cursive">Monoton</option>
					<option value="Arbutus, cursive">Arbutus</option>
					<option value="Chewy, cursive">Chewy</option>
					<option value="Playball, cursive">Playball</option>
					<option value="Black Ops One, cursive">Black Ops One</option>
					<option value="'Rock Salt', cursive">Rock Salt</option>
					<option value=" 'Pinyon Script', cursive">Pinyon Script</option>
					<option value="'Orbitron', sans-serif">Orbitron</option>
					<option value="'Sacramento', cursive">acramento</option>
					<option value="'Sancreek', cursive">Sancreek</option>
					<option value="'Kranky', cursive">Kranky</option>
					<option value="'UnifrakturMaguntia', cursive">UnifrakturMaguntia</option>
					<option value="'Creepster', cursive">Creepster</option>
					<option value="'Pirata One', cursive">Pirata One</option>
					<option value=" 'Seaweed Script', cursive">Seaweed Script</option>
					<option value=" 'Miltonian', cursive">Miltonian</option>
					<option value=" 'Herr Von Muellerhoff', cursive">Herr Von Muellerhoff</option>
					<option value=" 'Rye', cursive"> 'Rye'</option>
					<option value=" 'Jacques Francois Shadow', cursive">Jacques Francois Shadow</option>
					<option value=" 'Montserrat Subrayada', sans-serif">Montserrat Subrayada</option>
					<option value=" 'Akronim', cursive">Akronim</option>
					<option value=" 'Faster One', cursive">Faster One</option>
					<option value=" 'Megrim', cursive">Megrim</option>
					<option value=" 'Cedarville Cursive', cursive">Cedarville Cursive</option>
					<option value=" 'Ewert', cursive">Ewert</option>
					<option value="'Plaster', cursive">Plaster</option>
					<option value="verdana">Verdana</option>
					<option value="impact">Impact</option>
					<option value="ms comic sans">MS Comic Sans</option>
				</select>
				<input id="text-color" type="color" name="favcolor" onChange="changeColor(this.value);" placeholder="Color Name" />
				<div class="font_styling">

					<span id="bold_button" onclick="b();"><b>B</b></span>
					<span id="italic_button" onclick="i();"><i>I</i></span>

					<select id="font_size" onchange="changeFontSize(this.value);">
						<?php
						for ($i = 10; $i <= 140; $i += 2) {
						?>

							<option value="<?php echo $i; ?>px"><?php echo $i; ?>px</option>
						<?php
						}
						?>


					</select>
				</div>
				<textarea id="custom_text" placeholder="Create Your Custom Text..."></textarea>
				<button type="button" class="btn btn-primary" id="apply_text">
					Apply
				</button>

			</div>
		</div>
		<!--=============================================================-->
		<!--=========================preview start====================================-->

		<div id='preview_t'>
			<div id="preview_front">
				<div class="front_print">

				</div>
			</div>
			<div id="preview_back">
				<div class="back_print">

				</div>
			</div>

		</div>
		<!--=============================================================-->
		<!--======================view start=======================================-->

		<div id='view_mode'>
			<div class="mode"><img id="o_front" src="files/images/product/tee/black/black_front.jpg" width="100%" height="80%" />FRONT
			</div>
			<div class="mode"><img id="o_back" src="files/images/product/tee/black/black_back.jpg" width="100%" height="80%" />BACK
			</div>
			<div class="mode">
				<i class="fa fa-eye fa-3x preview_images" id="preview_images" data-toggle="modal" data-target=".bs-example-modal-lg"></i>Preview
			</div>
		</div>
		<!--=====================View Ends========================================-->
		<div id="overview">
			<div class="">

				<button type="button" class="btn btn-primary btn-block preview_images" data-toggle="modal" data-target=".bs-example-modal-lg">
					Proceed
				</button>
			</div>
		</div>
	</div>

	<div class="layer">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close close_img" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only close_img">Close</span>
				</button>
				<h4 class="modal-title">Preview</h4>
			</div>
			<div class="modal-body">

				<div id="image_reply"></div>
				<div class="modal-footer">
					<div class="row">
						<form method="POST" enctype="multipart/form-data" id="imageFileForm" action="checkout/checkout.php">
							<div class="col-md-6">
								<center>
									<table class="table">

										<tr>
											<td><b>S</b></td>
											<td><b>M</b></td>
											<td><b>L</b></td>
											<td><b>XL</b></td>
											<td><b>XXL</b></td>
											<td><b>3XL</b></td>
											<td><b>4XL</b></td>
											<td><b>Total</b></td>
										</tr>
										<tr>
											<td>
												<input id="small2" onchange="changeval2()" name="small" type="number" value="1" class="form-control small input-md" min=0 max=99999 />
											</td>

											<td>
												<input id="medium2" onchange="changeval2()" name="medium" type="number" value="0" class="form-control medium input-md" min=0 max=99999 />
											</td>

											<td>
												<input id="large2" onchange="changeval2()" name="large" type="number" value="0" class="form-control large input-md" min=0 max=99999 />
											</td>

											<td>
												<input id="xlarge2" onchange="changeval2()" name="xlarge" type="number" value="0" class="form-control xlarge input-md" min=0 max=99999 />
											</td>

											<td>
												<input id="xxlarge2" onchange="changeval2()" name="xxlarge" type="number" value="0" class="form-control xxlarge input-md" min=0 max=99999 />
											</td>

											<td>
												<input id="xxxlarge2" onchange="changeval2()" name="xxlarge" type="number" value="0" class="form-control xxxlarge input-md" min=0 max=99999 />
											</td>

											<td>
												<input id="xxxxlarge2" onchange="changeval2()" name="xxlarge" type="number" value="0" class="form-control xxxxlarge input-md" min=0 max=99999 />
											</td>

											<td>
												<input id="total2" name="total" type="number" value="1" class="form-control total input-md" disabled min=1 max=99999 />
											</td>
										</tr>

								</center>
								</table>
							</div>
							<div class="col-md-2">
								<input type="hidden" name="img_front" id="img_front" value="" />
								<input type="hidden" name="img_back" id="img_back" value="" />
								<button type="submit" class="btn " id="purchase">
									Check - Out
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				image_icon(e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#imgInp").change(function() {
		readURL(this);
	});
</script>