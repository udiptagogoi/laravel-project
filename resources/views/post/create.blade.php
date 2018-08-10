
@include("includes.header2")
@include('includes.error')
    <div class="row mb-2" style="margin-top: 50px;">
     <div class="col-md-6">
      <div class="card flex-md-row mb-4 box-shadow h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
            <div class="row">
               
             </div>
            <form action="{{route('post.store',['id'=>Auth::User()->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
             <div class="form-group">
              <input type="file" name="files[]" multiple class="form-control">
              <label for="avatar" class="form-label">Select File</label>
            </div>
            <div class="form-group">  
                <input type="text" name="post_title" value="" class="form-control text-muted">
                <label for="post_title" class="form-label">Post Title</label>
            </div>
            <div class="form-group">
               <input type="text" value="" name="institute" class="form-control text-muted">
               <label for="institute" class="form-label">Your Institute</label>
            </div>
            <div class="form-group ">
                   <div class="text-center">
                     <button class="btn btn-sm btn-success" type="submit">
                     Submit Post
                   </button>
                   </div>
               </div>
            </form>
                
        </div>
      </div>
  </div>
</div>
@include('includes.footer')
                                                     