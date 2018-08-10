@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-2">
      <div class="card-header"><a href="{{asset(route('home'))}}">Home</a></div>
      <div class="card-header"><a href="{{asset(route('navbar.index'))}}">Navbar</a></div>
      <div class="card-header"><a href="{{asset(route('slides.index'))}}">Slides</a></div>
      <div class="card-header">Post Card</div>
      <div class="card-header"><a href="{{asset(route('sitesettings.index'))}}">Site Settings</a></div>
      <div class="card-header"><a href="{{asset(route('users.official'))}}">Official Users</a></div>
      <div class="card-header"><a href="{{asset(route('users.public'))}}">Public Users</a></div>
    </div>

    <div class="col">
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
                  Online Users
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
        <div class="col mini-box">
            <div class="card">
                <div class="card-body bg-primary">
                    Something
                </div>
            </div>
        </div>
        <div class="col mini-box">
            <div class="card bg-primary">
                <div class="card-body">
                    Something
                </div>
            </div>
        </div>
        <div class="col mini-box">
            <div class="card bg-primary">
                <div class="card-body">
                    Total Users
                </div>
            </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
