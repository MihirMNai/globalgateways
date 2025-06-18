<?php include('header.php'); ?>
<!-- Breadcrumb Section Start -->
<div class="breadcrumb-sction inquirybg">
  <h1 class="noh1">The H1 Tag</h1>
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="breadcrumb-title">
          <h2>Inquiry</h2>
        </div>
        <div class="breadcrumb-menu">
          <ul class="breadcrumb-menu-items">
            <li class="bmenu-item bmenu-item-begin">
              <span><a href="index.php">Home</a>
                <i class="fa-solid fa-angle-right"></i></span>
            </li>
            <li class="bmenu-item bmenu-item-end">
              <span>Inquiry</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Inquiry Section Start -->
<div class="inquiry-sction">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div id="inq-m-title" class="gg-sction-subtitle">
          <h2>Inquiry Form</h2>
        </div>
        <div class="inquiry-img">
          <img src="./images/inquiry.webp" alt="Global Gateways Inquiry" title="Global Gateways Inquiry" width="583" height="583" loading="lazy">
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="inquiry-form">
          <div class="gg-sction-title">
            <div id="inq-w-title" class="gg-sction-subtitle">
              <h2>Inquiry Form</h2>
            </div>
            <div class="gg-sction-maintitle">
              <h2>Let's Get Your Every Questions Solution By Filling Below Form</h2>
            </div>
          </div>
          <form id="contact-form">
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                  <input type="text" id="name" name="name" placeholder="Name" required />
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                  <input type="email" id="email" name="email" placeholder="Email" required />
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                  <input type="tel" id="phone_number" name="phone_number" placeholder="Phone" required min="10" />
                </div>
              </div>
              <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                  <input type="text" id="subject" name="subject" placeholder="Subject" required />
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
                <div class="form-group">
                  <textarea rows="3" id="message" name="message" placeholder="Write a Message" required></textarea>
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
                <div class="form-group style-btn">
                  <button type="submit">Send Message</button>
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
                <div class="form-group">
                  <p id="form-status" style="color: green; display: none"></p>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Inquiry Section End -->
<?php include('footer.php'); ?>