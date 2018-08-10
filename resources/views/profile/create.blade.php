
@include("includes.header3")
@include('includes.error')
    <div class="row mb-2" style="margin-top: 50px;">
     <div class="col-md-6">
      <div class="card flex-md-row mb-4 box-shadow h-md-250">
        
        <div class="card-body d-flex flex-column align-items-start">
             <div class="row">
               
             </div>
            <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                 <div class="form-group ">
                   <div class="text-center">
                     <button class="btn btn-sm btn-info" type="submit">
                     Skip
                   </button>
                   </div>
               </div>
            <div class="form-group">
                    
                <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control text-muted">
                <label for="name" class="form-label">Username</label>
            </div>
            <div class="form-group">
                  
               <input type="email" value="{{Auth::user()->email}}" name="email" class="form-control text-muted">
               <label for="email" class="form-label">Email</label>
            </div>
            
            <div class="form-group">
                  
              <input type="file" name="profile_image" class="form-control">
              <label for="avatar" class="form-label">Upload new profile image</label>
            </div>
            <div class="form-group">
                  
              <input type="text" value="" name="institute" class="form-control text-muted">
              <label for="institute" class="form-label">Institute</label>
            </div>
            <div class="form-group">
                  
              <input type="text" value="" name="department" class="form-control text-muted">
              <label for="department" class="form-label">Department</label>
            </div>
            <div class="form-group">
                  
              <input type="text" value="" name="last_score" class="form-control text-muted">
              <label for="last_score" class="form-label">Last Aggregate Score</label>
            </div>
            <div class="form-group">
                  
              <input type="text" value=""name="phone" class="form-control text-muted">
              <label for="phone" class="form-label">Phone</label>
            </div>
            <div class="form-group">
                  
              <input type="text" value=""name="hs_score" class="form-control text-muted">
              <label for="hs_score" class="form-label">H.S Score</label>
            </div>
            <div class="form-group">
                  
              <input type="text" value=""name="hslc_score" class="form-control text-muted">
              <label for="hslc_score" class="form-label">HSLC Score</label>
            </div>
            <div class="form-group">
                 
              <input type="text" value=""name="alumni" class="form-control text-muted">
               <label for="alumni" class="form-label">Alumni of</label>
            </div>
            <div class="form-group">
                  
                  <textarea name="about" id="about" cols="6" rows="6" class="form-control text-muted" style="height:100px;"></textarea>
                  <label for="about" class="form-label">About You</label>
            </div>
            <div class="form-group ">
                   <div class="text-center">
                     <button class="btn btn-sm btn-success" type="submit">
                     Update profile
                   </button>
                   </div>
               </div>
            </form>
                
        </div>
      </div>
  </div>
</div>
@include('includes.footer')
