jQuery(document).ready(function ($) {

    //$('body').css("background-color", "yellow");

    $('.gfield_select').each(function () {
        if ($(this).children().val() == "Pré-inscrição") {
            return;
        }

        var visible = 1;
        $(this).children('option').each(function (index) {

            var turma = new Date($(this).val());
            var hoje = new Date($.now());

            const options = {
                weekday: "long", year: "numeric", month: "numeric", day: "numeric", hour: "numeric", minute: "numeric"
            };
            var newval = new Date($(this).val()).toLocaleString("pt-BR", options);

            if (turma < hoje || visible > 4) {
                $(this).val(newval + " - i=" + index + " - v=" + visible);
                $(this).text(newval + " - i=" + index + " - v=" + visible);
                $(this).hide();
            } else {
                $(this).val(newval + " - i=" + index + " - v=" + visible);
                $(this).text(newval + " - i=" + index + " - v=" + visible);
                visible++;
            }

        });

        if (visible == 1) {
            $(this).append('<option selected value="Pré-inscrição">Pré-inscrição</option>');
        }

    });

});
