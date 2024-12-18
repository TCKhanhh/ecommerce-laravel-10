@include('Admin.Dashboard.components.head')

<body class="gray-bg">

    <div class="passwordBox animated fadeInDown">
        <div class="row">

            <div class="col-md-12">
                <div class="ibox-content">

                    <h2 class="font-bold">Quên mật khẩu</h2>

                    <p>
                        Nhập địa chỉ email của bạn, mật khẩu sẽ được đặt lại và gửi tới email của bạn.
                    </p>

                    <div class="row">

                        <div class="col-lg-12">
                            <form class="m-t" role="form" action="index.html">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email xác nhận"
                                        required="">
                                </div>

                                <button type="submit" class="btn btn-primary block full-width m-b">Gửi mật khẩu
                                    mới</button>


                            </form>

                            <a href="{{ route('auth.login-admin') }}">
                                <small>Quay lại.</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-6">
                Bản Quyền Công Ty TCK
            </div>
            <div class="col-md-6 text-right">
                <small>© 2024-2025</small>
            </div>
        </div>
    </div>

</body>

</html>
