<h2>My platform</h2>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '581731892589617',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v5.0'
    });
  };
  (function(d, s, id) {                      // Load the SDK asynchronously
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  
  FB.login(function(response){
  // handle the response 
});
  
</script>
<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>
