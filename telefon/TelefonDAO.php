<?php
require_once '../config/db.php';

class TelefonDAO {
	private $db;

	private $INSERT_TELEFON = "INSERT INTO telefon(marka,cena) VALUES (?,?)";
	private $GET_TELEFON = "SELECT * FROM telefon WHERE marka=? AND cena > ?";


	
	public function __construct()
	{
		$this->db = DB::createInstance();
	}

	public function insertTelefon($marka, $cena)
	{
		$statement = $this->db->prepare($this->INSERT_TELEFON);
		$statement->bindValue(1, $marka);
		$statement->bindValue(2, $cena);
		
		$statement->execute();
	}

	public function getTelefon($marka, $cena)
	{		
		$statement = $this->db->prepare($this->GET_TELEFON);
		$statement->bindValue(1, $marka);
		$statement->bindValue(2, $cena);

		$statement->execute();
		
		$result = $statement->fetchAll();
		return $result;
	}

}
?>
