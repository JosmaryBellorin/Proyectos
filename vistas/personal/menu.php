<?php
include("../../includes/header.php");
?>

<div class="container-fluid">

    <div class="row">

        <?php
        include("../../includes/sidebar_personal.php");
        ?>

        <div class="col-md-10 p-4 dashboard">

            <div class="text-center mt-3 mb-3">

                <img src="../../assets/img/logo.png"
                     width="370"
                     class="logo-dashboard">

            </div>

            <div class="text-center mb-4">

                <h2 class="fw-bold">

                    Bienvenido, Personal Administrativo

                </h2>

                <p class="text-secondary">

                    Administra evaluaciones, revisiones, pagos y el registro de choferes.

                </p>

            </div>

            <div class="row">

                <div class="col-md-3 mb-4">

                    <div class="card card-usuarios text-center">

                        <div class="card-body">

                            <img src="../../assets/img/personal/choferes.png"
                                 width="80"
                                 class="mb-3">

                            <h3>42</h3>

                            <h5>Choferes</h5>

                            <p class="text-secondary mb-0">

                                Registrados

                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-4">

                    <div class="card card-vehiculos text-center">

                        <div class="card-body">

                            <img src="../../assets/img/personal/evaluaciones.png"
                                 width="70"
                                 class="mb-3">

                            <h3>15</h3>

                            <h5>Evaluaciones</h5>

                            <p class="text-secondary mb-0">

                                Pendientes

                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-4">

                    <div class="card card-traslados text-center">

                        <div class="card-body">

                            <img src="../../assets/img/personal/revisiones.png"
                                 width="70"
                                 class="mb-3">

                            <h3>9</h3>

                            <h5>Revisiones</h5>

                            <p class="text-secondary mb-0">

                                Programadas

                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-3 mb-4">

                    <div class="card card-Pagos text-center">

                        <div class="card-body">

                            <img src="../../assets/img/personal/Pagos.png"
                                 width="80"
                                 class="mb-3">

                            <h3>$1,350</h3>

                            <h5>Pagos</h5>

                            <p class="text-secondary mb-0">

                                Procesados

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