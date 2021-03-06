<?php
/**
 * Folderdisplay
 * Extension for Contao Open Source CMS (contao.org)
 *
 * Copyright (c) 2015 POSTYOU
 *
 * @package folder_display
 * @author  Gerald Meier
 * @link    http://www.postyou.de
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */
 if (!defined('TL_ROOT')) {
    die('You cannot access this file directly!');
}

$GLOBALS['TL_DCA']['tl_content']['palettes']['folder_display'] =
    '{type_legend},type,headline;{folder_display_legend},folder_display;{template_legend},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['fields']['folder_display'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['folder_display'],
    'exclude' => true,
    'inputType' => 'fileTree',
    'eval' => array('files' => false, 'mandatory' => true, 'fieldType' => 'radio', 'tl_class' => 'clr w50'),
    'sql' => "binary(16) NULL"
);


?>