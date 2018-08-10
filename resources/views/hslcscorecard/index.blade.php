@include('includes.header2')

   <div class="row mb-2" style="margin-top: 50px;">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body ">
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
                        <h6 class="text-center text-muted">HSLC Score</h6>
                        <p class="text-center text-primary"> 
                        {{$profile->hslc_score}}</p>
                      </div>
                    </div>
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
                      @if($profile->hslcscorecard->count()>0)
                      @foreach($profile->hslcscorecard as $hslcscorecard)
                      <tr class="text-muted form-label">
                        <td>
                          {{$hslcscorecard->sub}} 
                        </td>
                        <td>
                          {{$hslcscorecard->score}}
                        </td>
                        <td>
                          {{$hslcscorecard->max}}<a href="{{asset(route('hslcscorecard.edit',['id'=>$hslcscorecard->id]))}}"><span class="text-info" style="float:right;">Edit</span></a>
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
                    <h6 class="text-info text-center"><a href="{{asset(route('hslcscorecard.add'))}}" class="text-info">Add Score</a></h6>
                  
                  
                  </div>
                </div>
                
              </div>
             
             
            
          
              
          
              
            </div>
          </div>
        </div>
    </div>    

@include('includes.footer')