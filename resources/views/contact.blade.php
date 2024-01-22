@extends('layouts.app')
@section('content')
<section>
    <div class=" contact min-vh-100 my-5">
        <div class="card border-0 shadow mx-auto" style="max-width: 600px;">
            <div class="card-header ">
                <h5 class="text-center "> contact up</h5>
            </div> 
            <div class="card-body bg-secondary">
                <form action="">
                    <div class="mb-3">
                        <label for="" class="form-leble"> FULL NAME</label>
                        <input type="text" class="form-control form-control-lg">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-leble"> EMAIL</label>
                        <input type="text" class="form-control form-control-lg">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-leble"> SUBJECT</label>
                        <SElect name="" class="form-select form-select-sm">
                            <option value="">book</option>
                            <option value="">project</option>
                        </SElect>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-leble"> massage</label>
                        <input type="text" class="form-control form-control-lg">
                        
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-outline-primary">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>
@endsection