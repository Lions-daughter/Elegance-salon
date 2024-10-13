<?php 
include("shared/connection.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegance Salon</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500&display=swap");

:root {
  --bodybg:  grey;
  --primary-color:   rgba(170, 41, 41, 0.528);
  --grey: #d6d6d6;
  --placeholder: #969696;
  --white: #fff;
  --text: #333;
  --slider-bg: #eff3ff;
  --login-cta-hover:    rgba(170, 41, 41, 0.528);
}

* {
  margin: 0;
  padding: 0;
}

body {
  background: var(--bodybg);
  font-family: "Raleway", sans-serif;
  height: 100vh;
  display: flex;
}

.login-container {
  display: flex;
  max-width: 1200px;
  background: var(--white);
  margin: auto;
  width: 100%;
  min-width: 320px;
}

.login-container .logo svg {
  height: 40px;
  width: 40px;
  fill: var(--primary-color);
}

.login-container .login-form {
  width: 50%;
  box-sizing: border-box;
  padding: 50px;
  display: flex;
  flex-direction: column;
  align-items: center;
  flex: 1;
}

.login-container .login-form .login-form-inner {
  max-width: 380px;
  width: 95%;
}

.login-container .login-form .google-login-button .google-icon svg {
  height: 20px;
  display: flex;
  margin-right: 10px;
}

.login-container .login-form .google-login-button {
  color: var(--text);
  border: 1px solid var(--grey);
  margin: 40px 0 20px;
}

.login-container .login-form .sign-in-seperator {
  text-align: center;
  color: var(--placeholder);
  position: relative;
  margin: 30px 0 20px;
}

.login-container .login-form .sign-in-seperator span {
  background: var(--white);
  z-index: 1;
  position: relative;
  padding: 0 10px;
  font-size: 14px;
}

.login-container .login-form .sign-in-seperator:after {
  content: "";
  position: absolute;
  width: 100%;
  height: 1px;
  background: var(--grey);
  left: 0;
  top: 50%;
  z-index: 0;
}

.login-container .login-form .login-form-group {
  position: relative;
  display: flex;
  flex-direction: column;
  margin-bottom: 20px;
}

.login-container .login-form .login-form-group label {
  font-size: 14px;
  font-weight: 500;
  color: var(--text);
  margin-bottom: 10px;
}

.login-container .login-form .login-form-group input {
  padding: 13px 20px;
  box-sizing: border-box;
  border: 1px solid var(--grey);
  border-radius: 50px;
  font-family: "Raleway", sans-serif;
  font-weight: 600;
  font-size: 14px;
  color: var(--text);
  transition: linear 0.2s;
}

.login-container .login-form .login-form-group input:focus {
  outline: none;
  border: 1px solid var(--primary-color);
}

.login-container
  .login-form
  .login-form-group
  input::-webkit-input-placeholder {
  color: var(--placeholder);
  font-weight: 300;
  font-size: 14px;
}

.login-container .login-form .login-form-group.single-row {
  flex-direction: row;
  justify-content: space-between;
  padding-top: 5px;
}

/* custom checkbox */
.login-container .login-form .custom-check input[type="checkbox"] {
  height: 23px;
  width: 23px;
  margin: 0;
  padding: 0;
  opacity: 1;
  appearance: none;
  border: 2px solid var(--primary-color);
  border-radius: 3px;
  background: var(--white);
  position: relative;
  margin-right: 10px;
  cursor: pointer;
}

.login-container .login-form .custom-check input[type="checkbox"]:checked {
  border: 2px solid var(--primary-color);
  background: var(--primary-color);
}

.login-container
  .login-form
  .custom-check
  input[type="checkbox"]:checked:before,
.login-container
  .login-form
  .custom-check
  input[type="checkbox"]:checked:after {
  content: "";
  position: absolute;
  height: 2px;
  background: var(--white);
}

.login-container
  .login-form
  .custom-check
  input[type="checkbox"]:checked:before {
  width: 8px;
  top: 11px;
  left: 2px;
  transform: rotate(44deg);
}

