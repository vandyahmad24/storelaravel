@extends('layouts.admin')
@section('title')
    Admin Dashboard Users Page
@endsection

@section('content')
   <!-- content section -->
        <div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <h2 class="dashboard-title">Admin User Dashboard</h2>
            <p class="dashboard-subtitle">List User Pada Toko!</p>
          </div>
        </div>
        <div class="dashboard-content">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <a href="{{route('user.create')}}" class="btn btn-primary mb-3" >
                      + Tambah User Baru
                    </a>
                    <div class="table-responsive">
                        <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
          </div>

@endsection

@push('addon-script')
<script type="text/javascript">

     var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false},
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'roles', name: 'roles' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '15%'
                },
            ]
        });
</script>

@endpush