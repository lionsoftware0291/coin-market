// ===================== TESTIMONIAL CAROUSEL =====================
document.addEventListener('DOMContentLoaded', () => {
    const testimonials = [
        "Nam sollicitudin dignissim nunc, cursus ullamcorper.",
        "Vestibulum sit amet tortor sit amet libero.",
        "Etiam nec felis tellus. Pellentesque ullamcorper aliquet ultricies."
    ];

    let currentIndex = 0;
    const testimonialDiv = document.querySelector(".testimonial");

    document.querySelector(".prev")?.addEventListener("click", () => {
        currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
        testimonialDiv.textContent = `"${testimonials[currentIndex]}"`;
    });

    document.querySelector(".next")?.addEventListener("click", () => {
        currentIndex = (currentIndex + 1) % testimonials.length;
        testimonialDiv.textContent = `"${testimonials[currentIndex]}"`;
    });

    // ===================== CITY CARD INTERACTIONS =====================
    const cityCards = document.querySelectorAll('.city-card');
    cityCards.forEach(card => {
        card.addEventListener('click', () => {
            const cityName = card.querySelector('.city-name').textContent;
            alert(`Showing projects for ${cityName}`);
        });
    });

    document.querySelector('.alien-project')?.addEventListener('click', () => {
        alert('Discover our special Alien Projects!');
    });

    // ===================== PROJECT HOVER EFFECT =====================
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
});

// ===================== SLIDER FUNCTION =====================
function scrollSlider(dir) {
    const slider = document.getElementById('slider');
    slider.scrollBy({ left: dir * 220, behavior: 'smooth' });
}

document.addEventListener('DOMContentLoaded', () => {
    // Handle tab switching
    const tabs = document.querySelectorAll('.tab-btn');
    const contents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            document.querySelector('.tab-btn.active')?.classList.remove('active');
            tab.classList.add('active');

            const target = tab.dataset.tab;
            contents.forEach(content => {
                content.classList.remove('active');
                if (content.id === `tab-${target}`) {
                    content.classList.add('active');
                }
            });
        });
    });

    // Handle slider controls
    document.querySelectorAll('.slider-btn.next').forEach(btn => {
        btn.addEventListener('click', () => {
            const slider = btn.closest('.projects-section').querySelector('.tab-content.active .projects-slider');
            slider?.scrollBy({ left: 320, behavior: 'smooth' });
        });
    });

    document.querySelectorAll('.slider-btn.prev').forEach(btn => {
        btn.addEventListener('click', () => {
            const slider = btn.closest('.projects-section').querySelector('.tab-content.active .projects-slider');
            slider?.scrollBy({ left: -320, behavior: 'smooth' });
        });
    });
});


// ===================== MAP SLIDER INTERACTION =====================
const mapSlider = document.getElementById('map-slider');
let isDown = false;
let startX;
let scrollLeft;

mapSlider.addEventListener('mousedown', (e) => {
    isDown = true;
    startX = e.pageX - mapSlider.offsetLeft;
    scrollLeft = mapSlider.scrollLeft;
});

mapSlider.addEventListener('mouseleave', () => isDown = false);
mapSlider.addEventListener('mouseup', () => isDown = false);
mapSlider.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - mapSlider.offsetLeft;
    const walk = (x - startX) * 2;
    mapSlider.scrollLeft = scrollLeft - walk;
});

mapSlider.addEventListener('touchstart', (e) => {
    startX = e.touches[0].pageX - mapSlider.offsetLeft;
    scrollLeft = mapSlider.scrollLeft;
});

mapSlider.addEventListener('touchmove', (e) => {
    const x = e.touches[0].pageX - mapSlider.offsetLeft;
    const walk = (x - startX) * 2;
    mapSlider.scrollLeft = scrollLeft - walk;
});
