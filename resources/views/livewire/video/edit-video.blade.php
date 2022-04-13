<div @if ($video->processing_percentage <100 ) wire:poll @endif>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset($this->video->thumbnail)}}" class="img-thumbnail" alt="">
                    </div>
                    <div class="col-md-8">
                        {{-- <p>processing</p> --}}
                        {{$this->video->processing_percentage}}
                        {{-- 6.8 --}}
                    </div>
                </div>
               
                    
     <form wire:submit.prevent="update">
         <div class="row">
             <h5 class="text-center mt-3">Edit Video</h5>
             @if (session()->has('message'))
             <div class="alert alert-success mt-2">{{session('message')}}</div>
         @endif
         </div>
         <div class="form-group mt-3 mb-2">
             <div class="row">
                 <div class="col-md-3">
                     <label for="title" >TItle</label>
                 </div>
                 <div class="col-md-9">
                     <input type="text" class="form-control" wire:model="video.title">
 
                     @error('video.title')
                     <div class="alert alert-danger mt-2">{{$message}}</div>
                 @enderror
                 </div>
             </div>
         </div>
        
 
 
         <div class="form-group mt-3 mb-2">
             <div class="row">
                 <div class="col-md-3">
                     <label for="description" >Description</label>
                 </div>
                 <div class="col-md-9">
                         <textarea  cols="30" rows="4" class="form-control" wire:model="video.description"></textarea>
                        
                         @error('video.description')
                         <div class="alert alert-danger mt-2">{{$message}}</div>
                          @enderror
 
                     </div>
             </div>
         </div>
 
         <div class="form-group mt-3 mb-2">
            <div class="row">
                <div class="col-md-3">
                    <label for="visibility" >Visibility</label>
                </div>
                <div class="col-md-9">
                    <select wire:model="video.visibility" class="form-control">
                        <option value="private">Private</option>
                        <option value="public">Public</option>
                        <option value="unlisted">Unlisted</option>
                    </select>
                       
                        @error('video.visibility')
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
        </div>
    </div>
</div>