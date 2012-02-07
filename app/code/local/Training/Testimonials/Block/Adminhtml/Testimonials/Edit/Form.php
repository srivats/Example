<?php

class Training_Testimonials_Block_Testimonials_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
	protected function _prepareForm()
	{
		$model=$this->getModel();

		$form=new Varien_Form_Data(array(

				"id"=>"edit_form",
				"action"=>$this->getData('action'),
				"method"=>"post"
			));
		$form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
	}

}