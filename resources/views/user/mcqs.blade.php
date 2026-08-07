@extends('user.layout')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ session('currenQuiz.quiz_name') }}</h3>
                <p class="text-subtitle text-muted">{{ session('currenQuiz.currentMCq') }} of {{ session('currenQuiz.total_mcq') }}</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html"></a>{{ session('currenQuiz.quiz_category') }}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ session('currenQuiz.quiz_name') }}</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                        <div class="card-header">
                        <h4 class="card-title">Question {{ session('currenQuiz.currentMCq') }} : <br>{{ $mcq_detail->question }}</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('Submitmcqs',$mcq_detail->id) }}" method="post" class="form form-horizontal">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            @error('option')
                                            <div>{{ $message }}</div>
                                            @enderror
                                           <input type="hidden" name="mcq_id" value="{{$mcq_detail->id}}"> 
                                           <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="option" value="a">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        {{ $mcq_detail->a }}
                                                    </label>
                                            </div>

                                            <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="option" value="b">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        {{ $mcq_detail->b }}
                                                    </label>
                                                </div>
                                                
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="option" value="c">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        {{ $mcq_detail->c }}
                                                    </label>
                                                </div>
                                                
                                            <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="option" value="d">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        {{ $mcq_detail->d }}
                                                    </label>
                                                </div>                        
                                                                
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>    
</div>
@endsection
