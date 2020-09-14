

<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>
login form</title>
<style>
/* Bordered form */
form {
  border:  100px solid #f1f1f1;
  
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: 50%;
  padding: 14px 20px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width:10%;
  border-radius: 15%;
}

/* Add padding to containers */
.container {
  padding: 100px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 50%;
  }
}
</style>
</head><body><form action="login_page.php" method="post">
  <div class="imgcontainer">
    <img src="./login form_files/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" r>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password">
 <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label><br><center>
    <button type="submit">Login</button>
    <button type="button" class="cancelbtn">Cancel</button>
	<button type="button" class="reset">RESET PASSWORD</button>
  </center>
  </div>

  <div class="container" style="background-color:#f1f1f1">
   
  </div>
</form>

<div class="error"><?php echo $error ?>

</body></html>