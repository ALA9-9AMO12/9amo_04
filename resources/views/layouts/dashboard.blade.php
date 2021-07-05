<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.head')
    <body class="bg-light">
        <div id="__ivog">
            <header>
                @include('partials.nav')

                @include('partials.dashboard.subnav')
            </header>

            <main class="py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            @include('partials.flash')

                            <div class="d-flex mb-3 pb-3 flex-column border-bottom flex-sm-row justify-content-sm-between align-items-sm-center">
                                <div class="mb-3 mb-lg-0">
                                    @yield('title')
                                    @yield('description')
                                </div>

                                @yield('button')
                            </div>

                            @yield('content')
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>
