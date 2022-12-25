@extends('main')
@section('content')
<div class="row py-3">

        <div class="float-left col-lg-6">
            <h3>Edit Product</h3>
        </div>
        <div class="offset-4 col-lg-2">
            <a href="{{ route('product#index')}}" class="btn btn-secondary px-5">Back</a>
        </div>

</div>
<form action="{{ route('post#update',$product['id']) }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <h3>Name :</h3>
                <input type="text" name="name" class="form-control" value="{{ $product['name'] }}" required>
            </div>
        </div>
        <div class="col-lg-12 py-3">
            <div class="form-group">
                <h3>Detail :</h3>
                <textarea name="detail" id="" class="form-control" cols="30" rows="5" required>{{ $product['detail'] }}</textarea>
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>

@endsection
