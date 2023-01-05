<style>
    @media only screen and (min-width: 992px) {
        label {
            font-size: 10px;
        }
        input::placeholder {
            font-size: 8px;
        }
    }
    @media only screen and (min-width: 1200px) {
        label {
            font-size: 12px;
        }
        input::placeholder {
            font-size: 11px;
        }
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <form class="bg-white shadow rounded-bottom p-4" id="form-sign-up">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col p-4">
                            <h1>Registro</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <strong>Datos personales</strong>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="form_user_names">Nombre(s):</label>
                                <input type="text" class="form-control" id="form_user_names" placeholder="Ingrese nombre(s)" name="form_user_names">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="form_user_first_surname">Apellido paterno:</label>
                                <input type="text" class="form-control" id="form_user_first_surname" placeholder="Ingrese apellido paterno" name="form_user_first_surname">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="form_user_second_surname">Apellido materno:</label>
                                <input type="text" class="form-control" id="form_user_second_surname" placeholder="Ingrese apellido materno" name="form_user_second_surname">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <strong>Datos de cuenta</strong>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="form_user_email">E-mail:</label>
                                <input type="text" class="form-control" id="form_user_email" placeholder="Ingrese correo electrónico" name="form_user_email">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="form_user_password">Contraseña:</label>
                                <input type="password" class="form-control" id="form_user_password" placeholder="Ingrese contraseña" name="form_user_password">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="form_user_confirm_password">Confirmar contraseña:</label>
                                <input type="password" class="form-control" id="form_user_confirm_password" placeholder="Confirme contraseña" name="form_user_confirm_password">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="btn-group btn-block">
                                <span class="btn btn-dark" id="cancel">
                                    <a href="iniciar-sesion">
                                        <span>Cancelar</span>
                                    </a>
                                </span>
                                <span class="btn btn-warning" id="sign_up">Registrame</span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="manager/manager-form-sign-up.js"></script>