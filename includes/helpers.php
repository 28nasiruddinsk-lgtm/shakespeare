<?php
function e($value){ return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); }
function component($name, $vars = []){
  extract($vars, EXTR_SKIP);
  include __DIR__ . '/components/' . $name . '.php';
}
?>
