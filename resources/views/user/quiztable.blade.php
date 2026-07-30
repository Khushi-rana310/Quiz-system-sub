 @extends('user/layout')
 @section('content')

            
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
@endsection
