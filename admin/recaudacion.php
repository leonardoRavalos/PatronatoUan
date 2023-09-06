<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Recaudacion</title>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="estiloAdmin.css">
    <link rel="stylesheet" href="../css/bootstrap.css">

    <link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../assets/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="../assets/css/sweetalert.css">
    <link rel="stylesheet" href="normalize.css">

    <script type="text/javascript" src="../assets/js/plugins/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/jquery.form.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/jquery.validate.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript" src="../assets/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/additional-methods.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/bootstrap.min.js"></script>

<script type="text/javascript">
    function addTrim(){
        var nombre = document.mTrimestre.nombre.value;    
        if(nombre==""){
            alert("No introdujo Nombre de trimestre");
            document.mTrimestre.nombre.focus();
            return false;
        }
        var url = "addTrimestre.php?type=0";
        $.ajax({
            type: "POST",
            url: url,
            data: $("#mTrimestre").serialize(),
            success: function(data) {
                 $('#tbltrim').html(data);
                 swal("Trimestre Guardado", "", "success");
                 document.mTrimestre.nombre.value="";
            }
        });
    }
</script>

<script type="text/javascript">
    function modTrim(idx){
        var nomx = document.getElementById("nombreX");
        alert(nomx)
        return false;
        var nombre = document.mTrimestre.nombre.value;            
        var url = "addTrimestre.php?type=1&id="+idx+"&nombre="+nomx;
        $.ajax({
            type: "POST",
            url: url,
            data: $("#mTrimestreX").serialize(),
            success: function(data) {
                alert(data)
                 $('#tbltrim').html(data);
                 swal("Trimestre Modificado", "", "success");
            }
        });
    }
</script>
<script>
    function eliminar(idx){
    	var opcion = confirm("Desea Eliminar el registro");
       if (opcion == true) {
        var id=idx;
        
        window.location.href = "addTrimestre.php?type=3&id="+id;
    }
    }
    </script>

</head>

<body>

<div class="menufondo">
    <div class="enca-lenguajeb">
       <div align="center">
        </div>
    </div>
    <div class="logo">
        <img src="../imagenes/logo.png" width="250" height="35" id="logovela">
    </div>
    <div class="divmenu">
        <header>
 <div class="menu_bar">
        <a href="#" class="bt-menu"><span class="icon-list"></span>Menu</a>
  </div>
		<nav class="menu">
			<ul>
                <li><a href="bienvenida.php" >Bienvenida</a></li>
				<li><a href="usuarios.php" >Usuarios</a></li>
				<li><a href="noticias.php" >Noticias</a></li>
				<li><a href="formatos.php" >Formatos</a></li>
				<li><a href="recaudacion.php" class="activa">Recaudación</a></li>
				<li><a href="intereses.php" >Interes</a></li>
				<li><a href="numerales.php" >Numerales</a></li>
				<li><a href="privacidad.php" >Aviso de privacidad</a></li>
				<li><a href="infraestructura.php" >Infraestructura</a></li>
				<li><a href="patronato.php" >Patronato</a></li>
				<li><a href="pantalla_principal.php" >Pantalla Principal</a></li>
                <li><a href="secciones.php" >Secciones</a></li>

				<li><a href="logout.php" >Salir</a></li>
			</ul>
		</nav>
</header>
    </div>
</div>

<div id="espacio3"></div>


