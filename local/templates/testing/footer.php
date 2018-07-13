<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
?>
	
	<footer class="pt-4 my-md-5 pt-md-5 border-top">
	    <div class="row">
	      <div class="col-3 d-flex flex-row align-items-center">
	        <small class="d-block mb-3 text-muted ">&copy; 2018</small>
	      </div>
	      <div class="col-8">
	        <p class="h4 text-center">Подписка</p>
	        <form action="" method="post" id="footer_form">
		        <div class="input-group mb-3">
		          <div class="input-group-prepend">
		            <span class="input-group-text" id="">Ваше имя</span>
		          </div>
		          <input type="text" class="form-control" name="name" placeholder="" required="">
		        </div>
		        <div class="input-group mb-3">
		          <div class="input-group-prepend">
		            <span class="input-group-text" id="">Ваш email</span>
		          </div>
		          <input type="text" class="form-control" name="email" placeholder="" required="">
		        </div>
		        <div class="text-center">
		          <button type="submit" class="btn btn-info w-100">Подписаться</button>
		        </div>
		        <br>
		        <div class="success alert alert-primary text-center"></div>
	    	</form>
	      </div>
	    </div>
	</footer>

</div>
	<?
    Asset::getInstance()->addJs("https://code.jquery.com/jquery-3.3.1.slim.min.js");
    Asset::getInstance()->addJs("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js");
    Asset::getInstance()->addJs("https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/myscripts.js');
    ?>
</body>
</html>