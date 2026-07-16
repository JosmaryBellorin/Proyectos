<?php 
include("../../includes/header.php");
?>

<div class="container-fluid">

    <div class="row">

        <?php
        include("../../includes/sidebar_cliente.php");
        ?>

        <div class="col-md-10 p-4 dashboard">

            <!-- Logo -->

            <div class="text-center mt-3 mb-3">

                <img src="../../assets/img/logo.png"
                     width="370"
                     class="logo-dashboard">

            </div>


            <!-- Bienvenida -->

            <div class="text-center mb-4">

                <h2 class="fw-bold">

                    Bienvenido, Cliente

                </h2>

                <p class="text-secondary">

                    Consulta tus viajes y administra tu información desde este panel.

                </p>

            </div>


            <!-- Tarjetas -->

            <div class="row justify-content-center g-4">


                <!-- Saldo -->

                <div class="col-md-4 col-lg-3">

                    <div class="card card-vehiculos text-center">

                        <div class="card-body">

                            <img src="../../assets/img/ganancias.png"
                                 width="70"
                                 class="mb-3">

                            <h3>

                                $150

                            </h3>

                            <h5>

                                Saldo

                            </h5>

                            <p class="text-secondary mb-0">

                                Disponible

                            </p>

                        </div>

                    </div>

                </div>



                <!-- Viajes -->

                <div class="col-md-4 col-lg-3">

                    <div class="card card-traslados text-center">

                        <div class="card-body">

                            <img src="../../assets/img/traslados.png"
                                 width="70"
                                 class="mb-3">

                            <h3>

                                28

                            </h3>

                            <h5>

                                Viajes

                            </h5>

                            <p class="text-secondary mb-0">

                                Realizados

                            </p>

                        </div>

                    </div>

                </div>



                <!-- Estado -->

                <div class="col-md-4 col-lg-3">

                    <div class="card card-ganancias text-center">

                        <div class="card-body">

                            <img src="../../assets/img/cliente/estado.png"
                                 width="70"
                                 class="mb-3">

                            <h3>

                                Activo

                            </h3>

                            <h5>

                                Estado

                            </h5>

                            <p class="text-secondary mb-0">

                                Cuenta

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