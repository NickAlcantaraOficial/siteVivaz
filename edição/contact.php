<?php
include 'cabecalho.php';
?>

        <!-- Start Page Title Area -->
        <section class="page-title-area page-title-bg4">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Contato</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>Contato</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Title Area -->

        <!--area onde tem uma mensagem de "entre em contato" -->
        <section class="contact-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="title-section">Entre em contato</span>
                    <h2 class="contato">Nos envie uma mensagem e responderemos o mais rápido possível</h2>
                    <p class="p-contact">Se você tiver um elogio, crítica ou sugestão, nós adoraremos ouví-los.</p>
                </div>
                 <!-- final da parte informativa -->
                 
                   <!-- Inicio do formulário-->
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <div class="contact-form">
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Digite seu nome" placeholder="Nome">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Digite seu e-mail" placeholder="E-mail">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required data-error="Digite seu telefone" class="form-control" placeholder="Telefone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Digite o assunto" placeholder="Assunto">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Escreva sua mensagem" placeholder="Mensagem"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="btn btn-primary">Enviar mensagem <i class="flaticon-right-chevron"></i></button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        <div class="contact-info">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <span>Endereço</span>
                                    Setor de Expansão Econômica Q 11 - Sobradinho, Brasília - DF, 73020-411.
                                </li>

                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <span>Email</span>
                                    <a href="mailto: contato@saudevivaz.com.br">contato@saudevivaz.com.br</a>
                                </li>

                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone-volume"></i>
                                    </div>
                                    <span>Telefone</span>
                                    <a href="tel: +556135914323">(61) 3591-4323</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-map"><img src="assets/img/bg-map.png" alt="image"></div>
        </section>
        <!--Fim Formulário-->
        
<?php
include 'rodape.php';
?>