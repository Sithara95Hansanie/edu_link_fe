@extends('layouts.app')

@section('content')
@include('heroSection')
<div class="section2">
    <div class="container">
        <div class="row justify-content-center flex">
            <div class="col-lg-3 col-md-6 col-sm-6 col-6  count-box">
                <h2>10+</h2>
                <p>YEARS OF EXPERIENCE</p>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-6 count-box">
                <h2>900+</h2>
                <p>ONLINE COURSES</p>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-6 count-box">
                <h2>480,000+</h2>
                <p>HAPPY LEARNERS</p>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-6 count-box">
                <h2>150+</h2>
                <p>EXPERT INSTRUCTORS</p>
              </div>
        </div>
    </div>
</div>
@include('section3')
@include('section4')
@include('section5')
@endsection
