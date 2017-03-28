<?php

function getClient($id) 
{

}

function getAllDieren() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM dier";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();

}

function deleteDier($id) 
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM dier WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id
		));

	$db = null;
}

function delete($id)
{
	if (isset($id)) {
		deleteDier($id);
	}

	header("Location:" . URL . "dier/index");
}

function createDier($naam, $ras, $geboren) 
{
	$db = openDatabaseConnection();

	$sql = "INSERT INTO dier(naam, ras, geboren) VALUES (:naam, :ras, :geboren)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':naam' => $naam,
		':ras' => $ras,
		':geboren' => $geboren
		));

	$db = null;
}

function updateDier($id, $naam, $ras, $geboren) 
{
	$db = openDatabaseConnection();

		// Prepare query and execute
		$query = "update dier set naam='$naam', ras='$ras', geboren='$geboren' where id=$id";
		$result = $db->query($query);

	$db = null;
}

function showUpdateDier(){
		$dier = NULL;

			// Get Patient for id
			$db = openDatabaseConnection();
			$id = isset($_GET['id']) ? $_GET['id'] : '';
			
			$query=$db->prepare("Select * from dier where id=?");
			$query->execute(array($dier));
	}

?>