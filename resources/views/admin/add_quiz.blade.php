@extends('admin.layout')
@section('content')      
      <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-ui-checks-grid" aria-hidden="true"></i></span>
              <div>
                <!-- <p class="eyebrow mb-1">Inputs</p> -->
                <h1 class="h3 mb-1">Add Quiz</h1>
                <!-- <p class="text-muted mb-0">Reusable form controls, validation states, and field layouts.</p> -->
              </div>
            </div>
            
          </div>

            @if(session('quizdetail'))
             
            <section class="row g-3">
                <div class="col-12 col-xl-7">
                    <form class="panel needs-validation" method="post" action="{{ 'add_mcq' }}">
                    @csrf   
                    <div class="panel-header">
                            <div>
                                <h2 class="h5 mb-1 section-title"><i class="bi bi-ui-checks-grid" aria-hidden="true"></i><span>Quiz : {{ session('quizdetail')->name }}</span></h2>
                            </div>
                            <div><h2 class="h5 mb-1 section-title"><span>Total Question : <a href="show_quiz_question/{{ session('quizdetail')->id }}">{{ $total_mcq_question }}</a></span></h2></div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="formName">Enter Question</label>
                                <textarea class="form-control" id="question" name="question" value="{{ old('question') }}"></textarea>
                                @error('question')
                                <div class="text-red">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <label class="form-label" for="formName">Option A</label>
                                <input class="form-control" id="option1" name="option1" placeholder="Enter First Option" value="{{ old('option1') }}">
                                @error('option1')
                                <div class="text-red">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <label class="form-label" for="formName">Option B</label>
                                <input class="form-control" id="option2" name="option2" placeholder="Enter Second Option" value="{{ old('option2') }}">
                                @error('option2')
                                <div class="text-red">{{ $message }}</div>
                                @enderror
                            </div> 
                            
                            <div class="col-md-12">
                                <label class="form-label" for="formName">Option C</label>
                                <input class="form-control" id="option3" name="option3" placeholder="Enter Third Option" value="{{ old('option3') }}">
                                @error('option3')
                                <div class="text-red">{{ $message }}</div>
                                @enderror
                            </div>  
                            
                            <div class="col-md-12">
                                <label class="form-label" for="formName">Option D</label>
                                <input class="form-control" id="option44" name="option4" placeholder="Enter Fourth Option" value="{{ old('option4') }}">
                                @error('option4')
                                <div class="text-red">{{ $message }}</div>
                                @enderror
                            </div>                              
                                                        

                            <div class="col-md-12">
                            <label class="form-label" for="formPlan">Select Right Answere</label>
                                <select class="form-select" id="right_option" name="right_option" required>
                                    <option value="" disabled selected>Choose Answere</option>
                                    <option value="a">Option A</option>
                                    <option value="b">Option B</option>
                                    <option value="c">Option C</option>
                                    <option value="d">Option D</option>
                                </select>
                                @error('right_option')
                                <div class="text-red">{{ $message }}</div>
                                @enderror
                            </div>                  
        
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                        <button class="btn btn-primary" type="submit" name="Submit_data" value="add_more">Add More</button>&nbsp;
                        <button class="btn btn-primary" type="submit" name="Submit_data" value="submit">Add and Submit</button>
                        </div>
                    </form>
                </div>

            </section>

            @else
            <section class="row g-3">
                <div class="col-12 col-xl-7">
                <form class="panel needs-validation" method="get" action="{{ 'addquiz' }}">
                <div class="panel-header">
                    <div>
                        <h2 class="h5 mb-1 section-title">
                        <i class="bi bi-ui-checks-grid" aria-hidden="true">
                        </i>
                        <span>
                            Add Quiz
                        </span>
                        </h2>
                        <!-- <p class="text-muted mb-0">
                        Bootstrap-ready fields with custom validation feedback.
                        </p> -->
                    </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="formName">Quiz Name</label>
                            <input class="form-control" id="quiz_name" name="quiz_name" value="{{ old('quiz_name') }}" required>
                            <div class="text-red"></div>
                        </div>

                        <div class="col-md-6">
                        <label class="form-label" for="formPlan">Category</label>
                            <select class="form-select" id="category_id" name="category_id" required>
                            <option value="" disabled selected>Choose Category</option>
                            @if($category_table)
                            @foreach($category_table as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                            @endif
                            </select>
                            <div class="invalid-feedback">Choose a category.</div>
                        </div>                  
    
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                    <button class="btn btn-primary" type="submit">Add Quiz</button>
                    </div>
                </form>
                </div>

            </section>  

            @endif
        </div>
      </main>
      @endsection