@extends('layouts.app-master', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
<div class="bg-gray">
    @include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
</div>


    <div class="container">
        <div class="card">
            <div class="card-header">Manage Users</div>
            <div class="card-body">
                <table id="members-table" class="display">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Pincode</th>
                            <th>Mobile</th>
                            <th>Gender</th>
                            <th>Course</th>
                            <th>Email Sent At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log("Initializing DataTables...");
            $('#members-table').DataTable({
                serverSide: true,
                ajax: "{{ route('members.index') }}",
                columns: [
                    { data:'id' , name: 'id'},
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'address', name: 'address' },
                    { data: 'pincode', name: 'pincode' },
                    { data: 'mobile', name: 'mobile' },
                    { data: 'gender', name: 'gender' },
                    { data: 'course', name: 'course' },
                    { data: 'email_sent_at', name: 'email_sent_at' },
                    {
                        data: 'id',  
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, full, meta) {
                            return `
                                <a href="{{ url('edit') }}/${data}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('delete') }}/${data}" class="btn btn-danger">Delete</a>
                            `;
                        }
                    }
                ]
            })
            .done(function(data) {
                console.log("Data loaded successfully:", data);
            })
            .fail(function(xhr, status, error) {
                console.error("Error loading data:", error);
            });
        });
    </script>
     @include('layouts.footers.auth.footer')
@endpush
