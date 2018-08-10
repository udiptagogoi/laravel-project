<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
     <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    <title>Hello, world!</title>
  </head>
  <body>
   <div class="container">
      
        
      <nav class="nav d-flex justify-content-between fixed-top bg-info">
          
         
           @guest
                            
                                <a class="p-2 bottom-nav" id="first-nav"href="{{ route('login') }}">{{ __('Login') }}</a>
                            
                                 
                                <a class="p-2 bottom-nav" id="last-nav" href="{{ route('register') }}">{{ __('Register') }}</a>
                          
                        @else
                            
                                    <a class="p-2 bottom-nav" id="first-nav"href="{{asset(route('profile.index'))}}"> Profile</a>
                                     <a class="p-2 bottom-nav" href="{{asset(route('public.welcome'))}}">Home</a>
                                    <a class="p-2 bottom-nav" id="last-nav" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                          
                          
                        @endguest
      </nav>