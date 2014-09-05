<?php
 class Guest extends Model
 {		
	public function select_user_from_login($post)
	{
		$query = "SELECT *
				  FROM   `login`
				  WHERE  `username` = '".$post['username']."'
				  AND	 `password` = '".$post['password']."'";
		return $this->query($query);
	}

	public function insert_register_data($post)
	{
		$query = "INSERT INTO `login` 
				  SET `username` = '".$post['username']."',
					  `password` = '".$post['password']."',
					  `userrole` = 'customer'";
		$this->query($query);
	}
 }
?>