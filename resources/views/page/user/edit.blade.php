@extends('page.layout')
@section('title', 'Edit User')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <h1 class="mb-4">Edit User</h1>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama User</label>
                            <input type="text" value="{{ $user->name }}" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter menu name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="email" value="{{ $user->email }}" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Gambar</label>
                            <input type="file" name="gambar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Buat password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <select name="status" class="form-control">
                                <option value="admin" {{ $user->roles->pluck('name')[0] == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="kasir" {{ $user->roles->pluck('name')[0] == 'kasir' ? 'selected' : '' }}>Kasir</option>
                                <option value="manajer" {{ $user->roles->pluck('name')[0] == 'manajer' ? 'selected' : '' }}>Manajer</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection