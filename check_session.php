<?php if(isset($_SESSION['usuario']) &&!empty($_SESSION['usuario'])):?>
    <li><a href="#">Bienvenido, <?= htmlspecialchars($_SESSION['usuario']);?></a></li>
    <li><a href="logout.php">Cerrar Sesión</a></li>
<?php else:?>
    <li><a href="loginRegister.php">Iniciar Sesión</a></li>
<?php endif;?>
