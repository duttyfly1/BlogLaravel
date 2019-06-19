<!doctype html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="container">

            <header class="row">
                @include('includes.header')
            </header>

            <div id="main" class="row">

                <!-- sidebar content -->
                <div id="menu" class="col-md-3 menu">
                    @include('includes.menu')
                </div>
        
                <!-- main content -->
                <div id="content" class="col-md-8 content">
                    @yield('content')
                </div>
            
            </div>

            <footer class="row">
                @include('includes.footer')
            </footer>

        </div>
    </body>
</html>