<?php 

class language_swicth {
	private $language_available =array('english','indonesia');
	private $language_default ='english';
	private $language_file =array('text');
	//tambahkan di sini jika anda memiliki file bahasa,, misal email_lang.php
	//private $language_file =array('text','email');
	function __construct()
	{
		#parent::__construct();
		$this->run_language();
	}
	public function run_language()
	{
		$CI =& get_instance();
		$language = $this->language_available;
		$language_swicthto = $CI->input->get('language_swicthto');
		$adaperubahan=false;
		if ($language_swicthto) {
			$array = array(
				'language_swicthto' => $language_swicthto
			);
			if (in_array($language_swicthto, $this->language_available)) {
				$CI->session->set_userdata( $array );
				$adaperubahan=true;
				
			}
		}
		$session_lang_swicth = $CI->session->userdata('language_swicthto');
		if (!$session_lang_swicth) {
			$array = array(
				'language_swicthto' => $language
			);
			$CI->session->set_userdata( $array );
			$adaperubahan=false;
		}else{
			$language=$session_lang_swicth ;
		}
		foreach ($language_file as $key) {
			$CI->lang->load($key, $language);
		}
		
	}
}
