<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!doctype html>
<html>
<head>
	<?
    $APPLICATION->ShowHead();
    use Bitrix\Main\Page\Asset;
    
    Asset::getInstance()->addCss("https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css");
    Asset::getInstance()->addString("<link rel='shortcut icon' href='/local/favicon.ico' />");
    Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1'>");
    ?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<script type='application/ld+json'>
        {"@context":"http://schema.org","@type":"WebSite","@id":"#website","url":"http://SITE.ru/","name":"Название - Описание","potentialAction":{"@type":"SearchAction","target":"http://SITE.ru/search/index.php","query-input":"required name=search_term_string"}}
    </script>
    <script type='application/ld+json'>
        {"@context":"http://schema.org","@type":"Organization","url":"http://SITE.ru/","sameAs":[],"@id":"#organization","name":"Домен - Описание","logo":"http://SITE.ru/полный_путь_к_логотипу.png"}
    </script>
</head>
<body>
<?$APPLICATION->ShowPanel();?>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal"><a href="/" class="nav-link">Тестовое задание</a></h5>
      <ul class="nav pr-5">
        <li class="nav-item">
          <a class="nav-link" href="/faq.php">Вопрос - ответ</a>
        </li>
      </ul>
      <a class="btn btn-outline-primary" href="#">Корзина</a>
    </div>
    
<div class="container">
    <!--div class="row justify-content-center border border-info p-3 m-4">
        <span class="d-flex flex-row align-items-center">Цена: </span>
        <div class="input-group col-2">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">От</span>
          </div>
          <input type="text" class="form-control" name="" placeholder="">
        </div>
        <span class="d-flex flex-row align-items-center"> - </span>
        <div class="input-group col-2">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon2">До</span>
          </div>
          <input type="text" class="form-control" name="" placeholder="">
        </div>
        <div class="input-group col-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Бренд: </label>
          </div>
          <select class="custom-select" id="inputGroupSelect01">
            <option selected>...</option>
            <option value="1">Бреенд 1</option>
            <option value="2">Бреенд 2</option>
            <option value="3">Бреенд 3</option>
          </select>
        </div>
        <div class="input-group col-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Цвет: </label>
          </div>
          <select class="custom-select" id="inputGroupSelect02">
            <option selected>...</option>
            <option value="1">Цвет 1</option>
            <option value="2">Цвет 2</option>
            <option value="3">Цвет 3</option>
          </select>
        </div>
        <div class="col-3 mt-3">
          <button type="button" class="btn btn-info">Применить фильтры</button>
        </div>
      </div-->

      

    



	