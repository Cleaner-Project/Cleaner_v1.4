@extends('layouts.app')

@section('content')
  <div class="col-lg-8 col-md-10 mx-auto">
    <p>Edit Product</p>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="category_id" required>
          <option>Please select one</option>
          @foreach($categories as $category)
            <option value="{{ $category->id }}" @if($product->category_id === $category->id) selected @endif>{{ $category->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" value="{{ $product->name }}" class="form-control" placeholder="Name" name="name" id="name" required>
      </div>

      <div class="form-group">
        <label for="unit_price">Phone number</label>
        <input type="text" value="{{ $product->phone }}" class="form-control" placeholder="phone" name="phone" id="phone" required >
      </div>

      <div class="form-group">
        <label for="qty_in_stock">Email</label>
        <input type="number" value="{{ $product->email }}" class="form-control" placeholder="email" name="email" id="email" required>
      </div>

      <div class="form-group">
        <label for="qty_in_stock">Date</label>
        <input type="number" value="{{ $product->date }}" class="form-control" placeholder="date" name="date" id="date" required>
      </div>

      <div class="form-group">
        <label for="qty_in_stock">Address</label>
        <input type="number" value="{{ $product->address }}" class="form-control" placeholder="address" name="address" id="address" required>
      </div>

      <div class="form-group">
        <label for="qty_in_stock">Time</label>
        <input type="number" value="{{ $product->time }}" class="form-control" placeholder="time" name="time" id="time" required>
      </div>

    

      <button type="submit" class="btn btn-primary">Send</button>
    </form>
  </div>
@endsection