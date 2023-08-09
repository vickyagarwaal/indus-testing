 <div class=" mt-15">
            <div class="container-fluid">
               
                <div class="row g-3 heading_d">
<h3 class="text-center">All Products Categories</h3>
                        
                        @php
        $categories = App\Models\Category::with('subcategory')->whereStatus(1)->orderby('serial','asc')->take(8)->get();
    @endphp
                        @foreach ($categories as $key => $pcategory) 
                        <div class="col-md-auto-3">
                        <div class=" text-center category_p">
                            <a href="{{route('front.catalog').'?category='.$pcategory->slug}}">        
                                  <img class="lazy" src="{{asset('assets/images/'.$pcategory->photo)}}" alt="Product"><br/>
                                    <p>{{$pcategory->name}}</p>
                                </a>  

                        </div>
</div>

                       
                           @endforeach
                        
                      
                                            </div>


                </div>
        </div>
 <br/>
