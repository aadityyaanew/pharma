// 3D Interactive Parallax & Tilt Effect on Product Cards
// Optimized for mobile responsiveness (disabled on touchscreen/mobile devices to prevent scroll interference)
document.addEventListener('DOMContentLoaded', () => {
    if (window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
        const tiltCards = document.querySelectorAll('[data-3d-tilt]');
        
        tiltCards.forEach(card => {
            let bounds;
            
            function updateBounds() {
                bounds = card.getBoundingClientRect();
            }
            
            card.addEventListener('mouseenter', updateBounds);
            
            card.addEventListener('mousemove', (e) => {
                if (!bounds) updateBounds();
                const mouseX = e.clientX - bounds.left;
                const mouseY = e.clientY - bounds.top;
                
                const xPct = (mouseX / bounds.width) - 0.5;
                const yPct = (mouseY / bounds.height) - 0.5;
                
                const rotateX = (-yPct * 14).toFixed(2);
                const rotateY = (xPct * 14).toFixed(2);
                
                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
            });
        });
    }
});
