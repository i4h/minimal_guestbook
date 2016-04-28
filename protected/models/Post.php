<?php

class Post extends ActiveRecord\Model 
{
	
	static $before_create = array('set_date'); # new records only
	/*static $validates_format_of = array(
			     array('author_email', 'with' =>
					    '/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/')
			   ); */
	
	static $validates_presence_of = array(
			     array('author'),
				 array('text'),
			   );
	
	
	public function set_date() {
		$this->created_at = date("Y-m-d H:i:s");
	}
	
}