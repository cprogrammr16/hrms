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

class Default_Model_Hrwizard extends Zend_Db_Table_Abstract
{
    protected $_name = 'main_hr_wizard';
    protected $_primary = 'id';
	
    
	
	public function getHrwizardData()
	{
	    $select = $this->select()
						->setIntegrityCheck(false)
						->from(array('w'=>'main_hr_wizard'),array('w.*'));
		return $this->fetchRow($select)->toArray();
	
	}

	public function SaveorUpdateHrWizardData($data, $where)
	{ 
			$this->update($data, $where);
			return 'update';
	
	}
	
	
	
	
	
}