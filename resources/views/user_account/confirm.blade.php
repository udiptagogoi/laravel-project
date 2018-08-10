
@include('includes.header2')
@include('includes.error')
    <div class="row mb-2" style="margin-top: 50px;">
     <div class="col-md-6">
      <div class="card ">
        
        <div class="card-body ">
          <p>Delete Permanently ?</p>
          <div class="d-flex d-flex justify-content-around">
                    <div class="p-2 bd-highlight"><a href="{{asset(route('user_account_delete_confirm.yes'))}}" class="text-info">Yes</a></div>
                    <div class="p-2 bd-highlight"><a href="{{asset(route('user_account_delete_confirm.no'))}}" class="text-danger">No</a></div>
          </div>
           
                
        </div>
        
      </div>
      
  </div>
</div>
@include('includes.footer')
