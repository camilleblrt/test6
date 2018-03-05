<?php include_once '../header.php' ?>
<style>
	shopify-button{
		margin-right:25%;
		margin-left: 25%;
		width:50%;
	}
	h1 {
		margin-top:20px;
	}
</style>
<div class="row reviews-page-title">
    <div class="col-md-12 breadcrumb-wrapper">
      <div class="container">
        <h1 class="title"><?php say("compare-Keyboard-comparison") ?> </h1>
      </div>
    </div>
</div>

<?php

function render_comparison_items($index)
{

?>

<select name="keyboard_type_<?php echo $index ?>" id="keyboard_type_<?php echo $index ?>">
	<option value="0" selected="selected">Select keyboard</option>
	<option value="1">Das Keyboard 4 Professional</option>
	<option value="2">Das Keyboard 4 Ultimate</option>
	<option value="3">Das Keyboard 4 Professional for Mac</option>
	<option value="4">Model S Professional</option>
	<option value="5">Model S Ultimate</option>
	<option value="6">Model S Professional For Mac</option>
	<option value="7">Das Keyboard X40</option>
	<option value="8">Das Keyboard Prime 13</option>
	<option value="9">Das Keyboard X50</option>
	<option value="10">Das Keyboard 5Q</option>
</select>

<?php

}

?>
<div id="main">
	<div class="comparison-tool">
		<div class="container">
			<div class="row">
				<table class="table table-striped table-hover">
					<tr>
						<th class="logo">

							<img width="193px" height="133px" style="width:75px; height:auto;" alt="" src="/images/DK_Favicon.png" />
						</th>
						<th class="heading-1">
							<div class="comparison-image">
								<img alt="" width="220px" height="110px" src="/images/comparison/empty.png" />
							</div>
							<?php render_comparison_items(1) ?>
						</th>
						<th class="heading-2">
							<div class="comparison-image">
								<img alt="" width="220px" height="110px" src="/images/comparison/empty.png" />
							</div>
							<?php render_comparison_items(2) ?>
						</th>
						<th class="heading-3">
							<div class="comparison-image">
								<img alt="" width="220px" height="110px" src="/images/comparison/empty.png" />
							</div>
							<?php render_comparison_items(3) ?>
						</th>
					</tr>
					<tr>
						<td class="feature">Price</td>
						<td class="col-1 price" style="text-align:center;"></td>
						<td class="col-2 price" style="text-align:center;"></td>
						<td class="col-3 price" style="text-align:center;"></td>
					</tr>
					<tr>
						<td class="feature">Keyboard Size</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">Switches</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">Switch Type</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">Switch Lifecycle</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">Contact Type</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">Aluminum top panel</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">Volume Knob</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">Key Cap Type</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">NKRO</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">USB Ports</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">Media Controls</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">Feet Type</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">Windows Key Disable Control</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">Cable Length</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">Mac OS Specific Key Functions</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">OS Compatibility</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">Dimensions WxHxD</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">Weight</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">Category</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">LED Backlighting</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">Macro Keys</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">Interchangeable Top Panels</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
					<tr>
						<td class="feature">Cable Type</td>
						<td class="col-1"></td>
						<td class="col-2"></td>
						<td class="col-3"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>

</div>

<?php include_once '../footer.php'; ?>
