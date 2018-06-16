<?php require_once 'layout/header.php'; ?>
<?php $user = getUserLogged(); ?>
	<h2>Bem vindo, <?= $user['nome']?></h2>

<?php require_once 'layout/footer.php'; ?>