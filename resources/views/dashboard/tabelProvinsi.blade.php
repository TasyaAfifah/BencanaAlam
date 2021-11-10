@extends('layouts.dashboard')

@section('container')
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <div><a href="/createProvinsi"><button class="btn btn-primary " type="submit">+ Tambah Provinsi</button></div></a>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Provinsi</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            
                                        
                                         
                                        
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($provinsi as $dataProvinsi)
                                        <tr>
                                            <td>{{ $dataProvinsi -> id }}</td>
                                            <td>{{ $dataProvinsi -> nama_provinsi }}</td>
                                           
       
                                            <td>
                                                <a href = "{{ url('/form-edit-provinsi-') }}{{ $dataProvinsi->id }}">
                                                    <button class="btn btn-warning btn-block" type="submit">Edit</button>
                                                </a>
                                                
                                            </td>
                                          <form action="{{ url('/delete-provinsi-') }} {{ $dataProvinsi->id }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <td><button class="btn btn-danger btn-block" type="submit">Delete</button></td>   
                                            
                                        </tr>
                                        @endforeach
                                         
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection