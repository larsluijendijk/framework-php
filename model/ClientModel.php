<?php

function getClient($id) 
{

}

function getAllClients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM client";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();

}

function editClient() 
{

}

function deleteClient($id) 
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM client WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id
		));

	$db = null;
}

function createClient($firstname, $lastname) 
{
	$db = openDatabaseConnection();

	$sql = "INSERT INTO client(name, species, status, gender) VALUES (:name, :species, :status, :gender)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':species' => $species,
		':status' => $status,
		':gender' => $gender
		));

	$db = null;
}