<div class="container">
    <h1 class="page-header">TRIMESTRES</h1 class="page-header">
        <div class="col col-lg-12 col-md-8 col-sm-12 col-xs-12">
            <div class="form-group" align="right">
                <button type="submit" class="btn btn-primary float-right" id="btnGuardar" data-toggle="modal" data-target="#addTrimestre">
                    <span class="glyphicon glyphicon-plus"></span> Agregar Trimestre
                </button>
            </div>
        </div>

    <div class="row">
        <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table id="tbltrim" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Año</th>
                    <th>Tipo</th>
                    <th>Trimestre</th>
                    <th>Operaciones</th>
                </tr>
                </thead>
                <tbody>


                    <tr>
                        <th><a href="docusTrim.php?id=110">Convocatoria</a></th>                        <th>2023</th>
                        <th>Avance de Gestión Financiera</th>
                        <th>Anual </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=110&nomx=Convocatoria&anio=2023&tipo=avgf&trimestre=0'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(110);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri2" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="110">
                <input type="text" class="form-control" name="nombre" id="nombre" value="Convocatoria">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(110'Convocatoria')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=109">SEVAC</a></th>                        <th>2023</th>
                        <th>SEVAC</th>
                        <th>Primer Trimestre </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=109&nomx=SEVAC&anio=2023&tipo=sevac&trimestre=1'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(109);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri3" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="109">
                <input type="text" class="form-control" name="nombre" id="nombre" value="SEVAC">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(109'SEVAC')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=96">Cuenta Pública 2022</a></th>                        <th>2022</th>
                        <th>Cuenta Pública</th>
                        <th>Anual </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=96&nomx=Cuenta Pública 2022&anio=2022&tipo=cp&trimestre=0'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(96);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri4" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="96">
                <input type="text" class="form-control" name="nombre" id="nombre" value="Cuenta Pública 2022">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(96'Cuenta Pública 2022')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=95">Cuarto trimestre</a></th>                        <th>2022</th>
                        <th>SEVAC</th>
                        <th>Cuarto Trimestre </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=95&nomx=Cuarto trimestre&anio=2022&tipo=sevac&trimestre=4'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(95);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri5" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="95">
                <input type="text" class="form-control" name="nombre" id="nombre" value="Cuarto trimestre">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(95'Cuarto trimestre')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=94">Cuarto trimestre</a></th>                        <th>2022</th>
                        <th>Avance de Gestión Financiera</th>
                        <th>Cuarto Trimestre </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=94&nomx=Cuarto trimestre&anio=2022&tipo=avgf&trimestre=4'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(94);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri6" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="94">
                <input type="text" class="form-control" name="nombre" id="nombre" value="Cuarto trimestre">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(94'Cuarto trimestre')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=93">Primer Informe de Actividades 2022</a></th>                        <th>2022</th>
                        <th>Informe Anual de Actividades</th>
                        <th>Anual </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=93&nomx=Primer Informe de Actividades 2022&anio=2022&tipo=iaa&trimestre=0'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(93);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri7" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="93">
                <input type="text" class="form-control" name="nombre" id="nombre" value="Primer Informe de Actividades 2022">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(93'Primer Informe de Actividades 2022')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=92">Tercer trimestre</a></th>                        <th>2022</th>
                        <th>SEVAC</th>
                        <th>Tercer Trimestre </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=92&nomx=Tercer trimestre&anio=2022&tipo=sevac&trimestre=3'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(92);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri8" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="92">
                <input type="text" class="form-control" name="nombre" id="nombre" value="Tercer trimestre">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(92'Tercer trimestre')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=91">Segundo trimestre</a></th>                        <th>2022</th>
                        <th>SEVAC</th>
                        <th>Segundo Trimestre </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=91&nomx=Segundo trimestre&anio=2022&tipo=sevac&trimestre=2'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(91);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri9" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="91">
                <input type="text" class="form-control" name="nombre" id="nombre" value="Segundo trimestre">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(91'Segundo trimestre')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=90">Cuatro trimestre</a></th>                        <th>2021</th>
                        <th>SEVAC</th>
                        <th>Cuarto Trimestre </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=90&nomx=Cuatro trimestre&anio=2021&tipo=sevac&trimestre=4'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(90);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri10" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="90">
                <input type="text" class="form-control" name="nombre" id="nombre" value="Cuatro trimestre">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(90'Cuatro trimestre')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=89">Avance de Gestión Financiera</a></th>                        <th>2022</th>
                        <th>Avance de Gestión Financiera</th>
                        <th>Anual </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=89&nomx=Avance de Gestión Financiera&anio=2022&tipo=avgf&trimestre=0'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(89);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri11" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="89">
                <input type="text" class="form-control" name="nombre" id="nombre" value="Avance de Gestión Financiera">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(89'Avance de Gestión Financiera')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=86">Programa Anual de Archivo</a></th>                        <th>2022</th>
                        <th>Programa Anual de Archivo</th>
                        <th>Anual </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=86&nomx=Programa Anual de Archivo&anio=2022&tipo=paa&trimestre=0'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(86);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri12" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="86">
                <input type="text" class="form-control" name="nombre" id="nombre" value="Programa Anual de Archivo">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(86'Programa Anual de Archivo')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=81">Informe Anual de Actividades 2021</a></th>                        <th>2021</th>
                        <th>Informe Anual de Actividades</th>
                        <th>Anual </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=81&nomx=Informe Anual de Actividades 2021&anio=2021&tipo=iaa&trimestre=0'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(81);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri13" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="81">
                <input type="text" class="form-control" name="nombre" id="nombre" value="Informe Anual de Actividades 2021">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(81'Informe Anual de Actividades 2021')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=80">Informe Anual de Actividades 2020</a></th>                        <th>2020</th>
                        <th>Informe Anual de Actividades</th>
                        <th>Anual </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=80&nomx=Informe Anual de Actividades 2020&anio=2020&tipo=iaa&trimestre=0'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(80);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri14" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="80">
                <input type="text" class="form-control" name="nombre" id="nombre" value="Informe Anual de Actividades 2020">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(80'Informe Anual de Actividades 2020')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=75">Cuenta Pública 2021</a></th>                        <th>2021</th>
                        <th>Cuenta Pública</th>
                        <th>Anual </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=75&nomx=Cuenta Pública 2021&anio=2021&tipo=cp&trimestre=0'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(75);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri15" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="75">
                <input type="text" class="form-control" name="nombre" id="nombre" value="Cuenta Pública 2021">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(75'Cuenta Pública 2021')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=74">Avance de Gestión Financiera 2021</a></th>                        <th>2021</th>
                        <th>Avance de Gestión Financiera</th>
                        <th>Anual </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=74&nomx=Avance de Gestión Financiera 2021&anio=2021&tipo=avgf&trimestre=0'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(74);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri16" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="74">
                <input type="text" class="form-control" name="nombre" id="nombre" value="Avance de Gestión Financiera 2021">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(74'Avance de Gestión Financiera 2021')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=72">Cuenta Pública 2020</a></th>                        <th>2020</th>
                        <th>Cuenta Pública</th>
                        <th>Anual </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=72&nomx=Cuenta Pública 2020&anio=2020&tipo=cp&trimestre=0'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(72);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri17" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="72">
                <input type="text" class="form-control" name="nombre" id="nombre" value="Cuenta Pública 2020">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(72'Cuenta Pública 2020')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=69">Avance de Gestión Financiera 2020</a></th>                        <th>2020</th>
                        <th>Avance de Gestión Financiera</th>
                        <th>Anual </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=69&nomx=Avance de Gestión Financiera 2020&anio=2020&tipo=avgf&trimestre=0'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(69);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri18" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="69">
                <input type="text" class="form-control" name="nombre" id="nombre" value="Avance de Gestión Financiera 2020">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(69'Avance de Gestión Financiera 2020')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=66">Cuenta Pública 2019</a></th>                        <th>2019</th>
                        <th>Cuenta Pública</th>
                        <th>Anual </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=66&nomx=Cuenta Pública 2019&anio=2019&tipo=cp&trimestre=0'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(66);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri19" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="66">
                <input type="text" class="form-control" name="nombre" id="nombre" value="Cuenta Pública 2019">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(66'Cuenta Pública 2019')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=65">SEVAC cuarto trimestre 2019</a></th>                        <th>2019</th>
                        <th>SEVAC</th>
                        <th>Cuarto Trimestre </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=65&nomx=SEVAC cuarto trimestre 2019&anio=2019&tipo=sevac&trimestre=4'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(65);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri20" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="65">
                <input type="text" class="form-control" name="nombre" id="nombre" value="SEVAC cuarto trimestre 2019">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(65'SEVAC cuarto trimestre 2019')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=58">Informe Anual de Actividades 2019</a></th>                        <th>2019</th>
                        <th>Informe Anual de Actividades</th>
                        <th>Anual </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=58&nomx=Informe Anual de Actividades 2019&anio=2019&tipo=iaa&trimestre=0'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(58);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri21" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="58">
                <input type="text" class="form-control" name="nombre" id="nombre" value="Informe Anual de Actividades 2019">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(58'Informe Anual de Actividades 2019')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=55">SEVAC tercer trimestre 2019</a></th>                        <th>2019</th>
                        <th>SEVAC</th>
                        <th>Tercer Trimestre </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=55&nomx=SEVAC tercer trimestre 2019&anio=2019&tipo=sevac&trimestre=3'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(55);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri22" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="55">
                <input type="text" class="form-control" name="nombre" id="nombre" value="SEVAC tercer trimestre 2019">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(55'SEVAC tercer trimestre 2019')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=53">SEVAC segundo trimestre 2019</a></th>                        <th>2019</th>
                        <th>SEVAC</th>
                        <th>Segundo Trimestre </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=53&nomx=SEVAC segundo trimestre 2019&anio=2019&tipo=sevac&trimestre=2'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(53);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri23" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="53">
                <input type="text" class="form-control" name="nombre" id="nombre" value="SEVAC segundo trimestre 2019">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(53'SEVAC segundo trimestre 2019')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=49">Avance de Gestión Financiera 2019</a></th>                        <th>2019</th>
                        <th>Avance de Gestión Financiera</th>
                        <th>Anual </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=49&nomx=Avance de Gestión Financiera 2019&anio=2019&tipo=avgf&trimestre=0'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(49);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri24" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="49">
                <input type="text" class="form-control" name="nombre" id="nombre" value="Avance de Gestión Financiera 2019">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(49'Avance de Gestión Financiera 2019')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=47">Cuenta Pública 2018</a></th>                        <th>2018</th>
                        <th>Cuenta Pública</th>
                        <th>Anual </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=47&nomx=Cuenta Pública 2018&anio=2018&tipo=cp&trimestre=0'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(47);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri25" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="47">
                <input type="text" class="form-control" name="nombre" id="nombre" value="Cuenta Pública 2018">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(47'Cuenta Pública 2018')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=45">SEVAC cuarto trimestre 2018</a></th>                        <th>2018</th>
                        <th>SEVAC</th>
                        <th>Cuarto Trimestre </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=45&nomx=SEVAC cuarto trimestre 2018&anio=2018&tipo=sevac&trimestre=4'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(45);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri26" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="45">
                <input type="text" class="form-control" name="nombre" id="nombre" value="SEVAC cuarto trimestre 2018">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(45'SEVAC cuarto trimestre 2018')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=41">SEVAC tercer trimestre 2018</a></th>                        <th>2018</th>
                        <th>SEVAC</th>
                        <th>Tercer Trimestre </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=41&nomx=SEVAC tercer trimestre 2018&anio=2018&tipo=sevac&trimestre=3'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(41);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri27" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="41">
                <input type="text" class="form-control" name="nombre" id="nombre" value="SEVAC tercer trimestre 2018">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(41'SEVAC tercer trimestre 2018')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                    <tr>
                        <th><a href="docusTrim.php?id=40">Avance de Gestión Financiera 2018</a></th>                        <th>2018</th>
                        <th>Avance de Gestión Financiera</th>
                        <th>Anual </th>
                        
                        <th>
                          <!-- <button type="submit" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" data-target="#modTri'.$contador.'">-->
                          <button type="button" class="btn btn-info float-right btn-xs" id="btnGuardar" data-toggle="modal" 
                          onclick="window.location.href='recumod.php?id=40&nomx=Avance de Gestión Financiera 2018&anio=2018&tipo=avgf&trimestre=0'">
                             <span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar
                           </button>
                         
                           <button type="submit" class="btn btn-danger float-right btn-xs" id="btnGuardar" onclick="eliminar(40);">
                             <span class="glyphicon glyphicon-remove"></span> &nbsp; Eliminar
                           </button>
                        </th>
                    </tr>

