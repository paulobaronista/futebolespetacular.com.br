<div class="container-fluid home">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 logos">
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/logos.png" alt="UEFA CHAMPIONS LEAGUE">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <p class="txt-01">
                    VAI COMEÇAR O MAIOR ESPETÁCULO DA TERRA!<br>
                    <span>UEFA CHAMPIONS LEAGUE 20/21</span>
                </p>
                <p class="txt-02">TRAGA SUA MARCA PARA JOGAR NO MAIOR<br>
                    CAMPEONATO DE CLUBES DO MUNDO.</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <p class="txt-03">
                    CONHEÇA NOSSOS PROJETOS<br>
                    COMERCIAIS DA NOVA TEMPORADA
                </p>
                <p class="txt-04">AUDIêNCIAS ESPETACULARES. NÚMEROS IMPRESSIONANTES.</p>
            </div>
        </div>
    </div>
</div>

<div class="container recordes">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <p class="txt-01">
                RECORDE ATRáS DE RECORDE<br>
                NA UeFA CHAMPIONS LEAGUE 19/20
            </p>
        </div>
    </div>
</div>

<div class="visible-xs">
    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/bg-recordes-mobile.jpg" alt="o super agosto bate três vezes">
</div>

<div class="container-fluid bg-recordes">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-6 col-md-offset-5 col-lg-6 col-lg-offset-5">
                <p class="txt-02">o super agosto bate três vezes o<br>
                    <span>recorde histórico de audiência</span><br>
                    NA UeFA CHAMPIONS LEAGUE!</p>
                <small>Fonte: Kantar IBOPE Media Brasil | Instar. 15 Mercados.12, 14 e 18/08/2020.</small>
                <small>Fut Liga Campeoes Europa Vivo. Rat%. Base com TV Paga: Total de domicílios (9.436.000)</small>
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/datas.png" alt="o super agosto bate três vezes">
            </div>
        </div>
    </div>
</div>










<div class="container-fluid">
    <div class="col-xs-12 col-sm-12 col-md-12 padding-off form">
        <form method="post" role="form" action="<?php echo base_url("contato") ?>">
            <span class="tt-form text-center">
                <p>Preencha os dados abaixo para<br /> um atendimento personalizado!</p>
            </span>
            <div class="group-form">
                <div class="form-group">
                    <label for="nome">Nome*</label>
                    <input id="nome" type="text" class="nome form-control" name="nome" required="required" />
                </div>
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input id="email" type="email" class="email form-control" name="email" required="required" />
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input id="telefone" class="phone form-control" type="tel" name="phone" />
                </div>
                <div class="form-group">
                    <label for="form-mensagem">Mensagem</label>
                    <textarea id="form-mensagem" class="msg form-control" rows="3" name="mss"></textarea>
                </div>
                <button type="submit" class="btn_enviar enviar btn center-block" title="enviar" name="enviar_email" value="enviar">Enviar</button>
            </div>
        </form>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 text-center padding-off">
                <p>COPYRIGHT © - TODOS OS DIREITOS RESERVADOS </p>
            </div>
        </div>
    </div>
</footer>

<?php
if (isset($email_enviado))
    echo $email_enviado;
?>