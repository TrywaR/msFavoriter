<?php
// msFavoriter
// https://github.com/TrywaR/msFavoriter

switch($modx->event->name) {
	case 'OnPageNotFound':
		switch($_GET['q']){

      // Избранные товары
      case 'msFavoriter':

        if (isset($_POST['id']))

          if (isset($_SESSION['msFavoriter'][$_POST['id']]))
            // - Если товар уже есть, удаление
            unset($_SESSION['msFavoriter'][$_POST['id']]);
          else
            // - Если нет, добавление избранного товара
            $_SESSION['msFavoriter'][$_POST['id']] = $_POST['id'];

        else

          // - Получение количества избранных товаров
          if (isset($_SESSION['msFavoriter']))
            echo count($_SESSION['msFavoriter']);

      	die();
      	break;
    }
}
