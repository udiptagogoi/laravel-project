@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
        <form action="{{asset(route('slides.store'))}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
               
            <div class="form-group">
                    
                <input type="file" name="slide" class="bar form-control text-muted"  >
                <label for="slide" class="form-label">Select Slide</label>
            </div>
            <div class="form-group">
                    
                <input type="text" name="advertiser" class="bar form-control text-muted"  >
                <label for="advertiser" class="form-label">Advertiser</label>
            </div>
            <div class="form-group">
                    
                <input type="text" name="link" class="bar form-control text-muted"  >
                <label for="link" class="form-label">Link</label>
            </div>
            <div class="form-group">
                    
                <input type="text" name="text" class="bar form-control text-muted"  >
                <label for="text" class="form-label">Text</label>
            </div>
            <div class="form-group">
                    
                <input type="text" name="link_text" class="bar form-control text-muted"  >
                <label for="link_text" class="form-label">Link Text</label>
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
