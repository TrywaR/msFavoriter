# msFavoriter
MODX Revo | MiniShop2 > Избранные товары

## Настройка и запуск

Для работы нужен в modx > pdoTools и соответственно MiniShop2. Ну и jQeury

1) Создаём плагин `msFavoriter` с кодом из `plugin.msFavoriter.php` с событием `OnPageNotFound`
2) Создаём сниппет `msFavoriter` с кодом из `snippet.msFavoriter.php`
3) Добавляем к сайту js из файла `main.js`

## Оформление html

### Вывод избранных товаров
```
<div class="col-12 col-md-12">
  <div class="row ms2_products">
    {if $.session.msFavoriter}
      [[!msProducts?
        &tpl=`msProduct`
        &limit=`9`
        &parents=`5`
        &resources=`[[!msFavoriter]]`
        &fields=`price`
        &sortby=`menuindex`
        &sortdir=`ASC`
      ]]
    {else}
      Вы еще не добавили ни одного товара в избранное.
    {/if}
  </div>
</div>
```
* Где конечно же меняем tpl, parents и тд под себя

### Вывод кнопки "В избранное"

```
<button class="btn btn-info msFavoriterToggle {(!$.session.msFavoriter.$id) ?: '_active_'}">
  <i class="far fa-star"></i>
  <i class="fas fa-star"></i>

  В избранное
</button>
```
* Где `<i class="far fa-star"></i>` и `<i class="fas fa-star"></i>` иконки fontaweasome со звёздочками

### Вывод ссылки на избранное и вывод количества товаров в избранном

```
<div class="favorites" id="msFavoriter">
  <a href="[[~111]]">
    <i class="far fa-star"></i>
    Избранное (<strong>2</strong>)
  </a>
</div>
```
