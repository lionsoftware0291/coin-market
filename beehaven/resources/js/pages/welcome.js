/* ===================== HERO SECTION ===================== */
  document.addEventListener('DOMContentLoaded', () => {
    const toggleBtn = document.getElementById('toggle-options');
    const locationInput = document.getElementById('location-input');
    const dropdownCity = document.getElementById('dropdown-city');
    const dropdownLocation = document.getElementById('dropdown-location');
    const dropdownFind = document.getElementById('dropdown-find');

    let isExtraVisible = false;

    // Show on clicking Show More
    toggleBtn.addEventListener('click', () => {
      isExtraVisible = !isExtraVisible;
      dropdownCity.classList.toggle('hidden', !isExtraVisible);
      dropdownLocation.classList.toggle('hidden', !isExtraVisible);
      dropdownFind.classList.toggle('hidden', !isExtraVisible);

      toggleBtn.textContent = isExtraVisible ? '▲ Show Less Options' : '▼ Show More Options';
    });

    // Also show dropdownLocation when location input is clicked
    locationInput.addEventListener('focus', () => {
      dropdownLocation.classList.remove('hidden');
      dropdownCity.classList.remove('hidden');
      dropdownFind.classList.remove('hidden');
      isExtraVisible = true;
      toggleBtn.textContent = '▲ Show Less Options';
    });
  });
/* ===================== HERO SECTION End ===================== */

/* ===================== PROJECT CATEGORY SLIDER ===================== */
  document.addEventListener("DOMContentLoaded", () => {
    const track = document.getElementById("slider-track");
    const leftBtn = document.getElementById("slider-left");
    const rightBtn = document.getElementById("slider-right");

    const cards = Array.from(track.children);
    const cardWidth = cards[0].offsetWidth + 16; // width + gap
    let translateX = 0;

    // Clone cards for infinite effect
    cards.forEach(card => {
      const clone = card.cloneNode(true);
      track.appendChild(clone);
    });

    // Continuous sliding
    const startAutoSlide = () => {
      setInterval(() => {
        translateX += 1;
        if (translateX >= cardWidth * cards.length) {
          translateX = 0;
        }
        track.style.transform = `translateX(-${translateX}px)`;
      }, 15); // lower = smoother
    };

    // Manual buttons
    leftBtn.addEventListener("click", () => {
      translateX -= cardWidth;
      if (translateX < 0) translateX = cardWidth * cards.length;
      track.style.transform = `translateX(-${translateX}px)`;
    });

    rightBtn.addEventListener("click", () => {
      translateX += cardWidth;
      if (translateX >= cardWidth * cards.length) translateX = 0;
      track.style.transform = `translateX(-${translateX}px)`;
    });

    startAutoSlide();
  });
/* ===================== PROJECT CATEGORY SLIDER End ===================== */

 /* ===================== CHECKOUT NEW PROJECTS SECTION START ===================== */
    function filterProjects(type, event) {
      const cards = document.querySelectorAll('.project-card');
      cards.forEach(card => {
        card.style.display = (type === 'all' || card.dataset.type === type) ? 'block' : 'none';
      });

      document.querySelectorAll('.tab-button').forEach(btn => {
        btn.classList.remove('bg-green-500', 'text-white');
        btn.classList.add('border', 'border-gray-300');
      });

      if (event?.target) {
        event.target.classList.add('bg-green-500', 'text-white');
        event.target.classList.remove('border', 'border-gray-300');
      }
    }

    const scroller = document.getElementById('project-scroller');
    const prevBtn = document.getElementById('prevButton');
    const nextBtn = document.getElementById('nextButton');

    prevBtn.addEventListener('click', () => {
      scroller.scrollBy({ left: -300, behavior: 'smooth' });
    });

    nextBtn.addEventListener('click', () => {
      scroller.scrollBy({ left: 300, behavior: 'smooth' });
    });

    // Hide scrollbars cross-browser
    scroller.style.msOverflowStyle = 'none';         // IE/Edge
    scroller.style.scrollbarWidth = 'none';          // Firefox

    const style = document.createElement('style');
    style.textContent = `
      #project-scroller::-webkit-scrollbar {
        display: none;
      }
    `;
    document.head.appendChild(style);
 /* ===================== CHECKOUT NEW PROJECTS SECTION END ===================== */

  // reviewSlider.js Project by Bee Haven International
document.addEventListener('DOMContentLoaded', () => {
  const slider = document.getElementById('slider-bhi');
  const prev = document.getElementById('slider-bhi-prev');
  const next = document.getElementById('slider-bhi-next');

  // Hide scrollbar via JS
  slider.style.scrollbarWidth = 'none'; // Firefox
  slider.style.msOverflowStyle = 'none'; // IE 10+
  
  // For Webkit browsers (Chrome, Safari)
  const style = document.createElement('style');
  style.innerHTML = `
    #slider-bhi::-webkit-scrollbar {
      display: none;
    }
  `;
  document.head.appendChild(style);

  // Optional: Disable touch/trackpad scroll
  // slider.addEventListener('wheel', e => e.preventDefault(), { passive: false });
  // slider.addEventListener('touchmove', e => e.preventDefault(), { passive: false });

  // Scroll with buttons
  prev.addEventListener('click', () => {
    slider.scrollBy({ left: -300, behavior: 'smooth' });
  });

  next.addEventListener('click', () => {
    slider.scrollBy({ left: 300, behavior: 'smooth' });
  });
});



 // reviewSlider.js
document.addEventListener("DOMContentLoaded", () => {
  const slider = document.getElementById("review-slider");
  const slides = slider.querySelectorAll(".review-slide");
  const prevBtn = document.getElementById("prev-review");
  const nextBtn = document.getElementById("next-review");

  let index = 0;

  function updateSliderPosition() {
    slider.style.transform = `translateX(-${index * 100}%)`;
  }

  function showNextSlide() {
    index = (index + 1) % slides.length;
    updateSliderPosition();
  }

  function showPrevSlide() {
    index = (index - 1 + slides.length) % slides.length;
    updateSliderPosition();
  }

  nextBtn.addEventListener("click", showNextSlide);
  prevBtn.addEventListener("click", showPrevSlide);

  // Auto slide every 5 seconds
  setInterval(showNextSlide, 5000);

  updateSliderPosition(); // Initial position
});

// thumbnail 
document.addEventListener("DOMContentLoaded", function () {
  const track = document.getElementById("custom-slider-track");
  const next = document.getElementById("custom-slider-next");
  const prev = document.getElementById("custom-slider-prev");
  const slideWidth = document.querySelector(".custom-slide").offsetWidth + 16; // slide + gap
  let currentPosition = 0;

  next.addEventListener("click", () => {
    const maxScroll = track.scrollWidth - track.clientWidth;
    currentPosition = Math.min(currentPosition + slideWidth, maxScroll);
    track.style.transform = `translateX(-${currentPosition}px)`;
  });

  prev.addEventListener("click", () => {
    currentPosition = Math.max(currentPosition - slideWidth, 0);
    track.style.transform = `translateX(-${currentPosition}px)`;
  });
});
