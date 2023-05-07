
<div class="section4">
    <div class="container">
        <h2>{{$area['title']}}</h2>

        <div class="row area-content">
            @foreach($area['areas'] as $item)
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 ">
            <div class="info-card">
                <img src="{{$item['image']}}" alt="">
                <div class="card-title">
                    <p>{{$item['title']}}</p>
                </div>
            </div>
                
            </div>
            @endforeach
        </div>
    </div>

   
</div>