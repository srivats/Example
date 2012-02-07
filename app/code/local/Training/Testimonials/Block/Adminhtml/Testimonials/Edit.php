<?php

class Training_Testimonials_Block_Adminhtml_Testimonials_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
	public function __construct()
	{
		$this->_objectId='id';
		$this->_blockGroup="testimonials";
		$this->_controller="admintml_testimonials";
		parent::__construct();
	}
}