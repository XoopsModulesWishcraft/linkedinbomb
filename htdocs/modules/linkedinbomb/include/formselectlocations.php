<?php
/**
 * XOOPS form element
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @package         kernel
 * @subpackage      form
 * @since           2.0.0
 * @author          Kazumi Ono (AKA onokazu) http://www.myweb.ne.jp/, http://jp.xoops.org/
 * @version         $Id: formselecttheme.php 8066 2011-11-06 05:09:33Z beckmi $
 */

defined('XOOPS_ROOT_PATH') or die('Restricted access');

xoops_load('XoopsFormSelect');

/**
 * A select box with available themes
 */
class LinkedinbombFormSelectLocations extends XoopsFormSelect
{
    /**
     * Constructor
     *
     * @param string $caption
     * @param string $name
     * @param mixed $value Pre-selected value (or array of them).
     * @param int $size Number or rows. "1" makes a drop-down-list
     */
    function LinkedinbombFormSelectLocations($caption, $name, $value = null, $size = 1, $multiple = false, $criteria = NULL, $country_id = 0)
    {
        $this->XoopsFormSelect($caption, $name, $value, $size, $multiple);
        $locations_handler = xoops_getmodulehandler('locations', 'linkedinbomb');
        if (!is_object($criteria))
        	$criteria = new CriteriaCompo(new Criteria('address_id', 0));
        if ($country_id>0) {
        	$criteria->add(new Criteria('country_id', $country_id));
        }
        $ret[0] = _NONE;
        $locations = $locations_handler->getObjects($criteria, true);
        foreach($locations as $location_id => $location) {
			$ret[$location_id] = $location->getVar('name');        		
        }
        $this->addOptionArray($ret);
    }
}

?>