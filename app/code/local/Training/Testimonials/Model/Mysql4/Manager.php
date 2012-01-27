<?php

class Training_Testimonials_Model_Mysql4_Manager extends Mage_Core_Model_Mysql4_Abstract
{
	protected function _construct()
	{
		$this->_init('testimonials/manager','id'); // (groupName/Model name)
	}
}