document.addEventListener('DOMContentLoaded', () => {
  // ===================== TESTIMONIAL CAROUSEL =====================
  const testimonials = [
    "Nam sollicitudin dignissim nunc, cursus ullamcorper.",
    "Vestibulum sit amet tortor sit amet libero.",
    "Etiam nec felis tellus. Pellentesque ullamcorper aliquet ultricies."
  ];
  let testimonialIndex = 0;
  const testimonialDiv = document.querySelector(".testimonial");

  document.querySelector(".prev")?.addEventListener("click", () => {
    testimonialIndex = (testimonialIndex - 1 + testimonials.length) % testimonials.length;
    testimonialDiv.textContent = `"${testimonials[testimonialIndex]}"`;
  });

  document.querySelector(".next")?.addEventListener("click", () => {
    testimonialIndex = (testimonialIndex + 1) % testimonials.length;
    testimonialDiv.textContent = `"${testimonials[testimonialIndex]}"`;
  });

  // ===================== TABS & SLIDERS =====================
  const tabs = document.querySelectorAll('.tab-btn');
  const contents = document.querySelectorAll('.tab-content');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      document.querySelector('.tab-btn.active')?.classList.remove('active');
      tab.classList.add('active');
      const target = tab.dataset.tab;

      contents.forEach(content => {
        content.classList.toggle('active', content.id === `tab-${target}`);
      });
    });
  });

  document.querySelectorAll('.slider-btn.next').forEach(btn => {
    btn.addEventListener('click', () => {
      const slider = btn.closest('.projects-section')?.querySelector('.tab-content.active .projects-slider');
      slider?.scrollBy({ left: 320, behavior: 'smooth' });
    });
  });

  document.querySelectorAll('.slider-btn.prev').forEach(btn => {
    btn.addEventListener('click', () => {
      const slider = btn.closest('.projects-section')?.querySelector('.tab-content.active .projects-slider');
      slider?.scrollBy({ left: -320, behavior: 'smooth' });
    });
  });

  // ===================== PROJECT CARD HOVER EFFECT =====================
  document.querySelectorAll('.project-card').forEach(card => {
    card.addEventListener('mouseenter', () => {
      card.style.transform = 'translateY(-5px)';
      card.style.boxShadow = '0 10px 20px rgba(0, 0, 0, 0.1)';
    });
    card.addEventListener('mouseleave', () => {
      card.style.transform = '';
      card.style.boxShadow = '';
    });
  });

  // ===================== CITY CARD CLICK =====================
  document.querySelectorAll('.city-card').forEach(card => {
    card.addEventListener('click', () => {
      const cityName = card.querySelector('.city-name')?.textContent || 'City';
      alert(`Showing projects for ${cityName}`);
    });
  });

  document.querySelector('.alien-project')?.addEventListener('click', () => {
    alert('Discover our special Alien Projects!');
  });

  // ===================== FAQ TOGGLE =====================
  document.querySelectorAll('.faq-item').forEach(item => {
    item.addEventListener('click', () => {
      alert("Answer will go here");
    });
  });

  // ===================== CLIENT REVIEW SLIDER =====================
  const slidesWrapper = document.getElementById('slides-wrapper');
  const slides = document.querySelectorAll('.slide');
  const dots = document.querySelectorAll('.dot');
  let reviewIndex = 0;

  function updateSlider() {
    slidesWrapper.style.transform = `translateX(-${reviewIndex * 100}%)`;
    dots.forEach((dot, i) => dot.classList.toggle('active', i === reviewIndex));
  }

  window.nextSlide = function () {
    reviewIndex = (reviewIndex + 1) % slides.length;
    updateSlider();
  };

  window.prevSlide = function () {
    reviewIndex = (reviewIndex - 1 + slides.length) % slides.length;
    updateSlider();
  };
});

// ===================== BEE HAVEN PROJECT SLIDER =====================
window.scrollSlider = function (dir) {
  const slider = document.getElementById('slider');
  if (slider) {
    slider.scrollBy({ left: dir * 220, behavior: 'smooth' });
  }
};

// ===================== EXPLORE STUNNING HOUSES YOUTUBE SLIDER =====================
const houseSlider = document.getElementById('slider-track');
const houseSlidesCount = houseSlider?.children?.length || 0;
const houseSlidesToShow = 3;
let houseIndex = 0;

window.moveSlide = function (direction) {
  const maxIndex = Math.ceil(houseSlidesCount / houseSlidesToShow) - 1;
  houseIndex = Math.max(0, Math.min(houseIndex + direction, maxIndex));
  const shift = houseIndex * -100;
  houseSlider.style.transform = `translateX(${shift}%)`;
};

// ===================== MAP SLIDER INTERACTION =====================
const mapSlider = document.getElementById('map-slider');
if (mapSlider) {
  let isDown = false;
  let startX, scrollLeft;

  mapSlider.addEventListener('mousedown', e => {
    isDown = true;
    startX = e.pageX - mapSlider.offsetLeft;
    scrollLeft = mapSlider.scrollLeft;
  });

  mapSlider.addEventListener('mouseleave', () => isDown = false);
  mapSlider.addEventListener('mouseup', () => isDown = false);

  mapSlider.addEventListener('mousemove', e => {
    if (!isDown) return;
    const x = e.pageX - mapSlider.offsetLeft;
    const walk = (x - startX) * 2;
    mapSlider.scrollLeft = scrollLeft - walk;
  });

  mapSlider.addEventListener('touchstart', e => {
    startX = e.touches[0].pageX - mapSlider.offsetLeft;
    scrollLeft = mapSlider.scrollLeft;
  });

  mapSlider.addEventListener('touchmove', e => {
    const x = e.touches[0].pageX - mapSlider.offsetLeft;
    const walk = (x - startX) * 2;
    mapSlider.scrollLeft = scrollLeft - walk;
  });
}
function scrollSlider(direction) {
    const slider = document.getElementById('slider');
    const cardWidth = slider.querySelector('.slider-card').offsetWidth + 20; // 20px gap
    slider.scrollBy({
        left: direction * cardWidth,
        behavior: 'smooth'
    });
}

document.addEventListener("DOMContentLoaded", function() {
  const prevButton = document.querySelector('.slider-btn.prev');
  const nextButton = document.querySelector('.slider-btn.next');
  const projectsSlider = document.querySelector('.projects-slider');

  let scrollAmount = 0;

  nextButton.addEventListener('click', () => {
    scrollAmount += 300; // Scroll width of each card
    projectsSlider.scrollTo({
      left: scrollAmount,
      behavior: 'smooth'
    });
  });

  prevButton.addEventListener('click', () => {
    scrollAmount -= 300; // Scroll width of each card
    if (scrollAmount < 0) scrollAmount = 0;
    projectsSlider.scrollTo({
      left: scrollAmount,
      behavior: 'smooth'
    });
  });
});
 
 
// Function to scroll the project slider in the specified section
function scrollSlider(sectionId, direction) {
  // Get the section by ID
  const section = document.getElementById(sectionId);
  if (!section) {
    console.error("Section not found:", sectionId);
    return; // Exit if the section is not found
  }

  // Find the slider track inside the section
  const slider = section.querySelector(".project-slider-track");
  if (!slider) {
    console.error("Slider not found inside the section");
    return; // Exit if the slider is not found
  }

  const scrollAmount = 300; // Amount to scroll each time (adjustable)

  // Scroll the slider based on the direction (positive for right, negative for left)
  slider.scrollBy({
    left: direction * scrollAmount,
    behavior: 'smooth' // Smooth scrolling effect
  });
}

 
