import './bootstrap';

document.documentElement.classList.add('js');

const techSection = document.getElementById('technologie-motsler');
if (techSection) {
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (reduceMotion) {
        techSection.classList.add('is-revealed');
    } else {
        const io = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-revealed');
                        io.unobserve(entry.target);
                    }
                });
            },
            { rootMargin: '0px 0px -8% 0px', threshold: 0.05 }
        );
        io.observe(techSection);
    }
}
