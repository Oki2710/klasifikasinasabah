<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    @include('components.header')
</head>

<body>
    <div id="app">
        @include('components.sidebar')
        <div id="main" class='layout-navbar'>
            @include('components.navbar')
            <div id="main-content">
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>@yield('page-title')</h3>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active"><a href="index.html">@yield('breadcrumb')</a>
                                        </li>
                                        <li class="breadcrumb-item active"><a href="index.html">@yield('breadcrumb2')</a>
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        @yield('content')
                    </div>
                    @include('components.footer')
                </div>
            </div>
        </div>
        <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>
