<?php include 'assets/partials/header.php'; ?>
<div id="inicio" class="container-fluid">
    <section id="biografia" class="container-fluid">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-md-6">
                    <p>
                        A principios de los setenta --junto a Jorge Aulicino, Daniel Freidemberg, Mirta Hortas, Marcelo Cohen, Jorge Asís y Rubén Reches, Irene Gruss formó parte del primer grupo de poetas que integró el taller Mario de Lellis.<br>
                        Desde entonces han dicho que su poesía dialogó con el coloquialismo, que obedece a impulsos líricos que tensionan con un objetivismo lúcido y desolado, o que se vale de dichos vulgares para depositarnos en experiencias desesperantes de representación del mundo. Todo esto es cierto y a la vez insuficiente. La voz de Irene nos empuja como lectores hacia una autenticidad sin salida, en la que cada decisión formal, más allá de los dimes y diretes de las restricciones de época, se conjuga en función de una verdad para la que todavía no encontramos nombre.
                    </p>
                    <a class="btnLeerMasOscuro bordesRedondeados" href="/biografia.php">Biografía</a>
                </div>
                <div class="col-12 col-md-6 order-first mb-3 order-md-last">
                    <a class="" href="/biografia.php"><img class="img-fluid bordesRedondeados" src="/assets/img/Foto-de-Ricardo-Carcova.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <section class="container mb-5">
        <div id="resumen" class="row">
            <div id="poetasLeen" class="col-12 col-md-6">
                <a class="" href="/proyecto.php">
                    <div class="cycle-slideshow">
                        <img class="img-fluid borderRedondeados" src="/assets/img/poetasLeen1.jpg">
                        <img class="img-fluid borderRedondeados" src="/assets/img/poetasLeen2.jpg">
                        <img class="img-fluid borderRedondeados" src="/assets/img/poetasLeen3.jpg">
                        <img class="img-fluid borderRedondeados" src="/assets/img/poetasLeen4.jpg">
                    </div>


                </a>
                <a class="boton btnLeen bordesRedondeados" href="/proyecto.php">
                    <h3>leida x otrxs</h3>
                </a>
            </div>
            <div id="sobreGruss" class=" col-12 col-md-6">
                <div class="fondoOscuro bordesRedondeados">
                    <a href="/sobre_gruss.php">
                        <h3 class="txtClaro"><em>Yo no me asomo a los precipicios porque tengo vértigo, pero Irene lo hacía con una frecuencia increíble, y luego escribía versos que seguían una particular sintaxis, agravada por los sobrentendidos.</em></h3>
                        <h5 class="txtClaro text-uppercase text-right">Jorge Aulicino</h5>
                    </a>
                </div>

                <a class="boton bordesRedondeados" href="/sobre_gruss.php">
                    <h3>escrita x otrxs</h3>
                </a>
            </div>

            <div id="poemasGruss" class="col-12 col-md-6">
                <div class="fondoColor bordesRedondeados">
                    <h4 class="txtClaro">Mujer irresuelta</h4>
                    <h5 class="txtClaro">
                        Yo quisiera, como Gauguin, largar todo e irme,<br>
                        dejar mi familia, la no tan sólida<br>
                        posición<br>
                        e irme a escribir a alguna isla<br>
                        mas solidaria.<br>
                        Esa tranquilidad de Gauguin,<br>
                        permanecer en una isla<br>
                        tan calurosa, donde las mujeres<br>
                        escupen resignadas<br>
                        carozos de fruta silvestre.<br>
                    </h5>
                </div>
                <a class="boton btnLeen bordesRedondeados" href="/poemas.php">
                    <h3>Poemas</h3>
                </a>
            </div>
            <div id="puestaIrene" class="col-12 col-md-6">
                <a href="/puesta_sonora.php"><img class="img-fluid bordesRedondeados" src="/assets/img/puestaSonora.jpg" alt="Puesta sonora Irene Gruss"></a>
                <a class="boton" href="/puesta_sonora.php">
                    <h3>sonorizada</h3>
                </a>
            </div>
        </div>
    </section>
</div>


<?php include 'assets/partials/footer.html'; ?>
<script>
    jQuery(document).ready(function() {
        $('.cycle-slideshow').cycle();
        $("main").hide();
        $("main").fadeIn("slow");
    })
</script>