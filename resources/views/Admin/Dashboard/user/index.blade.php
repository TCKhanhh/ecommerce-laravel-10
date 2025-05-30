@include('Admin.Dashboard.components.breadcrumb', ['title' => $config['seo']['index']['title']])
<div class="row mt20">
    <div class="col-lg-12">

        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{ $config['seo']['index']['tableHeading'] }} </h5>
                @include('Admin.Dashboard.user.components.toolbox')

            </div>
            <div class="ibox-content">

                @include('Admin.Dashboard.user.components.filter')

                @include('Admin.Dashboard.user.components.table')

            </div>
        </div>

    </div>
</div>
