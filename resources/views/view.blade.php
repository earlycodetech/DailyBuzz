@extends('layouts.app')
@section('content')
    <section class="container-fluid bg-danger-subtle "  >
        <div class="container">
          <h3 class="text-center fst-italic text-bg-info  " > Dailybuzz</h3>
          <h3 class="text-center fst-italic " >TODAY'S BUZZ</h3>
          <div class="row ps-5 ">
            <div class="col-md-6  col-lg-4 md-3 p-3">
              <div class="card  border-0 shadow">
                <img src="{{ asset('images/video-bg.png') }}" class="card-img-top" alt="">
                <div class="card-body">
                 <h5>
                    40 million missing as FG investigates 
                 </h5>
                 <a href="">
                    readmore
                 </a>
                </div>
              </div>
            </div>
            <div class="col-md-6  col-lg-4 md-3 p-3">
              <div class="card  border-0 shadow">
                <img src="{{ asset('images/video-bg.png') }}" class="card-img-top" alt="">
                <div class="card-body">
                 <h5>
                    Inspector sanusi warns against porpular slance NO GREE FOR ANY BODY
                 </h5>
                 <a href="">
                    readmore
                 </a>
                </div>
              </div>
            </div>
            <div class="col-md-6  col-lg-4 md-3 p-3">
              <div class="card  border-0 shadow">
                <img src="{{ asset('images/video-bg.png') }}" class="card-img-top" alt="">
                <div class="card-body">
                 <h5>
                    FG to compaciate victims of ASUU strike
                 </h5>
                 <a href="">
                    readmore
                 </a>
                </div>
              </div>
            </div>
            <div class="col-md-6  col-lg-4 md-3 p-3">
              <div class="card  border-0 shadow">
                <img src="{{ asset('images/video-bg.png') }}" class="card-img-top" alt="">
                <div class="card-body">
                 <h5>
                    Senator wike to demolish kwubwa
                 </h5>
                 <a href="">
                    readmore
                 </a>
                </div>
              </div>
            </div>
    
            <div class="col-md-6  col-lg-4 md-3 p-3">
              <div class="card  border-0 shadow">
                <img src="{{ asset('images/video-bg.png') }}" class="card-img-top" alt="">
                <div class="card-body">
                 <H5>
                    Teachers emerges on strike for cutting of salary
                 </H5>
                </div>
              </div>
            </div>
    
            <div class="col-md-6  col-lg-4 md-3 p-3">
              <div class="card  border-0 shadow">
                <img src="{{ asset('images/video-bg.png') }}" class="card-img-top" alt="">
                <div class="card-body">
                 <h5>
                    PDP members protests for rigging of elction
                 </h5>
    
                </div>
              </div>
            </div>
    
          </div>
    
    
        </div>
      </section>
    @endsection