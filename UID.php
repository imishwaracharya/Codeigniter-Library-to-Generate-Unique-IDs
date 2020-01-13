<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * CodeIgniter Unique ID Generation Library
 *
 * Generate Unique ID in CodeIgniter applications.
 *
 * @package            CodeIgniter
 * @subpackage        Libraries
 * @category        Libraries
 * @author            Ishwar Acharya
 * @link            https://github.com/imishwaracharya
 * @link            https://ishwaracharya.com.np
 */


class UID
{
   
	public function generate()
	{
		
		return uniqid(substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz1234567890'), 0, 7));
	}
	
	public function md5()
	{
		return md5($this->generate());
	}
}
?>
