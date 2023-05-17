<?php
function generatePassword($length)
{
  $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
  //substr serve ad estrarre un parte della stringa restituita da str_shuffl
  //str_shuffle mescola tutti i caratteri in una stringa
  $password = substr(str_shuffle($chars), 0, $length);
  return $password;
}