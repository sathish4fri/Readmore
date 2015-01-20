<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      http://www.opensource-socialnetwork.com/licence
 */
//define('__ReadMore__', ossn_route()->com . 'ReadMore/');



function ossn_ReadMore_init() {
	ossn_new_js('jquery','components/Readmore/js/jquery-2');
	ossn_load_js('jquery');
	ossn_new_js('readmore', 'components/Readmore/js/readmoreorg');
	ossn_load_js('readmore');
	ossn_new_css('ossn.readmore', 'components/Readmore/css/readmore');
	ossn_load_css('ossn.readmore');
   ossn_extend_view('js/opensource.socialnetwork', 'components/Readmore/js/readmore');
}


ossn_register_callback('ossn', 'init', 'ossn_ReadMore_init');
