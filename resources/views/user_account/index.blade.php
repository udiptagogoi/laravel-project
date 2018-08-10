
@include('includes.header2')
@include('includes.error')
    <div class="row mb-2" style="margin-top: 50px;">
     <div class="col-md-6">
      <div class="card">
        <a href="{{asset(route('user_account_delete.confirm'))}}" class="text-muted" style="margin-top:-8px; margin-bottom: -8px;">
        <div class="card-body">
            Delete Account     
        </div>
        </a>
      </div>
      <div class="card ">
        <a href="{{asset(route('user_password_change.index'))}}" class="text-muted" style="margin-top: -10px;margin-bottom: -10px;">
        <div class="card-body">
            Change Password    
        </div>
        </a>
      </div>
  </div>
</div>
@include('includes.footer')
