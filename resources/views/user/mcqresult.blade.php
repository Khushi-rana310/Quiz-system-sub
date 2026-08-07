@extends('user.layout')
@section('content')
<div class="main-content container-fluid">
<div class="row" id="basic-table">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Quiz Result</h4>
        {{-- <a href="" class="btn btn-primary">Download Certificate</a> --}}
        @if (($corect_count / session('currenQuiz.total_mcq')) * 100 >= 70)
            <h4 class="text-success">Congratulations! You Passed 🎉</h4>
        @else
            <h4 class="text-danger">Sorry! Better Luck Next Time 😔</h4>
        @endif
        
       
        <h4 class="card-title">Total Correct : {{ $corect_count }} out of {{ session('currenQuiz.total_mcq') }}</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <!-- <p class="card-text"></p> -->
          <!-- Table with outer spacing -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Sr no.</th>
                  <th>Question</th>
                  <th>Result</th>
                </tr>
              </thead>
              <tbody>
                  @php
                  $srno = 1;
                  @endphp
                  @foreach( $record_data as $data)                
                <tr>
                  <td class="text-bold-500">{{ $srno++ }}</td>
                  <td>{{ $data->question }}</td>
                  <td>
                  @if($data->is_corrrect == 1)
                  <span class="badge bg-success">Correct</span>
                  @else
                  <span class="badge bg-danger">Wrong</span>
                  @endif
                  </td>
                </tr>
                 @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>
</div>

<!-- Basic Tables end -->
 @endsection