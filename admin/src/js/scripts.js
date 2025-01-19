$(document).ready(function() {
  var images = ["./src/all-images/background-pix/bg1.jpg", "./src/all-images/background-pix/bg2.jpg", "./src/all-images/background-pix/bg3.jpg"];
  $.backstretch(images, { duration: 4000, fade: 2000 });
});

function _next_page(next_id) {
  $('.log-div').hide();
  $('#'+next_id).fadeIn(1000);
}

function alert_close(){
  $('.overlay-div').html('').fadeOut(200);
}

$(document).ready(function() {
  function trim(s) {
            return s.replace( /^\s*/, "" ).replace( /\s*$/, "" );
        }
$("#login-info").keydown(function(e){
  if(e.keyCode==13){
    _log_in();
  }
});
});


function _get_form(page) {
  $('.overlay-div').html('<div class="ajax-loader"><br><img src="src/all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
  var action='get_form';
  var formData ='action='+ action+'&page='+ page;
  axios.post(admin_local_url, formData)
    .then(response => {
      $('.overlay-div').html(response.data);
    });
}

function _check_password(){
	var password = $('#reset_password').val();
	if (password==''){
    $('#text-warning').hide();
    $('#pswd_info').fadeIn(500);
	}else{
    $('#pswd_info').hide();
		if(password.length<8){
			 $('#text-warning').fadeIn(500);
		}else{
			if (password.match(/^(?=[^A-Z]*[A-Z])(?=[^!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~]*[!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~])(?=\D*\d).{8,}$/)) {
				$('#text-warning').hide();
			  } else {
				 $('#text-warning').fadeIn(500);
			  }
		}
	}
 }

function resetPassword() {
  var email_address = $('#pass_email').val();
  if (email_address==''){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> EMAIL ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else{

    var btn_text = $('#submit_button').html();
    $('#submit_button').html('<i id="spinner" class="bi bi-arrow-repeat"></i> PROCESSING...');
    document.getElementById('submit_button').disabled = true;

    var formData ='email_address=' + email_address;

    axios.post(endpoint+'/admin/reset-password-api', formData, { headers: apikey })
    .then(response => {
        var success = response.data.success;
        var message = response.data.message;
        var staff_id = response.data.staff_id;
        var fullname = response.data.fullname;
        var email_address = response.data.email_address;

        if (success==true){
          $('#success-div').html('<div><i class="bi-check-all"></i></div>SUCCESS!' + ' ' + message + "").fadeIn(500).delay(5000).fadeOut(100);
          $('#submit_button').html(btn_text);
          document.getElementById('submit_button').disabled=false;
          _get_resetPass_form(staff_id,fullname,email_address);
          
        }else{
          $('#warning-div').html('<div><i class="bi-check-all"></i></div>ERROR!' + ' ' + message + "").fadeIn(500).delay(5000).fadeOut(100);
          $('#submit_button').html(btn_text);
          document.getElementById('submit_button').disabled=false;
        }
    })
    .catch(error => {
      $('#warning-div').html('<div><i class="bi-check-all"></i></div>ERROR!' + ' ' + error + "").fadeIn(500).delay(5000).fadeOut(100);
      $('#submit_button').html(btn_text);
      document.getElementById('submit_button').disabled = false;
    });
  
  }
}

function _get_resetPass_form(staff_id,fullname,email_address){
    sessionStorage.setItem('staff_id', staff_id);
    var action='reset_password';
    $('.overlay-div').html('<div class="ajax-loader"><br><img src="src/all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
    var formData ='action='+ action;
    axios.post(admin_local_url, formData)
    .then(response => {
      $('.overlay-div').html(response.data);
      $('#pass_fullname').html(fullname);
      $('#pass_email').html(email_address);
    });
  }

  function _resend_otp(ids, staff_id) {
    var btn_text = $('#' + ids).html();
    $('#' + ids).html('SENDING...');
  
    var staff_id = sessionStorage.getItem('staff_id');
    var formData = 'staff_id=' + staff_id;
    
    axios.post(endpoint+'/admin/resend-password-otp', formData, { headers: apikey })
    .then(response => {
        var message = response.data.message;
        $('#success-div').html('<div><i class="bi-check-all"></i></div>' + 'SUCCESS!<br>' + '<span> ' + message + ' </span>').fadeIn(500).delay(5000).fadeOut(100);
        $('#' + ids).html(btn_text);
    })
    .catch(error => {
        $('#warning-div').html('<div><i class="bi-check-all"></i></div>ERROR!' + ' ' + error + "").fadeIn(500).delay(5000).fadeOut(100);
        $('#' + ids).html(btn_text);
      });
    
  }

function finish_reset_password(){
    var reset_pass_otp = $('#reset_pass_otp').val();
    var reset_password = $('#reset_password').val();
    var c_password = $('#c_password').val();

    if (reset_pass_otp=='' || (reset_password=='') || (c_password=='')){
        $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
    }else if  (reset_password!=c_password) {
        $('#not-success-div').html('<div><i class="bi-x-circle"></i></div> Password NOT Match<br /><span>Check the password and try again</span>').fadeIn(500).delay(5000).fadeOut(100);
       
    }else{
        if ((reset_password.match(/^(?=[^A-Z]*[A-Z])(?=[^!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~]*[!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~])(?=\D*\d).{8,}$/)) && (reset_password.length >= 8)){

        var btn_text = $('#submit_button').html();
        $('#submit_button').html('<i id="spinner" class="bi bi-arrow-repeat"></i> PROCESSING...');
        document.getElementById('submit_button').disabled = true;

        var staff_id = sessionStorage.getItem('staff_id');

        var formData ='otp=' + reset_pass_otp + '&password=' + reset_password + '&staff_id=' + staff_id;

        axios.post(endpoint+'/admin/finish-reset-password-api', formData, { headers: apikey })
        .then(response => {
            var success = response.data.success;
            var message = response.data.message;

            if (success==true){
                $('#success-div').html('<div><i class="bi-check-all"></i></div>SUCCESS!' + ' ' + message + "").fadeIn(500).delay(5000).fadeOut(100);
                $('#submit_button').html(btn_text);
                document.getElementById('submit_button').disabled=false;
                sessionStorage.removeItem('staff_id');
                alert_close();
                $('#pass_email').val("");
                password_success_alerts();
            }else{
                $('#warning-div').html('<div><i class="bi-check-all"></i></div>ERROR!' + ' ' + message + "").fadeIn(500).delay(5000).fadeOut(100);
                $('#submit_button').html(btn_text);
                document.getElementById('submit_button').disabled=false;
            }
            })
            .catch(error => {
                $('#warning-div').html('<div><i class="bi-check-all"></i></div>ERROR!' + ' ' + error + "").fadeIn(500).delay(5000).fadeOut(100);
                $('#submit_button').html(btn_text);
                document.getElementById('submit_button').disabled = false;
            });
        }else{
            $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> Password Error!<br><span>Check your password and try again</span>').fadeIn(500).delay(5000).fadeOut(100);
        }
    }
}

function password_success_alerts() {
  async function showFixedAlert() {
    const result = await Swal.fire({
      html: `
      <div class="flex flex-col items-center">
        <img src="src/all-images/image-pix/success.gif" alt="Success" class="w-36 h-36"/>
        <h2 class="text-black font-bold"><strong>Password Successfully Updated</strong></h2>
        <p>You can proceed to login with your new password.</p>
      </div>
    `,
    confirmButtonText: 'Login',
    allowOutsideClick: false,
    allowEscapeKey: false,
    allowEnterKey: false,
    customClass: {
      confirmButton: 'w-[100px] bg-primary-color font-bold !important'
    }
  });

  if (result.isConfirmed) {
    _next_page('next_1');
  }
}
  showFixedAlert();
}


function _log_in(){
    var email_address = $('#login_email').val();
    var password = $('#login_pass').val();
  
    if (email_address==''){
      $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> EMAIL ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
    }else if (password==''){
      $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PASSWORD ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
    }else{
  
      var btn_text = $('#submit_btn').html();
      $('#submit_btn').html('<i id="spinner" class="bi bi-arrow-repeat"></i> AUTHENTICATING...');
      document.getElementById('submit_btn').disabled = true;
  
      var formData ='email_address=' + email_address + '&password=' + password;

      axios.post(endpoint+'/admin/login', formData, { headers: apikey })
      .then(response => {
          var success = response.data.success;
          var message = response.data.message;
          var staff_id = response.data.staff_id;
          var access_key = response.data.access_key;
          var role_id = response.data.role_id;

          if (success==true){
              $('#success-div').html('<div><i class="bi-check-all"></i></div>SUCCESS!' + ' ' + message + "").fadeIn(500).delay(5000).fadeOut(100);
              $('#submit_btn').html(btn_text);
              document.getElementById('submit_btn').disabled=false;
              sessionStorage.setItem('staff_id', staff_id);
              sessionStorage.setItem('access_key', access_key);
              sessionStorage.setItem('role_id', role_id);
              window.location.href=portal_url;
          }else{
              $('#warning-div').html('<div><i class="bi-check-all"></i></div>ERROR!' + ' ' + message + "").fadeIn(500).delay(5000).fadeOut(100);
              $('#submit_btn').html(btn_text);
              document.getElementById('submit_btn').disabled=false;
          }
          })
          .catch(error => {
              $('#warning-div').html('<div><i class="bi-check-all"></i></div>ERROR!' + ' ' + error + "").fadeIn(500).delay(5000).fadeOut(100);
              $('#submit_btn').html(btn_text);
              document.getElementById('submit_btn').disabled = false;
          });
      
    }
   }


