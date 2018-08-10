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
                    Logo
                </div>
                <div class="card-body text-center text-white ">
                  <img src="{{asset($sitesettings->logo)}}" alt="" style="max-width: 100%;">
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
      <div class="row" style="margin-bottom: 10px;">
        <div class="col mini-box">
            <div class="card">
                <div class="card-header">
                    Site Name : {{$sitesettings->name}}
                </div>
            </div>
        </div>
        <div class="col mini-box">
            <div class="card">
                <div class="card-header">
                    Creator : {{$sitesettings->creator}} 
                </div>
            </div>
        </div>
        <div class="col mini-box">
            <div class="card">
                <div class="card-header">
                    About : {{$sitesettings->about}}
                </div>
            </div>
        </div>
      </div>
      <div class="row" style="margin-bottom: 10px;">
        <div class="col mini-box">
            <div class="card">
                <div class="card-header">
                    Contact Number: {{$sitesettings->contact_number}}
                </div>
            </div>
        </div>
        <div class="col mini-box">
            <div class="card">
                <div class="card-header">
                    Email : {{$sitesettings->email}} 
                </div>
            </div>
        </div>
        <div class="col mini-box">
            <div class="card">
                <div class="card-header">
                    Address : {{$sitesettings->address}}
                </div>
            </div>
        </div>
      </div>
      <a href="{{asset(route('sitesettings.edit'))}}">
       <div class="card">
           <div class="card-header bg-info text-white text-center">
               Edit Site Info
           </div>
       </div>
   </a>
    </div>

  </div>
</div>
@endsection
