
@include('includes.header2')
@include('includes.error')
    <div class="row mb-2" style="margin-top: 50px;">
     <div class="col-md-6">
      <div class="card flex-md-row mb-4 box-shadow h-md-250">
        
        <div class="card-body d-flex flex-column align-items-start">
             @if($profile->profile_image)
                   <img src="{{asset($profile->profile_image) }}" alt="No Image" style="width:100%;height:auto;">
                   <p>
                   <form action="{{route('profile_image.delete')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                      <div class="form-group " style="display: none;">
                        <input type="text" name="avatar" value="uploads/profile_image/avatar.jfif" class="form-control text-muted">
                      </div>

                      <div class="form-group ">
                         <div class="text-center">
                            <button class="btn btn-sm btn-success" type="submit">
                             Remove image
                            </button>
                          </div>
                      </div>
                    </form>
                  </p>
                  @else
                    No image
                  @endif
            <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
               
            <div class="form-group">
                    
                <input type="text" name="name" value="{{Auth::user()->name}}" class="bar form-control text-muted">
                <label for="name" class="form-label">Username</label>
            </div>
            <div class="form-group">
                  
               <input type="email" value="{{Auth::user()->email}}" name="email" class="bar form-control text-muted">
               <label for="email" class="form-label">Email</label>
            </div>
            
            <div class="form-group">
                  
              <input type="file" name="profile_image" class="bar form-control">
              <label for="avatar" class="form-label">Upload new profile image</label>
            </div>
            @if($profile->institute)
            <div class="form-group">
                  
              <input type="text" value="{{$profile->institute}}" name="institute" class="bar form-control text-muted">
              <label for="institute" class="form-label">Institute</label>
            </div>
            @else
             <div class="form-group">
                  
              <input type="text" value="" name="institute" class="bar form-control text-muted">
              <label for="institute" class="form-label">Institute</label>
            </div>
            @endif
             @if($profile->department)
            <div class="form-group">
                  
              <input type="text" value="{{$profile->department}}" name="department" class="bar form-control text-muted">
              <label for="department" class="form-label">Department</label>
            </div>
            @else

            <div class="form-group">
                  
              <input type="text" value="" name="department" class="bar form-control text-muted">
              <label for="department" class="form-label">Department</label>
            </div>
            @endif
            @if($profile->last_score)
            <div class="form-group">
                  
              <input type="text" value="{{$profile->last_score}}" name="last_score" class="bar form-control text-muted">
              <label for="last_score" class="form-label">Last Aggregate Score</label>
            </div>
            @else
             <div class="form-group">
                  
              <input type="text" value="" name="last_score" class="bar form-control text-muted">
              <label for="last_score" class="form-label">Last Aggregate Score</label>
            </div>
            @endif
            @if($profile->phone)
            <div class="form-group">
                  
              <input type="text" value="{{$profile->phone}}"name="phone" class="bar form-control text-muted">
              <label for="phone" class="form-label">Phone</label>
            </div>
            @else
             <div class="form-group">
                  
              <input type="text" value=""name="phone" class="bar form-control text-muted">
              <label for="phone" class="form-label">Phone</label>
            </div>
            @endif
            @if($profile->hs_score)
            <div class="form-group">
                  
              <input type="text" value="{{$profile->hs_score}}"name="hs_score" class="bar form-control text-muted">
              <label for="hs_score" class="form-label">H.S Score</label>
            </div>
            @else
            <div class="form-group">
                  
              <input type="text" value=""name="hs_score" class="bar form-control text-muted">
              <label for="hs_score" class="form-label">H.S Score</label>
            </div>
            @endif
            @if($profile->hslc_score)
            <div class="form-group">
                  
              <input type="text" value="{{$profile->hslc_score}}"name="hslc_score" class="bar form-control text-muted">
              <label for="hslc_score" class="form-label">HSLC Score</label>
            </div>
            @else
            <div class="form-group">
                  
              <input type="text" value=""name="hslc_score" class="bar form-control text-muted">
              <label for="hslc_score" class="form-label">HSLC Score</label>
            </div>
            @endif
            @if($profile->alumni)
            <div class="form-group">
                 
              <input type="text" value="{{$profile->alumni}}"name="alumni" class="bar form-control text-muted">
               <label for="alumni" class="form-label">Alumni of</label>
            </div>
            @else
            <div class="form-group">
                 
              <input type="text" value=""name="alumni" class="bar form-control text-muted">
               <label for="alumni" class="form-label">Alumni of</label>
            </div>
            @endif
            @if($profile->about)

            <div class="form-group">
                  
                  <textarea name="about"  id="about" cols="6" rows="6" class="form-control text-muted" style="height:100px;">{{$profile->about}}</textarea>
                  <label for="about" class="form-label">About You</label>
            </div>
            @else
             <div class="form-group">
                  
                  <textarea name="about" id="about" cols="6" rows="6" class="form-control text-muted" style="height:100px;"></textarea>
                  <label for="about" class="form-label">About You</label>
            </div>
            @endif
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
