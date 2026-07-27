@extends('admin.layout')
@section('content')      
      <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-ui-checks-grid" aria-hidden="true"></i></span>
              <div>
                <!-- <p class="eyebrow mb-1">Inputs</p> -->
                <h1 class="h3 mb-1">Add Categories</h1>
                <!-- <p class="text-muted mb-0">Reusable form controls, validation states, and field layouts.</p> -->
              </div>
            </div>
            
          </div>
          <section class="row g-3">
            <div class="col-12 col-xl-7">
              @if(session('category'))
              <div class="alert alert-success" role="alert"><strong>Success :</strong> {{ session('category') }}</div>
              @endif
              <form class="panel needs-validation" method="post" action="{{ 'add_category' }}">
                @csrf
                <div class="panel-header">
                  <div>
                    <h2 class="h5 mb-1 section-title">
                      <i class="bi bi-ui-checks-grid" aria-hidden="true">
                      </i>
                      <span>
                        Add Quiz Category
                      </span>
                    </h2>
                    <!-- <p class="text-muted mb-0">
                      Bootstrap-ready fields with custom validation feedback.
                    </p> -->
                  </div>
                </div>
                <div class="row g-3">
                  <div class="col-md-6">
                    <label class="form-label" for="formName">Category Name</label>
                    <input class="form-control" id="formName" name="category" value="">
                    @error('category')
                   <div class="text-red">{{$message}}</div>
                    @enderror
                  </div>
  
                </div>
                <div class="d-flex justify-content-end mt-4">
                  <button class="btn btn-primary" type="submit">
                    <i class="bi bi-send" aria-hidden="true"></i>Submit Form
                  </button>
                </div>
              </form>
            </div>

          </section>
        </div>
      </main>
      @endsection