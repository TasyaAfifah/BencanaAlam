@extends('layouts.dashboard')

@section('container')
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <div><a href="/createRole"><button class="btn btn-primary " type="submit">+ Tambah Role</button></div></a>

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
                                            <th>Role</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                         
                                        
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($role as $dataRole)
                                        <tr>
                                            <td>{{ $dataRole -> id }}</td>
                                            <td>{{ $dataRole -> Role }}</td>
                                           
       
                                           
                                            <td>
                                                <a href = "{{ url('/form-edit-role-') }}{{ $dataRole->id }}">
                                                    <button class="btn btn-warning btn-block" type="submit">Edit</button>
                                                </a>
                                                
                                            </td>
                                            <form action="{{ url('/delete-role-') }} {{ $dataRole->id }}" method="POST">
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