function _session_validation() {
    const staff_id = sessionStorage.getItem('staff_id');
    
    if (!staff_id) {
      
      sessionStorage.clear();
      window.location.href = website_url + '/admin'; 
      
    } 
  }


  function _logout_(){
    sessionStorage.clear();
    window.location.href = website_url + '/admin'; 
  }
  