<?php

require(ROOT . "model/ClientModel.php");

function index()
{
	render("client/index", array(
		'client' => getAllClients()
	));
}

function create()
{
	//formulier tonen
	render("client/create");
}

function createSave()
{

	if (isset($_POST['name']) && isset($_POST['species']) && isset($_POST['status']) && isset($_POST['gender'])) {
		createClient($_POST['name'], $_POST['species'], $_POST['status'], $_POST['gender']);
	}

	header("Location:" . URL . "client/index");
}

function edit()
{
	//$student = getStudent();

	// getStudent(1);

	render("client/edit");	
}

function editSave()
{
	
} 

function delete($id)
{
	if (isset($id)) {
		deleteClient($id);
	}

	header("Location:" . URL . "client/index");
}