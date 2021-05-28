<html>
<head>
<style>
p.inline {display: inline-block;}
span { font-size: 18px;}
</style>
<style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initia l value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }
</style>
</head>
<body onload="window.print();">
	<div style="margin-left: 5%" align="center">
		<?php
		include 'barcode128.php';
		$product = $_POST['product'];
		$product_id = $_POST['product_id'];
		$rate = $_POST['rate'];

		for($i=1;$i<=$_POST['print_qty'];$i++){
			echo "<p class='inline'><span ><b>$product</b></span>".bar128(stripcslashes($_POST['product_id']))."<span ><b>".$rate." </b><span></p>&nbsp&nbsp&nbsp&nbsp";
		}

		?>
	</div>
</body>
</html>