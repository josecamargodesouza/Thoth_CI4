<?= $this->extend('templates/layout'); ?>

<?= $this->section('conteudo') ?>

<?php

use App\Lib\Formulario;

?>

<div class="container" style="margin-top: 200px;">
    
    <div class="row">

        <div class="col-10">

            <h3>Cadastro de Usuário - <?= Formulario::setFormSubTitulo($this->dados['acao']); ?><h3>

        </div>
        
        <div class="col-2" style="padding-top: 25px; text-align: right;">

            <a href="<?= SITEURL. "Usuario" ?>" title="Lista de Usuário"><i class="ti-layout-grid3 custom_botao"></i></a>

        </div>

    </div>
    
    <form action="<?= SITEURL . "Usuario/" . $this->dados['acao'] ?>" 
        method="post" class="form" 
        name="formUsuario" id="formUsuario">
        
        <div class="row">

            <div class="control-group col-12 col-sm-2">

                <div class="control-label">
                    <label for="id">Código</label>
                </div>

                <div class="controls">

                    <input type="text" class="form-control" 
                        id="id" name="id" 
                        readonly="readonly" 
                        value="<?= Formulario::setValue( "id", $dbDados) ?>" />

                </div>

            </div>

            <div class="control-group col-xs-12 col-sm-4">

                <div class="control-label">
                    <label for="statusRegistro">Status</label>
                </div>

                <div class="controls">

                    <select class="form-control" id="statusRegistro" name="statusRegistro" required="required">
                        <option value=""  <?= ( Formulario::setValue( "statusRegistro", $dbDados) == ""  ? 'selected="selected"' : "" ) ?>>Selecione o Status</option>
                        <option value="1" <?= ( Formulario::setValue( "statusRegistro", $dbDados) == "1" ? 'selected="selected"' : "" ) ?>>Inativo</option>
                        <option value="2" <?= ( Formulario::setValue( "statusRegistro", $dbDados) == "2" ? 'selected="selected"' : "" ) ?>>Ativo</option>
                    </select>                    

                </div>

            </div>            

            <div class="control-group col-xs-12 col-sm-6">

                <div class="control-label">
                    <label for="nivel">Nível</label>
                </div>

                <div class="controls">

                    <select class="form-control" id="nivel" name="nivel" required="required">
                        <option value=""  <?= ( Formulario::setValue( "nivel", $dbDados) == ""  ? 'selected="selected"' : "" ) ?>>Selecione o Nível</option>
                        <option value="1" <?= ( Formulario::setValue( "nivel", $dbDados) == "1" ? 'selected="selected"' : "" ) ?>>Administrador</option>
                        <option value="2" <?= ( Formulario::setValue( "nivel", $dbDados) == "2" ? 'selected="selected"' : "" ) ?>>Usuário</option>
                    </select>                    

                </div>

            </div>            

            <div class="control-group col-12 col-sm-6">

                <div class="control-label">
                    <label for="nome">Nome</label>
                </div>

                <div class="controls">

                    <input type="text" class="form-control" id="nome" name="nome" 
                        placeholder="Informe Nome Completo" maxlength="100" required="required" 
                        value="<?= Formulario::setValue("nome", $dbDados) ?>" />

                </div>

            </div>

            <div class="control-group col-12 col-sm-6">

                <div class="control-label">
                    <label for="email">E-mail</label>
                </div>

                <div class="controls">

                    <input type="mail" class="form-control" id="email" name="email" 
                        placeholder="seuemail@dominio.com.br" maxlength="100" required="required" 
                        value="<?= Formulario::setValue("email", $dbDados) ?>" />

                </div>

            </div>

            <div class="control-group col-12 col-sm-6">

                <div class="control-label">
                    <label for="login">Login</label>
                </div>

                <div class="controls">

                    <input type="text" class="form-control" id="login" name="login" 
                        placeholder="Informe Login" maxlength="100" required="required" 
                        value="<?= Formulario::setValue("login", $dbDados) ?>" />

                </div>

            </div>

            <div class="control-group col-12 col-sm-6">

                <div class="control-label">
                    <label for="senha">Senha</label>
                </div>

                <div class="controls">

                    <input type="password" class="form-control" id="senha" name="senha" 
                        placeholder="Informe Senha" maxlength="100" />

                </div>

            </div>

        </div>   
                
        <div class="row">
            <div class="control-group col-12">
                &nbsp;
            </div>
        </div>

        <div class="row">
            
            <div class="control-group col-12">
                <a href="<?= SITEURL . "Usuario" ?>" class="btn btn-default formbutton">Voltar</a>
                <?php 
                    if ( $this->dados['acao'] != "view" ) {
                        ?>
                        <button name="btEnviar" id="btEnviar" class="btn btn-default" type="submit">Gravar</button>
                        <?php
                    }
                ?>
            </div>
            
        </div>
        
    </form> 
        
</div>

</main>

<<?= $this->endSection() ?>