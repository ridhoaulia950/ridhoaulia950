<?php
 	class Segitiga_model extends CI_Model {
 		// mendefinisikan konstanta untuk nilai pembagi
 			const ST = 0.5;

 		// atribut model alas
 		private $alas;
 			// metode untuk menentukan nilai alas
 			public function set_alas($a) 	{
 			$this->alas = $a;		}
 			// metode untuk mengambil nilai alas
 			public function get_alas()		{
 			return $this->alas;		}

 		// atribut model tinggi
 		private $tinggi;
 			// metode untuk menentukan nilai tinggi
 			public function set_tinggi($t)	{
 			$this->tinggi = $t;		}
 			// metode untuk mengambil nilai tinggi
 			public function get_tinggi()	{
 			return $this->tinggi;	}

		// perhitungan luas segitiga
 		public function hitung_luas()	{
 		return self::ST * $this->alas * $this->tinggi;	}
 	}
?>
