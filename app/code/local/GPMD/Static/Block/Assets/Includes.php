<?php
/**
 *
 * This file is part of the GPMD Magento Responsive Theme.
 *
 * The GPMD Magento Responsive Theme is free software: you can redistribute
 * it and/or modify it under the terms of the GNU General Public License as
 * published by the Free Software Foundation, either version 3 of the License,
 * or (at your option) any later version.
 *
 * The GPMD Magento Responsive Theme is distributed in the hope that it will
 * be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General
 * Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with the GPMD Magento Responsive Theme. If not, see
 * http://www.gnu.org/licenses/.
 *
 * @category    GPMD
 * @package     GPMD_Responsive_Theme
 * @copyright   Copyright (c) 2012 GPMD.
 * @author      Carlo Tasca @GPMD LTD
 */

class GPMD_Static_Block_Assets_Includes extends Mage_Core_Block_Template 
{
	protected $_version = '1.7.1'; // latest version of jQuery at time of writing
	protected $_jsIncludes = array();
	protected $_cssIncludes = array();
	protected $_addUi = false;
	protected $_uiVersion = false;
	protected $_noConflict = false;
	
	public function setJQueryVersion ($version) {
		$this->_version = $version;
	}
	
	public function setNoConflict ($bool) {
		$this->_noConflict = (bool) $bool;
	}
	
	public function getNoConflict () {
		return (bool) $this->_noConflict;
	}
	
	public function setJsInclude ($js) {
		$this->_jsIncludes[] = $this->getJsUrl() . $js;
	}
	
	public function setJsIncludeFromCss ($js) {
		$this->_jsIncludes[] = $this->getSkinUrl() . $js;
	}
	
	public function setCssInclude ($css) {
		$this->_cssIncludes[] = $this->getSkinUrl() . $css;
	}
	
	public function setCssIncludeFromJs ($css) {
		$this->_cssIncludes[] = $this->getJsUrl() . $css;
	}
	
	public function getJQueryVersion () {
		return $this->_version;
	}
	
	public function getJsIncludes () {
		return $this->_jsIncludes;
	}
	
	public function getCssIncludes () {
		return $this->_cssIncludes;
	}
	
	public function setUi ($bool, $version) {
		$this->_addUi = (bool) $bool;
		$this->_uiVersion = $version;
	}
	
	public function getAddUi () {
		return (bool) $this->_addUi;
	}
	
	public function getUiVersion () {
		return $this->_uiVersion;
	}
}
