@include('includes.header2')
              
    <div class="row mb-2" style="margin-top: 50px;">
     <div class="col-md-6">
      <div class="card ">
        
        <div class="card-body ">
            
            <form action="{{route('user_password_change.submit')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
               @if(session()->has('message.level'))
            <span class="text-success "> 
                   {!! session('message.content1') !!}
             </span>
               @endif
            <div class="form-group">
                   
                <input type="Password" name="current_password" placeholder="Current Password" class="bar form-control text-muted" required >
                @if(session()->has('message.level'))
            <span class="form-label text-danger " > 
                   {!! session('message.content2') !!}
             </span>
               @endif
            
            </div>

             <div class="form-group">     
               <input type="Password" name="new_password" placeholder="New Password" class="bar form-control text-muted" required>

            
            </div>
            
            <div class="form-group">
                  
              <input type="Password" name="confirm_password" placeholder="Confirm Password" class="bar form-control text-muted" required>
              <span class="form-label text-danger" > 
                   {!! session('message.content3') !!}
             </span>
            </div>
             <div class="form-group ">
                   <div class="text-center">
                     <button class="btn btn-sm btn-info" type="submit">
                     Change
                   </button>
                   </div>
               </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@include('includes.footer')
