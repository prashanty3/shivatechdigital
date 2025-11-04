<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ShivaTechDigital | Admin Dashboard</title>
  <link rel="icon" type="image/png" href="{{asset('admin_assets/images/favicon.png')}}" sizes="16x16">
  <!-- remix icon font css  -->
  @include('adminDashboard.components.css.style')
 @push('styles')
 @endpush
</head>

<body>

  <!-- Theme Customization Structure Start -->
  <div class="body-overlay"></div>
  <!-- Theme Customization Structure End -->
  @include('adminDashboard.components.sidebar')
  <!-- main dashboard area start -->
  <main class="dashboard-main">

    @include('adminDashboard.components.topbar')

    <div class="dashboard-main-body">
      @yield('adminDashboard.content')
    </div>

    @include('adminDashboard.components.footer')
  </main>
  @include('adminDashboard.components.js.script')
</body>

</html>