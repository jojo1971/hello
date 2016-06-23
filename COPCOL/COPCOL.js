$(document).ready(function () {
    recupText();
    $('.form').submit(function () {
        var nom = $('.nom').val();
        var text = $('.text').val();

        $.post('send.php', {nom: nom, text: text}, function (donnees) {
            $('.result').html(donnees);
            recupText();
        });
        return false;
    });
    function recupText(data) {
        $.post('recup.php', function (data) {
            $('.afficher').html(data);
        });
    }
});