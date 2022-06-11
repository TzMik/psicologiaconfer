<?php
require_once(__DIR__ . "/config/specialRoutes.php");
require_once(__DIR__ . "/controllers/index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once __DIR__ . "/views/components/head.php"; ?>
    <!-- MAILING -->
    <script src="js/sendEmail.js?v=1.0.0" defer></script>
</head>

<body>
    <div class="fer-main-header">
        <div class="headers">
            <h1>Psic Fernanda Quiroga</h1>
            <h2>Lic. en Psicología Sistémica con Maestría en violencia de género</h2>
            <div class="header-button">
                <a class="btn btn-outline-primary btn-lg" target="_blank" href="https://www.doctoralia.com.mx/maria-fernanda-quiroga-vidrio/psicologo/guadalajara" rel="follow">Agendar una cita</a>
            </div>
        </div>
    </div>
    <?php require_once __DIR__ . "/views/components/topbar.php"; ?>
    <section class="container">
        <div id="sobre-mi">
            <div class="row d-flex align-items-center mt-3">
                <div class="col-md-5">
                    <img src="img/fer.jpg" alt="">
                </div>
                <div class="col-md-7 mt-2">
                    <h2 class="text-center">Sobre mí</h2>
                    <h4 class="text-center default-subheader">Conoce un poco más sobre mi trabajo</h4>
                    <hr>
                    <div class="p-2">
                        <h3>Educación</h3>
                        <p class="text-justify">Desde que era chica vi la importancia de la salud mental en mi persona, es por eso que decidí estudiar la Lic. En Psicología y decidí especializarme en psicoterapia sistémica. Soy fiel creyente de la igualdad de género y su importancia, ya que cada persona tiene derecho a una vida libre de violencia. Es por eso que tomé la decisión de migrar al extranjero y estudiar una Maestría en Violencia de Género, para poder poner mi granito de arena en esta problemática a nivel mundial. Otro de mis principios es el constante aprendizaje y es por eso que he tomado diversos cursos y diplomados en terapia de pareja, sexualidad y género.</p>
                    </div>
                    <div class="p-2">
                        <h3>Experiencia</h3>
                        <p class="text-justify">Al salir de la Licenciatura realicé mis prácticas profesionales en una asociación empoderando laboralmente a mujeres en situación vulnerable. Terminando este proceso fue cuando tomé la decisión de estudiar la Maestría donde tuve la oportunidad de realizar prácticas laborales en un centro terapéutico y sexológico dentro de la Comunidad Autónoma Vasca. Cuando regresé a Guadalajara abrí mi consultorio privado un poco expectante y nerviosa. A su vez tuve la oportunidad de trabajar dentro de la Secretaria de Igualdad Sustantiva Entre Mujeres y Hombres, dentro de la Dirección de Mujeres Víctimas de Violencia. Durante el tiempo que estuve laborando obtuve muchísima experiencia y pude aprender de mis compañerxs. Actualmente me dedico a mi consultorio 100%, junto a crear contenido psicoeducativo y herramientas personalizadas para cada persona que asiste a mis consultas.</p>
                    </div>
                    <div class="p-2">
                        <h3>Misión</h3>
                        <p class="text-justify">Me apasiona mi trabajo y mi misión es poder acompañarte en tu proceso de la manera más personal y profesional posible, poder crear, estudiar e investigar herramientas que se adapten a tu estilo de vida y a quien eres. Tengo muy en claro que cada persona es diferente y por eso modifico y creo herramientas que sean 100% personalizadas a tu situación particular. Estas herramientas son clave en el proceso, ya que son las que nos permitirán tanto a ti como a mí evaluar el avance en tu progreso.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid coundown-section">
        <div class="row p-lg-5">
            <div class="col-md-4 col-sm-12 d-flex justify-content-center mt-5">
                <div class="count-content">
                    <img src="<?= ROOT_PATH ?>/img/user-solid.png" alt="">
                    <p>
                        <span class="count-numb">+180</span>
                        <br>
                        <b>Pacientes atendidos</b>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 d-flex justify-content-center mt-5">
                <div class="count-content">
                    <img src="<?= ROOT_PATH ?>/img/users-solid.png" alt="">
                    <p>
                        <span class="count-numb">+120</span>
                        <br>
                        <b>Pacientes activos</b>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 d-flex justify-content-center mt-5 mb-5">
                <div class="count-content">
                    <img src="<?= ROOT_PATH ?>/img/graduation-cap-solid.png" alt="">
                    <p>
                        <span class="count-numb">+30</span>
                        <br>
                        <b>Certificados realizados</b>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="container mt-5" id="psicoterapia">
        <div id="psicoterapia">
            <h2 class="text-center">Psicoterapia</h2>
            <h4 class="text-center default-subheader">Estas son las dos modalidades que manejo actualmente</h4>
            <hr>
            <div class="row mt-5">
                <div class="col-md-6 col-sm-12">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Terapia individual</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$500<small class="text-muted fw-light">mxn</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Recomendación de mínimo 12 sesiones.</li>
                                <li>Las citas son cada semana o hasta con 15 días de separación.</li>
                                <li>La primera sesión es de acercamiento y reconocimiento.</li>
                                <li>Duración de 1 hora.</li>
                                <li>Modalidad presencial y online.</li>
                            </ul>
                            <a href="https://www.doctoralia.com.mx/maria-fernanda-quiroga-vidrio/psicologo/guadalajara" target="_blank" class="w-100 btn btn-lg btn-outline-primary">Agendar una cita</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Terapia en pareja</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$700<small class="text-muted fw-light">mxn</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Recomendación de mínimo 12 sesiones (en pareja suelen ser más).</li>
                                <li>Las citas son cada semana o hasta con 15 días de separación</li>
                                <li>Duración de 1 hora y media.</li>
                                <li>Modalidad presencial y online, aunque en este caso se aconseja el presencial.</li>
                            </ul>
                            <a href="https://www.doctoralia.com.mx/maria-fernanda-quiroga-vidrio/psicologo/guadalajara" target="_blank" class="w-100 btn btn-lg btn-outline-primary">Agendar una cita</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid mt-5 p-3" id="contacto">
        <div class="container">
            <h2 class="text-center">Contacto</h2>
            <h4 class="text-center default-subheader">Si tienes cualquier duda contáctame</h4>
            <hr>
            <div class="row">
                <div class="col-md-6 col-sm-12 mt-3">
                    <div class="alert alert-danger alert-dismissible fade d-none" role="alert" id="emailAlertError">
                        <strong>Upss...</strong> Lo sentimos, algo ha salido mal, vuelve a intentarlo más tarde.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-success alert-dismissible fade d-none" role="alert" id="emailAlertOk">
                        <strong>¡Mensaje enviado!</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <form id="sendEmail">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                        <label for="message" class="form-label">Mensaje:</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control" reuired></textarea>
                        <input type="submit" value="Enviar" class="btn btn-outline-primary btn-lg mt-3">
                    </form>
                </div>
                <div class="col-md-6 col-sm-12 g-map mt-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14934.193743932778!2d-103.3935244!3d20.647255!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x512a3b6725f9d6f1!2sPsic.%20FERNANDA%20QUIROGA!5e0!3m2!1ses!2smx!4v1649466222084!5m2!1ses!2smx" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="container mt-5" id="opiniones">
        <h2 class="text-center">Opiniones</h2>
        <h4 class="text-center default-subheader">Aquí les dejo unas cuantas opiniones de mis pacientes</h4>
        <hr>
        <div id="carouselExampleControls" class="carousel slide p-5 mb-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($reviews as $key => $review) : ?>
                    <div class="carousel-item <?= $key == 0 ? 'active' : '' ?> px-md-3">
                        <p class="text-center px-5"><?= $review->review ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <?php require_once __DIR__ . "/views/components/footer.php"; ?>
</body>

</html>