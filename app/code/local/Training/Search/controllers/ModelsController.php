<?php

class Training_Search_ModelsController extends Mage_Core_Controller_Front_Action
{
	public function storesAction()
	{
		$stores=Mage::getResourceModel('core/store_collection');

		foreach($stores as $store)
		{
			echo '<h2> Store Name - '.$store->getName().' '.$store->getRootCategoryId().'</h2>'.$store->getCode();
		}
	}


	public function categoriesAction()
	{
		$categories=Mage::getResourceModel('catalog/category_collection')
						->addFieldToFilter('level',1)
						->addAttributeToSelect('name');
		foreach ($categories as $category) {
			
			echo $category->getId().''.$category->getName();
			$children=$category->getChildren();
			$childrenIds=explode(',',$children);
			
			foreach ($childrenIds as $child)
			{
				$child=Mage::getModel('catalog/category')->load($child);
				Zend_Debug::dump($child->debug());
			}
		}
		
	}
}