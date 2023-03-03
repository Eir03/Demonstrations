$(function() {
    $('.add-cart').on('click', function (e) {
        e.preventDefault();
        let id = $(this).data('id');
        console.log(id);
        $.ajax({
            url: 'cart.php',
            type: 'GET',
            data: {cart: 'add', id: id},
            dataType: 'json',
            success: function (res) {
                if (res.code == 'ok') {
                    alert('Товар добавлен');
                } else {
                    alert(res.answer);
                }
            },
            error: function () {
                alert('Ошибка');
            }
        });
    });

});