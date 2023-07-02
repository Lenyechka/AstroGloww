$(document).ready(function() {
    $('#register').submit(function(e) {
        e.preventDefault();

        var email = $('input[name="email"]').val();
        var password = $('input[name="pswd"]').val();

        // AJAX-запрос для отправки данных на сервер
        $.ajax({
            url: 'php/register.php', // Указываем URL-адрес для отправки данных
            type: 'POST',
            data: {
                email: email,
                pswd: password
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    $('#message').text(response.message);
                    $('form')[0].reset();
                } else {
                    $('#error').text(response.message);
                    alert(response.message); // Отображение диалогового окна с сообщением об ошибке
                }
            },
            error: function() {
                alert('Произошла ошибка при отправке данных на сервер.');
            }
        });
    });
});
