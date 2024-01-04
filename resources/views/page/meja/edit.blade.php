@extends('page.layout')
@section('title', 'Edit Meja')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <h1 class="mb-4">Edit Meja</h1>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('meja.update', $meja->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nomor Meja</label>
                            <input type="text" name="nomor_meja" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Edit nomor meja">
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection