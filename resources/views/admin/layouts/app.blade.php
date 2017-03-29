<!DOCTYPE html>
<html lang="id">

@section('htmlheader')
    @include('admin.layouts.partials.htmlheader')
@show

<body class="skin-blue sidebar-mini">
 
<div id="app">

    <div class="wrapper">

    @include('admin.layouts.partials.mainheader')

    @include('admin.layouts.partials.sidebar')
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('admin.layouts.partials.contentheader')

        <!-- Main content -->
        <section class="content">
            @include('admin.layouts.partials.notif')
            <!-- Your Page Content Here -->
            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->


    @include('admin.layouts.partials.footer')

</div><!-- ./wrapper -->
</div>
@section('scripts')
    @include('admin.layouts.partials.scripts')
@show

</body>
</html>
