@extends('user.layout')
@section('content')
<div class="main-content container-fluid">
<div class="row" id="basic-table">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Quiz Attempt History</h4>
    
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
                  <th>Quiz Name</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                  @php
                  $srno = 1;
                  @endphp
           
                  @foreach( $record_data as $data)                
                  <tr>
                  <td class="text-bold-500">{{ $srno++ }}</td>
                  <td>{{ $data->name }}</td>
                  <td>
                  @if($data->status == 1)
                  <span class="badge bg-danger">Not Completed</span>
                  @elseif($data->status == 2)
                  <span class="badge bg-success">Completed</span>
                  @endif
                  </td>
                </tr>
                 @endforeach
                
              </tbody>
            </table>
            <div class="">
                {{ $record_data->links() }}
            </div>
          
          </div>
          </div>
          </div>
          </div>
           
        </div>
        
      </div>
    </div>
  </div>
 </div>
</div>

<!-- Basic Tables end -->
 @endsection