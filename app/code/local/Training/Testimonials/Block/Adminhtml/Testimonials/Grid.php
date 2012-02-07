<?php

class Training_Testimonials_Block_Adminhtml_Testimonials_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
	public function __construct()
	{
		parent::__construct();
		$this->setId('TestimonialsGrid');
		$this->setSaveParametersInSession(true);

	}
	 protected function _prepareCollection()
    {
        $collection = Mage::getModel('testimonials/manager')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('id', array(
            'header'    => 'ID',
            'align'     =>'right',
            'width'     => '50px',
            'index'     => 'id',
        ));
 
        $this->addColumn('Name', array(
            'header'    => 'Name',
            'align'     =>'left',
            'index'     => 'name',
        ));

        $this->addColumn('Email', array(
            'header'    => 'Email',
            'align'     =>'left',
            'index'     => 'email',
        ));
	}
   
    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}

