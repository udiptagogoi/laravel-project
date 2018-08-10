@include('includes.header2')

   <div class="row mb-2" style="margin-top: 50px;">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="row mb-2">
                @if($profile->profile_image)
                 <div class="col">
                  <div class="card" >
                    <div class="card-body image-card">
                      <a href="{{asset(route('profile.index'))}}">
                      <img src="{{asset($profile->profile_image) }}" alt="No Image" style="width:100%;height:auto;"></a>
                    </div>
                  </div>
                   
                  </div>
                  @else
                   <div class="col">
                    No image
                  </div>
                  @endif

                  <div class="col">
                    <div class="card">
                      <div class="body image-card">
                        <h6 class="text-center text-muted">Latest Score</h6>
                        @if($profile->last_score)
                        <p class="text-center text-primary"> 
                        {{$profile->last_score}}</p>
                        @else
                        <h7 class="text-muted form-label">
                        Not given</h7>
                        @endif
                      
                      </div>
                    </div>
                        <h6 class="text-center"><a href="#" class="text-info">Score Card</a></h6>
                  </div>

              </div>
              <div class="row mb-2">
                <div class="col">
                 
                  
                    <table class="table">
                      <tbody>
                        <tr>
                        <td>
                          Subject
                        </td>
                        <td>
                            Score
                        </td>
                        <td>
                          Max Score
                        </td>
                      </tr>
                      @if($profile->scorecard->count()>0)
                      @foreach($profile->scorecard as $scorecard)
                      <tr class="text-muted form-label">
                        <td>
                          {{$scorecard->sub}} 
                        </td>
                        <td>
                          {{$scorecard->score}}
                        </td>
                        <td>
                          {{$scorecard->max}}<a href="{{asset(route('scorecard.edit',['id'=>$scorecard->id]))}}"><span class="text-info" style="float:right;">Edit</span></a>
                        </td>
                      </tr>
                      @endforeach
                      @else
                       <tr class="text-muted form-label">
                         <td>
                           Null
                         </td>
                         <td>
                           Null
                         </td>
                         <td>
                           Null
                         </td>
                       </tr>
                       @endif
                      </tbody>
                      
                    </table>
                    <h6 class="text-info text-center"><a href="{{asset(route('scorecard.add'))}}" class="text-info">Add Score</a></h6>
                  
                  
                  </div>
                </div>
                
              </div>
             
             
            
          
              
          
              
            </div>
          </div>
        </div>
    </div>    

@include('includes.footer')