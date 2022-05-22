@extends('layouts.app')
@section('customscript')
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#table-user').DataTable();
} );
</script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Challenge') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="container">
                        <div class="index-tai-lieu-cover text-uppercase wow fadeInDown" data-wow-delay="0.3s">
                            <h2 class="w-100 text-center py-2 "><b>Challenge mới nhất</b></h2>
                        </div>
                        <div class="row">
                            @each('layouts.home.post-item', $posts, 'post')
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header">{{ __('Danh sách Thành viên') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="container">
                        <div class="index-tai-lieu-cover text-uppercase wow fadeInDown" data-wow-delay="0.3s">
                            <h2 class="w-100 text-center py-2 "><b>Danh sách thành viên</b></h2>
                        </div>
                        <div class="row">
                            @include('admin.user.list')
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.notifications')
@endsection