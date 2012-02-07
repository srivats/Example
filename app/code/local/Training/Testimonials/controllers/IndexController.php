<?php

class Training_Testimonials_IndexController extends Mage_Core_Controller_Front_Action
{
	public function indexAction()
	{
		
		$this->loadLayout();
		$this->renderLayout();
	}

	public function modelAction()
	{
		$data=Mage::getModel('testimonials/manager')->load(1);  // (groupName/Model name)
		var_dump($data->getData());	

	}

	public function collectionsAction()
	{
		$testimonials=Mage::getModel('testimonials/manager')->getCollection();
		foreach ($testimonials as $x) {
			echo $x->getName();
		}
	}

	public function postAction()
	{
		$params=$this->getRequest()->getParams();

		//$data=new Training_Testimonials_Model_Manager();
		$data=Mage::getModel('testimonials/manager');
		$data->setName($params['name']);
		$data->setEmail($params['email']);
		$data->setTestimonials($params['testimonial-text']);
		if($data->save())
		{
		 Mage::getSingleton('core/session')->addSuccess('Thank you for your feedback');
		 $this->_redirect('testimonials/');
		}
	}

}