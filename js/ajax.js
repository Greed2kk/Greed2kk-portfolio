
$( document ).ready(function() {
    $("#btn").click(
		function(){
			sendAjaxForm('result_form', 'ajax_form', 'send.php');
			return false; 
		}
	);
});
 
function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url, 
        type:     "POST", 
        dataType: "html", 
        data: $("#"+ajax_form).serialize(),  
        success: function(response) { 
        	result = $.parseJSON(response);
        	$('#result_form').html('<a color="red">'+'Сообщение отправлено!'+'</a>'+'<img src="https://cdn.pixabay.com/photo/2013/07/13/10/08/green-156618_1280.png" width="25" height"25" alt="">');
    	},
    	error: function(response) { 
            $('#result_form').html('<a color="red">'+'Ошибка. Данные не отправлены '+'</a>' + '<img src="http://auto-science.ru/wp-content/uploads/2016/06/g11.png" width="25" height"25" alt="">'+'<p>GitHub-Pages не поддерживает php. Отправить можно тут <a href="https://vk.com/greedos">Зеркало</a> </p>');
            
    	}
 	});
}