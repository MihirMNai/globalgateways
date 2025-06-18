window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".main-navbar");

  if (window.scrollY > 200) {
    if (!navbar.classList.contains("sticky-active")) {
      navbar.classList.add("sticky-active");
    }
  } else {
    navbar.classList.remove("sticky-active");
  }
});

// Get In Touch Form Submission Code
// Initialize EmailJS
document.addEventListener("DOMContentLoaded", function () {
  emailjs.init("M9ItkJwWhKMtwkpeH"); // Replace with your EmailJS public key

  const form = document.getElementById("contact-form");
  const status = document.getElementById("form-status");

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    // Gather form data
    const formData = {
      name: document.getElementById("name").value,
      email: document.getElementById("email").value,
      phone_number: document.getElementById("phone_number").value,
      subject: document.getElementById("subject").value,
      message: document.getElementById("message").value,
    };

    // Send email via EmailJS
    emailjs.send("service_byedadc", "template_urj4ubh", formData).then(
      function () {
        status.style.display = "block";
        status.textContent = "Message sent successfully!";
        status.style.color = "green";
        form.reset();
      },
      function (error) {
        status.style.display = "block";
        status.textContent = "Failed to send message.";
        status.style.color = "red";
        console.error("EmailJS error:", error);
      }
    );
  });
});

// Swiper Slider
document.addEventListener("DOMContentLoaded", function () {
  new Swiper(".testimonial-swiper", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: {
      delay: 4000,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});

// Back To Top Button
const backToTop = document.querySelector(".back-to-top");

window.addEventListener("scroll", () => {
  if (window.scrollY > 300) {
    backToTop.classList.remove("hidden");
  } else {
    backToTop.classList.add("hidden");
  }
});

// JavaScript for Toggle Functionality
  const toggleBtn = document.getElementById('mobileToggle');
  const sideMenu = document.getElementById('sideMenu');
  const closeBtn = document.getElementById('closeMenu');
  const menuOverlay = document.getElementById('menuOverlay');

  toggleBtn.addEventListener('click', () => {
    sideMenu.classList.add('active');
    menuOverlay.classList.add('active');
    toggleBtn.classList.add('hide'); // 👈 hide hamburger
  });

  const closeMenu = () => {
    sideMenu.classList.remove('active');
    menuOverlay.classList.remove('active');
    toggleBtn.classList.remove('hide'); // 👈 show hamburger
  };

  closeBtn.addEventListener('click', closeMenu);
  menuOverlay.addEventListener('click', closeMenu);

// Toggle Submenu on Click(Mobile Menu)
  document.addEventListener("DOMContentLoaded", function () {
    const toggles = document.querySelectorAll(".submenu-toggle");

    toggles.forEach(toggle => {
      toggle.addEventListener("click", function (e) {
        e.preventDefault(); // Prevent link jump
        const parentLi = this.parentElement;
        parentLi.classList.toggle("active");
      });
    });
  });
