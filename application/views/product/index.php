<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>BAre code</title>
</head>
<body>
<h3>GEnerate barcode</h3>
<form method="post" action="<?php echo site_url("Product/generete");?>">
	<table>
		<tr>
			<td>
				ID
			</td>
			<td>
				<input type="text" name="id" required="required">
			</td>
		</tr>
		<tr>
			<td>Type</td>
			<td>
				<select name="type">
					<option value="">----------</option>
                    <option value="Code128">CODE-128</option>

				</select>
			</td>
		</tr>
		<tr>
			<td>height</td>
			<td>
				<input type="number" min="1" name="height" required="required" value="200">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Generate">
			</td>
		</tr>
	</table>

</form>
<?php if(isset($barcode_image)){ ?>
<img src="<?php echo base_url()?>assets/barcode/<?php echo  $barcode_image?>">

<?php } ?>
</body>
</html>
