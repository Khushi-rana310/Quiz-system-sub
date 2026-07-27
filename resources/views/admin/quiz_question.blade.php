@extends('admin.layout')
@section('content')

      <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Category : {{ $category_name }}</p>
                <h1 class="h3 mb-1">Quiz: {{ $quiz }}</h1>
                <!-- <p class="text-muted mb-0">Use responsive, searchable tables for operational records.</p> -->
              </div>
            </div>
            <div class="heading-actions"><a class="btn btn-outline-secondary btn-sm" href="{{'/addquiz'}}"><i class="bi bi-arrow-left" aria-hidden="true"></i>Back to Quiz</a></div>
          </div>
           
            <div></div>
         
          <section class="panel">
              <div class="panel-header">
              <div>
                 <!-- @if($quiz)
                <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>{{ $quiz }}</span></h2>
                 @endif -->
                <!-- <p class="text-muted mb-0">Searchable responsive table for orders and customer data.</p> -->
              </div>
              <input class="form-control form-control-sm table-search" type="search" placeholder="Search orders" data-table-search="ordersTable" aria-label="Search orders">
            </div>
            <div class="table-responsive">
              <table class="table align-middle mb-0" id="ordersTable"
                data-searchable-table>
                <thead>
                  <tr>
                    <th>Sr no</th>
                    <th>Question</th>
                    <th>Option A</th>
                    <th>Option B</th>
                    <th>Option C</th>
                    <th>Option D</th>
                    <th>Answere</th>
                    <th>Date</th>
                    
                  </tr>
                </thead>
                <tbody>
                 @php
                 $sr_no = 1;
                 @endphp   
                 @foreach($questions as $table)   
                <tr>
                    <td class="fw-semibold">{{ $sr_no++ }}</td>
                    <td>{{ $table->question }}</td>
                    <td>{{ $table->a }}</td>
                    <td>{{ $table->b }}</td>
                    <td>{{ $table->c }}</td>
                    <td>{{ $table->d }}</td>
                    <td>{{ $table->correct_ans }}</td>
                    <td>{{ $table->created_at }}</td>
                </tr>
                @endforeach
                </tbody>
                
              </table>
            </div>
          </section>
        </div>
      </main>
@endsection
