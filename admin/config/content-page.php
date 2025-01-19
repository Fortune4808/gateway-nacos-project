<?php if($page=='log-in'){?>
   
    <div class="block log-div" id="next_1">
        <h2><i class="bi-person-circle"></i> Administrative Log-in <br /><hr /></h2>
        
        <div class="flex-container" id="login-info">
            <div class="w-[100%]">
                <label><i class="bi-envelope-fill"></i> EMAIL ADDRESS:</label><br/>
                <input type="email" id="login_email" placeholder="ENTER YOUR EMAIL ADDRESS"/>
            </div>
    
            <div class="w-[100%]">
                <label><i class="bi-lock-fill"></i> PASSWORD:</label><br/>
                <input type="password" id="login_pass" placeholder="ENTER YOUR PASSWORD"/>
            </div>

            <button title="Login" id="submit_btn" onclick="_log_in()">LOG-IN <i class="bi-check2"></i></button>
            <div class="password-div">Forget Password? <span onclick="_next_page('next_2')">RESET PASSWORD</span></div>
        </div>
    </div>

    
    <div class="hidden log-div" id="next_2">
        <h2><i class="bi-lock-fill"></i> Reset Password <br /><hr /></h2>
        <div class="flex-container">
            <div class="w-[100%]">
                <label><i class="bi-envelope-fill"></i> Provide Email Address:</label><br/>
                <input type="email" id="pass_email" placeholder="ENTER YOUR EMAIL ADDRESS"/>
            </div>
            <button title="proceed" id="submit_button" onclick="resetPassword()">Proceed <i class="bi-arrow-right"></i></button>
            <div class="password-div">Existing User? <span onclick="_next_page('next_1')">LOG-IN HERE</span></div>
        </div>
    </div>

<?php }?>

<script>
    superplaceholder({
        el: login_email,
            sentences: [ 'Enter Email Address', 'e.g gatewaypoly@gmail.com', 'info@gatewaypoly.com', 'king123@hotmail.com', 'gatewaypoly@yahoo.com' ],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
</script>

<script>
    superplaceholder({
        el: pass_email,
            sentences: [ 'Enter Email Address', 'e.g gatewaypoly@gmail.com', 'info@gatewaypoly.com', 'king123@hotmail.com', 'gatewaypoly@yahoo.com' ],
            options: {
            letterDelay: 80,
            loop: true,
            startOnFocus: false
        }
    });
</script>




  

