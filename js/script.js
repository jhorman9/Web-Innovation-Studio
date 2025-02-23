document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll("div[id]"); // Selecciona todas las secciones con un ID
    const navLinks = document.querySelectorAll("nav a"); // Selecciona los enlaces del menú

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // Remueve 'active' de todos los enlaces
                    navLinks.forEach((link) => link.classList.remove("active"));

                    // Busca el enlace que coincide con el ID de la sección y agrégale 'active'
                    const activeLink = document.querySelector(`nav a[href="#${entry.target.id}"]`);
                    if (activeLink) {
                        activeLink.classList.add("active");
                    }
                }
            });
        },
        { threshold: 0.5 } // Detecta cuando el 50% de la sección es visible
    );

    sections.forEach((section) => observer.observe(section));
});
