<?php

/**
 * socialshareprivacy
 * Copyright (C) 2010,2011 Tristan Lins
 *
 * Extension for:
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * PHP version 5
 * @copyright  InfinitySoft 2010,2011
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    Avisota
 * @license    MIT License
 * @filesource
 */


$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'socialshareprivacy_facebook_status';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'socialshareprivacy_twitter_status';
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'socialshareprivacy_gplus_status';

$GLOBALS['TL_DCA']['tl_module']['palettes']['socialshareprivacy'] = '{title_legend},name,headline,type;'.
		'{socialshareprivacy_legend},socialshareprivacy_nojquery,socialshareprivacy_info_link,socialshareprivacy_txt_help,socialshareprivacy_settings_perma,socialshareprivacy_cookie_path,socialshareprivacy_cookie_domain,socialshareprivacy_cookie_expires,socialshareprivacy_css_path,socialshareprivacy_uri;'.
		'{socialshareprivacy_facebook_legend},socialshareprivacy_facebook_status;'.
		'{socialshareprivacy_twitter_legend},socialshareprivacy_twitter_status;'.
		'{socialshareprivacy_gplus_legend},socialshareprivacy_gplus_status;'.
		'{template_legend:hide},socialshareprivacy_template;'.
		'{protected_legend:hide},protected;'.
		'{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_module']['subpalettes']['socialshareprivacy_facebook_status'] = 'socialshareprivacy_facebook_dummy_img,socialshareprivacy_facebook_txt_info,socialshareprivacy_facebook_txt_fb_off,socialshareprivacy_facebook_txt_fb_on,socialshareprivacy_facebook_perma_option,socialshareprivacy_facebook_display_name,socialshareprivacy_facebook_referrer_track,socialshareprivacy_facebook_language,socialshareprivacy_facebook_action';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['socialshareprivacy_twitter_status']  = 'socialshareprivacy_twitter_dummy_img,socialshareprivacy_twitter_txt_info,socialshareprivacy_twitter_txt_twitter_off,socialshareprivacy_twitter_txt_twitter_on,socialshareprivacy_twitter_perma_option,socialshareprivacy_twitter_display_name,socialshareprivacy_twitter_referrer_track,socialshareprivacy_twitter_language,socialshareprivacy_twitter_tweet_text';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['socialshareprivacy_gplus_status']    = 'socialshareprivacy_gplus_dummy_img,socialshareprivacy_gplus_txt_info,socialshareprivacy_gplus_txt_gplus_off,socialshareprivacy_gplus_txt_gplus_on,socialshareprivacy_gplus_perma_option,socialshareprivacy_gplus_display_name,socialshareprivacy_gplus_referrer_track,socialshareprivacy_gplus_language';

