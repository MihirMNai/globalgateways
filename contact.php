<?php include('header.php'); ?>
<!-- Breadcrumb Section Start -->
<div class="breadcrumb-sction contactbg">
      <h1 class="noh1">The H1 Tag</h1>
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="breadcrumb-title">
              <h2>Contact</h2>
            </div>
            <div class="breadcrumb-menu">
              <ul class="breadcrumb-menu-items">
                <li class="bmenu-item bmenu-item-begin">
                  <span
                    ><a href="index.php">Home</a>
                    <i class="fa-solid fa-angle-right"></i
                  ></span>
                </li>
                <li class="bmenu-item bmenu-item-end">
                  <span>Contact</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Contact-info Section Start -->
    <div class="contact-info-sction">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
            <div class="contact-info-box">
              <div class="contact-info-icon">
                <i class="fa-solid fa-address-book"></i>
              </div>
              <div class="contact-info-content">
                <div class="contact-info-title">Contact Us</div>
                <div class="contact-info-subtext">
                  <span>Phone: <a href="tel:9512340038">+91-9512340038</a></span
                  ><br />
                  <span
                    >Email:
                    <a href="mailto:globegateways@gmail.com"
                      >globegateways@gmail.com</a
                    ></span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 lrborder mb-30">
            <div class="contact-info-box">
              <div class="contact-info-icon">
                <i class="fa-solid fa-map-location-dot"></i>
              </div>
              <div class="contact-info-content">
                <div class="contact-info-title">Our Address</div>
                <div class="contact-info-subtext">
                  <p>
                    S-21, Iskon Galaxy Complex,<br />
                    Opp.Avsar Party Plot, Modhera Road,<br />
                    Dediyasan GIDC, V.I.P. Nagar,<br />
                    Mehsana - 384002.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
            <div class="contact-info-box">
              <div class="contact-info-icon">
                <i class="fa-solid fa-clock"></i>
              </div>
              <div class="contact-info-content">
                <div class="contact-info-title">Working Hours</div>
                <div class="contact-info-subtext">
                  <span>Monday To Saturday</span><br />
                  <span class="whtime">9 to 5 PM IST</span><br />
                  <span>Sunday: <b>(Closed)</b></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact-info Section End -->

    <!-- contact section Start -->
    <div class="contact-page-sction">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="contactpage-form">
              <div class="gg-sction-title">
                <div class="gg-sction-subtitle">
                  <h2>Get In Touch</h2>
                </div>
                <div class="gg-sction-maintitle">
                  <h2>
                    Please Fill The Below Form And Our Expert Will Get In Touch
                    With You Shortly
                  </h2>
                </div>
              </div>
              <form id="contact-form">
                <div class="row">
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                      <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Name"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                      <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Email"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                      <input
                        type="tel"
                        id="phone_number"
                        name="phone_number"
                        placeholder="Phone"
                        required
                        min="10"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                      <input
                        type="text"
                        id="subject"
                        name="subject"
                        placeholder="Subject"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                      <textarea
                        rows="3"
                        id="message"
                        name="message"
                        placeholder="Write a Message"
                        required
                      ></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                    <div class="form-group style-btn">
                      <button type="submit">Send Message</button>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                      <p
                        id="form-status"
                        style="color: green; display: none"
                      ></p>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- contact section end -->

    <!-- map Section start -->
    <div class="map-sction">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.2910593223464!2d72.35603637457304!3d23.593892294768303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c42211b15096f%3A0x18fcee3c60302e36!2sHDFC%20Bank!5e0!3m2!1sen!2sin!4v1748347404301!5m2!1sen!2sin"
        allowfullscreen
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>
    <!-- map Section end -->
<?php include('footer.php'); ?>