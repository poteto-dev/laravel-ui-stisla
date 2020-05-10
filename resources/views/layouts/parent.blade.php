@extends('layouts.skeleton')

@section('app')
  <div class="main-wrapper">
    <div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
      @include('partials.topnav')
    </nav>
    <div class="main-sidebar">
      @include('partials.sidebar')
    </div>

    <!-- Main Content -->
    <div class="main-content">
      @yield('content')
    </div>
    <footer class="main-footer">
      @include('partials.footer')
    </footer>
  </div>
@endsection