/**
 * global options
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_nojquery'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_nojquery'],
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'m12'),
    'sql'                     => "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_info_link'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_info_link'],
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'url', 'maxlength'=>255, 'tl_class'=>'long'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_txt_help'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_txt_help'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'long'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_settings_perma'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_settings_perma'],
	'inputType'               => 'text',
	'eval'                    => array('tl_class'=>'m12'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_cookie_path'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_cookie_path'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_cookie_domain'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_cookie_domain'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_cookie_expires'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_cookie_expires'],
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_css_path'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_css_path'],
	'inputType'               => 'fileTree',
	'eval'                    => array('files'=>true, 'filesOnly'=>true, 'extensions'=>'css', 'fieldType'=>'radio', 'tl_class'=>'clr'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_uri'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_uri'],
	'inputType'               => 'text',
	'eval'                    => array('tl_class'=>'long'),
    'sql'                     => "blob NULL",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_template'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_template'],
	'inputType'               => 'select',
	'options_callback'        => array('tl_module_socialshareprivacy', 'getTemplates'),
    'sql'                     => "varchar(32) NOT NULL default ''",
);

/**
 * facebook options
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_facebook_status'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_status'],
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'m12', 'submitOnChange'=>true),
    'sql'                     => "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_facebook_dummy_img'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_dummy_img'],
	'inputType'               => 'fileTree',
	'eval'                    => array('files'=>true, 'filesOnly'=>true, 'extensions'=>'jpg,jpeg,png,gif', 'fieldType'=>'radio', 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_facebook_txt_info'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_txt_info'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'long'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_facebook_txt_fb_off'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_txt_fb_off'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_facebook_txt_fb_on'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_txt_fb_on'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_facebook_perma_option'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_perma_option'],
	'default'                 => 1,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'clr m12'),
    'sql'                     => "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_facebook_display_name'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_display_name'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_facebook_referrer_track'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_referrer_track'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_facebook_language'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_language'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>5, 'tl_class'=>'w50'),
    'sql'                     => "char(5) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_facebook_action'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_action'],
	'default'                 => 'recommend',
	'inputType'               => 'select',
	'reference'               => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_actions'],
	'options'                 => array('recommend', 'like'),
	'eval'                    => array('tl_class'=>'w50'),
    'sql'                     => "varchar(10) NOT NULL default ''",
);

/**
 * twitter options
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_twitter_status'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_twitter_status'],
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'m12', 'submitOnChange'=>true),
    'sql'                     => "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_twitter_dummy_img'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_twitter_dummy_img'],
	'inputType'               => 'fileTree',
	'eval'                    => array('files'=>true, 'filesOnly'=>true, 'extensions'=>'jpg,jpeg,png,gif', 'fieldType'=>'radio', 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_twitter_txt_info'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_twitter_txt_info'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'long'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_twitter_txt_twitter_off'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_twitter_txt_twitter_off'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_twitter_txt_twitter_on'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_twitter_txt_twitter_on'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_twitter_perma_option'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_twitter_perma_option'],
	'default'                 => 1,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'clr m12'),
    'sql'                     => "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_twitter_display_name'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_twitter_display_name'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_twitter_referrer_track'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_twitter_referrer_track'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_twitter_language'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_twitter_language'],
	'default'                 => $GLOBALS['TL_LANGUAGE'],
	'inputType'               => 'select',
	'options'                 => $this->getLanguages(),
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "char(2) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_twitter_tweet_text'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_twitter_tweet_text'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>120, 'tl_class'=>'clr long'),
    'sql'                     => "varchar(120) NOT NULL default ''",
);

/**
 * gplus options
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_gplus_status'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_gplus_status'],
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'m12', 'submitOnChange'=>true),
    'sql'                     => "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_gplus_dummy_img'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_gplus_dummy_img'],
	'inputType'               => 'fileTree',
	'eval'                    => array('files'=>true, 'filesOnly'=>true, 'extensions'=>'jpg,jpeg,png,gif', 'fieldType'=>'radio', 'tl_class'=>'clr'),
    'sql'                     => "binary(16) NULL",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_gplus_txt_info'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_gplus_txt_info'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'long'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_gplus_txt_gplus_off'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_gplus_txt_gplus_off'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_gplus_txt_gplus_on'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_gplus_txt_gplus_on'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_gplus_perma_option'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_gplus_perma_option'],
	'default'                 => 1,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'clr m12'),
    'sql'                     => "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_gplus_display_name'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_gplus_display_name'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_gplus_referrer_track'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_gplus_referrer_track'],
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['socialshareprivacy_gplus_language'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_gplus_language'],
	'default'                 => $GLOBALS['TL_LANGUAGE'],
	'inputType'               => 'select',
	'options'                 => $this->getLanguages(),
	'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "char(2) NOT NULL default ''",
);

/**
 * Class tl_module_socialshareprivacy
 */
class tl_module_socialshareprivacy extends Backend
{
	public function getTemplates()
	{
        return $this->getTemplateGroup('socialshareprivacy_');
	}
}
