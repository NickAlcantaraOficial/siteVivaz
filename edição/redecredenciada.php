<?php
include 'cabecalho.php';
?>
<!-- Start Appointment Area -->
<section class="appointment-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="appointment-content">
            <h2>Rede Credenciada</h2>
            <form>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <div class="icon"> <i class="fas fa-user-md"></i> </div>
                            <label>Selecione a especialidade</label>
                            <select id="select-especialidade">
                                <option selected="selected">Todas</option>
                                <?php
                                $file = __DIR__ . '/assets/json/especialidades.json';
                                $content = file_get_contents($file);
                                $especialidades = json_decode($content, true, 512, JSON_UNESCAPED_UNICODE);
                                foreach ($especialidades as $esp) {
                                    echo '<option>' . $esp . '</option>';
                                }
                                ?>
                            </select>
                            <script src="assets/js/nice-select2.js"></script>
                            <script>
                            // selecionar javascript
                            var options = {
                                searchable: true
                            };
                            NiceSelect.bind(document.getElementById('select-especialidade'), options);
                            </script>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <div class="icon"> <i class="fas fa-user-md"></i> </div>
                            <label>Selecione o tipo de exame</label>
                            <select id="select-exame">
                                <option selected="selected">Todas</option>
                                <?php
                                $file = __DIR__ . '/assets/json/exames.json';
                                $content = file_get_contents($file);
                                $exames = json_decode($content, true, 512, JSON_UNESCAPED_UNICODE);
                                foreach ($exames as $exa) {
                                    echo '<option>' . $exa . '</option>';
                                }
                                ?>
                            </select>
                            <script src="assets/js/nice-select2.js"></script>
                            <script>
                            // Nice Select JS
                            var options = {
                                searchable: true
                            };
                            NiceSelect.bind(document.getElementById('select-exame'), options);
                            </script>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <div class="icon"> <i class="fas fa-map-marked-alt"></i> </div>
                            <label>Selecione a localidade</label>
                            <select id="select-localidade">
                                <option selected="selected">Todas</option>
                                <option>Águas Claras</option>
                                <option>Águas Lindas - GO</option>
                                <option>Asa Norte</option>
                                <option>Asa Sul</option>
                                <option>Ceilândia</option>
                                <option>Cidade Ocidental - GO</option>
                                <option>Cruzeiro Velho</option>
                                <option>Estrutural</option>
                                <option>Gama</option>
                                <option>Guará</option>
                                <option>Luziânia</option>
                                <option>Novo Gama - GO</option>
                                <option>Paranoá</option>
                                <option>Pedregal</option>
                                <option>Planaltina</option>
                                <option>Recanto das Emas</option>
                                <option>Riacho Fundo</option>
                                <option>Samambaia</option>
                                <option>Santa Maria</option>
                                <option>Santo Antônio do Descoberto - GO</option>
                                <option>São Sebastião</option>
                                <option>Sobradinho</option>
                                <option>Sobradinho 2</option>
                                <option>Taguatinga</option>
                                <option>Valparaíso - GO</option>
                            </select>
                            <script>
                            // Nice Select JS
                            var options = {
                                searchable: true
                            };
                            NiceSelect.bind(document.getElementById('select-localidade'), options);
                            </script>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="submit-btn">
                            <button id="clinicas-search-btn" class="btn btn-primary" type='button'>Pesquisar <i
                                    class="flaticon-right-chevron"></i></button>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div id="clinicas-list">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End Appointment Area -->
