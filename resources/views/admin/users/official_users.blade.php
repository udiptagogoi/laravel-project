@extends('layouts.app')

@section('content')

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

    <div class="col-md-10">
      <div class="row">
        <div class="col " >
            <div class="card">
                <div class="card-header">
                    <form method="GET" action="{{asset(route('results.index'))}}">
                    <input type="text" name="user_search" placeholder="Search.." id="input-search" style="width:300px;">
                     <button class="btn btn-success" type="submit">Search</button>
                   </form>
               </div>
               <table class="table table-hover">
                <thead>
                    <tr>
                     <th>
                         ID
                     </th>
                     <th>
                         Image
                     </th>
                     <th>
                         Name
                     </th>
                     <th>
                         Institute
                     </th>
                     <th>
                         Phone
                     </th>
                     <th>
                         Email
                     </th>
                     <th>
                         Posts
                     </th>
                     
                     <th>
                         Created
                     </th>
                     <th>
                         Delete
                     </th>
                     @if(Auth::User()->admin==1 && Auth::User()->permission==1)
                     <th>
                         Admin
                     </th>
                     <th>
                         Permission
                     </th>
                     @endif
                 </tr>
                 </thead>
                 <tbody>
                    @foreach($user as $user)
                    <tr>
                        @if($user->admin==1)
                        <td>
                            {{$user->id}}
                        </td>
                        <td>
                            @if($user->profile->profile_image)
                        <img src="{{asset($user->profile->profile_image)}}" width="20px"height="20px" class="rounded" alt="">
                        @endif
                        </td>
                        <td>
                            {{$user->name}}
                        </td>
                        <td>
                            {{$user->profile->institute}}
                        </td>
                        <td>
                            @if($user->profile->phone)
                              {{$user->profile->phone}}
                              @endif
                        </td>
                        <td>
                            {{$user->email}}
                        </td>
                        <td>
                            Total Posts
                        </td>
                       
                        <td>
                            {{$user->created_at}}
                        </td>
                        <td>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                       @if(Auth::User()->admin==1 && Auth::User()->permission==1) 
                        @if($user->admin==1)
                        <td>
                            <a href="{{asset(route('public_users.removeadmin',['id'=>$user->id]))}}">
                            <button class="btn btn-success">Remove Admin</button>
                            </a>
                        </td>
                        @else
                        <td>
                            <a href="{{asset(route('public_users.makeadmin',['id'=>$user->id]))}}">
                            <button class="btn btn-warning">
                                Make Admin
                            </button>
                            </a>
                        </td>
                        @endif
                        @if($user->permission==1)
                        <td>
                            <a href="{{asset(route('public_users.removepermission',['id'=>$user->id]))}}">
                            <button class="btn btn-info">Remove Permit</button>
                            </a>
                        </td>
                        @else
                        <td>
                            <a href="{{asset(route('public_users.permit',['id'=>$user->id]))}}">
                            <button class="btn btn-secondary">
                                Permit
                            </button>
                            </a>
                        </td>
                        @endif
                      @endif
                      @endif
                    </tr>
                    @endforeach  
                 </tbody>      
               </table>

            </div>
        </div>
       
      </div>
    </div>

  </div>

    
        

@endsection
