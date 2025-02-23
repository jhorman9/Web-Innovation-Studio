<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Web Innovator Studio</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Marketing, Publicidad, Agencia de desarrollo, Creación de páginas web" name="keywords">
        <meta content="Creación de páginas web, desarrollo de páginas web y aplicaciones. Agencia de marketing digital" name="description">
        <?php include('includes/meta.php') ?>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Cargando...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar bg-light px-5 py-2 d-none d-lg-block">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="#" class="text-muted small me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Panamá, Ciudad de Panamá</a>
                        <a href="tel:+50761320449" class="text-muted small me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+507 6132-0449</a>
                        <a href="mailto:sales@webinnovatorstudio.com" class="text-muted small me-0"><i class="fas fa-envelope text-primary me-2"></i>sales@webinnovatorstudio.com</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            
            <?php include('includes/nav.php') ?> 

            <!-- Carousel Start -->
            <div class="header-carousel owl-carousel" id="home">
                <div class="header-carousel-item">
                    <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row gy-0 gx-5">
                                <div class="col-lg-0 col-xl-5"></div>
                                <div class="col-xl-7 animated fadeInLeft">
                                    <div class="text-sm-center text-md-end">
                                        <h4 class="text-primary text-uppercase fw-bold mb-4">Bienvenidos a Web Innovation Studio</h4>
                                        <h1 class="display-4 text-uppercase text-white mb-4">Diseño y Desarrollo Web a la Medida</h1>
                                        <p class="mb-5 fs-5">Creamos sitios web corporativos, tiendas en línea (eCommerce) y sistemas de reservas personalizados para impulsar tu negocio.
                                        </p>
                                        <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                            <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="https://wa.link/da799r"><i class="bi bi-hand-index-fill me-2"></i> Saber más </a>
                                            <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#contact"><i class="bi bi-envelope-fill me-2"></i> Contactar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-carousel-item">
                    <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row g-5">
                                <div class="col-12 animated fadeInUp">
                                    <div class="text-center">
                                        <h4 class="text-primary text-uppercase fw-bold mb-4">Bienvenidos a Web Innovation Studio</h4>
                                        <h1 class="display-4 text-uppercase text-white mb-4">Estrategias de Marketing Digital para Impulsar tu Negocio</h1>
                                        <p class="mb-5 fs-5">Impulsa tu marca con estrategias de redes sociales, publicidad online, SEO y más...
                                        </p>
                                        <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                                            <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="https://wa.link/da799r"><i class="bi bi-hand-index-fill me-2"></i> Saber más</a>
                                            <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#contact"><i class="bi bi-envelope-fill me-2"></i> Contactar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->


        <!-- Abvout Start -->
        <div class="container-fluid about py-5" id="about">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <h4 class="text-primary">Sobre nosotros</h4>
                            <h1 class="display-5 mb-4">Conoce nuestra empresa y aprovecha cada oportunidad de crecimiento</h1>
                            <p class="mb-4">Somos una agencia de desarrollo y marketing digital creada en Panamá, especializada en la creación de eCommerce, páginas web corporativas y sistemas de reservas, adaptados a las necesidades de cada cliente. Combinamos innovación y tecnología para ofrecer soluciones digitales estratégicas que potencian negocios y mejoran su presencia online.
                            </p>
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Saber más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-primary rounded position-relative overflow-hidden px-2 py-3">
                            <img src="img/about-2.png" class="img-fluid rounded w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Services Start -->
        <div class="container-fluid service pb-5" id="services">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Nuestros servicios</h4>
                    <h1 class="display-5 mb-4">Servicios de Calidad a tu Medida</h1>
                    <p class="mb-0">Ofrecemos soluciones personalizadas en desarrollo web y marketing digital, diseñadas para optimizar tu presencia online y acelerar el crecimiento de tu negocio de manera efectiva.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/Desarrollo Web Personalizado.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4"> Desarrollo Web Personalizado</a>
                                <p class="mb-4 custom-description">Creamos sitios web personalizados que se adaptan a las necesidades de tu negocio, brindando una experiencia única y funcionalidad avanzada.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/CMS Facil de Usar.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">CMS Fácil de Usar</a>
                                <p class="mb-4 custom-description">Ofrecemos soluciones web a medida con un sistema de gestión de contenido intuitivo, para que puedas administrar tu sitio de manera sencilla y sin complicaciones.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/Ecommerce a Medida.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Ecommerce a Medida</a>
                                <p class="mb-4 custom-description">Desarrollamos tiendas online completas y seguras, optimizadas para ofrecer una experiencia de compra excepcional y aumentar tus ventas.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/Marketing Digital.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Marketing Digital</a>
                                <p class="mb-4 custom-description">Creamos estrategias de marketing digital personalizadas para atraer más clientes, aumentar tu visibilidad y mejorar tu rendimiento en línea.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/Publicidad Online.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Publicidad Online</a>
                                <p class="mb-4 custom-description">Diseñamos campañas publicitarias en plataformas digitales para alcanzar a tu audiencia objetivo y maximizar tus resultados comerciales.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/Optimización SEO.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Optimización SEO</a>
                                <p class="mb-4 custom-description">Mejoramos el posicionamiento de tu sitio web en los motores de búsqueda para aumentar su visibilidad y atraer tráfico de calidad.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Features Start -->
        <div class="container-fluid feature pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Nuestras caracteristicas</h4>
                    <h1 class="display-5 mb-4">Impulsando tu negocio con soluciones digitales personalizadas.</h1>
                    <p class="mb-0">Ofrecemos un enfoque único en el desarrollo web, marketing digital y optimización SEO. Cada servicio está diseñado para maximizar el potencial de tu negocio en el mundo digital, adaptándonos a tus necesidades específicas y asegurando un impacto significativo en tu crecimiento.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <img src="./img/icons/Programmer-pana.png" alt="Icono de setup-pana" class="img-fluid">
                            </div>
                            <h4>Desarrollo Web a Medida</h4>
                            <p class="mb-4 custom-description2">Creamos sitios web personalizados que se alinean con las necesidades de tu negocio, garantizando una experiencia única y funcional para tus usuarios.
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4">Leer más</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <img src="./img/icons/Web devices-pana.png" alt="Icono de setup-pana" class="img-fluid">
                            </div>
                            <h4>Diseño Responsivo y Funcional</h4>
                            <p class="mb-4 custom-description2">Nos aseguramos de que tu página se vea y funcione perfectamente en cualquier dispositivo, brindando una experiencia fluida tanto en computadoras como en móviles.
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4">Leer más</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <img src="./img/icons/SEO analytics team-pana.png" alt="Icono de setup-pana" class="img-fluid">
                            </div>
                            <h4>Optimización SEO Avanzada</h4>
                            <p class="mb-4 custom-description2">Mejoramos tu posicionamiento en los motores de búsqueda para que tu sitio web sea fácilmente encontrado por los usuarios y aumente su visibilidad online.
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4">Leer más</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <img src="./img/icons/Mobile Marketing-pana.png" alt="Icono de setup-pana" class="img-fluid">
                            </div>
                            <h4>Estrategias de Marketing Digital</h4>
                            <p class="mb-4 custom-description2">Desarrollamos campañas de marketing digital efectivas para atraer clientes potenciales, aumentar tu presencia online y promover tu marca en plataformas clave.
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->

        <?php include('includes/footer.php') ?>

</html>