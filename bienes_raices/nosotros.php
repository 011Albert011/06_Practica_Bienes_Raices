<?php
    require 'includes/funciones.php';
    incluirTemplate('header'); 
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">   
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/web">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quaerat, animi maxime ipsum ipsa iusto iste velit adipisci quod dolorem, ut molestias quidem ratione delectus odit ex corporis, libero sit.
                    Facilis enim debitis quis eius accusantium vero saepe consequuntur optio quam modi! Quas aspernatur cum vitae nemo reprehenderit odio tenetur provident quae explicabo maiores reiciendis sit, minus alias corrupti? Reprehenderit. Molestiae iure vitae iste ratione porro ut asperiores. Recusandae dolorem veritatis aliquid, nam nulla impedit. Culpa vitae eligendi pariatur aut est dolor quisquam odit quas rem sit eos, commodi aspernatur?
                </p>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium autem magnam possimus libero! Quidem iusto illo possimus! Sunt quae architecto enim suscipit, vel accusantium eum delectus quod necessitatibus dolorum. Suscipit! Laborum fuga omnis quisquam aliquam eligendi! Placeat at ullam voluptates corporis. Tempora qui, similique fugit laboriosam minima natus dicta accusamus cupiditate. 
                </p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="/build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            
            <div class="icono">
                <img src="/build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="icono">
                <img src="/build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

        </div>
    </section>

<?php incluirTemplate('footer'); ?>
