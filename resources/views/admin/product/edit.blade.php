@extends('admin.template.main')
<style type="text/css">
    .invalid{
        color: red;
    }
</style>
@section('title', 'Edit')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <strong>Normal</strong> Form
        </div>
        <div class="card-body card-block">
            <form action="{{url('dashboard/product/update')}}/{{$product->id}}" method="POST" >
                
                @csrf
                <div class="form-group">
                    <label for="picture" class=" form-control-label">Picture</label>
                    <input type="text" value="@if(old('picture')) {{old('picture')}} @else {{$product->picture}} @endif" class="form-control @error('name') is-invalid invalid @enderror" id="picture" name="picture" placeholder="Enter Picture" class="form-control">
                    @error('picture')
                        <span class="invalid"><i>{{$message}}</i></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name" class=" form-control-label">Nama</label>
                    <input type="text" value="@if(old('name')) {{ old('name') }} @else {{ $product->name }} @endif" class="form-control @error('name') is-invalid invalid @enderror" id="name" name="name" placeholder="Enter Nama..">
                    @error('name')
                        <span class="invalid"><i>{{$message}}</i></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category_id" id="category">
                        @foreach ($category as $row)
                            <option value="{{ $row->id }}" @if ( $row->id == old('category_id',$product->category_id ))selected @endif> 
                                {{$row->nama}}  
                            </option>
                        @endforeach
                        
                    </select>     
                </div>
                <div class="form-group">
                    <label for="stock" class="form-control-label">Stock</label>
                    <input type="text" value="@if(old('stock')) {{old('stock')}} @else {{$product->stock}} @endif" class="form-control @error('stock') is-instockd invalid @enderror" id="stock" name="stock" placeholder="Enter Stock" class="form-control">
                    @error('stock')
                        <span class="invalid"><i>{{$message}}</i></span>
                    @enderror
                </div>
                <div class="form-group">
                        <label for="harga" class="form-control-label">Harga</label>
                        <input type="text" value="@if(old('harga')) {{old('harga')}} @else {{$product->harga}} @endif" class="form-control @error('harga') is-instockd invalid @enderror" id="harga" name="harga" placeholder="Enter Harga" class="form-control">
                        @error('harga')
                            <span class="invalid"><i>{{$message}}</i></span>
                        @enderror
                    </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" class="form-control @error('keterangan') is-invalid invalid @enderror" id="keterangan" rows="3">@if(old('keterangan')) {{old('keterangan')}} @else {{$product->keterangan}} @endif</textarea>
                    @error('keterangan')
                        <span class="invalid"><i>{{$message}}</i></span>
                    @enderror
                </div>
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