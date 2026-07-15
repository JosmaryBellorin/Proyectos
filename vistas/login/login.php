<?php include("../../includes/header.php"); ?>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow">

                <div class="card-header bg-primary text-white text-center">

                    <h3>Iniciar Sesión</h3>

                </div>

                <div class="card-body">

                    <form action="../../procesos/validar_login.php" method="POST">

                        <div class="mb-3">

                            <label>Usuario</label>

                            <input
                                type="text"
                                class="form-control"
                                name="usuario"
                                required>

                        </div>

                        <div class="mb-3">

                            <label>Contraseña</label>

                            <input
                                type="password"
                                class="form-control"
                                name="password"
                                required>

                        </div>

                        <button class="btn btn-primary w-100">

                            Ingresar

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include("../../includes/footer.php"); ?>