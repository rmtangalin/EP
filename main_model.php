<?php

class Main_model extends CI_Model
{

	function test_main()
	{
		echo "This is model function";
	}

	function insert_data($data)
	{
		$this->db->insert("tbl_user", $data);
	}
	
}
?>