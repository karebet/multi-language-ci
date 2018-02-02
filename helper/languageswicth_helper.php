<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('lang()'))
{
	function lang($line,$parameter=array())
	{
	    $CI =& get_instance();
	    $implodeparameter=' $line = printf($CI->lang->line($line)';
	    if (!empty($parameter) AND is_array($parameter)) {
	    	$ceckpersenstring =$CI->lang->line($line,false);
	    	$imp=  explode('%s', $ceckpersenstring) ;
	    	$jmlahpersens=count($imp);
	    	if ($jmlahpersens==1){
	    		$totaljmlpersen= $jmlahpersens;
	    	}else{
	    		$totaljmlpersen= $jmlahpersens-1;
	    	};
	    	foreach ($parameter as $key) {
	    		$implodeparameter.=',"'.$key.'"';
	    	}
	    	if (count($parameter) != $totaljmlpersen) {
	    		$each = $totaljmlpersen-count($parameter);
	    		for ($i=1; $i <= $each ; $i++) { 
	    			$implodeparameter.=',""';
	    		}
	    	}
	    	$implodeparameter.=');';
	    	eval($implodeparameter);
	    }else{
	    	$line = print($CI->lang->line($line));
	    };
	    return $line;
	}
}
