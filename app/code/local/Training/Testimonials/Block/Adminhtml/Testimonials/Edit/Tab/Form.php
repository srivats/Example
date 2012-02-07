<?php

class Training_Testimonials_Block_Adminhtml_Testimonials_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
	
	protected function _prepareForm()
	{
		$form=new Varien_Data_Form();
		$this->setForm($form);
		$fieldset=$form->addFieldSet('testimonials_form','Information');
		

	 $fieldset->addField('name', 'text', array(
            'label'     => Mage::helper('testimonials')->__('Name'),
            'class'     => 'required-entry',
            'required'  => true,
            'name'      => 'name',
        ));

	 if(Mage::getSingleton('adminhtml/session')->getTestimonialsData() )
     {
            $form->setValues(Mage::getSingleton('adminhtml/session')->getTestimonialsData());
            Mage::getSingleton('adminhtml/session')->setTestimonialsData(null);
     }
     elseif ( Mage::registry('Testimonials_data') ) {
            $form->setValues(Mage::registry('testimonials_data')->getData());
        }
	}
}