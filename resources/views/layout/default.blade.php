<!DOCTYPE html>
<html lang="en">

@include('layout.header')

<body class="">
  <div class="wrapper">
    @include("layout.sidebar")
    <div class="main-panel">
      <!-- Navbar -->
      @include("layout.navbar")
      <!-- End Navbar -->
      @include("layout.content")
      @include("layout.footer")
    </div>
  </div>
  @include("layout.plugin")
  <!--   Core JS Files   -->
  @include("layout.script")
</body>

</html>