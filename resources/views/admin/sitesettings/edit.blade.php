@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
        <form action="{{asset(route('sitesettings.update',['id'=>$sitesettings->id]))}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
               
            <div class="form-group">
                    
                <input type="file" name="logo" value="{{$sitesettings->logo}}" class="bar form-control text-muted"  >
                <label for="logo" class="form-label">Select Logo</label>
            </div>
             <div class="form-group">
                    
                <input type="text" name="name" value="{{$sitesettings->name}}" class="bar form-control text-muted" >
                <label for="name" class="form-label">Name of the site</label>
            </div>
             <div class="form-group">
                    
                <input type="text" name="contact_number" value="{{$sitesettings->contact_number}}" class="bar form-control text-muted" >
                <label for="contact_number" class="form-label">Contact Number</label>
            </div>
            <div class="form-group">
                    
                <input type="email" name="email" value="{{$sitesettings->email}}" class="bar form-control text-muted" >
                <label for="email" class="form-label">Help Email</label>
            </div>
            <div class="form-group">
                    
                <input type="text" name="creator" value="{{$sitesettings->creator}}" class="bar form-control text-muted" >
                <label for="creator" class="form-label">Creator of the Site</label>
            </div>
            <div class="form-group">
                    
                <input type="text" name="about" value="{{$sitesettings->about}}" class="bar form-control text-muted" >
                <label for="about" class="form-label">About the Site</label>
            </div>
            <div class="form-group">
                    
                <input type="text" name="address" value="{{$sitesettings->address}}" class="bar form-control text-muted" >
                <label for="address" class="form-label">Address</label>
            </div>
            <div class="form-group ">
                   <div class="text-center">
                     <button class="btn btn-sm btn-info" type="submit">
                     Submit
                   </button>
                   </div>
               </div>
               
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
