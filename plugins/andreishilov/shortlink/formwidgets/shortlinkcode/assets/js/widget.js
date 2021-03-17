(function ($) {
    $.fn.anshShortLinkCode = function () {
        var self = this;
        var base_path = '/plugins/andreishilov/shortlink';
        var link_id = 'ansh_shortlink_generate_code';

        $("<a id='"+link_id+"' href='#'><img src='/plugins/andreishilov/shortlink/assets/img/renew.png' alt='generate'></a>").insertAfter(this);

        $('#' + link_id).bind('click', function () {
            $.ajax({
                'url': '/backend/andreishilov/shortlink/code',
                'context': self,
                'success': function (data) {
                    $(this).val(data.code);
                }
            });
        });

        if (!$(this).val()) {
            $('#' + link_id).trigger('click');
        }
    }
}(jQuery));