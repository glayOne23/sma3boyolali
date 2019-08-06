<div class="col-lg-4 sidebar-widgets">
    <div class="widget-wrap">

        <div class="single-sidebar-widget popular-post-widget">
            <h4 class="popular-title">Postingan Terbaru</h4>
            <div class="popular-post-list">
                @foreach ($news as $new)    
                    <div class="single-post-list d-flex flex-row align-items-center">
                        <div class="thumb">
                            <img class="img-fluid" src="/images/{{$new->photo}}" alt="{{$new->photo}}" style="max-width:120px;">
                        </div>
                        <div class="details">
                            <a href="/berita/{{$new->id}}"><h6>{!! \Illuminate\Support\Str::words($new->title, 3,'....')  !!} </h6></a>
                            <p>{{ date('d F Y', strtotime($new->created_at) ) }}</p>
                        </div>
                    </div>
                @endforeach
                                                                
            </div>
        </div>						
    </div>
</div>