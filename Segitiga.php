<?php
	class Segitiga extends CI_Controller {
	
	// tambahan
	public function index() {

	if (isset ($_POST['btnSubmit'])) {
	// memuat model Segitiga_model
	   $this->load->model('Segitiga_model');

	// menangkap model yang telah dimuat oleh controller
	   $model = $this->Segitiga_model;

	// mengambil nilai yang dikirim melalui form (tambahan)
 	   $alas = $_POST['alas1'];
 	   $tinggi = $_POST['tinggi1'];

	// menentukan nilai variabel
	   $model->set_alas($alas);
	   $model->set_tinggi($tinggi);

	// memuat view dan mengirimkan $model ke view
       $this->load->view('Segitigaview', array('model'=>$model));
	}
	
	   // (tambahan)
	   else {
	   //menampilkan form
	   $this->load->view('Segitiga_form_view');	}

	}}
?>
