(function($) {
    $('#categorys-tab').on('click', '.seccion-categorys', function(e){
        e.preventDefault()
        $('.career-block').hide()
        $(e.currentTarget).data('id')
        $('.career-block.'+ $(e.currentTarget).data('id')).show()
    })
    $($('#categorys-tab .seccion-categorys')[0]).click()
})(window.jQuery);
