(function() {
    'use strict';
    window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

$(document).ready(function() {
    $('.mdb-select').materialSelect();
    $('.mdb-select.select-wrapper .select-dropdown').val("").removeAttr('readonly').attr("placeholder",
        "Choose your country ").prop('required', true).addClass('form-control').css('background-color', '#fff');
});

/*======== form services ===========*/
$(document).ready(function () {
    $('.services-inpt').on('input', function() {
        $(this).val($(this).val().replace(/[A-Za-zА-Яа-яЁё]/, ''))
    });

});