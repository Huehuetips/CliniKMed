<?php 
    require_once "models\Select.model.php";

    $Componentes_select =Select::Sel_Componentes("Sel");
    $Medidas_select =Select::Sel_medidas("Sel");
    $array_formula = array(array(1,2),array(3,4));
?>


<div class="container" id="Form" >
    <center>
        <u><h3 style="margin: 1rem;">FORMULAS</h3></u>
        <div class="container formulas"> 
            <div >


                <!-- ABRIR FORMULARIO PARA AGREGAR NUEVO COMPONENTE -->

                <button type="button" id="abrirpopup" name="Ventana Emergente" class="btn btn-dark btn-sm" style="min-width: 30%; height: 70px;">AGREGAR COMPONENTES</button>

                <!---------------------------------------------------->
                

                <br><br>


                <div id="Crea_formula" class="table-responsive overflow-auto" style="height: 400px;" >
                    <table class="table table-hover table-xsm">  <!-- table-striped -->


                        <thead style=" background-color:rgba(0, 0, 150,0.2); " class="thead-dark"> 

                            <tr>
                                <th scope="col"><b>ID</b></th>
                                <th scope="col"><b>COMPONENTE</b></th>
                                <th scope="col"><b>CONCENTRACION</b></th>
                            </tr>
                        
                        </thead>



                        <tbody style="font-size: 14px; height: 100px;">

                            <?php 

                            foreach ($Componentes_select as $Row_Componentes) {
                                
                            ?>
          
                                <tr id="modify_form"  data-id='<?php echo json_encode($Row_Componentes); ?>' >

                                    <td><?php echo $Row_Componentes->Id_Compo ?></td>
                                    <td style="text-transform: capitalize;"> <b> <?php echo $Row_Componentes->Nombre_componente ?> </b></td>
                                    <td><?php echo $Row_Componentes->Concentracion_componente; echo $Row_Componentes->medida?></td>

                                </tr>

                            <?php 

                            } 
                            
                            ?>

                        </tbody>




                    </table>
                    <br><br>
                </div>




            </div>
            <br><br>
            <div class="">
                <form action="" method="post" class="table-responsive">   

                    <b>NOMBRE DE LA NUEVA FORMULA</b>
    
                    <input type="text" class="form-control margin7" name="Nombre_formula" placeholder="FORMULA" style="width: 95%;  margin-left:12px ; margin-bottom: 8px;"  required><br>


                    <div id="mostrar"></div>



                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                                <td><b>COMPONENTE</b></td>
                                <td><b>CONCENTRACION</b></td>
                                <td><b>QUITAR DE FORMULA</b></td>
                                
                            
                            </tr>
                        </thead>



                        <tbody id="nuevo_componente">
                            


                        </tbody>






                    </table>
                    <button type="submit" name="submit_form" class="btn btn-dark btn-sm">GUARDAR</button><br><br>
                </form>
            </div>
        </div>
        <br>
        <div class="overlay" id="overlay">
        <form action="" method="post" class="Form-popup" class="popup"> 
            <button type="button" class="btn-cerrar-popup" id="cerrar-popup" aria-label="abrir menú"><i class="fas fa-times"></i></button>  
            <b>AGREGAR COMPONENTES</b>
            <input type="text" class="form-control margin7" name="Nombre_componente" placeholder="NOMBRE" required>
            <div class="row">
                <input type="number" class="form-control margin7" name="Concentracion_componente" placeholder="CONCENTRACION" style="width: 74%; margin-left:12px ;" required>

                <select name="Medida" class="form-control" style="height: 38px; width: 20%;" required>
                    <option hidden selected value=""></option>

                    <?php foreach ($Medidas_select as $Row_medidas) {?>

                    <option value="<?php echo $Row_medidas->abreviatura_medida ?>"><?php echo $Row_medidas->abreviatura_medida; ?></option>

                    <?php  } ?>

                </select>
            </div>
            
            <button type="submit" id="submit" name="Submit_new_compo" class="btn btn-dark btn-sm margin7" style="width: 55px; height: 30px; font-size: 9px ;">GUARDAR</button>
        </form>
    </div>  
    </center>
      

</div>


<?php 

include ('includes/nullrefresh.php');
if (isset($_POST['Submit_new_compo'])) {


    $Nombre_componente = isset($_POST['Nombre_componente']) ? ucfirst( $_POST['Nombre_componente']) : "";
    $Concentracion_componente = isset($_POST['Concentracion_componente']) ? $_POST['Concentracion_componente'] : "";
    $Medida = isset($_POST['Medida']) ? $_POST['Medida'] : "";


    require_once "models/Insert.model.php";
    $response =Ins_model::Ins_compo($Nombre_componente,$Concentracion_componente,$Medida);


    include_once "includes/Recargar.php";
}

 ?>
<script>





    ///////////////////////////////////////////////////////
    // mecanismo para abrir el formulario de componentes //
    ///////////////////////////////////////////////////////
    

    var abrirpopup = document.getElementById("abrirpopup"),
        overlay = document.getElementById("overlay"),
        popup = document.getElementById("popup"),
        cerrar_popup_button = document.getElementById("cerrar-popup");
        cerrar_popup_overlay = document.getElementById("overlay");

    abrirpopup.addEventListener('click',function(){
        overlay.classList.add('active')
    });


    cerrar_popup_button.addEventListener('click', cerrar_popup);
    // cerrar_popup_overlay.addEventListener('click', cerrar_popup);

    function cerrar_popup(){
        overlay.classList.remove('active')
    } 




    //////////////////////////////////////////////////
    // funcion para enviar datos de un array a otro //
    //////////////////////////////////////////////////

    $(document).on("dblclick", "#modify_form", function (e) {

        var id = $(this).data("id");
        console.log(id);
        id.forEach(function(element){
            console.log(element);
        });
                


        // $.ajax({
        //     url : 'includes/NuevaFormula.php',
        //     // dataType : 'json',
        //     data : { id : id},
        //     type : 'POST',
        //     success : function(response) {
        //         // $("#nuevo_componente").html(response);
        //         // var array = ["uno", "dos"] 
        //         // response.forEach( element => {
        //           console.log(response);
        //         // });
                
        //     },
        //     error: function () {
        //         console.log("algo salio mal");
        //       }
        // });

    })







</script>

