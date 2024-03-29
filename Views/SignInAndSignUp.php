<?php

  function  register()
  {
    $htmlElement .= '<div class="row text-center">';
    $htmlElement .= '<div class="col-md-5">';
    $htmlElement .= '<form role="form" method="post" action="index.php?page=signUp">';
    $htmlElement .= '<fieldset>';
    $htmlElement .= '<p class="text-uppercase pull-center"> SIGN UP.</p>';
    $htmlElement .= '<div class="form-group">';
    $htmlElement .=   '<input type="text" name="username" id="username" class="form-control input-lg" placeholder="username">';
    $htmlElement .= '</div>';
    $htmlElement .= '<div class="form-group">';
    $htmlElement .=   '<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">';
    $htmlElement .= '</div>';
    $htmlElement .= '<div class="form-group">';
    $htmlElement .=   '<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">';
    $htmlElement .= '</div>';
    $htmlElement .= '<div class="form-group">';
    $htmlElement .=   '<input type="password" name="password2" id="password2" class="form-control input-lg" placeholder="Confirm your password">';
    $htmlElement .= '</div>';
    $htmlElement .= '<div class="form-check">';
    $htmlElement .= '<label class="form-check-label">';
    $htmlElement .= '<input type="checkbox" class="form-check-input mt-2">';
    $htmlElement .= 'By Clicking register you re agree to our policy & terms';
    $htmlElement .= '</label>';
    $htmlElement .= '</div>';
    $htmlElement .= '<div>';
    $htmlElement .= '<input type="submit" class="btn btn-lg btn-primary mt-2" value="Register">';
    $htmlElement .= '</div>';
    $htmlElement .= '</fieldset>';
    $htmlElement .= '</form>';
    $htmlElement .= '</div>';
    $htmlElement .=   '<div class="col-md-2">';
    $htmlElement .= '</div>';
    return ($htmlElement);
  }

  function  login()
  {
    $htmlElement .= '<div class="col-md-5">';
    $htmlElement .= '<form role="form" method="post" action="index.php?page=signIn">';
    $htmlElement .= '<fieldset>';
    $htmlElement .=   '<p class="text-uppercase"> Login using your account: </p>';
    $htmlElement .= '<div class="form-group">';
    $htmlElement .=   '<input name="username" id="username" class="form-control input-lg" placeholder="username">';
    $htmlElement .= '</div>';
    $htmlElement .= '<div class="form-group">';
    $htmlElement .=   '<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">';
    $htmlElement .= '</div>';
    $htmlElement .= '<div>';
    $htmlElement .=   '<input type="submit" class="btn btn-md btn-lg btn-primary" value="Sign In">';
    $htmlElement .= '</div>';
    $htmlElement .= '</fieldset>';
    $htmlElement .= '</form>';
    $htmlElement .= '</div>';
    $htmlElement .= '</div>';
    return ($htmlElement);
  }

  function  signInAndSignUpForm()
  {
    $htmlElement .= '<div class="container-fluid">';
    $htmlElement .= '<div class="container">';
    $htmlElement .= '<h2 class="text-center" id="title">Register or Login</h2>';
    $htmlElement .= '<p class="text-center">';
    $htmlElement .= '</p>';
    $htmlElement .= '<hr>';
    $htmlElement .= register();
    $htmlElement .= login();
    $htmlElement .= '</div>';
    $htmlElement .= '</div>';
    return $htmlElement;
  }
?>
