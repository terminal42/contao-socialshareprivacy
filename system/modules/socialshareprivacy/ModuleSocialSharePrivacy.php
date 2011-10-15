<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

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


/**
 * Class ModuleSocialSharePrivacy
 */
class ModuleSocialSharePrivacy extends Module
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_socialshareprivacy';
	
	
	/**
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### SocialSharePrivacy ###';
			return $objTemplate->parse();
		}
		
		return parent::generate();
	}
	
	
	/**
	 * Generate the content element
	 */
	public function compile()
	{
		$arrSettings = array();
		
		// global options
		if ($this->socialshareprivacy_info_link)
		{
			$arrSettings['info_link'] = $this->socialshareprivacy_info_link;
		}
		if ($this->socialshareprivacy_txt_help)
		{
			$arrSettings['txt_help'] = $this->socialshareprivacy_txt_help;
		}
		if ($this->socialshareprivacy_settings_perma)
		{
			$arrSettings['settings_perma'] = $this->socialshareprivacy_settings_perma;
		}
		if ($this->socialshareprivacy_cookie_path)
		{
			$arrSettings['cookie_path'] = $this->socialshareprivacy_cookie_path;
		}
		if ($this->socialshareprivacy_cookie_domain)
		{
			$arrSettings['cookie_domain'] = $this->socialshareprivacy_cookie_domain;
		}
		if ($this->socialshareprivacy_cookie_expires)
		{
			$arrSettings['cookie_expires'] = $this->socialshareprivacy_cookie_expires;
		}
		if ($this->socialshareprivacy_css_path)
		{
			$arrSettings['css_path'] = $this->socialshareprivacy_css_path;
		}
		else
		{
			$arrSettings['css_path'] = 'system/modules/socialshareprivacy/html/socialshareprivacy.css';
		}
		if ($this->socialshareprivacy_uri)
		{
			$arrSettings['uri'] = urldecode($this->socialshareprivacy_uri);
		}
		
		// facebook options
		$arrSettings['services']['facebook']['status'] = $this->socialshareprivacy_facebook_status ? 'on' : 'off';
		if ($this->socialshareprivacy_facebook_dummy_img)
		{
			$arrSettings['services']['facebook']['dummy_img'] = $this->socialshareprivacy_facebook_dummy_img;
		}
		else
		{
			$arrSettings['services']['facebook']['dummy_img'] = 'system/modules/socialshareprivacy/html/images/dummy_facebook.png';
		}
		if ($this->socialshareprivacy_facebook_txt_info)
		{
			$arrSettings['services']['facebook']['txt_info'] = $this->socialshareprivacy_facebook_txt_info;
		}
		if ($this->socialshareprivacy_facebook_txt_fb_off)
		{
			$arrSettings['services']['facebook']['txt_fb_off'] = $this->socialshareprivacy_facebook_txt_fb_off;
		}
		if ($this->socialshareprivacy_facebook_txt_fb_on)
		{
			$arrSettings['services']['facebook']['txt_fb_on'] = $this->socialshareprivacy_facebook_txt_fb_on;
		}
		$arrSettings['services']['facebook']['perma_option'] = $this->socialshareprivacy_facebook_perma_option ? 'on' : 'off';
		if ($this->socialshareprivacy_facebook_display_name)
		{
			$arrSettings['services']['facebook']['display_name'] = $this->socialshareprivacy_facebook_display_name;
		}
		if ($this->socialshareprivacy_facebook_referrer_track)
		{
			$arrSettings['services']['facebook']['referrer_track'] = $this->socialshareprivacy_facebook_referrer_track;
		}
		if ($this->socialshareprivacy_facebook_language)
		{
			$arrSettings['services']['facebook']['language'] = $this->socialshareprivacy_facebook_language;
		}
		if ($this->socialshareprivacy_facebook_action)
		{
			$arrSettings['services']['facebook']['action'] = urldecode($this->socialshareprivacy_facebook_action);
		}
		if ($this->socialshareprivacy_facebook_uri)
		{
			$arrSettings['services']['facebook']['uri'] = urldecode($this->socialshareprivacy_facebook_uri);
		}
		
		// twitter options
		$arrSettings['services']['twitter']['status'] = $this->socialshareprivacy_twitter_status ? 'on' : 'off';
		if ($this->socialshareprivacy_twitter_dummy_img)
		{
			$arrSettings['services']['twitter']['dummy_img'] = $this->socialshareprivacy_twitter_dummy_img;
		}
		else
		{
			$arrSettings['services']['twitter']['dummy_img'] = 'system/modules/socialshareprivacy/html/images/dummy_twitter.png';
		}
		if ($this->socialshareprivacy_twitter_txt_info)
		{
			$arrSettings['services']['twitter']['txt_info'] = $this->socialshareprivacy_twitter_txt_info;
		}
		if ($this->socialshareprivacy_twitter_txt_twitter_off)
		{
			$arrSettings['services']['twitter']['txt_twitter_off'] = $this->socialshareprivacy_twitter_txt_twitter_off;
		}
		if ($this->socialshareprivacy_twitter_txt_twitter_on)
		{
			$arrSettings['services']['twitter']['txt_twitter_on'] = $this->socialshareprivacy_twitter_txt_twitter_on;
		}
		$arrSettings['services']['twitter']['perma_option'] = $this->socialshareprivacy_twitter_perma_option ? 'on' : 'off';
		if ($this->socialshareprivacy_twitter_display_name)
		{
			$arrSettings['services']['twitter']['display_name'] = $this->socialshareprivacy_twitter_display_name;
		}
		if ($this->socialshareprivacy_twitter_referrer_track)
		{
			$arrSettings['services']['twitter']['referrer_track'] = $this->socialshareprivacy_twitter_referrer_track;
		}
		if ($this->socialshareprivacy_twitter_tweet_text)
		{
			$arrSettings['services']['twitter']['tweet_text'] = $this->socialshareprivacy_twitter_tweet_text;
		}
		if ($this->socialshareprivacy_twitter_language)
		{
			$arrSettings['services']['twitter']['language'] = $this->socialshareprivacy_twitter_language;
		}
		if ($this->socialshareprivacy_twitter_uri)
		{
			$arrSettings['services']['twitter']['uri'] = urldecode($this->socialshareprivacy_twitter_uri);
		}
		
		// google+ options
		$arrSettings['services']['gplus']['status'] = $this->socialshareprivacy_gplus_status ? 'on' : 'off';
		if ($this->socialshareprivacy_gplus_dummy_img)
		{
			$arrSettings['services']['gplus']['dummy_img'] = $this->socialshareprivacy_gplus_dummy_img;
		}
		else
		{
			$arrSettings['services']['gplus']['dummy_img'] = 'system/modules/socialshareprivacy/html/images/dummy_gplus.png';
		}
		if ($this->socialshareprivacy_gplus_txt_info)
		{
			$arrSettings['services']['gplus']['txt_info'] = $this->socialshareprivacy_gplus_txt_info;
		}
		if ($this->socialshareprivacy_gplus_txt_gplus_off)
		{
			$arrSettings['services']['gplus']['txt_gplus_off'] = $this->socialshareprivacy_gplus_txt_gplus_off;
		}
		if ($this->socialshareprivacy_gplus_txt_gplus_on)
		{
			$arrSettings['services']['gplus']['txt_gplus_on'] = $this->socialshareprivacy_gplus_txt_gplus_on;
		}
			$arrSettings['services']['gplus']['perma_option'] = $this->socialshareprivacy_gplus_perma_option ? 'on' : 'off';
		if ($this->socialshareprivacy_gplus_display_name)
		{
			$arrSettings['services']['gplus']['display_name'] = $this->socialshareprivacy_gplus_display_name;
		}
		if ($this->socialshareprivacy_gplus_referrer_track)
		{
			$arrSettings['services']['gplus']['referrer_track'] = $this->socialshareprivacy_gplus_referrer_track;
		}
		if ($this->socialshareprivacy_gplus_language)
		{
			$arrSettings['services']['gplus']['language'] = $this->socialshareprivacy_gplus_language;
		}
		if ($this->socialshareprivacy_gplus_uri)
		{
			$arrSettings['services']['gplus']['uri'] = urldecode($this->socialshareprivacy_gplus_uri);
		}
				
		$objTemplate = new FrontendTemplate($this->socialshareprivacy_template ? $this->socialshareprivacy_template : 'socialshareprivacy_default');
		$objTemplate->nojquery = $this->socialshareprivacy_nojquery ? true : false;
		$objTemplate->settings = $arrSettings;
		
		$this->Template->socialshareprivacy = $objTemplate->parse();
	}
}

?>