<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>
                <input type="checkbox" value="" id="checkAll">
            </th>
            {{-- <th style="width: 90px;">Ảnh</th> --}}
            <th>Họ Tên</th>
            <th>Email</th>
            <th>SDT</th>
            <th>Địa chỉ</th>
            <th class="text-center">Tình trạng</th>
            <th class="text-center">Thao Tác</th>
        </tr>
    </thead>
    <tbody>
        @if (!empty($users))
            @foreach ($users as $user)
                <tr>
                    <td>
                        <input type="checkbox" value="" class="input-checkbox checkBoxItem">
                    </td>
                    <td>
                        <div class="info-item name"> {{ $user->name }} </div>
                    </td>
                    <td>
                        <div class="info-item email">{{ $user->email }} </div>
                    </td>
                    <td>
                        <div class="info-item phone"> {{ $user->phone }} </div>
                    </td>
                    <td>
                        <div class="address-item address">{{ $user->address }}</div>
                    </td>
                    <td class="text-center">
                        <input type="checkbox" class="js-switch" checked />
                    </td>
                    <td class="text-center">
                        <a href="" class="btn btn-success"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7" class="text-center">Không có dữ liệu người dùng.</td>
            </tr>
        @endif
    </tbody>

</table>
{{-- <div class="pagination justify-content-end">
    {{ $users->links('pagination::bootstrap-4') }}
</div> --}}
<div class="pagination-wrapper d-flex justify-content-end mt-3">
    {{ $users->links('pagination::bootstrap-4') }}
</div>
