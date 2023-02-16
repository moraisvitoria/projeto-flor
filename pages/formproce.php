<?php
    require_once './head.php'; 
    require_once './conexao.php';

  
    

?>

<form method="POST" action="controleproduto.php" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Cadastro de procedimento</h3>
                </div>
        </div>

        <div class="row">
                       
            <div class="col-md-8">
                <div class="form-group">
                    <label for="idprocedimento">idprocedimento</label>
                    <input type="text" class="form-control" name="idprocedimento">    
                </div>
            </div>   
            
            <div class="col-md-2">
                <div class="form-group">
                    <label for="nomeprocedimento">nomeprocedimento</label>
                    <input type="text" class="form-control" name="nomeprocedimento">    
                </div>
            </div>   
            
            <div class="col-md-2">
                <div class="form-group">
                    <label for="descricao">descricao</label>
                    <input type="text" class="form-control" name="descricao">    
                </div>
            </div>  
</div>

<div class="row">

            
            

            <div class="col-md-8">
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <select name="categoria" class="form-control">
                       
                        <option value="facial"> Facial </option>
                        <option value="facial"> Facial </option>
                        <option value="facial"> Facial </option>                     

                    </select>                    
                </div>
            </div> 
</div>

<div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="foto">Imagem</label>
                    <input type="file" class="form-control" name="foto">    
                </div>
            </div>  
</div>

<div class="row">
            <div class="col-md-12 text-right">
                <div class="form-group">
                   
                    <input type="submit" class="btn btn-primary" value="Enviar" name="btncad">
                </div>  
            </div>

</div>
</form>

<?php
    require_once 'footer.php';
?>


