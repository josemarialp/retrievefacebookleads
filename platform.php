<!DOCTYPE html>
<html>
<head>
<title>Facebook Login JavaScript Example</title>
<meta charset="UTF-8">
</head>
<body>
<script>
function checkLoginState() {               // Called when a person is finished with the Login Button.
    FB.getLoginStatus(function(response) {   // See the onlogin handler
      statusChangeCallback(response);
    });
  }
  
  
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '581731892589617',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v5.0'
    });
  
     FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
      statusChangeCallback(response);        // Returns the login status.
    });
  };



  
  (function(d, s, id) {                      // Load the SDK asynchronously
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

 function myFacebookLogin() {
  FB.login(function(response) {
    console.log('Successfully logged in', response);
     console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  // handle the response
}, {scope: 'manage_pages'});
  
  }

</script>

<h2>My platform</h2>

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>

</body>
</html>
