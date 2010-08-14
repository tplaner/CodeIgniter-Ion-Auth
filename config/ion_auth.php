<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Config
* 
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
*          
* Added Awesomeness: Phil Sturgeon
* 
* Location: http://github.com/benedmunds/ion_auth/
*          
* Created:  10.01.2009 
* 
* Description:  Modified auth system based on redux_auth with extensive customization.  This is basically what Redux Auth 2 should be.
* Original Author name has been kept but that does not mean that the method has not been modified.
* 
*/

	/**
	 * Tables.
	 **/
	$config['tables']['groups']  = 'groups';
	$config['tables']['users']   = 'users';
	$config['tables']['meta']    = 'meta';
	
	/**
	 * Site Title, example.com
	 */
	$config['site_title']		   = "Example.com";
	
	/**
	 * Admin Email, admin@example.com
	 */
	$config['admin_email']		   = "admin@example.com";
	
	/**
	 * Default group, use name
	 */
	$config['default_group']       = 'members';
	
	/**
	 * Default administrators group, use name
	 */
	$config['admin_group']         = 'admin';
	 
	/**
	 * Meta table column you want to join WITH.
	 * Joins from users.id
	 **/
	$config['join']                = 'user_id';
	
	/**
	 * Columns in your meta table,
	 * id not required.
	 **/
	$config['columns']             = array('first_name', 'last_name', 'company', 'phone');
	
	/**
	 * A database column which is used to
	 * login with.
	 **/
	$config['identity']            = 'email';
		 
	/**
	 * Minimum Required Length of Password
	 **/
	$config['min_password_length'] = 6;
	
	/**
	 * Maximum Allowed Length of Password
	 **/
	$config['max_password_length'] = 128;
	
	/**
	 * This is the site wide salt which should be set
	 * for added security.  It will require that a unique
	 * rainbow table will need to be created as long as this
	 * variable is not uncovered.
	 *
	 * I would suggest making this atleast 16 characters long
	 *
	 * WARNING: do not change this once you begin using the
	 * library.
	 *
	 * @author tplaner
	 **/
	$config['app_salt'] = 'Z6eCc8M9nCmXFyt9';
	
	/**
	 * Hashing algorithm to use.
	 *
	 * You can run print_r(hash_algos());
	 * to see a list of supported hash algorithms on your
	 * server.
	 *
	 * WARNING: do not change this once you begin using the
	 * library.
	 *
	 * @author tplaner
	 **/
	$config['hash_algorithm'] = 'sha1';

	/**
	 * Email Activation for registration
	 **/
	$config['email_activation']    = false;
	
	/**
	 * Allow users to be remembered and enable auto-login
	 **/
	$config['remember_users']      = true;
	
	/**
	 * How long to remember the user (seconds)
	 **/
	$config['user_expire']         = 86400;
	
	/**
	 * Extend the users cookies everytime they auto-login
	 **/
	$config['user_extend_on_login'] = false;
	
	/**
	 * Folder where email templates are stored.
     * Default : auth/
	 **/
	$config['email_templates']     = 'auth/email/';
	
	/**
	 * activate Account Email Template
     * Default : activate.tpl.php
	 **/
	$config['email_activate']   = 'activate.tpl.php';
	
	/**
	 * Forgot Password Email Template
     * Default : forgot_password.tpl.php
	 **/
	$config['email_forgot_password']   = 'forgot_password.tpl.php';

	/**
	 * Forgot Password Complete Email Template
     * Default : new_password.tpl.php
	 **/
	$config['email_forgot_password_complete']   = 'new_password.tpl.php';
	
	/**
	 * Salt Length
	 **/
	$config['salt_length'] = 10;

	/**
	 * Should the salt be stored in the database?
	 * This will change your password encryption algorithm, 
	 * default password, 'password', changes to 
	 * 9efc31834d852ad365458342cc70dfad2744fee2 with default salt.
	 **/
	$config['store_salt'] = false;
	
	/**
	 * Message Start Delimiter
	 **/
	$config['message_start_delimiter'] = '<p>';
	
	/**
	 * Message End Delimiter
	 **/
	$config['message_end_delimiter'] = '</p>';
	
	/**
	 * Error Start Delimiter
	 **/
	$config['error_start_delimiter'] = '<p>';
	
	/**
	 * Error End Delimiter
	 **/
	$config['error_end_delimiter'] = '</p>';
	
/* End of file ion_auth.php */
/* Location: ./system/application/config/ion_auth.php */
