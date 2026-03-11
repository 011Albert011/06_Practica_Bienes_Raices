<?php
    require 'includes/funciones.php';
    incluirTemplate('header'); 
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al Bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la Propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="/build/img/icono_wc.svg" alt="Icono WC">
                    <p>3</p>
                </li>

                <li>
                    <img class="icono" loading="lazy" src="/build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento">
                    <p>3</p>
                </li>

                <li>
                    <img class="icono" loading="lazy" src="/build/img/icono_dormitorio.svg" alt="Icono Dormitorio">
                    <p>4</p>
                </li>
            </ul>

            <p style="text-align: justify;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quaerat, animi maxime ipsum ipsa iusto iste velit adipisci quod dolorem, ut molestias quidem ratione delectus odit ex corporis, libero sit.
                Facilis enim debitis quis eius accusantium vero saepe consequuntur optio quam modi! Quas aspernatur cum vitae nemo reprehenderit odio tenetur provident quae explicabo maiores reiciendis sit, minus alias corrupti? Reprehenderit. Molestiae iure vitae iste ratione porro ut asperiores. Recusandae dolorem veritatis aliquid, nam nulla impedit. Culpa vitae eligendi pariatur aut est dolor quisquam odit quas rem sit eos, commodi aspernatur?
            </p>

            <p style="text-align: justify;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium autem magnam possimus libero! Quidem iusto illo possimus! Sunt quae architecto enim suscipit, vel accusantium eum delectus quod necessitatibus dolorum. Suscipit! Laborum fuga omnis quisquam aliquam eligendi! Placeat at ullam voluptates corporis. Tempora qui, similique fugit laboriosam minima natus dicta accusamus cupiditate. 
            </p>
        </div>
    </main>

<?php incluirTemplate('footer'); ?>
