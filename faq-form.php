<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Задать вопрос");
?>
<div class="row">
  <div class="col-12">
    <p class="h4 text-center">Задать вопрос</p>
    <form action="" method="post" id="faq_form">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="">Ваш email</span>
          </div>
          <input type="text" class="form-control" name="email" placeholder="" required="">
        </div>
        <div class="form-group">
		  <label for="exampleFormControlTextarea1">Ваш вопрос</label>
		  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="question" required=""></textarea>
		</div>
        <div class="text-center">
          <button type="submit" class="btn btn-info w-100">Задать вопрос</button>
        </div>
        <br>
        <div class="success alert alert-primary text-center"></div>
	</form>
  </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>