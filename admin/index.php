<?php include "../public/config/config.php"; ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $website_name;?> Administrative Login</title>
	<?php include 'src/meta.php';?>
</head>
<body>
<?php include "src/header.php"; ?>
<div class="overlay-div"></div>
<div class="loader-wrapper" id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

	<div class="absolute w-[80%] min-h-[200px] top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex gap-1 max-w-[1200px] h-custom-screen-ml:w-[100%] h-custom-screen-ml:h-[100%] overflow-hidden">
		<div class="w-[60%] min-h-[480px] bg-white/80 rounded-tl-lg rounded-bl-lg h-custom-screen-ml:hidden animated fadeInLeft">
			<div class="w-[95%] mx-[auto]">
				<div class="flex items-center justify-center mt-[130px] gap-[5px]">
					<a class="links" href="" title=""><i class="bi-house-door-fill"></i> HOME PAGE</a> &nbsp;| &nbsp;
					<a class="links" href="" onClick="window.location.reload();" title="Adminstrative Login"><i class="bi-lock"></i> LOG-IN</a>
				</div>
				<h1 class="text-center text-4xl mt-[25px] font-bold">Welcome To Gateway ICT Polytechnic Sapaade, NACOS Administrative Login Portal</h1><hr class="w-[50%] mx-[auto] mt-[20px] border border-primary-color"/><br/>

				<div class="w-[180px] p-[15px] bg-white mx-[auto] rounded-[50px]">
					<img src="./src/all-images/image-pix/logo.png" alt="<?php echo $website_name;?> Logo" title="<?php echo $website_name;?> Logo"/>
          		</div>
			</div>
		</div>

		<div class="w-[40%] min-h-[530px] bg-black/80 rounded-tr-lg rounded-br-lg h-custom-screen-ml:rounded-none h-custom-screen-ml:w-[100%] animated fadeInLeft">
			<div class="w-[80%] m-auto mt-[25px] h-custom-screen-ml:pt-[70px]">
				<div class="w-[60px] p-[5px] bg-white rounded-[50%]"><img src="./src/all-images/image-pix/icon.png" alt="<?php echo $website_name;?> Logo" title="<?php echo $website_name;?> Logo" /></div>
				<div class="info" id="more-info">
					<?php $page='log-in';?>
					<?php include 'config/content-page.php';?> 
				</div>
			</div>

			<footer class="fixed bottom-[0%] w-[100%] h-[70px] bg-[#303134] text-center pt-[10px] text-white text-[14px] round">
				&copy; Copy Right Reserved 2024 - <?php echo date("Y");?><br/> <span class="text-[#DCB2B5]">Developed By: NACOS Software Director 1 & 2</span>
			</footer>
		</div>
	</div>

</body>
</html>