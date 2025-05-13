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
