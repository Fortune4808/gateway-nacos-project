function _next_page(next_id) {
    $('.log-div').hide();
    $('#'+next_id).fadeIn(1000);
  }

  function alert_close(){
    $('.overlay-div').html('').fadeOut(200);
  }

  
function _get_page(page){
  $('.overlay-div').html('<div class="ajax-loader"><br><img src="all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
  var action='reset_password';
  var dataString ='action='+ action+'&page='+ page;
  $.ajax({
  type: "POST",
  url: login_local_url,
  data: dataString,
  cache: false,
  success: function(html){
      $('.overlay-div').html(html);}
  });
}

function _get_form(page){
  $('.overlay-div').html('<div class="ajax-loader"><br><img src="all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
  var action='get_form';
  var dataString ='action='+ action+'&page='+ page;
  $.ajax({
  type: "POST",
  url: account_local_url,
  data: dataString,
  cache: false,
  success: function(html){
      $('.overlay-div').html(html);}
  });
}


document.addEventListener('DOMContentLoaded', () => {
  const listItems = document.querySelectorAll('nav ul li');
  
  listItems.forEach(item => {
      item.addEventListener('click', () => {
          // Remove active class from all list items
          listItems.forEach(li => li.classList.remove('bg-[#D5DBDB]'));
          
          // Add active class to the clicked item
          item.classList.add('bg-[#D5DBDB]');
      });
  });
});


function _user_registration() {
  var fullname = $('#fullname').val();
  var phoneno = $('#phoneno').val();
  var email_address = $('#email_address').val();
  var password = $('#password').val();
  var c_password = $('#c_password').val();

  if (fullname == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> FULLNAME ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else if (phoneno == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PHONENO ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else if (email_address == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> EMAIL ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else if (password == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PASSWORD ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else if (c_password == '') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> CONFIRM PASSWORD ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else if (password !== c_password) { // Password confirmation check
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PASSWORDS DO NOT MATCH!<br /><span>Please ensure both passwords match</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else {
    var btn_text = $('#submit_button').html();
    $('#submit_button').html('<i id="spinner" class="bi bi-arrow-repeat"></i> SUBMITTING...');
    document.getElementById('submit_button').disabled = true;

    var dataString ='fullname=' + fullname + '&email_address=' + email_address + '&phoneno=' + phoneno + '&password=' + password;

    $.ajax({
      type: "POST",
      url: endpoint + '/user/users-registration-api',
      data: dataString,
      dataType: 'json',
      beforeSend: function(xhr) {
        xhr.setRequestHeader('apiKey', apiKey);
      },
      success: function(data) {
        var success = data.success;
        var message = data.message;
        var fullname = data.fullname;
        var email_address=data.email_address

        if (success == true) {
          $('#success-div').html('<div><i class="bi-check-all"></i></div>SUCCESS!<br/>' + message + "").fadeIn(500).delay(5000).fadeOut(100);
          $('#submit_button').html(btn_text);
          document.getElementById('submit_button').disabled=false;
          sessionStorage.setItem('email_address', email_address);
          _get_otp_form(fullname,email_address);
        }else{
          $('#not-success-div').html('<div><i class="bi-check-all"></i></div>ERROR!<br/>' + message + "").fadeIn(500).delay(5000).fadeOut(100);
          $('#submit_button').html(btn_text);
          document.getElementById('submit_button').disabled=false;
        }
      }
    });
  }
}


function _get_otp_form(fullname,email_address){
  var action='registration_otp';
  $('.overlay-div').html('<div class="ajax-loader"><br><img src="all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
  var dataString ='action='+ action;
  $.ajax({
  type: "POST",
  url: account_local_url,
  data: dataString,
  cache: false,
  success: function(html){
    $('.overlay-div').html(html);
    $('#user_fullname').html(fullname);
    $('#user_email').html(email_address);
  }
  });
}


function _finish_registration(){
  var registration_otp = $('#otp').val();
  var fullname = $('#fullname').val();
  var phoneno = $('#phoneno').val();
  var email_address = $('#email_address').val();
  var password = $('#password').val();

  if (registration_otp==''){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> OTP ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else{
    var btn_text = $('#submit_btn').html();
    $('#submit_btn').html('<i id="spinner" class="bi bi-arrow-repeat"></i> PROCESSING...');
    document.getElementById('submit_btn').disabled = true;

    var dataString ='otp=' + registration_otp + '&fullname=' + fullname + '&email_address=' + email_address + '&phoneno=' + phoneno + '&password=' + password;

    $.ajax({
      type: "POST",
      url: endpoint + '/user/user-email-verification-api',
      data: dataString,
      dataType: 'json',
      beforeSend: function(xhr) {
        xhr.setRequestHeader('apiKey', apiKey);
      },
      success: function(data) {
        var success = data.success;
        var message = data.message;

        if (success == true) {
          $('#success-div').html('<div><i class="bi-check-all"></i></div>SUCCESS!<br/>' + message + "").fadeIn(500).delay(5000).fadeOut(100);
          $('#submit_btn').html(btn_text);
          document.getElementById('submit_btn').disabled=false;
          $('#fullname').val("");
          $('#phoneno').val("");
          $('#email_address').val("");
          $('#password').val("");
          $('#c_password').val("");
          alert_close();
          registration_success_alerts();
        }else{
          $('#not-success-div').html('<div><i class="bi-check-all"></i></div>ERROR!<br/>' + message + "").fadeIn(500).delay(5000).fadeOut(100);
          $('#submit_btn').html(btn_text);
          document.getElementById('submit_btn').disabled=false;
        }
      }
    });
  }
}


function _resend_registration_otp(ids, email_address) {
  var btn_text = $('#' + ids).html();
  $('#' + ids).html('SENDING...');

  var email_address = sessionStorage.getItem('email_address');
  var dataString = 'email_address=' + email_address;
  
  $.ajax({
    type: "POST",
    url: endpoint + '/user/resend-registration-otp',
    data: dataString,
    beforeSend: function(xhr) {
      xhr.setRequestHeader('apiKey', apiKey);
    },
    cache: false, 
    success: function(info) {
      $('#success-div').html('<div><i class="bi-check-all"></i></div>' + 'SUCCESS!<br>' + '<span> OTP Resent Successfully </span>').fadeIn(500).delay(5000).fadeOut(100);
      $('#' + ids).html(btn_text);
    }
  });
}


function _reset_password(){
  var email_address = $('#pass_email').val();

  if ( email_address == '' ){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> EMAIL ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else{

    var btn_text = $('#submit_btn').html();
    $('#submit_btn').html('<i id="spinner" class="bi bi-arrow-repeat"></i> PROCESSING...');
    document.getElementById('submit_btn').disabled = true;

    var dataString ='email_address=' + email_address;

    $.ajax({
      type: "POST",
      url: endpoint + '/user/reset-password-api',
      data: dataString,
      dataType: 'json',
      beforeSend: function(xhr) {
        xhr.setRequestHeader('apiKey', apiKey);
      },
      success: function(data) {
        var success = data.success;
        var message = data.message;
        var user_id = data.user_id;
        var fullname = data.fullname;
        var email_address = data.email_address;

        if (success == true) {
          $('#success-div').html('<div><i class="bi-check-all"></i></div>SUCCESS!' + ' ' + message + "").fadeIn(500).delay(5000).fadeOut(100);
          $('#submit_btn').html(btn_text);
          document.getElementById('submit_btn').disabled=false;
          _get_resetPass_form(user_id,fullname,email_address);
        }else{
          $('#not-success-div').html('<div><i class="bi-check-all"></i></div>ERROR!<br/>' + message + "").fadeIn(500).delay(5000).fadeOut(100);
          $('#submit_btn').html(btn_text);
          document.getElementById('submit_btn').disabled=false;
        }
      }

    });
  }
}


function _get_resetPass_form(user_id,fullname,email_address){
  sessionStorage.setItem('user_id', user_id);
  var action='reset_password';
  $('.overlay-div').html('<div class="ajax-loader"><br><img src="all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
  var dataString ='action='+ action;
  $.ajax({
  type: "POST",
  url: account_local_url,
  data: dataString,
  cache: false,
  success: function(html){
    $('.overlay-div').html(html);
    $('#pass_fullname').html(fullname);
    $('#pass_email').html(email_address);
  }
  });
}


function _finish_reset_pass(user_id){
  var reset_pass_otp = $('#reset_pass_otp').val();
  var reset_password = $('#reset_password').val();
  var c_password = $('#c_password').val();

  if (reset_pass_otp == ''){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> OTP ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else if (reset_password == ''){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PASSWORD ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else if (c_password ==''){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> CONFIRMED PASSWORD ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else if (reset_password!=c_password) {
    $('#not-success-div').html('<div><i class="bi-x-circle"></i></div> Password NOT Match<br /><span>Check the password and try again</span>').fadeIn(500).delay(5000).fadeOut(100);
  }else{

    if ((reset_password.match(/^(?=[^A-Z]*[A-Z])(?=[^!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~]*[!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~])(?=\D*\d).{8,}$/)) && (reset_password.length >= 8)){

    var btn_text = $('#submit_btn').html();
    $('#submit_btn').html('<i id="spinner" class="bi bi-arrow-repeat"></i> PROCESSING...');
    document.getElementById('submit_btn').disabled = true;

    var user_id = sessionStorage.getItem('user_id');

    var dataString ='otp=' + reset_pass_otp + '&password=' + reset_password + '&user_id=' + user_id;

    $.ajax({
      type: "POST",
      url: endpoint + '/user/finish-reset-password-api',
      data: dataString,
      cache: false,
      dataType: 'json',
      beforeSend: function(xhr) {
        xhr.setRequestHeader('apiKey', apiKey);
      },
      success: function(data){
        var success = data.success;
        var message = data.message;

        if (success==true){
          $('#success-div').html('<div><i class="bi-check-all"></i></div>SUCCESS!<br/>' + message + "").fadeIn(500).delay(5000).fadeOut(100);
          $('#submit_btn').html(btn_text);
          document.getElementById('submit_btn').disabled=false;
          sessionStorage.removeItem('user_id');
          alert_close();
          $('#pass_email').val("");
          password_success_alerts();
        }else{
          $('#not-success-div').html('<div><i class="bi-check-all"></i></div>ERROR!<br/>' + message + "").fadeIn(500).delay(5000).fadeOut(100);
          $('#submit_btn').html(btn_text);
          document.getElementById('submit_btn').disabled=false;
        }
        
      }
      });
  }else{
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> Password Error!<br><span>Check your password and try again</span>').fadeIn(500).delay(5000).fadeOut(100);
  }
}
}

function _resend_otp(ids, user_id) {
  var btn_text = $('#' + ids).html();
  $('#' + ids).html('SENDING...');

  var user_id = sessionStorage.getItem('user_id');
  var dataString = 'user_id=' + user_id;
  
  $.ajax({
    type: "POST",
    url: endpoint + '/user/resend-password-otp',
    data: dataString,
    beforeSend: function(xhr) {
      xhr.setRequestHeader('apiKey', apiKey);
    },
    cache: false, 
    success: function(info) {
      $('#success-div').html('<div><i class="bi-check-all"></i></div>' + 'SUCCESS!<br>' + '<span> OTP Resent Successfully </span>').fadeIn(500).delay(5000).fadeOut(100);
      $('#' + ids).html(btn_text);
    }
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

 function password_success_alerts(){
  async function showFixedAlert() {
    const result = await Swal.fire({
      html: `
      <div style="display: flex; flex-direction: column; align-items: center;">
        <img src="all-images/image-pix/success.gif" alt="Success" style="width: 100px; height: 100px;"/>
        <h2><strong>Password Successfully Updated</strong></h2>
        <p>You can proceed to login with your new passowrd.</p>
      </div>
    `,
      confirmButtonText: 'Login',
      allowOutsideClick: false,
      allowEscapeKey: false,
      allowEnterKey: false
    });
  
    if (result.isConfirmed) {
      _next_page('next_1');
    }
  }
  showFixedAlert();
  
 }


 function registration_success_alerts(){
  async function showFixedAlert() {
    const result = await Swal.fire({
      html: `
      <div style="display: flex; flex-direction: column; align-items: center;">
        <img src="all-images/image-pix/success.gif" alt="Success" style="width: 100px; height: 100px;"/>
        <h2><strong>Account Successfully Created</strong></h2>
        <p>You can proceed to login with your Email Address and Password.</p>
      </div>
    `,
      confirmButtonText: 'Login',
      allowOutsideClick: false,
      allowEscapeKey: false,
      allowEnterKey: false
    });
  
    if (result.isConfirmed) {
      _next_page('next_1');
    }
  }
  showFixedAlert();
  
 }


