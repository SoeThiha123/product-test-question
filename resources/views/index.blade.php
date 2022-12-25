@extends('main')
@section('content')
<div class="row py-3">

    <div class="float-left col-lg-6">
        <h3></h3>
    </div>
    <div class="offset-4 col-lg-2">
        <a href="{{ route('product#create') }}" class="btn btn-secondary px-5">Create</a>
    </div>

</div>
<form action="{{ route('product#index')}}" method="POST">
    <table class="table table-bordered">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Deatil</th>
            <th scope="col" width="300px">Action</th>
        </tr>
        @foreach ($products as $item )

        <tr>
            <td scope="row">{{ $item['id'] }}</td>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['detail'] }}</td>
            <td>
                <a href="{{ route('post#show',$item['id']) }}" class="btn btn-success px-3">Show</a>
                <a href="{{ route('post#editPage',$item['id']) }}" class="btn btn-info px-3">Edit</a>
                <a href="{{ route('post#delete',$item['id']) }}" class="btn btn-danger px-3">Delete</a>
            </td>
        </tr>

        @endforeach
    </table>

</form>

    {{-- @foreach ($products as $product)
    <tr>

    </tr>
    @endforeach

    @endforeach
</table>
{!! $products->links() !!} --}}

@endsection
