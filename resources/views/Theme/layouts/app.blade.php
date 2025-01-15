<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<!-- Start head Section -->
@include('Theme.layouts.head')
<!-- end head Section -->

<body>

    <!-- Start nav Section -->
    @include('Theme.layouts.nav')
    <!-- end nav Section -->

    <!-- Start hero Section -->
    @include('Theme.layouts.hero')
    <!-- end hero Section -->

    <!-- Defferent content -->
    @yield('content')

    <!-- Start Footer Section -->
    @include('Theme.layouts.footer')
    <!-- end Footer Section -->

    <!-- Start script Section -->
    @include('Theme.layouts.scripts')
    <!-- end script Section -->
</body>

</html>
