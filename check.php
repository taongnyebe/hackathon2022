<!DOCTYPE html>
<html >
<head>
  <style type="text/css">
 body {
  margin:0px;
  font-family:"Open Sans",sans-serif;
  background:#ddd;
}
.overlay-form {
  position:absolute;
  top:50vh;
  left:0px;
  width:100vw;
  height:0vh;
  background:rgba(0,0,0,0.8);
  z-index:-1;
  opacity:0;
  padding:80px 100px;
  overflow:hidden;
  box-sizing:border-box;
  transition: top 500ms ease-in-out,
              opacity 500ms ease-in-out,
              height 0ms ease-in-out 500ms;  
}
.overlay-form .close-btn {
  position:absolute;
  top:20px;
  right:40px;
  color:#fff;
  font-size:40px;
  font-weight:600;
  cursor:pointer;
}
.overlay-form h1 {
  font-size:32px;
  color:#fff;
}
.overlay-form p {
  font-size:16px;
  color:#eee;
  margin:-15px 0px 30px;
}
.overlay-form .form-element {
  margin:20px 0px;
}
.overlay-form label {
  display:block;
  font-size:17px;
  color:#eee;
  margin-bottom:5px;
}
.overlay-form input {
  width:100%;
  padding:6px;
  font-size:17px;
  border:2px solid #eee;
  background:transparent;
  outline:none;
  border-radius:10px;
}
.overlay-form button,
.center button {
  margin-top:10px;
  width:100px;
  height:35px;
  font-size:15px;
  text-transform:uppercase;
  background:#fff;
  color:#222;
  border:none;
  outline:none;
  border-radius:10px;
}
.center {
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
}
.center button {
  width:150px;
  height:40px;
  font-weight:600;
  box-shadow:3px 3px 2px 1px rgba(0,0,0,0.1);
  cursor:pointer;
}

body.activeForm .overlay-form {
  z-index:2;
  opacity:1;
  top:0px;
  height:100vh;
  transition: top 500ms ease-in-out,
              opacity 500ms ease-in-out,
              height 0ms ease-in-out 0ms;
}
  </style>
</head>
<body>
<div class="overlay-form">
  <div class="close-btn" onclick="toggleForm()">&times;</div>
  <h1>Create a new account</h1>
  <p>Join our community. Let's set up your account</p>
  <div class="form-element">
    <label for="fullname">Fullname</label>
    <input type="text" id="fullname">
  </div>
  <div class="form-element">
    <label for="email">Email</label>
    <input type="email" id="email">
  </div>
  <div class="form-element">
    <label for="password-1">Password</label>
    <input type="password" id="password-1">
  </div>
  <div class="form-element">
    <label for="password-2">Confirm password</label>
    <input type="password" id="password-2">
  </div>
  <div class="form-element">
    <button>Signup</button>
  </div>
</div>
<div class="center">
  <button onclick="toggleForm()">Signup</button>
</div>
<script>
    function toggleForm(){
  document.body.classList.toggle('activeForm');
}
</script>
</body>
</html>