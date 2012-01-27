<?php

class Training_Testimonials_Model_Mysql4_Manager_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
	protected function _construct()
	{
		$this->_init('testimonials/manager');// (groupName/Model name)
	}
}