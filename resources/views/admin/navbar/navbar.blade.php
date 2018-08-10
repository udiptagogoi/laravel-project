@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col col-md-2">
      <div class="card-header"><a href="{{asset(route('home'))}}">Home</a></div>
      <div class="card-header"><a href="{{asset(route('navbar.index'))}}">Navbar</a></div>
      <div class="card-header"><a href="{{asset(route('slides.index'))}}">Slides</a></div>
      <div class="card-header">Post Card</div>
      <div class="card-header"><a href="{{asset(route('sitesettings.index'))}}">Site Settings</a></div>
      <div class="card-header"><a href="{{asset(route('users.official'))}}">Official Users</a></div>
      <div class="card-header"><a href="{{asset(route('users.public'))}}">Public Users</a></div>
    </div>

  
    <div class="col col-md-10">
      <div class="row" style="margin-bottom: 20px;">
        <div class="col mini-box">
            <div class="card">
                <div class="card-header text-center">
                    Total Users
                </div>
                <div class="card-body text-center text-white bg-secondary">
                {{$total_users}}
                </div>
            </div>
        </div>
        <div class="col mini-box" >
            <div class="card">
              <div class="card-header text-center">
                Total Image Posts
              </div>
                <div class="card-body text-center text-white bg-info">
                    878
                </div>
            </div>
        </div>
        <div class="col mini-box">
            <div class="card">
                <div class="card-header text-center">
                  Total PDF Posts
                </div>
                <div class="card-body text-center text-white bg-success">
                  765
                </div>
            </div>
        </div>
        <div class="col mini-box">
            <div class="card">
                <div class="card-header text-center">
                  Users Online
                </div>
                <div class="card-body text-center text-white bg-warning">
                  <?php $number = 0; ?>
                  @if(Auth::check())
                    @foreach(App\user::all() as $user)
                     @if($user->isOnline())
                        <?php $number++ ?>    
                     @endif
                    @endforeach
                  @endif
                  {{ $number }}
                </div>
            </div>
        </div>
      </div>
     <div class="row">
      <div class="card">
       <div class="card-header">Nav item 1 : {{$navbar->nav_item1}}</div>
     </div>
     <div class="card">
       <div class="card-header">Nav item 2 : {{$navbar->nav_item2}}</div>
     </div>
     <div class="card">
       <div class="card-header">Nav item 3 : {{$navbar->nav_item3}}</div>
     </div>
     <div class="card">
       <div class="card-header">Nav item 4 : {{$navbar->nav_item4}}</div>
     </div>
     <div class="card">
       <div class="card-header">Nav item 5 : {{$navbar->nav_item5}}</div>
     </div>
     <div class="card">
       <div class="card-header">Top Navbar Background Color : {{$navbar->top_navbar_bg_color}}</div>
     </div>
     <div class="card">
       <div class="card-header">Bottom Navbar Background Color : {{$navbar->bottom_navbar_bg_color}}</div>
     </div>
     <div class="card">
       <div class="card-header">Top Navbar Text Color : {{$navbar->top_text_color}}</div>
     </div>
     <div class="card">
       <div class="card-header">Bottom Navbar Text Color : {{$navbar->bottom_text_color}}</div>
     </div>
     <div class="card">
       <a href="{{asset(route('navbar.edit'))}}"><div class="card-header bg-info text-white">  Customize</div></a>
     </div>
     </div>
  </div>
</div>
@endsection
