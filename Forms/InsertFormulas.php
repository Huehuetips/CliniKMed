<?php 
    require_once "models\Select.model.php";
    require 'includes/DataGrid.php';
    $Componentes_select =Select::Sel_Componentes("Sel");
    $Medidas_select =Select::Sel_medidas("Sel");
    // print_r($Componentes_select);
    

    if (isset($_POST['modify_form'])) {

        $Nombre_formula = isset($_POST['Nombre_formula']) ? $_POST['Nombre_formula'] : "";

        $_SESSION['Formula'][]="";
          
        print_r($_SESSION['Formula']);

    }else{
        
        $_SESSION['Formula']=array();
    }


?>

<div class="container" id="Form" >
    <center>
        <u><h3 style="margin: 1rem;">FORMULAS</h3></u>
        <div class="container">
            <!-- <div class="row"> -->
                <div class="row">
                    <div class="col-lg-6 componentes">
                        <form action="" method="post">   
                            <b>AGREGAR COMPONENTES</b>
                            <div class="row">
                                <input type="text" class="form-control margin7" name="Nombre_componente" placeholder="NOMBRE" style="width: 95%;  margin-left:12px ;"  required>
                            </div>
                            <div class="row">
                                <input type="number" class="form-control margin7" name="Concentracion_componente" placeholder="CONCENTRACION" style="width: 80%; margin-left:12px ;" required>

                                <select name="Medida" class="form-control" style="height: 38px; width: 15%;" required>
                                    <option hidden selected value=""></option>

                                    <?php foreach ($Medidas_select as $Row_medidas) {?>

                                    <option value="<?php echo $Row_medidas->abreviatura_medida ?>"><?php echo $Row_medidas->abreviatura_medida; ?></option>

                                     <?php  } ?>
                                </select>
                            </div>

                            <button type="submit" id="submit" name="Submit_new_compo" class="btn btn-dark btn-sm margin7" style="width: 55px; height: 30px; font-size: 9px ;">GUARDAR</button>                    
                        </form>
                    </div>
                <!-- </div> -->
            </div>

        </div>
    </center>
</div>