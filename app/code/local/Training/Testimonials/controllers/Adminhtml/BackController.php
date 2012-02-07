<?php

class Training_Testimonials_Adminhtml_BackController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
	{	
       $this->_initAction();       
       $this->_addContent($this->getLayout()->createBlock('testimonials/adminhtml_testimonials'));
       $this->renderLayout();
	}
	protected function _initAction()
    {
        $this->loadLayout()
            ->_setActiveMenu('testimonials/items')
            ->_addBreadcrumb(Mage::helper('adminhtml')->__('Testimonials Manager'), Mage::helper('adminhtml')->__('Testimonials Manager'));
        return $this;
    }
    
     public function editAction()
    {
        $id     = $this->getRequest()->getParam('id');
        $testimonialModel  = Mage::getModel('testimonials/manager')->load($id);
 
        if($testimonialModel->getId() || $id == 0) {
 
            Mage::register('testimonial_data', $testimonialModel);
 
            $this->loadLayout();
            $this->_setActiveMenu('testimonial/items');
           
            $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Testimonials Manager'), Mage::helper('adminhtml')->__('Item Manager'));
            $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Item News'), Mage::helper('adminhtml')->__('Item News'));
           
            $this->getLayout()->getBlock('head')->setCanLoadExtJs(true);
           
            $this->_addContent($this->getLayout()->createBlock('testimonials/adminhtml_testimonials_edit'))
                 ->_addLeft($this->getLayout()->createBlock('testimonials/adminhtml_testimonials_edit_tabs'));
               
            $this->renderLayout();

        }
        else
        {
            Mage::getSingleton('adminhtml/session')->addError(Mage::helper('testimonials')->__('Item does not exist'));
            $this->_redirect('*/*/');
        }
    }   
}