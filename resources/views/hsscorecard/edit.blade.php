
@include('includes.header2')
@include('includes.error')
    <div class="row mb-2" style="margin-top: 50px;">
     <div class="col-md-6">
      <div class="card">
        
        <div class="card-body">
            <form action="{{asset(route('hsscorecard.update',['id'=>$hsscorecard->id]))}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
               
            <div class="form-group">
                    
                <input type="text" name="sub" value="{{$hsscorecard->sub}}" class="bar form-control text-muted"  >
                <label for="sub" class="form-label">Subject</label>
            </div>
             <div class="form-group">
                    
                <input type="text" name="score" value="{{$hsscorecard->score}}" class="bar form-control text-muted" >
                <label for="score" class="form-label">Score</label>
            </div>
             <div class="form-group">
                    
                <input type="text" name="max" value="{{$hsscorecard->max}}" class="bar form-control text-muted" >
                <label for="max" class="form-label">Maximum Score</label>
            </div>
            
            <div class="form-group ">
                   <div class="text-center">
                     <button class="btn btn-sm btn-info" type="submit">
                     Submit
                   </button>
                   <a href="{{asset(route('hsscorecard.delete',['id'=>$hsscorecard->id]))}}" class="text-danger" style="float: right;">Delete</a>
                   </div>
               </div>
               
            </form>
                
        </div>
      </div>
  </div>
</div>
@include('includes.footer')
