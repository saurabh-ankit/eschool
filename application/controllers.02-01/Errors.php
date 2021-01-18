<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @package : school management system
 * @version : 2.0
 * @developed by : RamomThakur
 *  @support : Ramom_ankit@outlook.com
 * @author url : ..........
 * @filename : Accounting.php
 * @copyright : Reserved RamomThakur Team
 */

class Errors extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('errors/error_404_message.php');
    }
}
