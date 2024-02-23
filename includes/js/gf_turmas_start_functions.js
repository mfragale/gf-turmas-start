jQuery(document).ready(function ($) {

    //$('body').css("background-color", "yellow");

    $('.turmas_nova_start .gfield_select').each(function () {
        if ($(this).children().val() == "Pré-inscrição") {
            return;
        }

        var visible = 1;
        $(this).children('option').each(function (index) {

            var turma = new Date($(this).val());
            var hoje = new Date($.now());

            const options = {
                weekday: "short", year: "numeric", month: "short", day: "numeric", hour: "numeric", minute: "numeric"
            };
            var newval = new Date($(this).val()).toLocaleString("pt-BR", options);

            if (turma < hoje || visible > 4) {
                $(this).val(newval);
                $(this).text(newval);
                $(this).remove();
            } else {
                $(this).val(newval);
                $(this).text(newval);
                visible++;
            }

        });

        if (visible == 1) {
            $(this).append('<option selected value="Pré-inscrição">Pré-inscrição</option>');
        }

    });

});
