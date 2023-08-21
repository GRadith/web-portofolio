@extends('layouts.app')

@section('container')
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Pada halaman ini saya akan menjelaskan lebih detail tentang contact person saya, serta anda dapat mengirim pesan email kepada saya jika anda membutuhkannya.</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d831.5850688503087!2d112.71622518549513!3d-7.49750753415068!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e7f60af910d7%3A0x62301d0ba4273c96!2sBumi%20Candi%20Asri!5e0!3m2!1sid!2sid!4v1692002149381!5m2!1sid!2sid"></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Bumi Candi Asri, Candi, Sidoarjo, Jawa Timur, Indonesia</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>gabriel06@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>089617309258</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="https://formspree.io/f/mjvqyzew" method="POST">
            <div class="form-group mt-3">
            <h5>Email<span class="req">*</span></h5>
              <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group mt-3">
            <h5>Name<span class="req">*</span></h5>
              <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
            </div>
            <div class="form-group mt-3">
            <h5>Subject<span class="req">*</span></h5>
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <label class="msg">
              <h5>Message<span class="req">*</span></h5>
              <textarea name="message" placeholder="  Hi!" required></textarea>
            </label>
            <!-- your other form fields go here -->
            <div class="btn"> 
              <button type="submit">Send</button>
            </div>
          </form>
          </div>

        </div>

      </div>
    </section>
@endsection