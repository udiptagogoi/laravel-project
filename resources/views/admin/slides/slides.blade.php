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
      <a href="{{asset(route('slides.create'))}}">
            <div class="card">
             <div class="card-header text-center bg-info text-white">Add Slide</div>
            </div>
            </a>
      <div class="row">

        @if($slides->count()>0)

        @foreach($slides as $slide)
        <table class="table">
         <tbody> 
        <tr>
          <td>
            
            <div class="card">
                <div class="card-body">
                
                    <img src="{{asset($slide->slide)}}" alt="" style="width:100%;height:auto;">
                    
                </div>
              </div>
          </td>
          <td>  
            <div class="card">
                <div class="card-body">
                    
                    <div class="card-header">
                     Advertiser : {{$slide->advertiser}}
                    </div>
                    <div class="card-header">
                      Link : {{$slide->link}}
                    </div>
                    <div class="card-header">
                      Link Text : {{$slide->link_text}}
                    </div>
                    <div class="card-header">
                      Text : {{$slide->text}}
                    </div>
                    <a href="{{asset(route('slides.delete',['id'=>$slide->id]))}}">
                      <div class="card-header bg-danger text-white text-center">Delete Slide
                      </div>
                    </a>
                </div>
            </div>
         </td>
          </tr> 
        </tbody>
         </table> 
        @endforeach
      
        @endif
      </div>
      
    </div>
  </div>
</div>
@endsection
