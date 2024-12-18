(function ($) {
    "use strict";
    var HT = {};
    var document = $(document)

    HT.switchery = () => {
        $('.js-switch').each(function () {
            // let _this = $(this)
            var switchery = new Switchery(this, {
                color: '#1AB394'
            });
        })
    }

    document.ready(function () {
        // console.log(123);
        HT.switchery()
    })
})(jQuery);