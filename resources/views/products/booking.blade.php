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
      <form action="{{ route('Booking.store') }}" method="POST">
        @csrf
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required value="{{old('name')}}">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" required value="{{old('name')}}">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your phome" requiredvalue="{{old('name')}}">
          </div>
          <div class="input-box">
            <span class="details">Date</span>
            <input type="date" placeholder="Enter your date" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter your Address" value="{{old('name')}}">
          </div>
          <div class="input-box">
            <span class="details">Time</span>
            <input type="time" placeholder="Enter your time">
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
