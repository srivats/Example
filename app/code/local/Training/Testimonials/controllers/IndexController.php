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

	public function blockAction()
	{
		$block=new Training_Testimonials_Block_Front();
		$block->setTemplate('front.phtml');
		echo $block->toHtml();
		//var_dump($block->getLayoutFile());
	}

	public function moduleAction()
	{
		$config=Mage::getModel('core/config')->loadModulesConfiguration();
		var_dump($config);
	}

}