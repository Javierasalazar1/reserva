<?php 
    include("conexion.php")
?>
<?php 
    include("incluye/cabeza.php")
?>


<div class= "contenedor p-4 " >
    <!-- fila -->
    <div class="row">
        <div class="col-md-4">
            <div class="tarjeta-cuerpo">
                <form action="crud/save.php" method="POST">
                    <div class="form-group">
                      
                      <input type="text" name="title" class="form-control" placeholder="Task title" aria-describedby="helpId" autofocus>
                      
                    </div>

                    <div class="form-group">
                      
                      <input type="text" name="title" class="form-control" placeholder="Task title" aria-describedby="helpId" autofocus>
                      
                    </div>

                    <div class="form-group">
                      
                      <input type="datetime-local" name="Fecha_inicio" class="form-control" placeholder="Task title" aria-describedby="helpId" autofocus>
                      
                    </div>
                
                    <div class="form-group">
                      
                    <input type="datetime-local" name="Fecha_termino" class="form-control" placeholder="Task title" aria-describedby="helpId" autofocus>
                      
                    </div>
                    <input type="submit" class="btn btn-success" name="save" value="Enviar" >
                </form>
            </div>
        </div>
        <div class="col-md-8">


        </div>
    </div>
</div>




    <?php 
    include("incluye/pie.php")
?>