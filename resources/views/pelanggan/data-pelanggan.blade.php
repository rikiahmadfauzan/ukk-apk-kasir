@extends('admin.layout')
@section('content')
    <div class="wrapper">
        <main role="main" class="main-content py-0 mt-0 pt-0">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row align-items-center my-4">
                            <div class="col">
                                <h2 class="h4 mb-0 page-title">PELANGGAN</h2>
                            </div>
                            <div class="col-auto">
                                {{-- <button type="button" class="btn btn-secondary" id="delete_all"><span
                                        class="fe fe-trash fe-12 mr-2"></span>Delete</button> --}}
                                {{-- <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#eventModal"><span
                                        class="fe fe-plus-circle fe-12 mr-2"></span>Create</button> --}}
                            </div>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (Session::get('pesan'))
                            <div class="alert alert-success">{{ Session::get('pesan') }}</div>
                        @endif
                        <!--  modal -->
                        {{-- <div class="modal fade" id="eventModal" tabindex="-1" role="dialog"
                            aria-labelledby="eventModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="varyModalLabel">TAMBAH PENGGUNA</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body p-4">
                                        <form action="/pengguna/create" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="eventNote" class="col-form-label">Username</label>
                                                <input type="text" class="form-control" id="eventTitle"
                                                    placeholder="Username" name="username">
                                            </div>
                                            <div class="form-group">
                                                <label for="eventNote" class="col-form-label">Email</label>
                                                <input type="email" class="form-control" id="eventTitle"
                                                    placeholder="Email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="eventNote" class="col-form-label">Alamat</label>
                                                <input type="text" class="form-control" id="eventTitle"
                                                    placeholder="Alamat" name="alamat">
                                            </div>
                                            <div class="form-group">
                                                <label for="eventNote" class="col-form-label">Password</label>
                                                <input type="password" class="form-control" id="eventTitle"
                                                    placeholder="Masukan Password" name="password">
                                            </div>
                                            <div class="form-group">
                                                <label for="simple-select2">Level</label>
                                                <select name="level" class="form-control select2" id="simple-select2">
                                                    <optgroup label="Pilih Level">
                                                        <option>
                                                            Admin</option>
                                                        <option>
                                                            Petugas</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-between">
                                        <button type="submit" class="btn mb-2 btn-primary col-12">ADD</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div> <!--  modal --> --}}

                        <!-- table -->
                        <div class="card shadow">
                            <div class="card-body">
                                <table class="table table-borderless" id="example">
                                    <thead>
                                        <tr>
                                            {{-- <th>
                                                <input type="checkbox" name="" id="select_all_id">
                                            </th> --}}
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No Telpon</th>
                                            <th>Created_at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pelanggan as $key => $item)
                                            <tr id="employe_id{{ $item->id }}">
                                                {{-- <td>
                                                    <input type="checkbox" name="id" id="" class="checkbox_id"
                                                        value="">
                                                </td> --}}

                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item->nama_pelanggan }}</td>
                                                <td>{{ $item->alamat }}</td>
                                                <td>{{ $item->no_telpon }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td><button class="btn btn-sm dropdown-toggle more-horizontal"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="" data-toggle="modal"
                                                            data-target="#edit{{ $item->id }}">Edit</a>
                                                        <a class="dropdown-item"
                                                            href="/pengguna/delete/{{ $item->id }}">Remove</a>
                                                    </div>
                                                </td>

                                                <!--  modal -->
                                                <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="varyModalLabel">EDIT PELANGGAN
                                                                </h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body p-4">
                                                                <form action="/pelanggan/update/{{ $item->id }}"
                                                                    method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label for="eventNote" class="col-form-label">Nama Pelanggan</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Nama_pelanggan" name="nama_pelanggan"
                                                                            value="{{ $item->nama_pelanggan }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="eventNote" class="col-form-label">Alamat</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Alamat" name="alamat"
                                                                            value="{{ $item->alamat }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="eventNote" class="col-form-label">No Telpon</label>
                                                                        <input type="number" class="form-control"
                                                                            placeholder="No Telpon" name="no_telpon"
                                                                            value="{{ $item->no_telpon }}">
                                                                    </div>
                                                                    {{-- <div class="form-group">
                                                                        <label for="simple-select2">Level</label>
                                                                        <select name="level"
                                                                            class="form-control select2"
                                                                            id="simple-select2">
                                                                            <optgroup label="Pilih Level">
                                                                                @if ($item->level == 'admin')
                                                                                    <option selected>
                                                                                        Admin</option>
                                                                                    <option>
                                                                                        Petugas</option>
                                                                                @elseif ($item->level == 'petugas')
                                                                                    <option>
                                                                                        Admin</option>
                                                                                    <option selected>
                                                                                        Petugas</option>

                                                                                @endif
                                                                            </optgroup>
                                                                        </select>
                                                                    </div> --}}
                                                            </div>
                                                            <div class="modal-footer d-flex justify-content-between">
                                                                <button type="submit"
                                                                    class="btn mb-2 btn-primary col-12">UPDATE</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div> <!--  modal -->
                                            </tr>
                                        @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div> <!-- .col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
        </main> <!-- main -->
    </div>
@endsection
