<!DOCTYPE html>
<html>
<head>
<title>Facebook Login JavaScript Example</title>
<meta charset="UTF-8">
</head>
<body>
<script>
    
function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
    console.log('statusChangeCallback');
    console.log(response);                   // The current login status of the person.
    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
      testAPI();  
    } else {                                 // Not logged into your webpage or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this webpage.';
    }
  }    
    
    
    
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


    
     function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
         console.log('Welcome!  Fetching your information.... ');
          FB.login(function(response) {
    console.log('Successfully logged in', response);
    FB.api('/me/accounts', function(response) {
      console.log('Succesfully retrieved pages', response);
        var pages = response.data;
        var ul = document.getElementById('list');
        for (var i = 0, len = pages.length; i < len; i++) {
            var page = pages[i];
            var li = document.createElement('li');
        }
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
      }, {scope: 'manage_pages'});          
  }
</script>

<h2>My platform</h2>

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

    <ul id="list"></ul>
</div>

</body>
</html>