<!-- Começo da area de Feedbacks -->
<section class="feedback-area ptb-100 ">
    <div class="container">
        <div class="section-title"> <span class="title-section">Depoimentos</span>
            <h2 class="depoimentos">O que nossos clientes falam sobre nós.</h2>
        </div>
        <div class="feedback-slides">
            <div class="client-thumbnails">
                <div>
                    <div class="item">
                        <div class="img-fill"><img src="assets/img/client-image/1.jpg" alt="client"></div>
                    </div>
                    <div class="item">
                        <div class="img-fill"><img src="assets/img/client-image/2.jpg" alt="client"></div>
                    </div>
                    <div class="item">
                        <div class="img-fill"><img src="assets/img/client-image/3.jpg" alt="client"></div>
                    </div>
                    <div class="item">
                        <div class="img-fill"><img src="assets/img/client-image/4.jpg" alt="client"></div>
                    </div>
                    <div class="item">
                        <div class="img-fill"><img src="assets/img/client-image/1.jpg" alt="client"></div>
                    </div>
                    <div class="item">
                        <div class="img-fill"><img src="assets/img/client-image/2.jpg" alt="client"></div>
                    </div>
                    <div class="item">
                        <div class="img-fill"><img src="assets/img/client-image/3.jpg" alt="client"></div>
                    </div>
                    <div class="item">
                        <div class="img-fill"><img src="assets/img/client-image/4.jpg" alt="client"></div>
                    </div>
                </div>
            </div>
            <div class="client-feedback">
                <div>
                    <div class="item">
                        <div class="single-feedback">
                            <h3>Sra. Márcia Bicalho</h3>
                            <p>É um plano assim, que ajuda muito, muito. E é um valor que cabe no bolso de uma pessoa
                                mais simples, né? Que precisa. Então é muito bom, gostei demais e gosto. E uso, uso
                                muito o Plano Vivaz.</p>
                            <a href="https://www.youtube.com/watch?v=iaKHZhWheck"
                                class="btn btn-light popup-youtube">Assista o depoimento <i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-feedback">
                            <h3>Sra. Nayana</h3>
                            <p>O atendimento, que é muito bom, que a gente realmente não espera. Que todas as vezes que
                                eu vim e que a minha mãe veio, foi no horário marcado. Porque geralmente tem esse
                                negócio, “tá marcado, mas espera”. E eu acho que isso conta muito.</p>
                            <a href="https://www.youtube.com/watch?v=ycZVF136MC4"
                                class="btn btn-light popup-youtube">Assista o depoimento <i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-feedback">
                            <h3>Sra. Érica</h3>
                            <p>Toda vez que eu precisei, fui atendida. Foi rápido. Comecei com fono, eu precisei de
                                ginecologia, precisei de neurologia, clínico, cardiologista para minha avó, várias
                                especialidades.</p>
                            <a href="https://www.youtube.com/watch?v=tVvw_RHSoPI"
                                class="btn btn-light popup-youtube">Assista o depoimento <i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-feedback">
                            <h3>Sra. Maria Cavalcante </h3>
                            <p>Eu já me consultei com o cardiologista. Ele me pediu uns exames, eu fiz, deu dilatamento
                                no coração. O ortopedista fez até uma infiltração do meu braço, eu não aguentava
                                levantar o braço, ele marcou e eu fiz essa infiltração. Não é difícil, é fácil. Os
                                exames... Gostei muito dos médicos, de tratar. A minha filha já usa o VIVAZ, ja fez exame Ginecológico</p>
                            <a href="https://www.youtube.com/watch?v=ZjC_nORcgHc"
                                class="btn btn-light popup-youtube">Assista o depoimento <i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <button class="prev-arrow slick-arrow"> <i class='flaticon-left-arrow'></i> </button>
                <button class="next-arrow slick-arrow"> <i class='flaticon-arrow-pointing-to-right'></i> </button>
            </div>
        </div>
    </div>
</section>

<!-- WhatsApp Botão flutuante-->
<a class="whats-link" rel="stylesheet" href="https://wa.me/message/NKTQWFSZ5JPZL1" target="_blank" title="Fale conosco pelo WhatsApp.">
<i class="fab fa-whatsapp"></i>
</a>
<!-- fim da area de Feedback -->
<?php
include 'rodape.php';
?>