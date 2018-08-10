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
      <div class="nav-scroller py-1 mb-2 ">
      <nav class="nav  ">
          <input type="text" name="search" placeholder="Search.." id="input-search"> 
      </nav>
      </div>
      
    <nav class="nav d-flex justify-content-between fixed-top " style="background-color:{{$navbar->top_navbar_bg_color}};">   
                                <!-- For mobile tablets -->    
                                <a class=" p-2 bottom-nav" style="color:{{$navbar->top_text_color}};" id="first-nav" href="{{asset(route('public.welcome'))}}"><img src="{{asset($sitesettings->logo)}}" alt="Logo" height="25px"></a>
                            
                               
                                <a  class="p-2 "href="{{asset(route('public.welcome'))}}" style="color:{{$navbar->top_text_color}};" id="site-title">{{$sitesettings->name}}</a>
                               
                                

                               <!--  For Larger screens  -->
                               @guest                 
                               <div class=" p-2 bottom-nav desknav" id="first-nav">
                                <a  href="{{ route('login') }}" style="color:{{$navbar->top_text_color}};">{{ __('Login') }}</a>
                               </div> 
                            
                               <div class="p-2 bottom-nav desknav" id="last-nav">
                                <a  href="{{ route('register') }}" style="color:{{$navbar->top_text_color}};">{{ __('Register') }}</a>
                               </div> 
                          
                        @else
                                     @if($profile->profile_image)  
                                    <a class="p-2 bottom-nav desknav" href="{{asset(route('profile.index'))}}" style="color:{{$navbar->top_text_color}};"><img src="{{asset($profile->profile_image)}}" alt="Profile" class="" style="width:30px;height:30px;border-radius: 50%;"></a>
                                    @else
                                  <div class="p-2 bottom-nav desknav" >
                                    <a href="{{asset(route('profile.index'))}}" style="color:{{$navbar->top_text_color}};">{{$navbar->nav_item1}}</a>
                                   </div>
                                    @endif
                                    <div class=" p-2 bottom-nav desknav">
                                     <a href="{{asset(route('public.welcome'))}}" style="color:{{$navbar->top_text_color}};">{{$navbar->nav_item2}}</a>
                                   </div>
                                     
                                   <div class="p-2 bottom-nav" id="upload_nav">
                                       <a href="{{route('post.create')}}" style="color:{{$navbar->top_text_color}};">
                                        {{$navbar->nav_item3}}
                                      </a>
                                    </div>
                                    <div class="p-2 bottom-nav desknav">
                                    <a  href="{{asset(route('user_account.settings'))}}" style="color:{{$navbar->top_text_color}};">{{$navbar->nav_item4}}</a>
                                  </div> 

                                   
                                     
                                    <div class="p-2 bottom-nav desknav" id="last-nav">
                                    <a style="color:{{$navbar->top_text_color}};"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                    </a>
                                    </div>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                     
                          
                          
                        @endguest


                                          
      </nav>
      <nav class="nav d-flex justify-content-between fixed-bottom " style="background-color: {{$navbar->bottom_navbar_bg_color}};">
          
         
                        @guest                 
                               <div class=" p-2 bottom-nav smallnav" id="first-nav">
                                <a  href="{{ route('login') }}" style="color:{{$navbar->bottom_text_color}};">{{ __('Login') }}</a>
                               </div> 
                            
                               <div class="p-2 bottom-nav smallnav" id="last-nav">
                                <a href="{{ route('register') }}" style="color:{{$navbar->bottom_text_color}};">{{ __('Register') }}</a>
                               </div> 
                          
                        @else
                                     @if($profile->profile_image)  
                                    <a class="p-2 bottom-nav smallnav" id="first-nav"href="{{asset(route('profile.index'))}}" style="color:{{$navbar->bottom_text_color}};"><img src="{{asset($profile->profile_image)}}" alt="Profile" class="" style="width:30px;height:30px;border-radius: 50%;"></a>
                                    @else
                                  <div class="p-2 bottom-nav smallnav" id="first-nav">
                                    <a href="{{asset(route('profile.index'))}}" style="color:{{$navbar->bottom_text_color}};">{{$navbar->nav_item1}}</a>
                                  </div>  
                                    @endif
                                  
                                    <div class=" p-2 bottom-nav smallnav">
                                     <a  href="{{asset(route('public.welcome'))}}" style="color:{{$navbar->bottom_text_color}};">{{$navbar->nav_item2}}</a>
                                   </div>
                                  <div class="p-2 bottom-nav smallnav">
                                    <a  href="{{asset(route('user_account.settings'))}}" style="color:{{$navbar->bottom_text_color}};">{{$navbar->nav_item4}}</a>
                                  </div> 

                                     
                                    <div class="p-2 bottom-nav smallnav" id="last-nav">
                                    <a style="color:{{$navbar->bottom_text_color}};"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                    </a>
                                    </div>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                     
                          
                          
                        @endguest
      </nav>
</div> 