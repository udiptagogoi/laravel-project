<div class="container" id="body-container">
  <div class="row">
    <div class="col-md-3 sticky-top" style="height:100%;" id="left-col">
     
    </div>

    <div class="col-md-6">
      <div class="row">
         <div class="card" id="slidecard">
           @if($slides->count()>0)
           @foreach($slides as $slide)
          <div class="mySlides ">
            @if($slide->link_text)
            <div class="text-block"><a href="{{asset($slide->link)}}"><h6 class="text-white">
              {{$slide->link_text}}
            </h6></a></div>
            @endif
              <img src="{{asset($slide->slide)}}" style="width:100%;height:auto;">
            @if($slide->text)  
              <div class="bottom-text-block text-center"><h7 class="text-white">{{$slide->text}}</h7></div>
              @endif
          </div>
          @endforeach
          @endif
          </div>
          <br>
      </div>
      <div class="row" style="margin-bottom: 5px;margin-top: 5px;">
        <div class="card" style="width:100%;">
            <div class="card-body">
              <strong class="d-inline-block mb-2 text-primary">Profile Details</strong>
              <h7 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h7>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto"><img src="uploads/image_posts/1527749705ai.jpg" alt="" style="max-width:100%;max-height:100%;"></p>
          
              <div class="d-flex d-flex justify-content-around">
                <div class="p-2 bd-highlight"><a href="" class="text-muted">Download</a></div>
                <div class="p-2 bd-highlight"><a href="" class="text-muted">View</a></div>
                <div class="p-2 bd-highlight"><a href="" class="text-muted">Share</a></div>
              </div>
            </div>
          </div>
      </div>
      <div class="row">
         <div class="card" style="width:100%;margin-bottom: 5px;">
            <div class="card-body">
              <strong class="d-inline-block mb-2 text-primary">Profile Details</strong>
              <h7 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h7>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto"><img src="uploads/image_posts/1527749705ai.jpg" alt="" style="max-width:100%;max-height:100%;"></p>
          
              <div class="d-flex d-flex justify-content-around">
                <div class="p-2 bd-highlight"><a href="" class="text-muted">Download</a></div>
                <div class="p-2 bd-highlight"><a href="" class="text-muted">View</a></div>
                <div class="p-2 bd-highlight"><a href="" class="text-muted">Share</a></div>
              </div>
            </div>
          </div>
      </div>
      <div class="row">
         <div class="card" style="width:100%;">
            <div class="card-body">
              <strong class="d-inline-block mb-2 text-primary">Profile Details</strong>
              <h7 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h7>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto"><img src="uploads/image_posts/1527749705ai.jpg" alt="" style="max-width:100%;max-height:100%;"></p>
          
              <div class="d-flex d-flex justify-content-around">
                <div class="p-2 bd-highlight"><a href="" class="text-muted">Download</a></div>
                <div class="p-2 bd-highlight"><a href="" class="text-muted">View</a></div>
                <div class="p-2 bd-highlight"><a href="" class="text-muted">Share</a></div>
              </div>
            </div>
          </div>
      </div>
      <div class="row">
         <div class="card" style="width:100%;">
            <div class="card-body">
              <strong class="d-inline-block mb-2 text-primary">Profile Details</strong>
              <h7 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h7>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto"><img src="uploads/image_posts/1527749705ai.jpg" alt="" style="max-width:100%;max-height:100%;"></p>
          
              <div class="d-flex d-flex justify-content-around">
                <div class="p-2 bd-highlight"><a href="" class="text-muted">Download</a></div>
                <div class="p-2 bd-highlight"><a href="" class="text-muted">View</a></div>
                <div class="p-2 bd-highlight"><a href="" class="text-muted">Share</a></div>
              </div>
            </div>
          </div>
      </div>
      <div class="row">
         <div class="card" style="width:100%;">
            <div class="card-body">
              <strong class="d-inline-block mb-2 text-primary">Profile Details</strong>
              <h7 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h7>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto"><img src="uploads/image_posts/1527749705ai.jpg" alt="" style="max-width:100%;max-height:100%;"></p>
          
              <div class="d-flex d-flex justify-content-around">
                <div class="p-2 bd-highlight"><a href="" class="text-muted">Download</a></div>
                <div class="p-2 bd-highlight"><a href="" class="text-muted">View</a></div>
                <div class="p-2 bd-highlight"><a href="" class="text-muted">Share</a></div>
              </div>
            </div>
          </div>
      </div>
      <div class="row">
         <div class="card" style="width:100%;margin-bottom: 50px;">
            <div class="card-body">
              <strong class="d-inline-block mb-2 text-primary">Profile Details</strong>
              <h7 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h7>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto"><img src="uploads/image_posts/1527749705ai.jpg" alt="" style="max-width:100%;max-height:100%;"></p>
          
              <div class="d-flex d-flex justify-content-around">
                <div class="p-2 bd-highlight"><a href="" class="text-muted">Download</a></div>
                <div class="p-2 bd-highlight"><a href="" class="text-muted">View</a></div>
                <div class="p-2 bd-highlight"><a href="" class="text-muted">Share</a></div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="col-md-3 sticky-top" style="height: 100%;" id="right-col">
    
    </div>

  </div>
</div>