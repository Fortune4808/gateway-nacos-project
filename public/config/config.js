var website_url='http://localhost/gateway-nacos.com/' /// website url ///
var account_local_url=website_url+'account/config/code'; /// for account local url ///
var admin_local_url=website_url+'admin/config/code'; /// for admin local url ///
var admin_portal_local_url=website_url+"admin/portal/config/code"; /// for portal local url ////
var endpoint='http://localhost/gatewaypoly-nacos-api/api'; /// api endpoint url ///
var apiKey='gfsfsfssssttetetetryryrrgfvcbbcbcbcbcbcouurrrtrtr64646557'; /// apikey //
var portal_url=website_url+'/admin/portal';

var access_key = sessionStorage.getItem('access_key');
var staff_id = sessionStorage.getItem('staff_id');
var role_id = sessionStorage.getItem('role_id');

var apikey = {
    'apiKey': apiKey, 
};