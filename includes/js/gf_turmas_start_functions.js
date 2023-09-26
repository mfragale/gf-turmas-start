jQuery(document).ready(function ($) {

    //$('body').css("background-color", "yellow");

    var i = 0;
    $('.turmas_nova_start option').each(function () {
        var turma = new Date($(this).val());
        var hoje = new Date($.now());

        if (turma < hoje || i > 2) {
            var show = false;
            $(this).hide();
        } else {
            var show = true;
            $(this).show();
            i++;
        }

        const options = {
            weekday: "long", year: "numeric", month: "numeric", day: "numeric", hour: "numeric", minute: "numeric"
        };
        var newval = new Date($(this).val()).toLocaleString("pt-BR", options);

        $(this).val(newval);
        $(this).text(newval);

        // console.log(turma, ' > ', hoje, ' = ', show);
        // console.log($(this).val());
        // console.log(i);
    });

});