.login-container
  .login-form
  .custom-check
  input[type="checkbox"]:checked:after {
  width: 14px;
  top: 8px;
  left: 5px;
  transform: rotate(-55deg);
}

.login-container .login-form .custom-check input[type="checkbox"]:focus {
  outline: none;
}

.login-container .login-form .custom-check {
  display: flex;
  align-items: center;
  justify-content: center;
}

.login-container .login-form .custom-check label {
  margin: 0;
  color: var(--text);
  font-size: 14px;
  font-weight: 500;
  cursor: pointer;
}

.login-container .login-form .link {
  color: var(--primary-color);
  font-weight: 700;
  text-decoration: none;
  font-size: 14px;
}

.login-container .login-form .link:hover {
  text-decoration: underline;
}

.login-container .login-form .login-cta {
  color: var(--white);
  text-decoration: none;
  border: 1px solid var(--primary-color);
  margin: 25px 0 35px;
  background: var(--primary-color);
}

.login-container .login-form .login-cta:hover {
  background: var(--login-cta-hover);
}

.login-container .onboarding {
  flex: 1;
  background: var(--slider-bg);
  display: none;
  width: 50%;
}

.login-container .login-form .login-form-group label .required-star {
  color: var(--primary-color);
  font-size: 18px;
  line-height: 10px;
}

.login-container .rounded-button {
  display: flex;
  width: 100%;
  text-decoration: none;
  border-radius: 50px;
  padding: 13px 20px;
  box-sizing: border-box;
  justify-content: center;
  font-size: 14px;
  font-weight: 500;
  align-items: center;
  transition: linear 0.2s;
}

.login-container .rounded-button:hover {
  box-shadow: 0px 0px 4px 0px var(--grey);
}

.login-container .body-text {
  font-size: 14px;
  font-weight: 500;
  color: var(--text);
}

.login-container .onboarding .swiper-container {
  width: 100%;
  height: 100%;
  margin-left: auto;
  margin-right: auto;
}
.login-container .onboarding .swiper-slide {
  text-align: center;
  font-size: 18px;
  font-weight: 400;
  color: var(--text);
  /* Center slide text vertically */
  display: -webkit-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: center;
}

.login-container .onboarding .swiper-pagination-bullet-active {
  background-color: var(--primary-color);
}

.login-container .onboarding .swiper-slide {
  flex-direction: column;
  display: flex;
}

.login-container .onboarding .swiper-slide .slide-image img {
  width: 100%;
  height: 80%;
}
.login-container .onboarding .slide-content {
  width: 60%;
}

.login-container .onboarding .slide-content h2 {
  font-size: 22px;
  font-weight: 500;
  margin-bottom: 15px;
}

.login-container .onboarding .slide-content p {
  font-size: 16px;
  line-height: 22px;
  font-weight: 300;
}
.swiper-pagination-fraction,
.swiper-pagination-custom,
.swiper-container-horizontal > .swiper-pagination-bullets {
  bottom: 30px;
}

.login-container .login-form .login-form-inner h1 {
  margin-bottom: 20px;
  margin-top: 10px;
}

@media screen and (min-width: 768px) {
  .login-container .onboarding {
    display: flex;
  }
}

@media screen and (max-width: 767px) {
  .login-container {
    height: 100vh;
  }
}

@media screen and (width: 768px) {
  .login-container .onboarding {
    order: 0;
  }
  .login-container .login-form {
    order: 1;
  }
  .login-container {
    height: 100vh;
  }
}

@media screen and (max-width: 420px) {
  .login-container .login-form {
    padding: 20px;
  }
  .login-container .login-form-group {
    margin-bottom: 16px;
  }
  .login-container {
    margin: 0;
  }
}
a{
color:white; 
text-decoration: none;

}

