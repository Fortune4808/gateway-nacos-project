<?php if ($page=='registration_otp'){?>
   <div class="absolute w-[35%] min-h-[430px] bg-white top-[50%] left-[50%] transform -translate-x-1/2 -translate-y-1/2 rounded-[5px] h-custom-screen-m:w-[90%] animated zoomIn">
        <div class="w-[100%] h-[50px] bg-gradient-to-r from-[#FF8A33] to-[#ffaa6a] rounded-t-[5px] flex justify-between items-center">
            <p class="text-white font-bold text-[18px] ml-[10px]">Registration OTP</p>
            <i class="bi-x py-[3px] px-[7px] mr-[10px] bg-[#e6995f] text-white rounded-[15px] text-[20px] cursor-pointer hover:bg-[#f00]" onclick="alert_close()" title="close"></i>
        </div>
        
        <div class="w-[80%] m-[auto]">
            <p class="bg-[#F4FDF8] text-[#95A2A2] font-bold border-[#A5EAC2] border-[1px] py-[10px] px-[15px] mt-[20px]">Hi <span class="text-[#889596]" id="user_fullname"></span>, Kindly check your INBOX or SPAM and enter the OTP sent to your email address (<span class="text-[#83C2E7]" id="user_email"></span>) to complete the registration.</p>

            <div class="mt-[15px] font-bold text-[12px]">
                <label class="px-[10px] text-[#FF8A33]">Enter OTP:</label><br/>
                <input class="w-[100%] my-[10px] py-[15px] px-[20px] bg-white outline-none border-[#FF8A33] border-[1px] rounded-[5px]" type="tel" id="otp" placeholder="ENTER OTP"/>
            </div>

            <p class="bg-[#FEF7F4] text-[#95A2A2] font-bold border-[#F5C0A5] border-[1px] py-[10px] px-[15px] mt-[10px]">OTP not recieved? <span class="text-[#83C2E7] cursor-pointer" id="_resend_registration_otp" onclick="_resend_registration_otp('_resend_registration_otp')">RESEND OTP</span></p>

            <button class="w-[100%] bg-[#FF8A33] hover:bg-[#444444] text-white py-[15px] my-[15px] font-bold rounded-[5px]" id="submit_btn" title="confirm" onclick="_finish_registration()">CONFIRM <i class="bi-send"></i></button>
        </div>
   </div>
<?php }?>


<?php if ($page=='reset_password'){?>
   <div class="absolute w-[55%] min-h-[580px] bg-white top-[50%] left-[50%] transform -translate-x-1/2 -translate-y-1/2 rounded-[5px] h-custom-screen-m:w-[90%] animated zoomIn">
        <div class="w-[100%] h-[50px] bg-gradient-to-r from-[#FF8A33] to-[#ffaa6a] rounded-t-[5px] flex justify-between items-center">
            <p class="text-white font-bold text-[18px] ml-[10px]"><i class="bi-lock"></i> Reset Password</p>
            <i class="bi-x py-[3px] px-[7px] mr-[10px] bg-[#e6995f] text-white rounded-[15px] text-[20px] cursor-pointer hover:bg-[#f00]" onclick="alert_close()" title="close"></i>
        </div>
        
        <div class="w-[90%] m-[auto]">
            <p class="bg-[#F4FDF8] text-[#000] text-[12px] border-[#A5EAC2] border-[1px] py-[10px] px-[15px] mt-[20px]"><i class="bi-person-fill"></i> Dear <span class="text-[#83C2E7] font-bold" id="pass_fullname"></span>, an <span class="text-[#83C2E7] font-bold">OTP</span> has been sent to your email address (<span class="text-[#83C2E7] font-bold" id="pass_email"></span>) to reset your password. Kindly check your <span class="font-bold">INBOX</span> or <span class="font-bold">SPAM</span> to confirm. </p>

            <div class="mt-[15px] font-bold text-[12px]">
                <label class="px-[10px] text-[#FF8A33]">ENTER OTP:</label><br/>
                <input class="w-[100%] my-[10px] py-[15px] px-[20px] bg-white outline-none border-[#FF8A33] border-[1px] rounded-[5px]" type="tel" id="reset_pass_otp" placeholder="ENTER OTP"/>
            </div>

            <p class="bg-[#FCEDEA] py-[12px] px-[15px]"><span class="text-[#FF8A33]">OTP</span> not received? <span class="text-[#FF8A33] cursor-pointer" id="resend_otp" onclick="_resend_otp('resend_otp')"><i class="bi-send"></i> RESEND OTP</span></p>

            <div class="mt-[15px] font-bold text-[12px]">
                <label class="px-[10px] text-[#FF8A33]">CREATE PASSWORD:</label><br/>
                <input class="w-[100%] mt-[10px] py-[15px] px-[20px] bg-white outline-none border-[#FF8A33] border-[1px] rounded-[5px]" type="password" id="reset_password" placeholder="CREATE PASSWORD" onkeyup="_check_password()"/>
            </div>

            <div class="text-left text-[#666] text-[12px]" id="pswd_info">At least 8 characters required including upper & lower cases and special characters and numbers</div>
            <div class="text-[#f00] text-right text-[12px] hidden" id="text-warning">password not accepted</div>

            <div class="mt-[15px] font-bold text-[12px]">
                <label class="px-[10px] text-[#FF8A33]">CONFIRMED PASSWORD:</label><br/>
                <input class="w-[100%] my-[10px] py-[15px] px-[20px] bg-white outline-none border-[#FF8A33] border-[1px] rounded-[5px]" type="password" id="c_password" placeholder="CONFIRMED PASSWORD"/>
            </div>

            <button class="w-[100%] bg-[#FF8A33] hover:bg-[#444444] text-white py-[15px] my-[15px] font-bold rounded-[5px]" title="confirm" id="submit_btn" onclick="_finish_reset_pass()"><i class="bi-check"></i> Reset Password</button>
        </div>
   </div>
<?php }?>