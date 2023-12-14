<section class="carousel carousel-slider center">
    @if($sliders)
        @foreach($sliders as $slider)
        <div class="carousel-item" style="background-image: url({{Storage::url('slider/'.$slider->image)}}); background-repeat:no-repeat; background-size:cover; background-position:center;">
            <div class="slider-content">
                <div class="overlay-image"></div> 
                <h2 class="white-text" style="font-size:55px; padding-top:100px; z-index:2; position:relative;">{{ $slider->title }}</h2>
                <p class="white-text" style="display: none;">{{ $slider->description }}</p>
              
            </div>
        </div>
        @endforeach
    @else 
        <div class="carousel-item amber indigo-text" style="background-image: url({{ asset('frontend/images/real_estate.jpg') }})" href="#1!">
            <h2>Slider Title goes here</h2>
            <p class="indigo-text">Slider description goes here</p>
        </div>
    @endif
</section>