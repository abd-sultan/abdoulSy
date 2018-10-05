$(function() {
    $('.pageLink').click(function() {
        var id = $(this).attr("id");
        var titre = $(this).text();
        switch (id) {
            case 'creerUser':
                $('#contenu').load('../../pages/utilisateur/creerUser.php');
                $('#titre_page').load(titre);
                alert(id + ' ' + titre);
                break;

            default:
                break;
        }
    });
    // Ajouter user (Popover)
    /* $('#form_generatites').submit(function(e) {
        e.preventDefault();
        var nom = $('#nom').value();
        alert(nom);
    }); */

});