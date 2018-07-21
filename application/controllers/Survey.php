<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Survey extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_survey');
	}

	public function index()
	{

	}

	public function getwilayah()
	{
		$survey = $this->m_survey->getwilayah('Survey')->result();

		if (!$survey) {
			echo $this->toJsonData(404,'Data Tidak Ada');
		}else{
			$arr_survey = array();

			foreach ($survey as $row) {
				$arr_survey[] = $row->Wilayah;
			}

			echo $this->toJsonData(200,'Success',$arr_survey);
			return;
		}
	}

	public function savelampu()
	{
			$id_pel    = $this->input->get_post('Id_Pel');
			$longitude = $this->input->get_post('Longitude');
			$latitude  = $this->input->get_post('Latitude');

			if (!$id_pel) {
				echo $this->toJsonData(417,'ID pelanggan belum dikirim');
				return;
			}

			$where = array(
				'IDPel' => $id_pel,
			);

			$survey = $this->m_survey->detail($where,'Survey')->row();

			if (!$survey) {
				echo $this->toJsonData(404,'Pelanggan dengan ID '.$id_pel.' Tidak ada');
				return;
			}

			$filename = "";
			if (!empty($_FILES['Foto']['name'])) {
				$filename = 'assets/Photo/'.$id_pel.'/'.$id_pel.".jpg";

				if (file_exists($filename)) {
					unlink('assets/Photo/'.$id_pel.".jpg");
				}

				$upload 	= $this->upload('./assets/Photo/'.$id_pel.'/','Foto',$id_pel);


				if($upload['auth']	== false){
					echo $this->toJsonData(404,$upload['msg']);
					return;
				}


				$fotoname 	= $upload['msg']['file_name'];
				if(!empty($fotoname)){
					// remFile(base_url().'assets/'.$id_pel.".jpg");
					delete_files(base_url().'assets/'.$id_pel.".jpg");
				}
			}

			$data = array(
				'IDPel'        => $id_pel,
				'Latitude'     => $latitude,
				'Longitude'    => $longitude,
				'KondisiLampu' => $filename,
			);

			$survey = $this->m_survey->input_data($data,'Lampu');

			echo $this->toJsonData(200,'Success',$survey);
			return;

	}

	public function savesurvey(){

		$no        = $this->input->get_post('No');
		$id_pel    = $this->input->get_post('Id_Pel');
		$kwh       = $this->input->get_post('Kwh');
		$mcb       = $this->input->get_post('Mcb');
		$grnd      = $this->input->get_post('Ground');
		$cospi   = $this->input->get_post('Cospi');
		$standm    = $this->input->get_post('Stand');
		$batas     = $this->input->get_post('Batas');
		$switch    = $this->input->get_post('Switch');
		$tgl       = $this->input->get_post('Tanggal');
		$lat       = $this->input->get_post('Lat');
		$ampere    = $this->input->get_post('Amp');
		$kabkot    = $this->input->get_post('Kd_Kabupaten');
		$nama      = $this->input->get_post('Nama');
		$kondisi   = $this->input->get_post('Kondisi');
		$wilayah   = $this->input->get_post('Wilayah');
		$prov      = $this->input->get_post('Kd_Provinsi');
		$lon       = $this->input->get_post('Long');
		$ket       = $this->input->get_post('Ket');
		$alamat    = $this->input->get_post('Alamat');
		$kec       = $this->input->get_post('Kd_Kecamatan');
		$jml_lp    = $this->input->get_post('Jumlah');
		$jml_mcb   = $this->input->get_post('JumlahMCB');
		$kontaktor = $this->input->get_post('Kontaktor');
		$voltampere = $this->input->get_post('VoltAmpere');
		$daya = $this->input->get_post('Daya');
		$watt = $this->input->get_post('Watt');





		$where = array(
			'IDPel' => $id_pel,
		);

		$survey = $this->m_survey->detail($where,'Survey')->row();

		if (!$survey) {
			echo $this->toJsonData(404,'Data Tidak Ada, ');
			return;
		}else{
			$where = array(
				'IDPel' => $id_pel,
			);

			if (!empty($_FILES['Foto']['name'])) {
				$filename = 'assets/'.$id_pel.".jpg";

				if (file_exists($filename)) {
					unlink('assets/'.$id_pel.".jpg");
				}

				$upload 	= $this->upload('./assets/','Foto',$id_pel);


				if($upload['auth']	== false){
					echo $this->toJsonData(404,$upload['msg']);
					return;
				}


				$fotoname 	= $upload['msg']['file_name'];
				if(!empty($fotoname)){
					// remFile(base_url().'assets/'.$id_pel.".jpg");
					delete_files(base_url().'assets/'.$id_pel.".jpg");
				}
			}

			$data = array(
				'KWhMeter'     => $kwh,
				'MCB'          => $mcb,
				'Grounding'    => $grnd,
				'KondisiBox'   => $kondisi,
				'StandKWH1'    => $standm,
				'PembatasDaya' => $batas,
				'Switchs'      => $switch,
				'Tanggal1'     => $tgl,
				'Latitude'     => $lat,
				'Amphere'      => $ampere,
				'Longitude'    => $lon,
				'Keterangan'   => $ket,
				'JumlahLampu'  => $jml_lp,
				'JumlahMCB'    => $jml_mcb,
				'Kontaktor'    => $kontaktor,
				'CosPhi'	=> $cospi,
				'VoltAmpere'    => $voltampere,
				'Daya'    => $daya,
				'Watt'    => $watt,
			);

			$survey = $this->m_survey->update_data($where,$data,'Survey');

			echo $this->toJsonData(200,'Success',$survey);
			return;
		}

	}

	public function savenewsurvey(){

		$no        = $this->input->get_post('No');
		$id_pel    = $this->input->get_post('Id_Pel');
		$nama        = $this->input->get_post('Nama');
		$alamat        = $this->input->get_post('Alamat');
		$kwh       = $this->input->get_post('Kwh');
		$mcb       = $this->input->get_post('Mcb');
		$grnd      = $this->input->get_post('Ground');
		$cospi   = $this->input->get_post('Cospi');
		$standm    = $this->input->get_post('Stand');
		$batas     = $this->input->get_post('Batas');
		$switch    = $this->input->get_post('Switch');
		$tgl       = $this->input->get_post('Tanggal');
		$lat       = $this->input->get_post('Lat');
		$ampere    = $this->input->get_post('Amp');
		$kabkot    = $this->input->get_post('Kd_Kabupaten');
		$nama      = $this->input->get_post('Nama');
		$kondisi   = $this->input->get_post('Kondisi');
		$wilayah   = $this->input->get_post('Wilayah');
		$prov      = $this->input->get_post('Kd_Provinsi');
		$lon       = $this->input->get_post('Long');
		$ket       = $this->input->get_post('Ket');
		$alamat    = $this->input->get_post('Alamat');
		$kec       = $this->input->get_post('Kd_Kecamatan');
		$jml_lp    = $this->input->get_post('Jumlah');
		$jml_mcb   = $this->input->get_post('JumlahMCB');
		$kontaktor = $this->input->get_post('Kontaktor');
		$voltampere = $this->input->get_post('VoltAmpere');
		$daya = $this->input->get_post('Daya');
		$watt = $this->input->get_post('Watt');

		if (!empty($_FILES['Foto']['name'])) {
			$filename = 'assets/'.$id_pel.".jpg";

			if (file_exists($filename)) {
				unlink('assets/'.$id_pel.".jpg");
			}

			$upload 	= $this->upload('./assets/','Foto',$id_pel);


			if($upload['auth']	== false){
				echo $this->toJsonData(404,$upload['msg']);
				return;
			}


			$fotoname 	= $upload['msg']['file_name'];
			if(!empty($fotoname)){
				// remFile(base_url().'assets/'.$id_pel.".jpg");
				delete_files(base_url().'assets/'.$id_pel.".jpg");
			}
		}

			$data = array(
				'NoUrut' => $no,
				'IDPel' => $id_pel,
				'KWhMeter'     => $kwh,
				'MCB'          => $mcb,
				'Grounding'    => $grnd,
				'KondisiBox'   => $kondisi,
				'StandKWH1'    => $standm,
				'PembatasDaya' => $batas,
				'Switchs'      => $switch,
				'Tanggal1'     => $tgl,
				'Latitude'     => $lat,
				'Amphere'      => $ampere,
				'Nama'      => $nama,
				'Alamat'      => $alamat,
				'Longitude'    => $lon,
				'Keterangan'   => $ket,
				'JumlahLampu'  => $jml_lp,
				'JumlahMCB'    => $jml_mcb,
				'Kontaktor'    => $kontaktor,
				'CosPhi'	=> $cospi,
				'VoltAmpere'    => $voltampere,
				'Daya'    => $daya,
				'Watt'    => $watt,
			);

			$survey = $this->m_survey->input_data($data,'Survey');

			echo $this->toJsonData(200,'Success',$survey);
			return;
		

	}

	public function getdatasurvey()
	{
		$no     = $this->input->get_post('No');
		// $id_pel = $this->input->get_post('Id_Pel');

		if (!$no) {
			echo $this->toJsonData(404,'Kirim no/id pelanggan nya');
			return;
		}

		$where = array(
			'NoUrut' => $no,
		);

		$survey = $this->m_survey->detail($where,'Survey')->row();

		if (!$survey) {
			$where = array(
				'IDPel' => $no,
			);
			$survey = $this->m_survey->detail($where,'Survey')->row();
			if (!$survey) {
				echo $this->toJsonData(404,'Data Tidak Ada, ');
				return;
			}else{
				echo $this->toJsonData(200,'Success',$survey);
				return;
			}

		}else{
			echo $this->toJsonData(200,'Success',$survey);
			return;
		}

	}


	function toJsonData($code,$message,$data=null){

		$thejson = "";

		if ($data) {
			$thejson = array(
				'Meta' => array(
					'Code' => $code,
					'Message' => $message,
				),
				'Data' => $data,
			);
		}else{
			$thejson = array(
				'Meta' => array(
					'Code' => $code,
					'Message' => $message,
				)
			);
		}

		return json_encode($thejson);
	}




	//--------------------------------------------------------fungsi global
	private function upload($dir,$name ='userfile',$filename=null){
		    $config['upload_path']     = $dir;
        $config['allowed_types']   = 'gif|jpg|png|jpeg';
        $config['max_size']        = 50000000;
        $config['encrypt_name'] 	 = FALSE;
        $config['file_name'] 		   = $filename;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload($name))
        {
        		$data['auth'] 	= false;
                $data['msg'] 	= $this->upload->display_errors();
                return $data;
        }
        else
        {
        		$data['auth']	= true;
        		$data['msg']	= $this->upload->data();
        		return $data;
        }
	}

	private function isImage($file){
		if ((($_FILES[$file]['type'] == 'image/gif') || ($_FILES[$file]['type'] == 'image/jpeg') || ($_FILES[$file]['type'] == 'image/png'))){
			return true;
		}
		else {
			return false;
		}
	}
}

/* End of file Survey.php */
/* Location: ./application/controllers/Survey.php */