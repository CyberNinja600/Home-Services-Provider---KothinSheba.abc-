{{-- @extends('layouts.technician')

@section('content')
    <div class="card">
        <div class ="card-body">
            @foreach($user as $item)
            <h1>Welcome {{$item->name}}</h1>
            @endforeach
        </div>
    </div>
@endsection --}}

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- Styles -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/now-ui-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
    


</head>
<body>
    <div class = "wrapper">
       
        <div class="main-panel" id="main-panel">
            {{-- @include('layouts.include.technavbar') --}}
            <div class="sidebar" data-color="blue">

                <div class="sidebar-wrapper" id="sidebar-wrapper">
                  <ul class="nav">
                    <li class="{{Request::is('tech-dashboard')?'active':''}}">
                      <a href="{{url('tech-dashboard/'.$user[0]->id)}}">
                        <p>Dashboard</p>
                      </a>
                    </li>
                    
            
                    <li class =" {{Request::is('view-orders')?'active':''}}">
                      <a href="{{url('view-orders/'.$user[0]->id)}}">
                        <p>View Orders</p>
                      </a>
                    </li>
                    
                  </ul>
                </div>
              </div>

            <div class="content" style="margin-top: 10%;">
                 {{-- @yield('content') --}}
                 <div class="card">
                    <div class ="card-body">
                        @foreach($user as $item)
                        <h1>Welcome {{$item->name}}</h1>
                        @endforeach
                    </div>
                </div>
            
            </div>
        </div>
    
    </div>


    <!-- Scripts -->
    <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    @if(session('status'))
        <script>
            swal("{{session('status')}}")
        </script>
    @endif
    @yield('scripts')


</body>
</html>