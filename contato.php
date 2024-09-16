<?php include 'header.php'; ?>

    <main>
        <div class="container-fluid contato-fluid">
            <div class="container ">
                <div class="row justify-content-center ">
                    <div class="col-11 col-lg-8 shadow-lg contato">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10">
                                <h2 class="text-center">Contato</h2>
                                <form action="envia_fale.php" method="post" name="form">
                                    <!--Nome-->
                                    <label for="nome-form" class="form-label">Nome</label>
                                    <input type="name" class="form-control" name="nome-form" id="nome-form"
                                        placeholder="Seu Nome Completo">

                                    <!--E-mail-->
                                    <label for="email-form" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email-form" id="email-form"
                                        aria-describedby="emailHelpId" placeholder="Digite aqui seu e-mail">


                                    <!--Telefone-->
                                    <label for="telefone-form" class="form-label">Telefone</label>
                                    <input type="number" class="form-control" name="telefone-form" id="telefone-form">

                                    <!--Endereco-->
                                    <label for="endereco-form" class="form-label">Endereço</label>
                                    <input type="text" class="form-control" name="endereco-form" id="endereco-form">



                                    <!--Assunto-->
                                    <label for="nome-form" class="form-label">Assunto</label>
                                    <input type="text" class="form-control" name="assunto-form" id="assunto-form"
                                        placeholder="Motivo do Contato">

                                    <div class="mb-3">
                                        <label for="" class="form-label">Conteúdo</label>

                                        <textarea class="form-control" name="" id="conteudo-form" rows="3"
                                            placeholder="Descreva sua mensagem..."></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="setores" class="form-label">Setor</label>
                                        <select class="form-select form-select-lg" name="" id="setores">
                                            <option selected>Comercial</option>
                                            <option value="">Atacado de Aço</option>
                                            <option value="">Cachaça Poco da Pedra</option>
                                            <option value="">CD Bahia</option>
                                            <option value="">CD Minas</option>
                                            <option value="">Compras</option>
                                            <option value="">Contabilidade</option>
                                            <option value="">Controladoria</option>
                                            <option value="">Cozinha</option>
                                            <option value="">Financeiro</option>
                                            <option value="">Hotel Radar</option>
                                            <option value="">Logística / Transportes</option>
                                            <option value="">Manutenção</option>
                                            <option value="">Marketing</option>
                                            <option value="">Posto Radar</option>
                                            <option value="">Pré-moldados</option>
                                            <option value="">Recursos Humanos</option>
                                            <option value="">Televendas</option>
                                            <option value="">TI</option>
                                            <option value="">Varejo Caculé</option>
                                            <option value="">Varejo Caetité</option>
                                            <option value="">Varejo Ibiassucê</option>
                                            <option value="">Varejo Licínio</option>
                                        </select>
                                    </div>


                                    <div class="text-center ">
                                        <!-- Submit button -->
                                        <input type="submit" name="submit" value="Enviar" class="btn btn-primary"
                                            style="background-color: #cc0000; width: 50%;"></input>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

