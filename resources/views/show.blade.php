@extends('main')
@section('content')
<div class="row py-3">

        <div class="float-left col-lg-6">
            <h3>Show Product</h3>
        </div>
        <div class="offset-4 col-lg-2">
            <a href="{{ route('product#index')}}" class="btn btn-secondary px-5">Back</a>
        </div>

</div>
<table class="table table-bordered">
    <tr>
        <th>Name :</th>
        <td>{{ $product['name'] }}</td>
    </tr>
    <tr>
        <th>Detail :</th>
        <td>{{ $product['detail'] }}</td>
    </tr>
</table>

@endsection
