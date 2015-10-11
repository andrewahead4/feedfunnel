<?php

class feed_manager{
	
	function __construct($options = array()){ 
		if (isset($options['uri'])){
			$this->uri = $options['uri'];
		}
	}
}