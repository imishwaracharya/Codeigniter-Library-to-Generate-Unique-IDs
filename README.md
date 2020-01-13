# Codeigniter-Library-to-Generate-Unique-IDs
This Codeigniter Library can be use for unique string generation based on PHP uniqid() function.

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



Sometimes we need to have unique string for database entry. This PHP Library can be use to generate 20 charecter unique string based on PHP uniqueid() function.

1. Download UID.php file from repo
2. Paste UID.php into application/libraries folder
3. Load library with $this->load->library('UID'); 
4. Generate Unique string using $this->uid->generate(); function.
5. $this->uid->md5(); will print uniqueID with md5() encryption.
