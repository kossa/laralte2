(function($) {

    /*
    |------------------------------------------------------------------------------------
    | Data Table
    |------------------------------------------------------------------------------------
    */
    var table = $('.data-tables').DataTable({
        'aaSorting': [],
        'language': {
            // 'url': '/plugins/i18n/dataTables-french.json'
            // 'url' : '/plugins/i18n/dataTables-arabic.json'
            // More languages : http://www.datatables.net/plug-ins/i18n/
        }
    });


    /*
    |------------------------------------------------------------------------------------
    | Init DateTime
    |------------------------------------------------------------------------------------
    */
    $('.datetime').datetimepicker({
        format: 'Y-m-d H:i'
    });

    /*
    |------------------------------------------------------------------------------------
    | We change select we send the form
    |------------------------------------------------------------------------------------
    */
    $('select.onchange').change(function() {
        $(this).closest('form').submit();
    })


    /*
    |------------------------------------------------------------------------------------
    | Chosen
    |------------------------------------------------------------------------------------
    */
    if ($('select.chosen').length > 0) {
        $('select.chosen').chosen({
            // no_results_text: "Oops, rien n'a été trouvé!",
        });
    }

    /*
    |------------------------------------------------------------------------------------
    | Submit delete form
    |------------------------------------------------------------------------------------
    */
    $(document).on('click', "form.delete button", function(e) {
        var _this = $(this);
        e.preventDefault();
        swal({
            title: 'Are you sure?', // Opération Dangereuse
            text: 'Are you sure to continue ?', // Êtes-vous sûr de continuer ?
            type: 'error',
            showCancelButton: true,
            confirmButtonColor: '#DD4B39',
            cancelButtonColor: '#00C0EF',
            confirmButtonText: 'Yeah, sure!', // Oui, sûr
            cancelButtonText: 'Cancel', // Annuler
            closeOnConfirm: false
        }).then(function(isConfirm) {
            if (isConfirm) {
                _this.closest("form").submit();
            }
        });
    });


})(jQuery);
