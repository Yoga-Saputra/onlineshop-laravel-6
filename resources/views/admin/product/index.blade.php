@extends('admin.template.main')
<style type="text/css">
    .invalid{
        color: red;
    }
</style>
@section('content')
{{--  @if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
@endif  --}}

<div class="col-md-12">
        @if( Session::has("success"))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-check-circle"></i> {{Session::get('success')}}
        </div>
        @endif
        
    <!-- DATA TABLE -->
    <h3 class="title-5 m-b-35">Data Produk</h3>
    <div class="table-data__tool">
        <div class="table-data__tool-left">
            <div class="rs-select2--light rs-select2--md">
                <select class="js-select2" name="property">
                    <option selected="selected">All Properties</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="rs-select2--light rs-select2--sm">
                <select class="js-select2" name="time">
                    <option selected="selected">Today</option>
                    <option value="">3 Days</option>
                    <option value="">1 Week</option>
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <button class="au-btn-filter">
                <i class="zmdi zmdi-filter-list"></i>filters</button>
        </div>
        <div class="table-data__tool-right">
            <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#exampleModal">
                <i class="zmdi zmdi-plus"></i>add item</button></<i>
            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                <select class="js-select2" name="type">
                    <option selected="selected">Export</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                </select>
                <div class="dropDownSelect2"></div>
            </div>
        </div>
    </div>
    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2">
            <thead>
                <tr class="text-center">
                    <th>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </th>
                    <th>Picture</th>
                    <th>Nama</th>
                    <th>Category</th>
                    <th>Stock</th>
                    <th>Harga</th>
                    <th>Keterangan</th>

                    
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="tr-shadow">
                        <td>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </td>
                        <td class="text-center"> {{ $product->picture }} </td>
                        <td class="text-center">
                            <span class="block-email"> {{ $product->name }} </span>
                        </td>
                        <td class="text-center">
                            <span class="block-email"> {{ $product->category->nama }} </span>
                        </td>
                        <td class="text-center">{{ $product->stock }}</td>
                        <td class="text-center">{{ $product->harga }}</td>
                        <td class="text-center">
                            <span class="status--process ">{{ $product->keterangan }}</span>
                        </td>
                        
                        
                        <td>
                            <div class="table-data-feature">
                                <a href="{{ url('dashboard/product/edit') }}/{{$product->id}}">
                                    <button class="item button-center" data-toggle="tooltip" data-placement="top" title="Edit" >
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>
                                </a>
                                
                                <button class="item" data-toggle="tooltip" onclick="confirmdelete({{$product->id}})" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        {{ $products->links() }}

        <script type="text/javascript">
            function confirmdelete(id){
                var pesan = 'yakin mau dihapus id '+id+'??';
                if(confirm(pesan)){
                    window.location='{{ url("dashboard/product/delete") }}/'+id;
                }else{
                    return false;
                }
            }
        </script>
    


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Masukan Data Dibawah Ini</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('dashboard/product/insert') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="picture" class=" form-control-label">Picture</label>
                            <input required type="text" value="{{ old('picture') }}" class="form-control @error('picture') is-invalid invalid @enderror" id="picture" name="picture" placeholder="Enter Picture" class="form-control">
                            @error('picture')
                                <span class="invalid"><i>{{$message}}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name" class=" form-control-label">Name</label>
                            <input required type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid invalid @enderror" id="name" name="name" placeholder="Enter Nama..">
                            @error('name')
                                <span class="invalid"><i>{{$message}}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="category" class=" form-control-label">Category</label>
                            <select name="category" class="form-control" id="exampleFormControlSelect1">
                                @foreach ($category as $cat)
                                <option  value="{{$cat->id}}">{{$cat->nama}}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <span class="invalid"><i>{{$message}}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="stock" class="form-control-label">Stock</label>
                            <input required type="text" value="{{ old('stock') }}" class="form-control @error('stock') is-instockd invalid @enderror" id="stock" name="stock" placeholder="Enter Stock" class="form-control">
                            @error('stock')
                                <span class="invalid"><i>{{$message}}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="harga" class="form-control-label">Harga</label>
                            <input required type="text" value="{{ old('harga') }}" class="form-control @error('harga') is-instockd invalid @enderror" id="harga" name="harga" placeholder="Enter Harga" class="form-control">
                            @error('harga')
                                <span class="invalid"><i>{{$message}}</i></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea required name="keterangan"  class="form-control @error('keterangan') is-invalid invalid @enderror" id="keterangan" rows="3">{{ old('keterangan') }}</textarea>
                            @error('keterangan')
                                <span class="invalid"><i>{{$message}}</i></span>
                            @enderror
                        </div>
                        
                        <div class="modal-footer">
                                <button name="submit" type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button name="reset" type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
            
@endsection