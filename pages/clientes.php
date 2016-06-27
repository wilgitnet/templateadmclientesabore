<?php require_once('controller/clientes_controller.php'); ?>
<?php require_once('header.php'); ?>
<script src="../js/busca.js"></script>
<script>
    function jsExcluir(cliente)
    {        
        document.formClienteListar.action = "clientes.php";
        document.getElementById("clienteID").value = cliente;
        document.getElementById("formClienteListar").submit();
    }

</script>
<div id="page-wrapper"><br>
    <h1 class="page-header"> <i class="fa fa-group fa-fw"></i> Clientes 
    </h1>
    <div class="row">
        <div class="col-lg-3"> 
           <div class="form-group">
            <select class="form-control" required="required" id="clientes_busca">
                <option value="" style="display:none">Escolha um Método de busca</option>
                <option value="nome" id="nome">Nome</option>
                <option value="email" id="email">Email</option>
                <option value="telefone" id="telefone">Telefone</option>
            </select>
        </div> 
    </div>
    <div class="col-lg-3">
        <input class="form-control" placeholder="Nome" id="inputusername" style="display:none">
        <input class="form-control" placeholder="Email" id="inputemail" style="display:none">
        <input class="form-control" placeholder="Telefone do Cliente (numeros)" id="inputnumber" style="display:none">
    </div>  
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <tr style="background-color: #2c3e50; color: white;">
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Detalhes</th>
                </tr>
               <form id="formClienteListar" name="formClienteListar" action="clientes.php" method="post">
                <?php foreach($listaClientes['dados'] as $cliente){?>
                    <tr>
                        <td><?php echo $cliente['Usuario']['nome']; ?></td>
                        <td><?php echo $cliente['Usuario']['email']; ?></td>
                        <td><?php echo $cliente['Usuario']['telefone']; ?></td>
                        <td>
                            <a href="javascript:void(0);" onclick="jsExcluir('<?PHP echo $cliente['Usuario']['id'] ?>');">
                                <i class="fa fa-trash-o fa-fw"></i>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#user"><i class="fa fa-search-plus fa-fw"></i></a>

                        </td>
                    </tr>
                <?php } ?>
                <input type="hidden" name="clienteID" value="" id="clienteID">
                </table>
                
            </div>
        </div>
    </div>  





    <div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2c3e50; color: white;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel" align="center">Lucas Barbosa de Alencar</h4>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <div align="center">
                             Tipo Documento : F <br>
                             Documento : 12432414 <br>
                             Email : lelo245@hotmail.com<br>
                             Senha : xxxxxxxxx <br>
                             CEP : 07312-000 <br>
                             Estado : São Paulo <br>
                             Cidade : São Paulo <br>
                             Endereço : Rua Almeda santos <br>
                             Bairro : Eldorado <br>
                             Número : 124 <br>
                             Complemento : Vazio <br>
                             Telefone : 4657-5015 <br>
                             Celular : 21940124 <br>

                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>







<?php require_once('footer.php'); ?>