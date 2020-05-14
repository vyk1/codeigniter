<header>
    <div class="container">
        <div class="slider-container">
            <div class="intro-text">
                <div class="intro-lead-in">Bem vindo à AutoDidata!</div>
                <div class="intro-heading">À sua única &#127925;</div>
                <a href="#about" class="page-scroll btn btn-xl">Ah é?</a>
            </div>
        </div>
    </div>
</header>

<section id="about" class="dark-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>SOBRE</h2>
                    <p>Já parou para pensar quantas pessoas são necessárias para pensar? Exatamente, apenas 1! A AutoDidata © é uma empresa fachada para satisfazer a sua necessidade de estudar. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- about module -->
            <div class="col-md-3 text-center">
                <div class="mz-module-about">
                    <i class="fa fa-briefcase ot-circle"></i>
                    <h3>Maleta de viagem!</h3>
                    <p>Este é um símbolo de viagem. Talvez não signifique nada mas pelo menos serve para encher linguiça</p>
                </div>
            </div>
            <!-- end about module -->
            <!-- about module -->
            <div class="col-md-3 text-center">
                <div class="mz-module-about">
                    <i class="fa fa-photo ot-circle"></i>
                    <h3>Imagem de Landscape</h3>
                    <p>Aqui, na AutoDidata trabalhamos com imagens, também</p>
                </div>
            </div>
            <!-- end about module -->
            <!-- about module -->
            <div class="col-md-3 text-center">
                <div class="mz-module-about">
                    <i class="fa fa-camera-retro ot-circle"></i>
                    <h3>Fotografia</h3>
                    <p>Lembra quando falamos que trabalhamos com imagens? Pois é! Fabricamos a logo!</p>
                </div>
            </div>
            <!-- end about module -->
            <!-- about module -->
            <div class="col-md-3 text-center">
                <div class="mz-module-about">
                    <i class="fa fa-cube ot-circle"></i>
                    <h3>TESSERACT!</h3>
                    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit</p>
                </div>
            </div>
            <!-- end about module -->
        </div>
    </div>
    <!-- /.container -->
</section>

<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Cursos</h2>
                    <p>Cursos que oferecemos:</p>
                </div>
            </div>
        </div>
        <div class="row row-0-gutter">
            <!-- start portfolio item -->

            <!-- start -->
            <?php
            if (!empty($courses)) {
                foreach ($courses as $course) { ?>
                    <div class="col-md-4">
                        <div class="ot-portfolio-item">
                            <figure class="effect-bubba">
                                <div style="width: 350px; height: 250px;">
                                    <!-- <img src="<?= base_url() . $course["course_img"] ?>" alt="<?= $course['course_name'] ?>" class="img-responsive center-block" style="width: 100%; height: 100%; object-fit: cover;" /> -->
                                    <img src="<?= base_url() . $course["course_img"] ?>" alt="<?= $course['course_name'] ?>" class="img-responsive center-block" style="width: 100%; height: 100%; object-fit: fill;" />
                                    <figcaption>
                                        <h2><?= $course['course_name'] ?></h2>
                                        <h2><?= $course['course_duration'] ?></h2>
                                        <a href="#" data-toggle="modal" data-target="#course_<?= $course["course_id"] ?>"></a>
                                    </figcaption>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <div class="modal fade" id="course_<?= $course["course_id"] ?>" tabindex="-1" role="dialog" aria-labelledby="Modal-label-1">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="X"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="Modal-label-1"><?= $course["course_name"] ?></h4>
                                </div>

                                <div class="modal-body">
                                    <img src="<?= base_url() . $course["course_img"] ?>" alt="img01" class="img-responsive center-block" />
                                    <div class="modal-works"><span>Duração: <?= intval($course["course_duration"]) ?> (h)</span></div>
                                    <p><?= $course["course_description"] ?></p>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php } // FOREACH
            } // IF 
            ?>
            <!-- end -->
        </div>
    </div><!-- end container -->
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Quem somos</h2>
                    <p>Um equipe especializada.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-lg-12 text-center"> -->
            <!-- <div class="owl-partners owl-carousel"> -->
            <?php
            if (!empty($team)) {
                foreach ($team as $member) { ?>
                    <div class="col-md-3">
                        <a href="#" data-toggle="modal" data-target="#member_<?= $member["member_id"] ?>">
                            <div class="team-item">
                                <div class="team-image">
                                    <img src="<?= base_url() . $member["member_photo"] ?>" class="img-responsive img-circle" alt="author">
                                </div>
                                <div class="team-text">
                                    <h3><?= $member["member_name"] ?></h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="modal fade" id="member_<?= $member["member_id"] ?>" tabindex="-1" role="dialog" aria-labelledby="Modal-label-1">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="Modal-label-1"><?= $member["member_name"] ?></h4>
                                </div>

                                <div class="modal-body">
                                    <img src="<?= base_url() . $member["member_photo"] ?>" alt="img01" class="img-responsive center-block" />
                                    <p><?= $member["member_description"] ?></p>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php } // FOREACH
            } // IF 
            ?>
            <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>
</section>
<section id="contact" class="dark-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Fale conosco</h2>
                    <p>Se você tiver dúvidas nós podemos ajudar</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="section-text">
                    <h4>Nosso escritório</h4>
                    <p>Baker Street 221b</p>
                    <p><i class="fa fa-phone"></i> +1 636-555-3226</p>
                    <p><i class="fa fa-envelope"></i> f.flintstone@slaterockandgravel.net</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="section-text">
                    <h4>Cronograma</h4>
                    <p><i class="fa fa-clock-o"></i> <span class="day">Dias da Semana:</span><span>17:49 - 03:00</span></p>
                    <p><i class="fa fa-clock-o"></i> <span class="day">Domingo:</span><span>06:06 - 17:49</span></p>
                    <p><i class="fa fa-clock-o"></i> <span class="day">Quartas:</span><span>Vestimos rosa</span></p>
                </div>
            </div>
            <div class="col-md-6">
                <form name="sentMessage" id="contactForm" novalidate="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Sua Nome *" id="name" required="" data-validation-required-message="Por favor, digite seu nome.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Sua Email *" id="email" required="" data-validation-required-message="Por favor, digite seu e-mail">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Sua Mensagem *" id="message" required="" data-validation-required-message="Por favor, digite sua mensagem"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn">Enviar Mensagem</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<p id="back-top">
    <a href="#top"><i class="fa fa-angle-up"></i></a>
</p>