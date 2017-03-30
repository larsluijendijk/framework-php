<?php
require(ROOT . "model/DierModel.php");

function index()
{
	// renders the index.php file, give an array with it called dieren. Inside dieren is the function getAllDieren
	render("dier/index", array(
	'dieren' => getAllDieren()
	));
}
function create()
{
	//Show the create.php file in view map
	render("dier/create");
}
function edit($id)
{
	// Show the edit file with the array dier
	render("dier/edit",array(
	'dier' => showUpdateDier($id)
	));
}
function createSave()
{
	// if the naam, ras and geboren are filled with something, call the function createDier with the posts
	if (isset($_POST['naam']) && isset($_POST['ras']) && isset($_POST['geboren'])){
		createDier($_POST['naam'], $_POST['ras'], $_POST['geboren']);
	}
	// go back to the  index.php
	header("Location:" . URL . "dier/index");
}
function createUpdate(){
		// echo test
		var_dump($_POST['naam']);
		// same as createSave, but it updates instead of create a new row
		if (isset($_POST['id']) && isset($_POST['naam']) && isset($_POST['ras']) && isset($_POST['geboren'])){
		updateDier($_POST['id'], $_POST['naam'], $_POST['ras'], $_POST['geboren']);
	}
	// go back to the index.php
	header("Location:" . URL . "dier/index");
}


?>