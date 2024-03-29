<?php
/********************************************************************************* 
 *  This file is part of HRMS-Cprog.
 *  Copyright (C) 2015 Carlos Pinto
 *   
 *  HRMS-Cprog is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  HRMS-Cprog is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with Sentrifugo.  If not, see <http://www.gnu.org/licenses/>.
 *
 *  HRMS-Cprog Support <kkobtk@gmail.com>
 ********************************************************************************/  

class Default_Form_processes extends Zend_Form
{
	public function init()
	{
		$this->setMethod('post');
		$this->setAttrib('action',BASE_URL.'processes/add');
		$this->setAttrib('id', 'formid');
		$this->setAttrib('name', 'empscreening');
	
		$id = new Zend_Form_Element_Hidden('id');
		
		$process_status = new Zend_Form_Element_Select('process_status');
        $process_status->setLabel('Process Status');	
		$process_status->addMultiOption('In process','In process');   	
		$process_status->addMultiOption('On hold','On hold');   	
		$process_status->addMultiOption('Complete','Complete');   	
		
		
		$submit = new Zend_Form_Element_Submit('submit');
		$submit->setAttrib('id', 'submitbutton');
		$submit->setLabel('Save');
		
		$this->addElements(array($id,$process_status,$submit));
        $this->setElementDecorators(array('ViewHelper')); 		
	}
}
