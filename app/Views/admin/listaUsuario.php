
<?= $this->extend('templates/layout'); ?>

<?= $this->section('conteudo') ?>

<?php

use App\Lib\Formulario;

?>

<div class="container" style="margin-top: 200px;">    

    <?= Formulario::exibeMensagem() ?>

    <div class="row">

        <div class="col-7">

            <h3>Lista de Usuários</h3>

        </div>
        
        <div class="col-4">
        </div>

        <div class="col-1 text-right">
            
            <a href="<?= SITEURL . "Usuario/form/0/new" ?>" title="Novo" class="btn-crud">
                <i class="fa fa-file"></i>
            </a>

        </div>

    </div>
    
    <div class="row">

        <div class="col-12">

            <table class="table table-striped table-hover table-condensed table-sm" id="tbListaUsuario">
                
                <thead class="thead-light">
                    <tr>
                        <th>Status</th>
                        <th>Código</th>
                        <th>Login</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Nível</th>
                        <th style="width: 8%;">Opções</th>
                    </tr>
                </thead>

                <tbody>
                    
                    <?php
                    
                    if ( $dbDados ) {
                    
                        foreach ($dbDados as $key => $value) {
                            ?>
                    
                            <tr>
                                <td class="text-center"><?= Formulario::setDescricao($value->statusRegistro, ['1' => 'Inativo', '2' => 'Ativo']) ?></td>
                                <td class="text-center"><?= $value->id ?></td>
                                <td><?= $value->login ?></td>
                                <td><?= $value->nome ?></td>
                                <td><?= $value->email ?></td>
                                <td><?= Formulario::setDescricao($value->nivel, ["1" => 'Administrador', "2" => 'Usuário'] ) ?></td>
                                <td>
                                    <a href="<?= SITEURL ?>Usuario/form/<?= $value->id ?>/view" title="Visualizar" class="btn-crud"><i class="fa fa-low-vision"></i></a>
                                    <a href="<?= SITEURL ?>Usuario/form/<?= $value->id ?>/update" title="Alterar" class="btn-crud"><i class="fa fa-clipboard"></i></a>
                                    <a href="<?= SITEURL ?>Usuario/form/<?= $value->id ?>/delete" title="Excluir" class="btn-crud"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            
                            <?php
                        }
                        
                    } else {
                        ?>
                        <tr>
                            <td colspan="7">Nenhum registro localizado...</td>
                        </tr>
                        <?php
                    }
                    ?>
                    
                </tbody>        

            </table>
            
        </div>

    </div>

      
    
</div>

</main>

<<?= $this->endSection() ?>