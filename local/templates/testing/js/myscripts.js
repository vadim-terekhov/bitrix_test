$(document).ready(function(){
	$("#footer_form").submit(function(){
        $.ajax({
            url:'/mail.php',
            type:'POST',
            data: $(this).serialize()
        }).done(function() {
        	alert('uspex');
           $("#footer_form .success").html("<p class=\"text-success h4 font-weight-normal\">Вы подписаны!Спасибо</i></p>");
           $('#footer_form .success').css({"display":"block"});
           $("#footer_form").trigger("reset");
	           setTimeout(
	                function(){
	                 $('#footer_form .success').css({"display":"none"});
	                },
	                10000
	           );
        });
        return false;
    });

    $("#faq_form").submit(function(){
        $.ajax({
            url:'/mail.php',
            type:'POST',
            data: $(this).serialize()
        }).done(function() {
        	alert('uspex');
           $("#faq_form .success").html("<p class=\"text-success h4 font-weight-normal\">Вы подписаны!Спасибо</i></p>");
           $('#faq_form .success').css({"display":"block"});
           $("#faq_form").trigger("reset");
	           setTimeout(
	                function(){
	                 $('#footer_form .success').css({"display":"none"});
	                },
	                10000
	           );
        });
        return false;
    });
});