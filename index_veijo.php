<?php include 'assets/partials/header.php'; ?>
<div id="inicio" class="container-fluid">
    <section id="biografia" class="container-fluid">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-md-6">
                    <p>
                        A principios de los setenta --junto a Jorge Aulicino, Daniel Freidemberg, Mirta Hortas, Marcelo Cohen, Jorge Asís y Rubén Reches, Irene Gruss formó parte del primer grupo de poetas que integró el taller Mario de Lellis.<br>
                        Desde entonces han dicho que su poesía dialogó con el coloquialismo, que obedece a impulsos líricos que tensionan con un objetivismo lúcido y desolado, o que se vale de dichos vulgares para depositarnos en experiencias desesperantes de representación dle mundo. Todo esto es cierto y a la vez insuficiente. La voz de Irene nos empuja como lectores hacia una autenticidad sin salida, en la que cada decisión formal, más allá de los dimes y diretes de las restricciones de época, se conjuga en función de una verdad para la que todavía no encontramos nombre.
                    </p>
                    <a class="btnLeerMasOscuro bordesRedondeados" href="/biografia.php">Biografía</a>
                </div>
                <div class="col-12 col-md-6 order-first mb-3 order-md-last">
                    <a class="" href="/biografia.php"><img class="img-fluid bordesRedondeados" src="/assets/img/Foto-de-Ricardo-Carcova.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <section id="sobreIrene" class="cita fadein fondoOscuro">
        <h3 class="txtClaro"><em>Yo no me asomo a los precipicios porque tengo vértigo, pero Irene lo hacía con una frecuencia increíble, y luego escribía versos que seguían una particular sintaxis, agravada por los sobrentendidos.</em></h3>
        <h5 class="txtClaro text-uppercase text-right">Jorge Aulicino</h5>
        <a class="btnLeerMasClaro bordesRedondeados" href="/sobre_gruss.php">Irene Gruss por</a>
    </section>
    <section id="videos" class="container">
        <div class="row">
            <div class="col-12 col-md-6 mb-3">
                <a class="" href="/proyecto.php"><img class="img-fluid bordesRedondeados" src="/assets/img/poetasLeen.jpg" alt=""></a>
            </div>
            <div class="col-12 col-md-6">
                <h3>POETAS LEEN A IRENE</h3>
                <p>La poesía argentina contemporánea atraviesa un esperanzador estado de ebullición, del que hoy nos servimos para capturar los aportes de Rosario Aquebeque, Olivia Milberg, Josefina Rousseaux y Malena Saito. Unos instantes después de escuchar los audios de Irene Gruss, ellas leyeron los mismos poemas en voz alta y aquí están las pruebas.</p>
                <a class="btnLeerMasOscuro bordesRedondeados" href="/proyecto.php">Poetas leen a Irene</a>
            </div>
        </div>
    </section>




</div>


<?php include 'assets/partials/footer.html'; ?>
<script>
    jQuery(document).ready(function() {
        $("main").hide();
        $("main").fadeIn("slow");
    })
</script>