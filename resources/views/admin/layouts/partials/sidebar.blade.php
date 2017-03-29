<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header"><h3 align="center"><font color="white"><strong>MENU</strong></font></h3></li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('/admin/beranda') }}"><i class='fa fa-link'></i> <span>{{ trans('message.beranda') }}</span></a></li>
           <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('message.team') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('message.tambah') }}</a></li>
                    <li><a href="{{ url('/admin/team') }}">{{ trans('message.list') }}</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
