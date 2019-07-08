<?
// msFavoriter
// https://github.com/TrywaR/msFavoriter
// Вывод количества избранных товаров

if (isset($_SESSION['msFavoriter'])) {
  $result = '';
  foreach ($_SESSION['msFavoriter'] as $key => $value) {
    $result .= $key . ', ';
  }
  return $result;
}else{
  return 0;
}
