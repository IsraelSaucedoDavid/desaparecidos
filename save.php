<?PHP
 
  if(isset($_POST['save'])){
    $num_int = $_POST['num_int'];
    $num_cdi = $_POST['num_cdi'];
    $municipio = $_POST['value'];
    $colonia = $_POST['colonia'];
    $fe_denuncia = $_POST['fe_denuncia'];
    $de_ausencia = $_POST['de_ausencia'];
    $denunciante = $_POST['denunciante'];
    $victima = $_POST['victima'];
    $fe_nacimiento = $_POST['fe_nacimiento'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $estatus = $_POST['estatus'];
    $delito = $_POST['delito'];
    $fe_localizacion = $_POST['fe_localizacion'];
    $mp = $_POST['mp'];

    echo $num_int;
    echo $num_cd;
    echo $municipio;
    echo $colonia;
    echo $fe_denuncia;
    echo $de_ausencia;
    echo $denunciante;
    echo $victima;
    echo $fe_nacimiento;
    echo $edad;
    echo $sexo;
    echo $estatus;
    echo $delito;
    echo $fe_localizacion;
    echo $mp;

  }

?>