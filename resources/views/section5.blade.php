<div class="section5">
    <div class="container">
        <div class="row">
            @foreach ($courses['items'] as $item)
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 online-course">
                <div class="ref-card" >
                    <div class="course-card">
                        <div class="circle">
                            <img src="{{$item['image']}}" alt="">
                        </div>
                        <div class="course-fee">
                            {{$item['course_fee']}}
                        </div>
                       
                    </div>
                    <div class="course-name">
                        <h3>
                            {{$item['title']}}
                        </h3>
                    </div>
                </div>
    
            </div>
            @endforeach
            
        </div>
        <div class="view">
            <p>VIEW ALL</p>
        </div>
    </div>

</div>

<div class="section6">
    <div class="container">
        <h2>WE HAVE GREAT REVIEWS</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="image-card">
                    <img src="https://www.globaledulink.co.uk/wp-content/themes/wplms-child/assets/images/trustpilot-new%203.png" alt="">
                </div>
    
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="text-card">
                    <div class="name">
                        <h4>Shelley Marshall</h4>
                    </div>
                    <div class="description">
                        <p>I have loved doing this level 4 Skincare course with Global Ed. The information in this course is indepth. Lots of digestable information.I love the workbooks I can download and go back to.</p>
                    </div>
                    <p class="bottom">Posted 1 day ago</p>
                </div>
    
            </div>   
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="text-card">
                    <div class="name">
                        <h4>Shelley Marshall</h4>
                    </div>
                    <div class="description">
                        <p>I have loved doing this level 4 Skincare course with Global Ed. The information in this course is indepth. Lots of digestable information.I love the workbooks I can download and go back to.</p>
                    </div>
                    <p class="bottom">Posted 4 day ago</p>
                    
                </div>
    
            </div> 
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="text-card">
                    <div class="name">
                        <h4>Shelley Marshall</h4>
                    </div>
                    <div class="description">
                        <p>I have loved doing this level 4 Skincare course with Global Ed. The information in this course is indepth. Lots of digestable information.I love the workbooks I can download and go back to.</p>
                    </div>
                    <p class="bottom">Posted 1 day ago</p>
                </div>
    
            </div>           
        </div>
        <div class="view">
            <p>VIEW ALL</p>
        </div>
    </div>

</div>
