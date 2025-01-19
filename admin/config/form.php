<?php if ($page=='reset_password'){?>
   <div class="absolute w-[55%] min-h-[580px] bg-white top-[50%] left-[50%] transform -translate-x-1/2 -translate-y-1/2 rounded-[5px] text-[12px] animated zoomIn">
        <div class="w-[100%] h-[50px] bg-gradient-to-r from-primary-color to-secondary-color rounded-t-[5px] flex justify-between items-center">
            <div class="text-white font-bold text-[18px] ml-[10px]"><i class="bi-lock"></i> Reset Password</div>
            <i class="bi-x py-[3px] px-[7px] mr-[10px] bg-[#e6995f] text-white rounded-[15px] text-[20px] cursor-pointer hover:bg-[#f00]" onclick="alert_close()" title="close"></i>
        </div>
        
        <div class="w-[90%] m-[auto]">
            <p class="bg-[#F4FDF8] text-[#000] border-[#A5EAC2] border-[1px] py-[10px] px-[15px] mt-[20px]"><i class="bi-person-fill"></i> Dear <span class="text-[#83C2E7] font-bold" id="pass_fullname"></span>, an <span class="text-[#83C2E7] font-bold">OTP</span> has been sent to your email address (<span class="text-[#83C2E7] font-bold" id="pass_email"></span>) to reset your password. Kindly check your <span class="font-bold text-[#000]">INBOX</span> or <span class="font-bold text-[#000]">SPAM</span> to confirm. </p>

            <div class="mt-[15px] font-bold">
                <label class="text-primary-color">ENTER OTP:</label><br/>
                <input type="tel" id="reset_pass_otp" placeholder="ENTER OTP"/>
            </div>

            <p class="bg-[#FCEDEA] py-[12px] px-[15px]"><span class="text-primary-color">OTP</span> not received? <span class="text-primary-color cursor-pointer" id="resend_otp" onclick="_resend_otp('resend_otp')"><i class="bi-send"></i> RESEND OTP</span></p>

            <div class="mt-[15px] font-bold">
                <label class="text-primary-color">CREATE PASSWORD:</label><br/>
                <input type="password" id="reset_password" placeholder="CREATE PASSWORD" onkeyup="_check_password()"/>
            </div>

            <div class="text-left text-[#666]" id="pswd_info">At least 8 characters required including upper & lower cases and special characters and numbers</div>
            <div class="text-[#f00] text-right text-[12px] hidden" id="text-warning">password not accepted</div>

            <div class="mt-[15px] font-bold">
                <label class="text-primary-color">CONFIRMED PASSWORD:</label><br/>
                <input type="password" id="c_password" placeholder="CONFIRMED PASSWORD"/>
            </div>

            <button class="w-[100%] text-[15px]" title="confirm" id="submit_button" onclick="finish_reset_password()"><i class="bi-check"></i> Reset Password</button>
        </div>
   </div>
<?php }?>