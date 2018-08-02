(function($) {
    $('#categorys-vacancies-content').on('click', '.categorys-vacancies', function(e){
        e.preventDefault()
        $('.career-block').hide()
        $(e.currentTarget).data('id')
        $('.career-block.'+ $(e.currentTarget).data('id')).show()
    })

    $($('#categorys-vacancies-content .categorys-vacancies')[0]).click()
    
})(window.jQuery);
