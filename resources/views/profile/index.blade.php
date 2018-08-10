@include('includes.header2')

   <div class="row mb-2" style="margin-top: 30px;margin-bottom: 60px;">
        <div class="col-md-6">
          <div class="card ">
            <div class="card-body ">
              <div class="row mb-2">
                @if($profile->profile_image)
                 <div class="col">
                    <div class="card">
                       <div class="card-body image-card">
                        <a href="{{asset(route('profile.edit'))}}">
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
                      <div class="card-body image-card">
                        <h6 class="text-center text-muted">Latest Score</h6>
                        @if($profile->last_score)
                        <p class="text-center text-primary"> 
                        {{$profile->last_score}}</p>
                        @else
                        <h7 class="text-center text-muted">
                        Not given</h7>
                        @endif
                       
                      </div>
                    </div>
                        <h6 class="text-center"><a href="{{asset(route('scorecard.index'))}}" class="text-info">Score Card</a></h6>
                  </div>
              </div>
              <div class="row mb-2">
                <div class="col">
                  <p class="text-muted list-p" style="font-size: 12px;">Name : {{Auth::User()->name}}</p>
                  @if($profile->institute)
                  <p class="text-muted list-p" style="font-size: 12px;">Institute : {{$profile->institute}}</p>
                  @else
                  <p class="text-muted list-p" style="font-size: 12px;">Institute : </p>
                  @endif
                  @if($profile->department)
                  <p class="text-muted list-p" style="font-size: 12px;">Department : {{$profile->department}}</p>
                  @else
                  <p class="text-muted list-p" style="font-size: 12px;">Department : </p>
                  @endif
                  @if($profile->alumni)
                  <p class="text-muted list-p" style="font-size: 12px;">Alumni : {{$profile->alumni}}</p>
                  @else
                  <p class="text-muted list-p" style="font-size: 12px;">Alumni : </p>
                  @endif
                  @if($profile->hs_score)
                  <p class="text-muted list-p" style="font-size: 12px;">H.S Score : {{$profile->hs_score}}   <a href="{{asset(route('hsscorecard.index'))}}"><span class="text-info" style="float:right;">ScoreCard</span></a></p>
                  @else
                  <p class="text-muted list-p" style="font-size: 12px;">H.S Score : </p>
                  @endif
                  @if($profile->hslc_score)
                  <p class="text-muted list-p" style="font-size: 12px;">H.S.L.C Score : {{$profile->hslc_score}} <a href="{{asset(route('hslcscorecard.index'))}}"><span class="text-info" style="float:right;">ScoreCard</span></a></p>
                  @else
                  <p class="text-muted list-p" style="font-size: 12px;">H.S.L.C Score : </p>
                  @endif
                  @if($profile->phone)
                  <p class="text-muted list-p" style="font-size: 12px;">Phone : {{$profile->phone}}</p>
                  @else
                  <p class="text-muted list-p" style="font-size: 12px;">Phone : </p>
                  @endif
                  @if($profile->about)
                  <p class="text-muted list-p" style="font-size: 12px;">About : {{$profile->about}}</p>
                  @else
                  <p class="text-muted list-p" style="font-size: 12px;">About : </p>
                  @endif
             
                  <a href="{{asset(route('profile.edit'))}}">
                    <div class="card bg-info text-center text-white">
                      Edit Profile
                    </div>
                  </a>
                 </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>    

@include('includes.footer')