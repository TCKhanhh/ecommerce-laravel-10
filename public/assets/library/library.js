(function ($) {
    "use strict";
    var CK = {};
    var document = $(document)

    // nút tình trạng
    CK.switchery = () => {
        $('.js-switch').each(function () {
            var switchery = new Switchery(this, {
                color: '#1AB394'
            });
        })
    }

    document.ready(function () {
        CK.switchery()
    })
})(jQuery);