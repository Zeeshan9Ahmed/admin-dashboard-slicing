<!DOCTYPE html>
<html>
@include('layouts.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('layouts.nav-bar')

@include('layouts.main-side-bar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
  @include('layouts.content-header')
    <!-- Main content -->
    <section class="content">
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @include('layouts.footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('layouts.scripts')
</body>
</html>
