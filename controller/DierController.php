<?php
require(ROOT . "model/DierModel.php");

function index()
{
	render("dier/index", array(
	'dieren' => getAllDieren()
	));
}
function create()
{
	//formulier tonen
	render("dier/create");
}
function edit()
{
	//formulier tonen
	render("dier/edit",array(
	'dier' => showUpdateDier()
	));
}
function createSave()
{

	if (isset($_POST['naam']) && isset($_POST['ras']) && isset($_POST['geboren'])){
		createDier($_POST['naam'], $_POST['ras'], $_POST['geboren']);
	}
	header("Location:" . URL . "dier/index");
}
function createUpdate(){

		if (isset($_POST['naam']) && isset($_POST['ras']) && isset($_POST['geboren'])){
		updateDier($_POST['naam'], $_POST['ras'], $_POST['geboren']);
	}
	//header/("Location:" . URL . "dier/index");
}


?>