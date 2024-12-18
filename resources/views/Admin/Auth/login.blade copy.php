<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin | Đăng nhập</title>

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/msg.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Chào mừng đến công ty TCK</h2>

                <p>
                    Chủ đề quản trị được thiết kế hoàn hảo và chuẩn bị chính xác với hơn 50 trang có thêm nhiều chế độ
                    xem ứng dụng web mới.
                </p>

                {{-- <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s.
                </p>

                <p>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p> --}}

                <p>
                    <small>Nó đã tồn tại không chỉ sau 5 thế kỷ mà còn là bước nhảy vọt trong lĩnh vực sắp chữ điện tử,
                        về cơ bản vẫn không thay đổi.</small>
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <h4 style="text-align: center;">Đăng nhập | Admin</h4>

                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}

                    <form action="{{ route('auth.process-login') }}" method="post" class="m-t" role="form">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email"
                                value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="error-message">* {{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                            
                            @if ($errors->has('password'))
                                <span class="error-message">* {{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Đăng nhập</button>

                        <a href="{{ route('auth.forgotPassword') }}">
                            <small>Quên mật khẩu?</small>
                        </a>

                        {{-- <p class="text-muted text-center">
                            <small>Không có tài khoản?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="register.html">Tạo tài khoản</a> --}}
                    </form>
                    {{-- <p class="m-t">
                        <small>Bootstrap 3 &copy; 2014</small>
                    </p> --}}
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-6">
                Copyright TCK Company
            </div>
            <div class="col-md-6 text-right">
                <small>© 2024-2025</small>
            </div>
        </div>
    </div>

</body>

</html>
