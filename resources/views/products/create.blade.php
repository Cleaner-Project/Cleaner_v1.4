<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Booking </title>
    <link rel="stylesheet" href="{{asset('css/styleBooking.css')}}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Booking Cleaner</div>
    <div class="content">
      <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label>Service</label>
          <select class="form-control" name="category_id" required>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Name" name="name" id="name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Email" name="email" id="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text"  placeholder="Phone Number" name="phone" id="phone" required>
          </div>
          <div class="input-box">
            <span class="details">Date</span>
            <input type="date" placeholder="Date" name="date" id="date" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter your Address" name="address" value="{{old('name')}}" required>
          </div>
          <div class="input-box">
            <span class="details">Time</span>
            <input type="time" name="time" placeholder="Enter your time" required>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" value="Book Now">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
