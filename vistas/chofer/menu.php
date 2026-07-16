<?php
include("../../includes/header.php");
?>

<div class="container-fluid">

    <div class="row">

        <?php
        include("../../includes/sidebar_chofer.php");
        ?>

        <div class="col-md-10 p-4 dashboard">

            <div class="text-center mt-3 mb-3">

                <img src="../../assets/img/logo.png"
                     width="370"
                     class="logo-dashboard">

            </div>

            <div class="text-center mb-4">

                <h2 class="fw-bold">

                    Bienvenido, Chofer

                </h2>

                <p class="text-secondary">

                    Consulta tus viajes asignados, revisa tu historial y administra tu información.

                </p>

            </div>

            <div class="row">

                <div class="col-md-3 mb-4">

                    <div class="card card-usuarios text-center">

                        <div class="card-body">

                            <img src="../../assets/img/traslados.png"
                                 width="70"
                                 class="mb-3">

                            <h3>6</h3>

                            <h5>Viajes</h5>

                            <p class="text-secondary mb-0">

                                Asignados

                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-4">

                    <div class="card card-vehiculos text-center">

                        <div class="card-body">

                            <img src="../../assets/img/chofer/completados.png"
                                 width="70"
                                 class="mb-3">

                            <h3>84</h3>

                            <h5>Viajes</h5>

                            <p class="text-secondary mb-0">

                                Completados

                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-4">

                    <div class="card card-ganancias text-center">

                        <div class="card-body">

                            <img src="../../assets/img/ganancias.png"
                                 width="70"
                                 class="mb-3">

                            <h3>$820</h3>

                            <h5>Ganancias</h5>

                            <p class="text-secondary mb-0">

                                Acumuladas

                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-4">

                    <div class="card card-traslados text-center">

                        <div class="card-body">

                            <img src="../../assets/img/chofer/disponible.png"
                                 width="70"
                                 class="mb-3">

                            <h3>Disponible</h3>

                            <h5>Estado</h5>

                            <p class="text-secondary mb-0">

                                Actual

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?php
include("../../includes/footer.php");
?>