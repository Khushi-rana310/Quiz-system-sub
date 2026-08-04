@extends('admin.layout')
@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
            <section class="panel mt-3">
                <div class="panel-header">
                <div>
                    <h2 class="h5 mb-1 section-title"><i class="bi bi-people" aria-hidden="true"></i><span>Users Details</span></h2>
                    <!-- <p class="text-muted mb-0">Latest account activity across the workspace.</p> -->
                </div>
                <!-- <a class="btn btn-outline-secondary btn-sm" href="users.html">Manage Users</a> -->
                </div>
                <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead><tr>
                        <th scope="col">User</th>
                        <!-- <th scope="col">Role</th>
                        <th scope="col">Team</th> -->
                        <th scope="col">Status</th>
                        <th scope="col">Joined</th>
                        <!-- <th scope="col" class="text-end">Action</th> -->
                    </tr>
                   </thead>
                    <tbody>
                        @foreach($all_users as $users)
                    <tr>
                        <td>
                        <div class="d-flex align-items-center gap-2">
                            <img class="avatar-img avatar-sm" src="{{ asset('admin/images/avatar') }}" alt="{{ $users->name }}">
                            <div>
                            <p class="fw-semibold mb-0">{{ $users->name }}</p>
                            <p class="text-muted small mb-0">{{ $users->email }}</p>
                            </div>
                        </div>
                        </td>
                        <!-- <td>Admin</td>
                        <td>Operations</td> -->
                        <td><span class="badge text-bg-success">Active</span></td>
                        <td>{{ $users->created_at }}</td>
                        <!-- <td class="text-end"><a class="btn btn-light btn-sm" href="user-details.html">View</a></td> -->
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 mt-3">
                {{ $all_users->links() }}
                </div>                
            </section>
        </div>
    </main>            
@endsection()
