<div>
    @push('custom-css')
    <link href="https://vjs.zencdn.net/7.18.1/video-js.css" rel="stylesheet" />
    @endpush
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="video-container">
                <video controls preload="auto" id="yt-video" wire:ignore class="video-js vjs-fill vjs-styles=defaults vjs-big-play-centered" data-setup="{}">
                    <source src="{{asset('/video/'. $video->uid . '/' . $video->processed_file)}}" type="application/x-mpegURL">
                </video>
                <p class="vjs-no-js">To view this video please enable javascript, and consider upgrading to  a web browser that
                    <a href="https://videojs.com/html5-video-support/" target="_blank">Support HTML5 video</a>
                </p>
             </div>
           </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://vjs.zencdn.net/7.18.1/video.min.js"></script>
    <script>
        var player = videojs('yt-video')
        player.on('timeupdate', function(){
            if(this.currentTime() >3)
            this.off('timeupdate')
            Livewire.emit('VideoViewed')
        });
    </script>
    @endpush
</div>
