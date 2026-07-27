@extends('admin.layout')
@section('content')

      <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Category : {{ $category_name }}</p>
                <!-- <h1 class="h3 mb-1">Category Table</h1> -->
                <!-- <p class="text-muted mb-0">Use responsive, searchable tables for operational records.</p> -->
              </div>
            </div>
            <div class="heading-actions"><a class="btn btn-outline-secondary btn-sm" href="{{'/categoryshow'}}"><i class="bi bi-arrow-left" aria-hidden="true"></i>Back</a></div>
          </div>
           
            <div></div>
         
          <section class="panel">
              <div class="panel-header">
              <div>

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
                    <th>Quiz Name</th>
                    <th>No. of Question</th>
                    <th>Date</th>
                    <th>Action</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                 @php
                 $sr_no = 1;
                 @endphp   
                 @foreach($all_quizes as $table)   
                <tr>
                    <td class="fw-semibold">{{ $sr_no++ }}</td>
                    <td>{{ $table->name }}</td>
                    <td>{{ $table->mcqs_count }}</td>
                    <td>{{ $table->created_at }}</td>
                    <td>
                      <a href="{{ route('showquestion',[$table->id,$table->name]) }}"><button class="btn btn-success" type="button">Questions</button></a>
                      <a href="#"><button class="btn btn-danger" type="button">Delete</button></a> 
                    </td>
                    
                </tr>
                @endforeach
                </tbody>
                
              </table>
            </div>
          </section>
        </div>
      </main>
@endsection
