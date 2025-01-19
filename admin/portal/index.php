<?php include "../../public/config/config.php"; ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $website_name;?> Administrative Login Portal</title>
	<?php include 'src/meta.php';?>
</head>
<body>
<div class="overlay-div"></div>
<?php include "src/header.php"; ?>
<div class="absolute w-[calc(100%-230px)] h-[calc(100%-70px)] right-0 top-[70px] flex justify-center">
	<div class="w-[96%] mt-[15px] flex flex-wrap justify-between">
		<div class="w-[70%] h-[90px] bg-white/80 rounded-md" data-aos="zoom-in" data-aos-duration="2000">
			<div class="flex h-[90px] items-center ml-3 gap-3">
				<div class="w-[65px] h-[65px] rounded-md">
					<img id="pictureBox1" class="w-[100%] h-[100%] object-cover rounded-md" alt="profile_pix" title="Profile Pix" style="width: 65px; height: 65px; object-position: top;" />
				</div>
				<div class="flex flex-col text-[#424141] font-body">
					<div><i class="bi-speedometer2"></i> <span id="login_dashboard_role">xxx</span> Dashboard</div>
					<div class="text-[14px] font-bold text-primary-color" id="login_staff_fullname"> XXX</div>
					<div class="text-[10px]">Last Login Date: <span id="login_staff_last_login">xxx</span></div>
				</div>
			</div>
			<script> _get_staff_login(staff_id);</script>
		</div>

		<div class="w-[29%] h-[90px] bg-white/80 rounded-md text-[#424141] pl-5 flex flex-col justify-center text-sm" data-aos="zoom-in" data-aos-duration="2000">
			<div>Current Time</div>
			<div class="text-[25px] text-[#C23C41] font-bold" id="digitalclock">00:00</div>
			<?php echo date("l, d F Y");?>
		</div>

		<div class="w-[100%] h-[calc(100%-120px)] bg-white/80 rounded-md flex justify-center text-white overflow-auto" id="main-dashboard">
			<?php $page="dashboard";?>
			<?php include 'config/content-page.php';?>
		</div>
	</div>
</div>

</body>
</html>