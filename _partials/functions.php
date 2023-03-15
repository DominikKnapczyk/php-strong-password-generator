<?php

function generate_password($allowed_chars, $length) {
  $password = "";
 
  while(strlen($password) < $length) {
    $rand_char = rand(0, strlen($allowed_chars) - 1);
    $password .= $allowed_chars[$rand_char];
  }

  return $password;
};  
