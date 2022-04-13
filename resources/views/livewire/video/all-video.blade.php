<div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if ($videos->count())
                @foreach ($videos as $video )
                <div class="card my-2">
                    <div class="card-body">
                        <div class="row">
                            
                                
                            <div class="col-md-2">
                                <img src="{{asset($video->thumbnail)}}" class="img-thumbnail" alt="">
                                
                            </div>
                            <div class="col-md-3">
                                <h5>{{$video->title}}</h5>
                                <h5>{{$video->description}}</h5>
                            </div>
                            <div class="col-md-2">
                                {{$video->visibility}}
                            </div>
                            <div class="col-md-2">
                                {{$video->created_at->format('d/m/Y')}}
                            </div>
                            
                            @if (auth()->user()->owns($video))
                            <div class="col-md-2">
                                <a href="{{route('video.edit',['channel' =>auth()->user()->channel , 'video'=>$video->uid])}}" class="btn btn-light btn-sm">Edit</a>
                                <a wire:click.prevent="delete('{{$video->uid}}')" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                            @endif
                           

                        </div>
                    </div>
                </div>
            @endforeach
            @else
            <h3>No Videos founded</h3>
                @endif
              
            </div>
         
                {{$videos->links()}}
           
        </div>
    </div>
</div>

