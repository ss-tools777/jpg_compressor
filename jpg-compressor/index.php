<?php include("./brand.php"); ?>
<?php include("./helper.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<?php include("./head.php"); ?>
	<title><?php echo $main_title; ?></title>
	<meta name="description" content="">
	<meta name="keywords" content="This is a free online tool that allows you to compress jpg / jpeg images to 100kb. You just need to select the image and the compression percentage you want to compress.">
	
</head>
<body>
<?php include("./header.php"); ?>

<div class="container">
	
	<div class="row">
		<p>This is a Free Online Tool to Compress JPG / JPEG Images to 100Kb or Lower sizes.</p>
	</div>
	
	<div class='row' style='border: 1px solid #CCC; margin: 10px; padding: 10px; box-shadow: 2px 2px 0px 0px #CCC; border-radius: 10px; overflow: hidden;'>	
		<div style='text-align: center; margin: 10px;'>
			<?php
				if(isset($_POST['submit'])) {
						uploadAndCompress(100-$_POST['compression_percentage']);
				}
			?>
		</div>

		<div class="row" style='text-align: center; border: 1px dashed #CCC; padding: 20px; max-width: 1200px; margin: 20px auto; border-radius: 10px;'>
			<form action="" method="post" enctype="multipart/form-data">
				<table style='border-collapse: collapse; margin: 10px auto; text-align: center;'>
				<tbody>
				<tr>
					<input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload" required style="position: relative; top: 17px; left: -40px"/>
					<input type="range" value="60" min="0" max="100" oninput="document.getElementById('output').value = this.value" name="compression_percentage" style="margin-left: -90px; margin-right: 15px; position: relative; top: 19px">
					<span style='color: #777; font-size: 12px;position: relative; top: 16px; right:5px'><output id='output'> 60</output>% Compression</span>
					<input class="btn btn-primary" type="submit" value="Compress Image" name="submit" style="margin: 30px; margin-top: 60px; margin-left: 50px; margin-right:-50px">
					
				</tr>
				</tbody>
				</table>
			</form>
		</div>
	</div>
	
	<hr />
	
	<div class="row">
		<img src='./img/main-banner.png' style="max-width: 750px; margin-bottom: 60px; margin-top: 20px" class="rounded mx-auto d-block" alt="" />
		<h2 class='display-6'>How to compress jpg / jpeg to 100kb or lower size ?</h2>
		<p>
			<ol>
				<li>Browse image by clicking Choose File button.</li>
				<li>Select the desired compression percentege as you want to compress</li>
				<li>After that click compress image button.</li>
				<li>Now preview the compressed image and click on Download image button</li>
			</ol>
		</p>
		
		
		<h2 class='display-6'>What type of Images this tool can Compress?</h2>
		<br><br><br>
		<p>
		You can Compress JPG / JPEG Images to 100kb or lower sizes without losing the image quality. <br><br>

		There are various advantages of compressing image using this tool. Since the Image will be reduced, It will occupy less server space on your online Storage, Upload Image to Forms, Send image by Email, Whatsapp or telegram easily. You can use this tool wherever you need an image that could be less than 100 KB in size.
			
		</p>
	</div>
</div>
	
<?php include("./footer.php"); ?>




</body>
</html>