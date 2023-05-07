        <div class="section3">
            <div class="container">
                <div class="title">
                    <h2>TOGETHER, SHAPING YOUR FUTURE</h2>
                </div>
                <div class="btn-group">
                    <div class="left">Popular Courses</div>
                    <div class="right">New Courses</div>
        
                </div>

                <div class="row courses">
                    @foreach ($data['items'] as $item)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="course-widget">
                        
                        <div class="star-rating">
                            <span class="glyphicon glyphicon-star-empty"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                          </div>
                          <div class="course-title">
                            {{ $item['title'] }}
                          </div>
                          <div class="thumbnail-block">
                            <div class="image"><img src="{{$item['image']}}" alt=""></div>
                            <div class="duration">
                                <p> {{ $item['duration'] }}</p>
                                <p>'CIPD'</p>
                                <div> <del>{{$item['old_price']}}</del> {{$item['price']}}</div>
                            </div>
                          </div>
                          <div class="widget-footer">
                                <button class="detail-btn">Details</button>
                                <button class="buy-btn">Buy</button>
                        </div>
                    </div>
                </div>
                    @endforeach

                </div>
               


            </div>
        </div>
