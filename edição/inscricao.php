<?php
include 'cabecalho.php';
?>
<!-- Start Page Title Area -->
<section class="page-title-area-form page-title-bg4">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Inscrição</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Inscrição</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Page Title Area -->
<!-- Start Checkout Area -->
<section class="checkout-area ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="user-actions"> <i class="fas fa-sign-in-alt"></i> <span>Ja é nosso cliente? <a
                            href="https://associados.saudevivaz.com.br/auth?cliente=b5c7e6c2fdd249e78cacfbe9be869926" target="_blank">Acesse a área do cliente</a></span> </div>
            </div>
        </div>
        <form id="inscricao-form" action="" method="post" novalidate>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="billing-details">
                        <h3 class="title">Formulário de Cadastro</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div id="nome-group" class="form-group">
                                    <label class="form-label">Nome Completo <span class="required">*</span></label>
                                    <input id="nome" maxlength="40" required type="text" class="form-control">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div id="nome-group" class="form-group">
                                    <label class="form-label">Apelido <span class="required">*</span></label>
                                    <input id="apelido" maxlength="40" type="text" class="form-control">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div id="cic-group" class="form-group">
                                    <label class="form-label">CPF ou CNPJ</label>
                                    <input id="cic" placeholder="Digite apenas os números" type="text"
                                        class="form-control">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div id="email-group" class="form-group">
                                    <label class="form-label">Email<span class="required">*</span></label>
                                    <input id="email" maxlength="100" required type="email" class="form-control">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div id="datanasc-group" class="form-group">
                                    <label class="form-label">Data de Nascimento<span class="required">*</span></label>
                                    <input id="datanasc" required type="text" class="form-control">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div id="tel1-group" class="form-group">
                                    <label class="form-label">Telefone 1 <span class="required">*</span></label>
                                    <input id="tel1" maxlength="20" required type="text" class="form-control">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div id="tel2-group" class="form-group">
                                    <label class="form-label">Telefone 2 <span class="required">*</span></label>
                                    <input id="tel2" maxlength="20" type="text" class="form-control">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div id="cep-group" class="form-group">
                                    <label class="form-label">CEP <span class="required">*</span></label>
                                    <input id="cep" maxlength="9" type="text" class="form-control">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-6">
                                <div id="endlogr-group" class="form-group">
                                    <label class="form-label">Endereço <span class="required">*</span></label>
                                    <input id="endlogr" maxlength="40" required type="text" class="form-control">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div id="endnum-group" class="form-group">
                                    <label class="form-label">Número <span class="required">*</span></label>
                                    <input id="endnum" maxlength="11" required type="number" inputmode="numeric"
                                        class="form-control">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div id="endcomp-group" class="form-group">
                                    <label class="form-label">Complemento <span class="required">*</span></label>
                                    <input id="endcomp" maxlength="15" type="text" class="form-control">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div id="bairro-group" class="form-group">
                                    <label class="form-label">Bairro <span class="required">*</span></label>
                                    <input id="bairro" maxlength="20" required type="text" class="form-control">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div id="cidade-group" class="form-group">
                                    <label class="form-label">Cidade <span class="required">*</span></label>
                                    <input id="cidade" maxlength="20" required type="text" class="form-control">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div id="estado-group" class="form-group">
                                    <label class="form-label">Estado <span class="required">*</span></label>
                                    <div class="select-box">
                                        <select id="estado" class="form-select" form="inscricaoForm" required>
                                            <option hidden disabled selected value> -- Selecione um estado -- </option>
                                            <option value="AC">Acre</option>
                                            <option value="AL">Alagoas</option>
                                            <option value="AP">Amapá</option>
                                            <option value="AM">Amazonas</option>
                                            <option value="BA">Bahia</option>
                                            <option value="CE">Ceará</option>
                                            <option value="DF">Distrito Federal</option>
                                            <option value="ES">Espírito Santo</option>
                                            <option value="GO">Goiás</option>
                                            <option value="MA">Maranhão</option>
                                            <option value="MT">Mato Grosso</option>
                                            <option value="MS">Mato Grosso do Sul</option>
                                            <option value="MG">Minas Gerais</option>
                                            <option value="PA">Pará</option>
                                            <option value="PB">Paraíba</option>
                                            <option value="PR">Paraná</option>
                                            <option value="PE">Pernambuco</option>
                                            <option value="PI">Piauí</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="RN">Rio Grande do Norte</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                            <option value="RO">Rondônia</option>
                                            <option value="RR">Roraima</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="SE">Sergipe</option>
                                            <option value="TO">Tocantins</option>
                                        </select>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div id="categoria-group" class="form-group">
                                    <label class="form-label">Selecione Seu Plano/Categoria <span
                                            class="required">*</span></label>
                                    <div class="select-box">
                                        <select id="categoria" class="form-select" form="inscricaoForm" required>
                                            <option hidden disabled selected value> -- Selecione um plano -- </option>
                                            <option value="10">Plano Flex - R$ 59,90</option>
                                            <option value="9">Plano Premium - R$ 99,90</option>
                                        </select>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div id="senha-group" class="form-group">
                                    <label class="form-label">Crie sua senha <span class="required">*</span></label>
                                    <input id="senha" maxlength="8" required type="password" class="form-control">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div id="confirmaSenha-group" class="form-group">
                                    <label class="form-label">Confirme sua senha <span class="required">*</span></label>
                                    <input id="confirmaSenha" maxlength="8" required type="password"
                                        class="form-control">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div id="checktermos-group" class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checktermos">
                                    <label class="form-check-label" for="checktermos">Li e aceito os termos de
                                        utilização <span class="required">*</span></label>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div id="notes-group" class="form-group">
                                    <textarea name="notes" id="notes" cols="30" rows="5" placeholder="Observações"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="order-details">
                        <h3 class="title">Seu Pedido</h3>
                        <div class="order-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Plano Escolhido</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <!-- <td class="product-name"><a href="#">Plano Família</a></td>
                                        <td class="product-total"><span class="subtotal-amount">R$39.90 / Mês</span></td> -->
                                        <td class="product-name"></td>
                                        <td class="product-total"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="payment-box">
                            <div class="payment-method">
                                <!-- <p>Aqui podem vir algumas informações referentes à assinatura como fidelidade, etc.</p> -->
                                <button id="post-inscricao-btn" type="submit" class="btn btn-primary order-btn">Salvar
                                    meus
                                    dados e ir para o
                                    pagamento</button>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div id="msg-confirmacao">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- End Checkout Area -->
<?php
include 'rodape.php';
?>