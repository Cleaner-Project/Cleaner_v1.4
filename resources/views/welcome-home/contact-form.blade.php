
<section id="contact" class="contact">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>
      <div class="row">
        <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p> មហាវិថី សហពន្ធ័រុស្ស៊ី (១១០), រាជធានី​ភ្នំពេញ</p>
            </div>
            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>rossocheat1@gmail.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+855 966 855 502</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

          <form action="{{route('home.contact_submit')}}" method="post">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control"  placeholder="Your Name" required value="{{old('name')}}">
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email"  placeholder="Your Email" required value="{{old('email')}}">
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject"  placeholder="Subject" value="{{old('subject')}}">
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required >{{old('message')}}</textarea>
            </div>
            <div class="my-3">
             <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div> 
            </div>
            <div class="text"><button type="submit">Send Message</button></div>
          </form>

        </div>

      </div>

    </div>
  </section>