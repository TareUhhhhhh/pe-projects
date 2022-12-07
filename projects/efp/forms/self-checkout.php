<?php
	$tax = 7;

	if(isset($_POST['submitted'])) {
		if(isset($_POST['onePrice'])) {
			$onePrice = $_POST['onePrice'];
		}

		if(isset($_POST['oneQuantity'])) {
			$oneQuantity = $_POST['oneQuantity'];
		}
		if(isset($_POST['twoPrice'])) {
			$twoPrice = $_POST['twoPrice'];
		}
		if(isset($_POST['twoQuantity'])) {
			$twoQuantity = $_POST['twoQuantity'];
		}
		if(isset($_POST['threePrice'])) {
			$threePrice = $_POST['threePrice'];
		}
		if(isset($_POST['threeQuantity'])) {
			$threeQuantity = $_POST['threeQuantity'];
		}
		if(isset($_POST['taxRate'])) {
			$taxRate = $_POST['taxRate'];
		}

		if ($taxRate > 1 ) {
			$taxRate = floatval($taxRate) / 100;
		}

		$subtotal = ($onePrice * $oneQuantity) + ($twoPrice * $twoQuantity) + ($threePrice * $threeQuantity);

		$taxSub = floatval($subtotal) * floatval($taxRate);

		$total = floatval($subtotal) + floatval($taxSub);
	}
?>

<div class="inner-column">
	<section class="info">
		<h2 class="efp attention-voice">#10 Self Checkout</h2>

		<h3 class="info-voice">Let's go shopping! Enter number of items, each items price and your tax amount to calculate groceries! (We have defaulted tax rate to 7% if you skip that entry)</h3>
	</section>

	<form method="POST" >
		<div class="efp field">
			<label class="calm-voice">Item #1 Price: </label>

			<input type="number" name='onePrice' required>
		</div>

		<div class="efp field">
			<label class="calm-voice">Item #1 Quantity: </label>

			<input type="number" name='oneQuantity' required>
		</div>

		<div class="efp field">
			<label class="calm-voice">Item #2 Price: </label>

			<input type="number" name='twoPrice' required>
		</div>

		<div class="efp field">
			<label class="calm-voice">Item #2 Quantity</label>

			<input type="number" name='twoQuantity' required>
		</div>

		<div class="efp field">
			<label class="calm-voice">Item #3 Price: </label>

			<input type="number" name='threePrice' required>
		</div>

		<div class="efp field">
			<label class="calm-voice">Item #3 Quantity: </label>

			<input type="number" name='threeQuantity' required>
		</div>

		<div class="efp field">
			<label class="calm-voice">Tax Rate: </label>

			<input type="number" name='taxRate' value='7'>
		</div>

		<button  method='submit' name='submitted'>Calculate</button>
	</form>

	<?php if ( isset($_POST['submitted']))	{?>
		<p >Subtotal: <?=$subtotal?></p>

		<p >Total Tax: <?=$taxSub?></p>

		<p >Total: <?=$total?></p>
<?php } ?>
</div>