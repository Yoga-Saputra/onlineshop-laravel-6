@extends('admin.template.main')
<style type="text/css">
    .invalid{
        color: red;
    }
</style>
@section('title', 'Edit Category')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <strong>Normal</strong> Form
        </div>
        <div class="card-body card-block">
            <form action="{{url('dashboard/categoty/update')}}/{{$category->id}}" method="POST" >
                
                @csrf
                <div class="form-group">
                    <label for="nama" class=" form-control-label">Nama</label>
                    <input type="text" value="@if(old('nama')) {{old('nama')}} @else {{$category->nama}} @endif" class="form-control @error('name') is-invalid invalid @enderror" id="nama" name="nama" placeholder="Enter Picture" class="form-control">
                    @error('nama')
                        <span class="invalid"><i>{{$message}}</i></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sort" class=" form-control-label">Sort</label>
                    <input type="text" value="@if(old('sort')) {{ old('sort') }} @else {{ $category->sort }} @endif" class="form-control @error('name') is-invalid invalid @enderror" id="sort" name="sort">
                    @error('sort')
                        <span class="invalid"><i>{{$message}}</i></span>
                    @enderror
                <div class="modal-footer">
                    <button name="submit" type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection