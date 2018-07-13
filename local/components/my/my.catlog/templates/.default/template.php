<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//var_dump($arResult);
//die;
?>

<div class="card-deck mb-3 text-center">
	<?php foreach($arResult as $value) {?>
	<div class="card mb-4 box-shadow items">
	  <div class="card-header">
	    <h4 class="my-0 font-weight-normal"><?php echo $value["NAME"]?></h4>
	  </div>
	  <div class="card-body">
	    <img src="<?php echo $value["PREVIEW_PICTURE"]?>" class="img-fluid align-middle card-img-top" alt="box">
	  </div>
	  <div class="card-body">
	    <h1 class="card-title pricing-card-title"><?php echo $value["COST"]?></h1>
	    <ul class="list-unstyled mt-3 mb-4">
	      <li class="bg-success text-white m-3 p-2"><?php echo $value["COLOR"]?></li>
	      <li class="bg-info text-white m-3 p-2"><?php echo $value["BRAND"]?></li>
	    </ul>
	    <a href="" class="btn btn-lg btn-block btn-outline-success">Подробнее</a>
	  </div>
	</div> 
	<?php }?>
</div>

