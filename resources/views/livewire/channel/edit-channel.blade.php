<div>
   <div class="text-center mt-2">
    @if ($channel->image)
    <img src="{{asset('images' . '/'. $channel->image)}}" alt="" class="text-center">    
    @endif 
   </div>
  
    <form wire:submit.prevent="update">
        <div class="row">
            <h5 class="text-center mt-3">Edit Channel <strong>{{(Auth::user()->channel->name)}} </strong></h5>
            @if (session()->has('message'))
            <div class="alert alert-success mt-2">{{session('message')}}</div>
        @endif
        </div>
        <div class="form-group mt-3 mb-2">
            <div class="row">
                <div class="col-md-3">
                    <label for="name" >Name</label>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" wire:model="channel.name">

                    @error('channel.name')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                @enderror
                </div>
            </div>
        </div>
       

        <div class="form-group mt-3 mb-2">
            <div class="row">
                <div class="col-md-3">
                    <label for="slug" >Slug</label>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" wire:model="channel.slug" >
                    @error('channel.slug')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group mt-3 mb-2">
            <div class="row">
                <div class="col-md-3">
                    <label for="name" >Description</label>
                </div>
                <div class="col-md-9">
                        <textarea  cols="30" rows="4" class="form-control" wire:model="channel.description"></textarea>
                       
                        @error('channel.description')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                         @enderror

                    </div>
            </div>
        </div>

        <div class="form-group mt-3 mb-2">
            <div class="row">
                <div class="col-md-3">
                    <label for="name" >Image</label>
                </div>
                <div class="col-md-9">
                        <input type="file" class="form-control-file" wire:model="image"> 
                        <div>
                            @if ($image)
                            Image Preview:
                            <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail">
                    
                        @endif
                        </div>                      
                        @error('image')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                         @enderror
                </div>
            </div>
        </div>

        <div class="form-group mt-3 mb-2">
            <div class="row">
                <div class="col-md-3">
                    <label  ></label>
                </div>
                <div class="col-md-9">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </div>
            </div>
        </div>
      
    </form>
</div>
