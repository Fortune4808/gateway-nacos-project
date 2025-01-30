<?php include '../public/config/config.php'; ?>
<!doctype html>
<html>
<head>
  <?php include 'src/meta.php';?>
  <title>Login - <?php echo $website_name;?></title>
</head>
<body>
  <main>
  <?php include '../public/config/alert.php';?>
  <div class="overlay-div"></div>

    <div class="flex w-screen h-screen">
      <div class="w-[55%] h-screen bg-background bg-cover h-custom-screen-m:hidden fadeIn animated">
        <div class="mt-[250px] mx-[30px]">
          <h1 class="text-white text-4xl text-center">Welcome to our Login & Signup Page</h1>
          <p class="text-white">We are thrilled to welcome you to our login and signup page, Unlock Your Experience: Login and Signup Made Easy</p>
        </div>
      </div>

      <div class="w-[45%] h-screen bg-white overflow-auto h-custom-screen-m:w-[100%] fadeIn animated">
        <div class="w-[75%] m-[auto] mt-[40px]">
          <div class="flex justify-between items-center">
            <div class="w-[150px]">
              <a href=""><img src="./all-images/image-pix/logo.png" alt="<?php echo $website_name;?> Logo" title="<?php echo $website_name;?> Logo"/></a>
            </div>

            <div class="flex">
              <a href=""><i class="bi-telephone-fill text-white bg-[#444444] hover:bg-[#7e7c7c] py-[12px] px-[12px] rounded-l-[5px]" title="Call Customer Care"></i></a>
              <a href=""><i class="bi-whatsapp text-white bg-[#FF8A33] hover:bg-[#e0b697] py-[12px] px-[12px] rounded-r-[5px]" title="Whatsapp"></i></a>
            </div>
          </div>
          
          <nav>
            <ul class="mt-[20px] flex gap-[10px]">
              <li class="py-[12px] px-[15px] rounded cursor-pointer bg-[#D5DBDB]" onclick="_next_page('next_1')">LOG-IN</li>
              <li class="py-[12px] px-[15px] rounded cursor-pointer active" onclick="_next_page('next_3')">SIGN-UP</li>
            </ul>
          </nav>
          <hr class="mt-[5px] border-[1px]"/>

          <div class="info" id="more-info">
            <?php $page='log-in';?>
            <?php include 'config/content-page.php';?> 
          </div>

          <hr class="mt-[5px] border-[1px]"/>

          <p class="mt-[10px] mb-[20px]">Do you Need Help? Call: <span class="font-bold underline"><a href="">09056251889</span></a></p>
        </div>
      </div>
    </div>
  </main>

  <script>
		superplaceholder({
			el: email,
				sentences: [ 'Enter Email Address', 'e.g gethostel@gmail.com', 'info@gethostel.com', 'king123@hotmail.com', 'gethostel@yahoo.com' ],
				options: {
				letterDelay: 80,
				loop: true,
				startOnFocus: false
			}
		});
</script>

</body>
</html>