@extends('layouts.app')

@section('container')
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>My Services</h2>
          <p>Jika anda ingin bekerja sama dengan saya, saya menyediakan layanan berikut ini.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Konten Olahraga</a></h4>
              <p class="description">Jika anda membutuhkan website untuk kebutuhan club olahraga anda. Anda dapat order jasa website di agency kami.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Website Dokumen</a></h4>
              <p class="description">Jika anda membutuhkan website untuk dokumen atau data diri pegawai anda. Anda dapat order jasa di kami.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Uji speed website</a></h4>
              <p class="description">Anda dapat melakukan pengecekan speed website anda pada kami. Agar website anda dapat berjalan dengan baik.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Hosting</a></h4>
              <p class="description">Kami juga menyediakan jasa hosting untuk website anda. kami akan memberikan harga yang terjangkau kepada anda.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
          <div class="container position-relative">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="Kelly/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Saya sangat puas untuk pelayanan yang diberikan Radith kepada saya, saya akan merekomendasikan pelayanan disini kepada teman-teman saya untuk mencoba jasa disini.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="Kelly/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Saya sangat puas untuk pelayanan yang diberikan Radith kepada saya, saya akan merekomendasikan pelayanan disini kepada teman-teman saya untuk mencoba jasa disini.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="Kelly/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Saya sangat puas untuk pelayanan yang diberikan Radith kepada saya, saya akan merekomendasikan pelayanan disini kepada teman-teman saya untuk mencoba jasa disini.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="Kelly/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Saya sangat puas untuk pelayanan yang diberikan Radith kepada saya, saya akan merekomendasikan pelayanan disini kepada teman-teman saya untuk mencoba jasa disini.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="Kelly/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      Saya sangat puas untuk pelayanan yang diberikan Radith kepada saya, saya akan merekomendasikan pelayanan disini kepada teman-teman saya untuk mencoba jasa disini.
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </section>
    <!-- End Testimonials Section -->
@endsection
