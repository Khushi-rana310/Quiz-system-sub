 @extends('user/layout')
 @section('content')

<div>  
    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <form action="{{ route('UserQuizlist', ['id' => $id, 'cat_name' => $cat_name]) }}" method="GET">
                                        <label for="roundText ">Search Keyword</label>
                                        <div class="justify-content-between d-flex">
                                            <input type="text" name="search" id="roundText" class="form-control round"
                                            placeholder="Search here">
                                        <button type="submit" class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 10a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                            <path d="M21 21l-6 -6" />
                                        </svg>
                                    </button>
                                    </div>
                                    </form>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>          
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ $cat_name }}</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Quiz</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $cat_name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
          
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Sr.no</th>
                            <th>Quiz</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php $srno = 1; @endphp
                        @foreach($get_quizes as $quiz)
                        <tr>
                            <td>{{ $srno++ }}</td>
                            <td>{{ $quiz->name }}</td>
                            <td>
                                <a href="{{ route('mcqs',[$quiz->id,$quiz->name,$cat_name]) }}" class="btn btn-primary">Start Quiz</a>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
</div>
@endsection
