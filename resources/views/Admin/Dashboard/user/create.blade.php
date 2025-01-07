@include('Admin.Dashboard.components.breadcrumb', ['title' => $config['seo']['create']['title']])


@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('user.store') }}" method="post" class="box">
    @csrf
    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">

            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">
                        Thông tin chung
                    </div>
                    <div class="panel-description">
                        <p>- Nhập thông tin chung của người dùng</p>
                        <p>- Lưu ý: Những trường đánh dấu <span class="text-danger">(*)</span> là bắt buộc</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">

                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Email <span
                                            class="text-danger">(*)</span></label>
                                    <input type="text" name="email" value="{{ old('email') }}"
                                        class="form-control" placeholder="Email" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Họ Tên <span
                                            class="text-danger">(*)</span></label>
                                    <input type="text" name="name" value="{{ old('name') }}"
                                        class="form-control" placeholder="Họ tên" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Nhóm Thành Viên <span
                                            class="text-danger">(*)</span></label>
                                    <select name="user_catalogue_id" class="form-control">
                                        <option value="0">(Chọn Nhóm Thành Viên)</option>
                                        <option value="1">Quản trị viên</option>
                                        <option value="2">Cộng tác viên</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Ngày Sinh</label>
                                    <input type="text" name="birthday" value="{{ old('birthday') }}"
                                        class="form-control" placeholder="Ngày sinh" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Mật Khẩu <span
                                            class="text-danger">(*)</span></label>
                                    <input type="password" name="password" value="" class="form-control"
                                        placeholder="Mật khẩu" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Nhập Lại Mật Khẩu <span
                                            class="text-danger">(*)</span></label>
                                    <input type="password" name="re_password" value="" class="form-control"
                                        placeholder="Nhập lại mật khẩu" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="row mb15">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Ảnh Đại Diện</label>
                                    <input type="text" name="image" value="image" class="form-control"
                                        placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">

            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">
                        Thông tin liên hệ
                    </div>
                    <div class="panel-description">
                        Nhập thông tin liên hệ của người dùng
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">

                        <div class="row mb15">

                            <div class="col-lg-6">
                                <div class="form-row">
                                    {{-- <label for="" class="control-label text-left">Tỉnh/Thành Phố</label>
                                    <select name="province_id" id="province" class="form-control">
                                        <option value="0">(Chọn tỉnh/thành phố)</option>
                                        @foreach ($provinces as $province)
                                            <option value="{{ $province->code }}">{{ $province->name }}</option>
                                        @endforeach
                                    </select> --}}

                                    <label for="" class="control-label text-left">Tỉnh/Thành Phố</label>
                                    <select name="province_id" id="province" class="form-control province">
                                        <option value="0">(Chọn tỉnh/thành phố)</option>
                                        @if (isset($provinces))

                                            @foreach ($provinces as $province)
                                                <option value="{{ $province->code }}">{{ $province->name }}</option>
                                            @endforeach

                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Quận/Huyện</label>
                                    <select name="district_id" id="district" class="form-control districts">
                                        <option value="0">(Chọn quận/huyện)</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Phường/Xã</label>
                                    <select name="ward_id" id="ward" class="form-control wards">
                                        <option value="0">(Chọn phường/xã)</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Địa Chỉ</label>
                                    <input type="text" name="address" value="{{ old('address') }}"
                                        class="form-control" placeholder="Địa chỉ" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Số Điện Thoại</label>
                                    <input type="text" name="phone" value="{{ old('phone') }}"
                                        class="form-control" placeholder="Số điện thoại" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Ghi Chú</label>
                                    <input type="text" name="description" value="{{ old('description') }}"
                                        class="form-control" placeholder="Ghi chú (nếu có)" autocomplete="off">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="text-right mb15">
            <button class="btn btn-primary" type="submit" name="send" value="send">
                Lưu
            </button>
        </div>
    </div>
</form>

{{-- <script>
    $(document).ready(function() {
        // Khi chọn Tỉnh/Thành phố
        $('#province').change(function() {
            let provinceCode = $(this).val();
            $('#district').html('<option value="0">(Chọn quận/huyện)</option>');
            $('#ward').html('<option value="0">(Chọn phường/xã)</option>');

            if (provinceCode != 0) {
                $.ajax({
                    url: "{{ route('user.create') }}",
                    type: "GET",
                    data: {
                        province_code: provinceCode
                    },
                    success: function(data) {
                        $.each(data, function(key, value) {
                            $('#district').append(
                                `<option value="${value.code}">${value.name}</option>`
                            );
                        });
                    }
                });
            }
        });

        // Khi chọn Quận/Huyện
        $('#district').change(function() {
            let districtCode = $(this).val();
            $('#ward').html('<option value="0">(Chọn phường/xã)</option>');

            if (districtCode != 0) {
                $.ajax({
                    url: "{{ route('user.create') }}",
                    type: "GET",
                    data: {
                        district_code: districtCode
                    },
                    success: function(data) {
                        $.each(data, function(key, value) {
                            $('#ward').append(
                                `<option value="${value.code}">${value.name}</option>`
                            );
                        });
                    }
                });
            }
        });
    });
</script> --}}
