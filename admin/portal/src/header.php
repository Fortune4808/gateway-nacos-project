<?php include 'src/side-nav.php';?>
<?php include '../../public/config/alert.php';?>
<header class="fixed w-[100%] min-h-[70px] bg-portal-bg flex justify-center items-center z-[500px] fadeInDown animated">
    <div class="w-[98%] flex justify-between items-center text-white">
        <div class="w-[230px]"><img src="src/all-images/image-pix/logo.fw.png" alt="" title="<?php echo $website_name;?> logo"></div>

        <nav class="w-[60%]">
            <ul class="flex text-sm gap-2">
                <li class="header-links bg-white fadeInLeft animated" onclick="_get_page('dashboard');"><i class="bi-speedometer2"></i> Dashboard</li>
                <li class="header-links fadeInRight animated" onclick="_get_form('my-profile-module')"><i class="bi-person-circle"></i> My profile</li>
            </ul>
        </nav>

        <div class="flex items-center gap-5">
            <div class="flex py-[8px] px-[15px] hover:bg-white hover:bg-opacity-30 rounded-[5px] cursor-pointer" title="notification" onclick="_get_page('notification')">
                <i class="bi-bell text-[18px] relative"><span class="absolute top-0 -right-2 bg-[#be1d1d] text-white text-[10px] w-[16px] h-[16px] flex items-center justify-center rounded-full">9+</span></i>
            </div>
            <div class="w-[40px] h-[40px] rounded-full bg-white fadeInRight animated"><img id="pictureBox2" class="w-[100%] h-[100%] object-cover rounded-full" alt="profile_pix" title="Profile Pix" style="width: 40px; height: 40px; object-position: top;" /></div>
            <button class="text-sm py-[8px] px-[15px] bg-[#C23C41] fadeInRight animated" type="button" title="log-out" id="logout_btn" onclick="_logout_();"><i class="bi-box-arrow-right"></i> Log-Out</button>
        </div>
    </div>
</header>

