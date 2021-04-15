<html >
<head>
<title>Login Pages</title>
<link rel="stylesheet" type="text/css" href="design.css">
<script src="jquery-3.2.1.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src='FormLogin.js'></script>
</head>
<body>

<div id="login">
<div class="errorMsg" style="padding:10px;display:none;margin-top:10px;" ></div>
<h3>Login page</h3>
<form>
<label>Email</label>
<input type="text" id ="emailid" name="emailid" autocomplete="off" />
<label>Password</label>
<input type="password" id="userpassowrd" name="userpassowrd" autocomplete="off"/>
<div class="g-recaptcha" data-sitekey="6LfpncEZAAAAAGlustIoE80HB7ISi_94asJyQQrk"></div><br>
<input type="button" class="button" id="submitloginform" name="submitloginform" value="Login">
</form>
</div>

</body>

</html>