<div class="modal" id="modTri28" style="margin-top: 100px;" data-backdrop="false">
  <form method="POST" name="mTrimestreX" id="mTrimestreX"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Trimestre</h4>
       
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
               <input type="hidden" class="form-control" name="id" id="id" value="40">
                <input type="text" class="form-control" name="nombre" id="nombre" value="Avance de Gestión Financiera 2018">
                <br/>

      </div>
      <div class="modal-footer">        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="modTrim(40'Avance de Gestión Financiera 2018')">Modificar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
   </div>
 </form>
</div>
                </tbody>
            </table>
        </div>
    </div>

<div class="modal" id="addTrimestre" style="margin-top: 100px;">
  <form method="POST" name="mTrimestre" id="mTrimestre"  enctype="multipart/form-data">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Agregar Trimestre</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
           <label>Nombre del Trimestre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" autofocus>
                <br/>
                <label>Año</label>
                <input type="text" class="form-control" name="anio" id="anio">
                <br/>    
                <select id="tipo" name="tipo" class="form-control">
                    <option value="avgf" >Avance de Gestión Financiera</option>
                    <option value="cp">Cuenta Pública</option>
                    <option value="iaa">Informe Anual de Actividades</option>
                    <option value="sevac">SEVAC</option>
                    <option value="paa">Programa Anual de Archivo</option>                    
                </select>
                
                <br/>
                <select id="trimestre" name="trimestre" class="form-control">
                    <option value="0">Anual</option>
                    <option value="1">Primer Trimestre</option>
                    <option value="2">Segundo Trimestre</option>
                    <option value="3">Tercer Trimestre</option>
                    <option value="4">Cuarto Trimestre</option>
                </select>
                <br/>
                

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="addTrim()">Agregar</button>
        <button type="button" class="btn btn-normal btn-sm" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
   </div>
 </form>
</div>



</div>

</body>

</html>
