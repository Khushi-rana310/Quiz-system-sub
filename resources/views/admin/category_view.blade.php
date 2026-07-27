@extends('admin.layout')
@section('content')

      <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Data</p>
                <!-- <h1 class="h3 mb-1">Category Table</h1> -->
                <!-- <p class="text-muted mb-0">Use responsive, searchable tables for operational records.</p> -->
              </div>
            </div>
            
          </div>
              @if(session('category'))
              <div class="alert alert-success" role="alert"><strong>Success :</strong> {{ session('category') }}</div>
              @endif
          <section class="panel">
              <div class="panel-header">
              <div>
                <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>Category Table</span></h2>
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
                    <th>Category Name</th>
                    <th>Created by</th>
                    <th>Admin role</th>
                    <th>Date</th>
                    <th class="text-end">Action</th>
                  </tr>
                </thead>
                <tbody>
                 @php
                 $sr_no = 1;
                 @endphp   
                 @foreach($category_table as $table)   
                <tr>
                    <td class="fw-semibold">{{ $sr_no++ }}</td>
                    <td>{{ $table->name }}</td>
                    <td>{{ $table->creater_name }}</td>
                    <td>{{ $table->creator->role }}</td>
                    <td>{{ $table->created_at }}</td>
                    <td class="text-end">
                      <a href="{{ route('quizlist',[$table->id, $table->name]) }}"><button class="btn btn-success" type="button">Quizes</button></a>
                      <a href="{{ route('deltecat',$table->id) }}"><button class="btn btn-danger" type="button">Delete</button></a> 
                      
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
