<!-- Start gallery Area -->
<section class="gallery-area section-gap" id="gallery">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-30 header-text">
                <h2 class="text-white">My Recent Photos</h2>
            </div>
        </div>
        <div class="gal">
            @foreach ($uploads as $img)
                <a href="{{ url('files/'.$img['hash'].'/'.$img['name']) }}"><img src="{{  url('files/'.$img['hash'].'/'.$img['name']) }}" alt="{{ $img['caption'] }}"></a>
            @endforeach
        </div>
    </div>
</section>