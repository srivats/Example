<?php
	
	class Training_Search_IndexController extends Mage_Core_Controller_Front_Action
	{
		public function helloAction()
		{
			echo "Controller Working";
		}

		public function searchAction()
		{
			$lucene=new Zend_Search_Lucene_Document();

		}
	}
 ?>

