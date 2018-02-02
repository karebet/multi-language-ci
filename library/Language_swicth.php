<?php 

class language_swicth {
	private $language_available =array('english','indonesia');
	private $language_default ='english';
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
		$CI->lang->load('text', $language);
		$CI->lang->load('header_footer', $language);
		if ($adaperubahan==true) {
			$CI->session->set_flashdata('toast', $CI->lang->line('toast_change_language_swicth', FALSE));
		}
	}
}
