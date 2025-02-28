<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Web Innovator Studio</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Marketing, Publicidad, Agencia de desarrollo, Creación de páginas web" name="keywords">
        <meta content="Creación de páginas web, desarrollo de páginas web y aplicaciones. Agencia de marketing digital" name="description">
        <?php include('includes/meta.php') ?>

        <style>
            .service .custom-description.show-more{
                transition: 0.4sease;
                overflow: hidden;
                display: -webkit-box;
                -webkit-line-clamp: unset;
                line-clamp: unset;
                -webkit-box-orient: vertical;
            }

            .feature-item .custom-description2.show-more{
                transition: 0.4 ease;
                overflow: hidden;
                display: -webkit-box;
                -webkit-line-clamp: unset;
                line-clamp: unset;
                -webkit-box-orient: vertical;
            }

            .g-recaptcha {
                display: flex;
                justify-content: center;
                margin-bottom: 30px;
                width: 100%;
                overflow: hidden;
            }
        </style>

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
                                <h4 class="h4 d-inline-block mb-4"> Desarrollo Web Personalizado</h4>
                                <p class="mb-4 custom-description">Creamos sitios web personalizados que se adaptan a las necesidades de tu negocio, brindando una experiencia única y funcionalidad avanzada.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/CMS Facil de Usar.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <h4 class="h4 d-inline-block mb-4">CMS Fácil de Usar</h4>
                                <p class="mb-4 custom-description">Ofrecemos soluciones web a medida con un sistema de gestión de contenido intuitivo, para que puedas administrar tu sitio de manera sencilla y sin complicaciones.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/Ecommerce a Medida.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <h4 class="h4 d-inline-block mb-4">Ecommerce a Medida</h4>
                                <p class="mb-4 custom-description">Desarrollamos tiendas online completas y seguras, optimizadas para ofrecer una experiencia de compra excepcional y aumentar tus ventas.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/Marketing Digital.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <h4 class="h4 d-inline-block mb-4">Marketing Digital</h4>
                                <p class="mb-4 custom-description">Creamos estrategias de marketing digital personalizadas para atraer más clientes, aumentar tu visibilidad y mejorar tu rendimiento en línea.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/Publicidad Online.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <h4 class="h4 d-inline-block mb-4">Publicidad Online</h4>
                                <p class="mb-4 custom-description">Diseñamos campañas publicitarias en plataformas digitales para alcanzar a tu audiencia objetivo y maximizar tus resultados comerciales.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/Optimización SEO.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <h4 class="h4 d-inline-block mb-4">Optimización SEO</h4>
                                <p class="mb-4 custom-description">Mejoramos el posicionamiento de tu sitio web en los motores de búsqueda para aumentar su visibilidad y atraer tráfico de calidad.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4">Leer más</a>
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

        <!-- Contact Start -->
        <div class="container-fluid contact pb-5" id="contact">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Formulario de contacto</h4>
                    <h1 class="display-5 mb-4">Construyamos juntos el futuro digital de tu empresa.</h1>
                    <p class="mb-0">¿Necesitas una solución a medida en desarrollo de software o marketing digital? Estamos aquí para ayudarte. Cuéntanos sobre tu proyecto y trabajemos juntos para impulsar tu crecimiento con tecnología innovadora y estrategias efectivas.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="contact-item p-4">
                            <div class="contact-icon p-4 mb-4">
                                <img src="https://webinnovatorstudio.com/img/service.png" alt="Icono de setup-pana" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="contact-item p-4" id="form-row">
                            <form class="row contact_form" method="post" action="send.php" id="contactForm" novalidate="novalidate">
                                <span class="h4 text-center text-white">Llena el siguiente formulario</span>
                                <p class="text-center text-white mb-4">Por favor, complete el siguiente formulario con los detalles de su proyecto. Nuestro equipo especializado en desarrollo de software y marketing digital se pondrá en contacto con usted para ofrecerle soluciones personalizadas que impulsen el crecimiento y la transformación digital de su empresa. 
                                </p>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="nombre" placeholder="Nombre y Apellido" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="correo" placeholder="Correo Electronico" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="telefono" placeholder="Teléfono" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Asunto" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" rows="8" placeholder="Mensaje" required></textarea>
                                    </div>
                                </div>
                                <div style="display:none;">
                                    <input type="text" name="honeypot" value="">
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LfD1uIqAAAAAK3oxYa3A9jH8gI3ViyNlSYudTDG" data-callback="captchaVerificado" hl='es'></div>

                                <div class="col-md-12 text-right mx-auto d-flex justify-content-center">
                                    <button type="submit" value="submit" class="btn submit_btn text-white border-white border-2" id="btnEnviar" disabled>Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <?php include('includes/footer.php') ?>
</html>