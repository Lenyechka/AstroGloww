$(document).ready(function() {
    $('#loginform').submit(function(e) {
        e.preventDefault();

        var email = $('input[name="email"]').val();
        var password = $('input[name="pswd"]').val();

        // AJAX-запрос для отправки данных на сервер
        $.ajax({
            url: 'php/login.php', // URL-адрес для отправки данных
            type: 'POST',
            data: {
                email: email,
                pswd: password
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Вход успешен, перенаправляем пользователя на другую страницу
                    window.location.href = 'index6.php';
                } else {
                    // Обработка ошибки входа
                    $('#error').text(response.message);
                }
            },
            error: function() {
                alert('Произошла ошибка при отправке данных на сервер.');
            }
        });
    });
});

