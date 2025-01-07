
(function ($) {
    "use strict";
    var CK = {};
    CK.province = () => {
        $(document).on('change', '.province', function () {
            let _this = $(this);
            let province_id = _this.val();

            $.ajax({
                url: '/ajax/location/getLocation',
                type: 'GET',
                data: {
                    'province_id': province_id
                },
                dataType: 'json',
                success: function (res) {
                    $('.districts').html(res.html);
                    $('.wards').html('<option value="0">(Chọn phường/xã)</option>');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log('Lỗi: ' + textStatus + ' ' + errorThrown);
                }
            });
        });
    };

    CK.district = () => {
        $(document).on('change', '.districts', function () {
            let _this = $(this);
            let district_id = _this.val();

            $.ajax({
                url: '/ajax/location/getLocation',
                type: 'GET',
                data: {
                    'district_id': district_id
                },
                dataType: 'json',
                success: function (res) {
                    $('.wards').html(res.html);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log('Lỗi: ' + textStatus + ' ' + errorThrown);
                }
            });
        });
    };


    $(document).ready(function () {
        CK.province();
        CK.district();
    });
})(jQuery);

