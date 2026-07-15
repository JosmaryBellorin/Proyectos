<?php
include("../../includes/header.php");
?>

<div class="container-fluid">

    <div class="row">

        <?php
        include("../../includes/sidebar.php");
        ?>

        <div class="col-md-10 p-4">

            <!-- Logo -->

            <div class="text-center mt-4 mb-5">

                <img src="../../assets/img/logo.png" width="250" class="mb-3">

               

               

            </div>

            <hr>

            <h2 class="fw-bold">

                Bienvenido, Administrador

            </h2>

            <p class="text-secondary">

                Gestiona usuarios, vehículos, traslados y pagos desde este panel.

            </p>

            <div class="row mt-4">

                <!-- Usuarios -->

                <div class="col-md-3 mb-4">

                    <div class="card card-usuarios text-center">

                        <div class="card-body">

                            <img src="../../assets/img/usuarios.png"
                                 width="70"
                                 class="mb-3">

                            <h5>

                                Usuarios

                            </h5>

                            <h3>

                                120 registrados

                            </h3>

                        </div>

                    </div>

                </div>

                <!-- Vehículos -->

                <div class="col-md-3 mb-4">

                    <div class="card card-vehiculos text-center">

                        <div class="card-body">

                            <img src="../../assets/img/vehiculos.png"
                                 width="70"
                                 class="mb-3">

                            <h5>

                                Vehículos

                            </h5>

                            <h3>

                                35 registrados

                            </h3>

                        </div>

                    </div>

                </div>

                <!-- Traslados -->

                <div class="col-md-3 mb-4">

                    <div class="card card-traslados text-center">

                        <div class="card-body">

                            <img src="../../assets/img/traslados.png"
                                 width="70"
                                 class="mb-3">

                            <h5>

                                Traslados

                            </h5>

                            <h3>

                                18 realizados

                            </h3>

                        </div>

                    </div>

                </div>

                <!-- Ganancias -->

                <div class="col-md-3 mb-4">

                    <div class="card card-ganancias text-center">

                        <div class="card-body">

                            <img src="../../assets/img/ganancias.png"
                                 width="70"
                                 class="mb-3">

                            <h5>

                                Ganancias

                            </h5>

                            <h3>

                                $2,450

                            </h3>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<div class="row mt-4">

    

<?php
include("../../includes/footer.php");
?>