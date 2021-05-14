<?php
session_start();
if(!empty($_SESSION['id'])){
	
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/ionic.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/mobileui/style.css" />

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <title>Profile</title>

</head>

<body style="background-color: PaleTurquoise">

    <!-- Botões MenuShape Menu Superior  -->
    <div class="container">
        <div class="app">

            <ul class="menubar">
                <li><a class="active" href="javascript:void(0)" onclick="openNav()"><i class="fas fa-bars"
                            style="color: Teal;"></i></a></li>
                <li><a href="index.php"><i class="fas fa-h-square"></i></li>



            </ul>
            <!-- Menu Lateral-->
            <div class="sidenav" id="sidenav">
                <div class="sidenavshape"></div>
                <div class="profile">
                    <?php
                    if(!empty($_SESSION['id'])){
                        if($_SESSION['id'] == 1){
                            echo "<br><img src='../img/User/matheus.png' width='50%' height='50%' alt='User_Avatar'>";
                        }
    
                        else if($_SESSION['id'] == 3){
                            echo "<br><img src='../img/User/bruno.png' width='50%' height='50%' alt='User_Avatar'>";
                        }else{
                            echo "<br><img src='../img/User/empty.png' width='50%' height='50%' alt='User_Avatar_Empty'>";
                        }
                    }else{
                        echo "<br><img src='../img/avatar.jpg' width='50%' height='50%' alt='User_Empty'>";
                    }
                    ?>
                    <h3 style="color:white;">Menu</h3>
                </div>
                <!-- Itens do Menu Lateral  -->
                <div class="clearfix"></div>
                <ul>
                    <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i
                                class="fas fa-times"></i></a></li>
                    <li><a href="#"> DOENÇAS </a></li>
                    <li><a href="sobreapp.php"> SOBRE </a></li>
                    <li><a href="index.php"> INICIO </a></li>
                    <li><a onclick="href='sair.php'"><i class="fas fa-sign-out-alt"></i>Sair</a></li>
                </ul>
            </div>
            <div class="news">
                <h2 class="h2 underline highlight" style="text-align: center;">Hippotec</h2>
                <br>
                <div class="news">

                    <div class="personal1"><?php
                    if($_SESSION['id'] == 1){
                        echo "<br><img src='../img/User/matheus.png' width='50%' height='50%' alt='User_Avatar'>";
                    }

                    else if($_SESSION['id'] == 3){
                        echo "<br><img src='../img/User/bruno.png' width='50%' height='50%' alt='User_Avatar'>";
                    }else{
                        echo "<br><img src='../img/User/empty.png' width='50%' height='50%' alt='User_Avatar_Empty'>";
                    }
                    
                    
                echo "<ul>";
                   
                
                    echo "<li><p><b>ID User: </b>".$_SESSION['id']."</p></li>";
                    echo "<li><p><b>Nome User: </b>".$_SESSION['nome']."</p></li>";
                    echo "<li><p><b>Email User: </b>".$_SESSION['email']."</p></li>";
                    echo "<li><p><b>Cpf User: </b>".$_SESSION['cpf_usr']."</p></li>";
                    echo "<li><p><b>Data Nasc: </b>".$_SESSION['dtnasc']."</p></li>";
                    
                    if($_SESSION['tipousr'] == 1){
                        echo "<li><p><b>Tipo User: </b>".$_SESSION['tipousr']." - Usuario Administador</p></li>";
                       
                    }else{
                        echo "<li><p><b>Tipo User: </b>".$_SESSION['tipousr']." - Usuario Comum</p></li>";
                       
                    }
                
                   
                    echo "<p><a href='sair.php'>Sair</a></p>";
                    
                echo "</ul>";
               
               
	            ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="../js/jquery.min.js"></script>
    <script>
    function openNav() {
        document.getElementById("sidenav").style.width = "300px";
    }

    function closeNav() {
        document.getElementById("sidenav").style.width = "0";
    }
    </script>
</body>

</html>
<?php
}else{
	$_SESSION['msg'] = "Área restrita";
	header("Location: login.php");	
}
?>