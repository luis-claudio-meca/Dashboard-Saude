<?php
 session_start(); # Deve ser a primeira linha do arquivo


function Conect(){
$servername = "localhsot";
$database = "tutisaude";
$username = "root";
$password = "";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
return $conn;
}


function DadosConsultas($conn){
$respostas = array();
$sql = "SELECT * FROM consultas";
if ($result = mysqli_query($conn , $sql )) {

   while( $row = mysqli_fetch_array($result))
        array_push($respostas,$row );

   $json_respostas = json_encode($respostas, JSON_PRETTY_PRINT);
    mysqli_free_result($result);
}
$_SESSION['consultas'] = $json_respostas;   
}

function DadosData($conn){
    $respostas = array();
    $sql = "SELECT * FROM data";
    if ($result = mysqli_query($conn , $sql )) {
    
       while( $row = mysqli_fetch_array($result))
            array_push($respostas,$row );
    
       $json_respostas = json_encode($respostas, JSON_PRETTY_PRINT);
        mysqli_free_result($result);
    }
    $_SESSION['data'] = $json_respostas;   
    }

function DadosEspecialidade($conn){
        $respostas = array();
        $sql = "SELECT * FROM especialidade";
        if ($result = mysqli_query($conn , $sql )) {
        
           while( $row = mysqli_fetch_array($result))
                array_push($respostas,$row );
        
           $json_respostas = json_encode($respostas, JSON_PRETTY_PRINT);
            mysqli_free_result($result);
        }
        $_SESSION['especialidades'] = $json_respostas;   
        }

        function DadosHora($conn){
            $respostas = array();
            $sql = "SELECT * FROM hora";
            if ($result = mysqli_query($conn , $sql )) {
            
               while( $row = mysqli_fetch_array($result))
                    array_push($respostas,$row );
            
               $json_respostas = json_encode($respostas, JSON_PRETTY_PRINT);
                mysqli_free_result($result);
            }
            $_SESSION['hora'] = $json_respostas;   
            }

            function DadosMedico($conn){
                $respostas = array();
                $sql = "SELECT * FROM medico";
                if ($result = mysqli_query($conn , $sql )) {
                
                   while( $row = mysqli_fetch_array($result))
                        array_push($respostas,$row );
                
                   $json_respostas = json_encode($respostas, JSON_PRETTY_PRINT);
                    mysqli_free_result($result);
                }
                $_SESSION['medico'] = $json_respostas;   
                }




$con = Conect(); 
DadosConsultas($con);
DadosData($con);
DadosEspecialidade($con);
DadosHora($con);
DadosMedico($con);


$consultas = '<Script> var consultas = ' . $_SESSION['consultas'] . ' </script>';
echo $consultas;
$dadosdata = '<Script> var dadosdata = ' . $_SESSION['data'] . ' </script>';
echo $dadosdata;
$dadosespecialidade = '<Script> var dadosespecialidade = ' . $_SESSION['especialidades'] . ' </script>';
echo $dadosespecialidade;
$dadoshora = '<Script> var dadoshora = ' . $_SESSION['hora'] . ' </script>';
echo $dadoshora;
$dadosmedico = '<Script> var dadosmedico = ' . $_SESSION['medico'] . ' </script>';
echo $dadosmedico;
?>