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
  