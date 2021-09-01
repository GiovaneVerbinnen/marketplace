<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marketplace L6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <style>
        .front.row {
            margin-bottom: 40px;
        }

        .inline-group {
            max-width: 9rem;
            padding: .5rem;
        }

        .inline-group .form-control {
            text-align: right;
        }

        .form-control[type="number"]::-webkit-inner-spin-button,
        .form-control[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light " style="margin-bottom: 40px;">

        <a class="navbar-brand" href="{{route('home')}}">Marketplace L6</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>




        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto pl-4 ">
                @foreach ($categories as $category)
                <li class="nav-item lead ">
                    <a class="nav-link  @if(request()->is('category/' . $category->slug)) active font-weight-bold @endif"
                        href="{{route('category.single', ['slug' => $category->slug])}}">{{$category->name}} </a>
                </li>
                @endforeach
            </ul>
            <ul class="navbar-nav ml-auto pr-4">
                <li class="nav-item @if(request()->is('cart')) active @endif"
                    style="font-size: 1.4rem; line-height:1rem;">
                    <a class="nav-link" href="{{route('cart.index')}}">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            style="width:24px; @if(request()->is('cart')) color: black; @endif" viewBox=" 0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                        </svg>
                        @if (session()->has('cart'))
                        <span class="badge badge-success">{{count(session()->get('cart'))}}</span>
                        @endif
                    </a>
                </li>

            </ul>

            @auth
            {{-- <ul class="navbar-nav mr-auto">
                <li class="nav-item @if(request()->is('admin/stores*')) active @endif">
                    <a class="nav-link" href="{{route('admin.stores.index')}}">Lojas <span
                class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item @if(request()->is('admin/products*')) active @endif">
                <a class="nav-link" href="{{route('admin.products.index')}}">Produtos</a>
            </li>
            <li class="nav-item @if(request()->is('admin/categories*')) active @endif">
                <a class="nav-link" href="{{route('admin.categories.index')}}">Categorias</a>
            </li>
            </ul> --}}

            <div class="my-2 my-lg-0 pr-2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            style="width:30px; color:gray; @if(request()->is('cart')) color: black; @endif"
                            viewBox=" 0 0 20 20" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                clip-rule="evenodd" />
                        </svg>
                        {{-- <a class="nav-link" href="#"
                            onclick="event.preventDefault();
                                                                  document.querySelector('form.logout').submit(); ">Sair</a>

                        <form action="{{route('logout')}}" class="logout" method="POST" style="display:none;">
                        @csrf
                        </form>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link">{{auth()->user()->name}}</span>
                    </li> --}}
                </ul>
            </div>
            @endauth

        </div>
    </nav>

    <div class="container">
        @include('flash::message')
        @yield('content')
    </div>
    <script>
        $('.btn-plus, .btn-minus').on('click', function(e) {
            const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
            const input = $(e.target).closest('.input-group').find('input');
            if (input.is('input')) {
                input[0][isNegative ? 'stepDown' : 'stepUp']()
            }
        })
    </script>
</body>

</html>
