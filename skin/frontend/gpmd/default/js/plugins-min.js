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
 * @author      Matt Bailey @GPMD LTD
 *//*
 * jQuery Extended Selectors plugin. (c) Keith Clark freely distributable under the terms of the MIT license.
 * Adds missing -of-type pseudo-class selectors to jQuery 
 * github.com/keithclark/JQuery-Extended-Selectors  -  twitter.com/keithclarkcouk  -  keithclark.co.uk
 */(function(e){function t(e,t){for(var n=e,r=0;e=e[t];)n.tagName==e.tagName&&r++;return r}function n(e,n,r){e=t(e,r);if(n=="odd"||n=="even")r=2,e-=n!="odd";else{var i=n.indexOf("n");i>-1?(r=parseInt(n,10)||parseInt(n.substring(0,i)+"1",10),e-=(parseInt(n.substring(i+1),10)||0)-1):(r=e+1,e-=parseInt(n,10)-1)}return(r<0?e<=0:e>=0)&&e%r==0}var r={"first-of-type":function(e){return t(e,"previousSibling")==0},"last-of-type":function(e){return t(e,"nextSibling")==0},"only-of-type":function(e){return r["first-of-type"](e)&&r["last-of-type"](e)},"nth-of-type":function(e,t,r){return n(e,r[3],"previousSibling")},"nth-last-of-type":function(e,t,r){return n(e,r[3],"nextSibling")}};e.extend(e.expr[":"],r)})(jQuery);