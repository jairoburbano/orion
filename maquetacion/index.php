<?php
/**
 * Archivo principal.
 *
 * Aquí se muestra todo lo que se ve en la portada de la página
 *
 * @package		orion
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
$page = 'home';
$subpage = '';
include 'header.php'; ?>
<section class="first">
    <img srcset="img/you-big.jpg" alt="Orion You">
</section>
<section class="sistema">
    <div class="wrap">
        <div class="block--flex">
            <div class="column">
                <div class="center">
                    <h1>Sistema Orion</h1>
                    <h2>Un universo de posibilidades</h2>
                    <div class="content">
                        <p>
                            Orion es el nuevo sistema modular de Schneider Electric que se ajusta perfectamente a cada estilo de vida. El universo Orion ofrece una enorme variedad de combinaciones y posibilidades, desde interruptores y tomas de corriente, hasta funciones electrónicas, dimmers y tomas multimedia. Todo encaja de forma perfecta para responder a todos los requerimientos de estilo, materiales y funciones. 
                        </p>
                    </div><!--.content-->
                    <div class="buttons">
                        <a onClick="ga('send', 'event', 'media', 'download', 'Catálogo');" href="catalogo/catalogo_orion.pdf" class="btn btn--border" title="Descarga el catálogo Orion">Descarga el catálogo Orion</a>
                        <a onClick="ga('send', 'event', 'media', 'online', 'Catálogo');" href="catalogo" class="btn btn--border" title="Ve en linea el catálogo Orion">Ve en linea el catálogo Orion</a>
                    </div><!--.buttons-->

                </div><!--.center-->
            </div><!--.column-->
            <div class="column">
                <div class="image">
                    <img src="img/orion_range.png" alt="Orion Range">
                    <div class="buttons">
                        <p onClick="ga('send', 'event', 'video', 'play', 'Orion Experience');" class="btn btn--play js-play" data-top="300" title="Conoce Orion Experience" data-source="https://player.vimeo.com/video/150343438?color=3dcd58&title=0&byline=0&portrait=0">
                            <svg><use xlink:href="#shape-play" /></svg>
                            Conoce Orion Experience
                        </p>
                    </div><!--.buttons-->
                </div><!--.image-->
            </div><!--.column-->
        </div><!--.block--flex-->
    </div><!--.wrap-->
</section><!--.sistema-->
<section class="people">
    <div class="wrap">
        <div class="block--flex">
            <div class="column">
                <blockquote>
                    Orion constituye valor y distinción, en cuanto elegancia y diferenciación, a través del diseño. Orion puede ser parte de tu persona y caracterizar tu casa
                    <span class="icon"></span>
                </blockquote>
                <h1>Federico Sánchez</h1>
                <div class="bajada">
                    <p>
                        Arquitecto. Conductor de City Tour, en C13, y Pensar es Gratis, en Radio Oasis. Decano del Campus Creativo de la Universidad Andrés Bello.
                    </p>
                </div><!--.bajada-->
            </div><!--.column-->
            <div class="column">
                <img src="img/slide-federico-mobile.jpg" alt="Federico Sanchez" class="mobile">
                <div class="buttons">
                    <p onClick="ga('send', 'event', 'video', 'play', 'Federico');" class="btn btn--play js-play" data-top="740" title="Conoce la opinión de Federico" data-source="https://player.vimeo.com/video/150342899?color=3dcd58&title=0&byline=0&portrait=0">
                        <svg><use xlink:href="#shape-play" /></svg>
                        Conoce la opinión de Federico
                    </p>
                </div><!--.buttons-->
            </div><!--.column-->
        </div><!--.block--flex-->
    </div><!--.wrap-->
</section><!--.people-->
<section class="essence" id="box-essence">
    <div class="wrap">
        <div class="block--flex">
            <div class="column">
                <h1>Orion Essence</h1>
                <h2>La nueva estrella de la funcionalidad</h2>
                <div class="content">
                    <p>
                        De apariencia clásica e innovadora, esta variante de diseño ofrece una gran cantidad de elementos diferenciadores: acabados mate o brillante y suaves curvas que se fusionan con el ambiente.
                    </p>
                    <div class="destacado">
                        <div class="icon">
                            <svg><use xlink:href="#shape-flor" /></svg>
                        </div>
                        <p>
                            <strong>Diseño ecológico:</strong>
                            Productos desarrollados teniendo especial consideración con el impacto ambiental.
                        </p>
                    </div><!--.destacado-->
                </div><!--.content-->
            </div><!--.column-->
            <div class="column">
                <div class="slider js-slider">
                    <ul class="slides">
                        <li>
                            <img src="img/essence_blanco.png" alt="Orion Essence Blanco">
                            <p class="flex-caption">Orion Essence Blanco</p>
                        </li>
                        <li>
                            <img src="img/essence_marfil.png" alt="Orion Essence Marfil">
                            <p class="flex-caption">Orion Essence Marfil</p>
                        </li>
                        <li>
                            <img src="img/essence_planet_brown.png" alt="Orion Essence Planet Brown">
                            <p class="flex-caption">Orion Essence Planet Brown</p>
                        </li>
                        <li>
                            <img src="img/essence_axis_gray.png" alt="Orion Essence Axis Gray">
                            <p class="flex-caption">Orion Essence Axis Gray</p>
                        </li>
                        <li>
                            <img src="img/essence_gamma_silver.png" alt="Orion Essence Gamma Silver">
                            <p class="flex-caption">Orion Essence Gamma Silver</p>
                        </li>
                        <li>
                            <img src="img/essence_horizon_gold.png" alt="Orion Essence Horizon Gold">
                            <p class="flex-caption">Orion Essence Horizon Gold</p>
                        </li>
                        <li>
                            <img src="img/essence_stellar_black.png" alt="Orion Essence Stellar Black">
                            <p class="flex-caption">Orion Essence Stellar Black</p>
                        </li>
                    </ul><!--.slides-->
                </div><!--.slider-->
            </div><!--.column-->
        </div><!--.block--flex-->
    </div><!--.wrap-->
</section><!--.essence-->
<section class="materials" id="box-materials">
    <div class="wrap">
        <div class="block--flex">
            <div class="column">
                <div class="center">
                    <h1>Orion Materials</h1>
                    <h2>Diseño en cromo y aluminio</h2>
                    <div class="content">
                        <p>
                            Especialmente diseñado para fusionarse en los ambientes más contemporáneos. Los materiales de alta tecnología proporcionan un aspecto elegante gracias a los acabados en cromo o aluminio.
                        </p>
                    </div><!--.center-->
                </div><!--.content-->
            </div><!--.column-->
            <div class="column">
                <div class="slider js-slider">
                    <ul class="slides">
                        <li>
                            <img src="img/materials_galaxy_black.png" alt="Orion Materials Grafito / Galaxy Black">
                            <p class="flex-caption">Orion Materials Grafito / Galaxy Black</p>
                        </li>
                        <li>
                            <img src="img/materials_aluminio.png" alt="Orion Materials Aluminio">
                            <p class="flex-caption">Orion Materials Aluminio</p>
                        </li>
                    </ul><!--.slides-->
                </div><!--.slider-->
            </div><!--.column-->
        </div><!--.block--flex-->
    </div><!--.wrap-->
</section><!--.materials-->
<section class="you" id="box-you">
    <div class="wrap">
        <div class="block--flex">
            <div class="column">
                <div class="column--max">
                    <h1>Orion You</h1>
                    <h2>El diseño en tus manos</h2>
                    <div class="content">
                        <p>
                            Atrévete a mezclar y combinar colores, patrones y diseños para crear interiores verdaderamente únicos. Con Orion You crea tu propio diseño y personaliza tu espacio. ¡Todo vale cuando se trata de expresar la pasión y el arte!
                        </p>
                    </div><!--.content-->
                    <div class="buttons">
                        <p onClick="ga('send', 'event', 'video', 'play', 'Orion You');" class="btn btn--play js-play" data-top="2570" title="Conoce Orion You" data-source="https://player.vimeo.com/video/150343894?color=3dcd58&title=0&byline=0&portrait=0">
                            <svg><use xlink:href="#shape-play" /></svg>
                            Conoce Orion You
                        </p>
                    </div><!--.buttons-->
                </div><!--.column--max-->
            </div><!--.column-->
            <div class="column">
                <img src="img/you_mobile.jpg" alt="Orion You" class="mobile">
                <img srcset="img/you-big.jpg" alt="Orion You" class="thisheight">
            </div><!--.column-->
        </div><!--.block--flex-->
    </div><!--.wrap-->
</section><!--.materials-->
<section class="conectado">
    <div class="wrap">
        <div class="block--flex">
            <div class="column">
                <h1>Siempre conectado con Orion</h1>
                <h2>Mantente conectado, fácil y rápidamente</h2>
                <div class="content">
                    <p>
                        Ahora ya es posible instalar las tomas multimedia para tener siempre un punto de fácil acceso para conectar tus dispositivos sin necesidad de usar ningún tipo de adaptador.
                    </p>
                </div><!--.content-->
            </div><!--.column-->
            <div class="column">
                <div class="slider js-slider">
                    <ul class="slides">
                        <li>
                            <img src="img/mm_cargador_usb.png" alt="Cargador USB">
                            <p class="flex-caption"><strong>Cargador USB:</strong>¡Carga tu celular fácilmente y directamente desde la toma de corriente!</p>
                        </li>
                        <li>
                            <img src="img/mm_datos_usb.png" alt="Conector de datos USB">
                            <p class="flex-caption"><strong>Conector de datos USB:</strong>Muestra tus imágenes y videos en una pantalla de TV de forma sencilla y rápida.</p>
                        </li>
                        <li>
                            <img src="img/mm_hdmi.png" alt="Toma HDMI precableada">
                            <p class="flex-caption"><strong>Toma HDMI precableada</strong>Muestra tus imágenes y videos en una pantalla de TV de forma sencilla y rápida.</p>
                        </li>
                        <li>
                            <img src="img/mm_hd15.png" alt="HD15">
                            <p class="flex-caption"><strong>HD15</strong>Muestra tus imágenes y videos en una pantalla de TV de forma sencilla y rápida.</p>
                        </li>
                        <li>
                            <img src="img/mm_mini_jack.png" alt='Conector Mini jack 3.5"'>
                            <p class="flex-caption"><strong>Conector Mini jack 3.5"</strong>Escucha tu música fácil y rápidamente.</p>
                        </li>
                    </ul><!--.slides-->
                </div><!--.slider-->
            </div><!--.column-->
        </div><!--.block--flex-->
    </div><!--.wrap-->
</section><!--.conectado-->
<section class="encuentranos">
    <div class="wrap">
        <h2>Encuentranos en:</h2>
        <div class="block--flex">
            <div class="item">
                <img src="img/sponsor/dartel.jpg" alt="Dartel">
            </div><!--.item-->
            <div class="item">
                <img src="img/sponsor/enfu.jpg" alt="Enfu">
            </div><!--.item-->
            <div class="item">
                <img src="img/sponsor/fyk.jpg" alt="Flores y Kersting">
            </div><!--.item-->
            <div class="item">
                <img src="img/sponsor/gobantes.jpg" alt="Gobantes">
            </div><!--.item-->
            <div class="item">
                <img src="img/sponsor/sonepar.png" alt="Sonepar">
            </div><!--.item-->
            <div class="item">
                <img src="img/sponsor/elfle.jpg" alt="Elfle">
            </div><!--.item-->
        </div><!--.block--flex-->
    </div><!--.wrap-->
</section><!--.encuentranos-->
<section class="informacion">
    <div class="wrap">
        <div class="block--flex">
            <div class="column">
                <h1>¿Quieres más información?</h1>
                <h2>Contáctate con nosotros</h2>
            </div><!--.column-->
            <div class="column form-content">
                <form action="form.php" method="post" class="formulario">
                    <div class="input-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name">
                        <span class="feedback"></span>
                    </div>
                    <div class="input-group">
                        <label for="lastname">Apellido</label>
                        <input type="text" name="lastname" id="lastname">
                        <span class="feedback"></span>
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                        <span class="feedback"></span>
                    </div>
                    <div class="input-group">
                        <label for="subject">Asunto</label>
                        <input type="text" name="subject" id="subject">
                        <span class="feedback"></span>
                    </div>
                    <div class="input-group textarea-group">
                        <label for="message">Mensaje</label>
                        <textarea name="message" id="message"></textarea>
                        <span class="feedback"></span>
                    </div>
                    <div class="send-group">
                        <input type="submit" class="send" value="Enviar" onclick="ga('send', 'event', 'form', 'Botón Enviar Formulario', 'Único', 0);">
                    </div>
                </form>
            </div><!--.column-->
        </div><!--.block--flex-->
    </div><!--.wrap-->
</section><!--.informacion-->
<div class="lightbox">
    <div class="lightbox__content">
       <div class="icon--close js-close">
           <svg><use xlink:href="#shape-close" /></svg>
       </div>
        <div class="video">
            <iframe src="" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen id="js-video"></iframe>
        </div><!--.video-->
    </div><!--.lightbox__content-->
</div><!--.lightbox-->
<?php include 'footer.php'; ?>