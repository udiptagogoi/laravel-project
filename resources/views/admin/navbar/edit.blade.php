@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
        <form action="{{asset(route('navbar.update',['id'=>$navbar->id]))}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
               
            <div class="form-group">
                    
                <input type="text" name="nav_item1" value="{{$navbar->nav_item1}}" class="bar form-control text-muted"  >
                <label for="nav_item1" class="form-label">First Nav Item</label>
            </div>
            <div class="form-group">
                    
                <input type="text" name="nav_item2" value="{{$navbar->nav_item2}}" class="bar form-control text-muted"  >
                <label for="nav_item2" class="form-label">Second Nav Item</label>
            </div>
            <div class="form-group">
                    
                <input type="text" name="nav_item3" value="{{$navbar->nav_item3}}" class="bar form-control text-muted"  >
                <label for="nav_item3" class="form-label">Third Nav Item</label>
            </div>
            <div class="form-group">
                    
                <input type="text" name="nav_item4" value="{{$navbar->nav_item4}}" class="bar form-control text-muted"  >
                <label for="nav_item4" class="form-label">Fourth Nav Item</label>
            </div>
            <div class="form-group">
                    
                <input type="text" name="nav_item5" value="{{$navbar->nav_item5}}" class="bar form-control text-muted"  >
                <label for="nav_item5" class="form-label">Fifth Nav Item</label>
            </div>
            
            <div class="form-group">
                    
                <input type="text" name="top_navbar_bg_color" value="{{$navbar->top_navbar_bg_color}}" class="bar form-control text-muted" >
                <label for="top_navbar_bg_color" class="form-label">Top Navbar Background Color</label>
            </div>
            <div class="form-group">
                    
                <input type="text" name="bottom_navbar_bg_color" value="{{$navbar->bottom_navbar_bg_color}}" class="bar form-control text-muted" >
                <label for="bottom_navbar_bg_color" class="form-label">Bottom Navbar Background color</label>
            </div>
            <div class="form-group">
                    
                <input type="text" name="top_text_color" value="{{$navbar->top_text_color}}" class="bar form-control text-muted" >
                <label for="top_text_color" class="form-label">Top Navbar Text color</label>
            </div>
            <div class="form-group">
                    
                <input type="text" name="bottom_text_color" value="{{$navbar->bottom_text_color}}" class="bar form-control text-muted" >
                <label for="bottom_text_color" class="form-label">Bottom Navbar Text Color</label>
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
