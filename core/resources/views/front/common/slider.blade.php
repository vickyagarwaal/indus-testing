        <div  class="hero-area3" >
            <div class="background"></div>
            <div class="heroarea-slider owl-carousel">
                @foreach ($sliders as $slider)
                <div class="item" style="background: url('{{ asset('assets/images/' . $slider->photo) }}')">
                  
                </div>
                @endforeach
            </div>
        </div>

           
    

