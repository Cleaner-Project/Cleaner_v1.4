@extends('layouts.app')

@section('content')
    <div class="col-lg-8 col-md-10 mx-auto">
      <a href="{{ route('home')}}">
        <h1>Service you want</h1>
      </a>
        <table class="table table-border">
          <thead>
            <tr>
              <th>#</th>
              <th>Your Service</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Date</th>
              <th>Email</th>
              <th>Address</th>
              <th>Time</th>
              <th>
                Activice
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
              <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $product->category->name }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->phone }}</td>
                <td>{{ $product->date }}</td>
                <td>{{ $product->email }}</td>
                <td>{{ $product->address }}</td>
                <td>{{ $product->time }}</td>
                {{-- <td>{{ $product->user->name }}</td> --}}
                <td>
                  <ul>
                    {{-- @can('update', $product)  --}}
                     <li>
                        <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit </a>
                      </li> 
                 {{-- @endcan  --}}

                {{-- @can('delete', $product) --}}
                      <li>
                        <form id="productDelete{{$product->id}}" method="POST" action="{{ route('products.destroy', $product->id) }}">
                          @csrf
                          @method('DELETE')
                        </form>
                        <a class="btn btn-danger" href="#" onclick="document.getElementById('productDelete{{$product->id}}').submit()">Delete</a>
                      </li>
                    {{-- @endcan --}}
                  </ul>
                </td>
              </tr>
            @endforeach
          </tbody>
      </table>
    </div>
  <hr>
@endsection