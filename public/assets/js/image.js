$(document).ready(function(){
    $('.pic').click(function(){
        $(this).clone().appendTo('#result');
        $('#result').children().prev().remove();
        $('#result').children().children().attr({'class': 'result img'}).fadeIn();
    });
});