</style>
<body>
    

  <div class="login-container">
    <div class="login-form">
      <div class="login-form-inner">
        <div class="logo">
          <svg height="512" viewBox="0 0 192 192" width="512" xmlns="http://www.w3.org/2000/svg">
            <path d="m155.109 74.028a4 4 0 0 0 -3.48-2.028h-52.4l8.785-67.123a4.023 4.023 0 0 0 -7.373-2.614l-63.724 111.642a4 4 0 0 0 3.407 6.095h51.617l-6.962 67.224a4.024 4.024 0 0 0 7.411 2.461l62.671-111.63a4 4 0 0 0 .048-4.027z" />
          </svg>
        </div>
        <h1>Contact Us</h1>
        <p class="body-text">Feel free to conatct for you query!</p>
    
        <!-- <a href="#" class="rounded-button google-login-button">
          <span class="google-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path d="M113.47 309.408L95.648 375.94l-65.139 1.378C11.042 341.211 0 299.9 0 256c0-42.451 10.324-82.483 28.624-117.732h.014L86.63 148.9l25.404 57.644c-5.317 15.501-8.215 32.141-8.215 49.456.002 18.792 3.406 36.797 9.651 53.408z" fill="#fbbb00" />
              <path d="M507.527 208.176C510.467 223.662 512 239.655 512 256c0 18.328-1.927 36.206-5.598 53.451-12.462 58.683-45.025 109.925-90.134 146.187l-.014-.014-73.044-3.727-10.338-64.535c29.932-17.554 53.324-45.025 65.646-77.911h-136.89V208.176h245.899z" fill="#518ef8" />
              <path d="M416.253 455.624l.014.014C372.396 490.901 316.666 512 256 512c-97.491 0-182.252-54.491-225.491-134.681l82.961-67.91c21.619 57.698 77.278 98.771 142.53 98.771 28.047 0 54.323-7.582 76.87-20.818l83.383 68.262z" fill="#28b446" />
              <path d="M419.404 58.936l-82.933 67.896C313.136 112.246 285.552 103.82 256 103.82c-66.729 0-123.429 42.957-143.965 102.724l-83.397-68.276h-.014C71.23 56.123 157.06 0 256 0c62.115 0 119.068 22.126 163.404 58.936z" fill="#f14336" />
            </svg>
          </span>
          <span>login in with google</span>
        </a> -->
    
        <div class="sign-in-seperator">
          <span>contact us with Email</span>
        </div>
    
        <form id="loginForm">
          <div class="login-form-group">
            <label for="email">Email <span class="required-star">*</span></label>
            <input type="email" placeholder="Enter your email" id="email" required>
          </div>
          <div class="login-form-group">
            <label for="pwd">Password <span class="required-star">*</span></label>
            <input autocomplete="off" type="password" placeholder="Minimum 8 characters" id="pwd" required>
          </div>
          <div class="login-form-group">
            <label for="pwd">Write your query <span class="required-star">*</span></label>
            <input autocomplete="off" type="text"  id="pwd" required>
          </div>
    
          <div class="login-form-group single-row">
            <div class="custom-check">
              <input autocomplete="off" type="checkbox" checked id="remember"><label for="remember">Remember me</label>
            </div>
          </div>
    
          <button type="submit" class="rounded-button login-cta"><a href="index.php">submit</a></button>
        </form>
    
      
      </div>
    </div>
  </div>
  
  <script>
    var swiper = new Swiper(".swiper-container", {
      pagination: ".swiper-pagination",
      paginationClickable: true,
      parallax: true,
      speed: 600,
      autoplay: 3500,
      loop: true,
      grabCursor: true
    });
  
    document.getElementById('loginForm').addEventListener('submit', function(event) {
      var email = document.getElementById('email').value;
      var password = document.getElementById('pwd').value;
      var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
      if (!emailPattern.test(email)) {
        alert('Please enter a valid email address.');
        event.preventDefault();
        return false;
      }
  
      if (password.length < 8) {
        alert('Password must be at least 8 characters long.');
        event.preventDefault();
        return false;
      }
  
    });
  </script>
  
</body>
</html>