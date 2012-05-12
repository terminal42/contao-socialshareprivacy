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
 * Class SocialSharePrivacy
 */
class SocialSharePrivacy
{
	/**
	 * Uniq id of the module.
	 *
	 * @var string
	 */
	protected $id = null;

	/**
	 * The template file.
	 *
	 * @var string
	 */
	protected $template = 'socialshareprivacy_default';

	/**
	 * Include jquery.
	 *
	 * @var bool
	 */
	protected $includeJQuery = true;

	/**
	 * Link zu detaillierter Datenschutz-Info, in unserem Fall ein heise-Artikel.
	 *
	 * @var string
	 */
	protected $infoLink = null;

	/**
	 * MouseOver-Text des i-Icons
	 *
	 * @var string
	 */
	protected $textHelp = null;

	/**
	 * Überschrift des Einstellungsmenüs
	 *
	 * @var string
	 */
	protected $settingsPerma = null;

	/**
	 * Pfad der Gültigkeit des Cookies
	 *
	 * @var string
	 */
	protected $cookiePath = null;

	/**
	 * Domain für die das Cookie gültig ist
	 *
	 * @var string
	 */
	protected $cookieDomain = null;

	/**
	 * Dauer die das Cookie gültig ist in Tagen
	 *
	 * @var integer
	 */
	protected $cookieExpires = null;

	/**
	 * Pfad zur CSS-Datei, wenn leer wird kein Stylesheet eingebaut
	 *
	 * @var string
	 */
	protected $cssPath = null;

	/**
	 * Die URI, die von den Buttons weitergegeben werden soll. Möglich ist ein fester Wert (z.B. "http://www.heise.de") oder eine Funktion (siehe function getURI() im Plug-In-Quellcode)
	 *
	 * @var string
	 */
	protected $uri = null;

	/**
	 * Der User hat Facebook zur Auswahl
	 *
	 * @var bool
	 */
	protected $facebookEnabled = false;

	/**
	 * Pfad zur statischen Grafik
	 *
	 * @var string
	 */
	protected $facebookDummyImage = null;

	/**
	 * MouseOver-Text des Empfehlen-Buttons
	 *
	 * @var string
	 */
	protected $facebookTextInfo = null;

	/**
	 * Text-Entsprechung der Schalter-Grafik im ausgeschalteten Zustand, in der Regel nicht sichtbar für den User
	 *
	 * @var string
	 */
	protected $facebookTextOff = null;

	/**
	 * Text-Entsprechung der Schalter-Grafik im eingeschalteten Zustand, in der Regel nicht sichtbar für den User
	 *
	 * @var string
	 */
	protected $facebookTextOn = null;

	/**
	 * Der User hat die Option sich Facebook dauerhaft einblenden zu lassen (mittels Cookie)
	 *
	 * @var bool
	 */
	protected $facebookPermaOption = true;

	/**
	 * Schreibweise des Service in den Optionen
	 *
	 * @var string
	 */
	protected $facebookDisplayName = null;

	/**
	 * Wird ans Ende der URL gehängt, kann zum Tracken des Referrers genutzt werden
	 *
	 * @var string
	 */
	protected $facebookReferrerTrack = null;

	/**
	 * Spracheinstellung
	 *
	 * @var string
	 */
	protected $facebookLanguage = null;

	/**
	 * Beschriftung des Buttons: Empfehlen (recommend) oder Gefällt mir (like)
	 *
	 * @var string
	 */
	protected $facebookAction = null;

	/**
	 * Der User hat Twitter zur Auswahl
	 *
	 * @var bool
	 */
	protected $twitterEnabled = false;

	/**
	 * Pfad zur statischen Grafik
	 *
	 * @var string
	 */
	protected $twitterDummyImage = null;

	/**
	 * MouseOver-Text des Tweet-Buttons
	 *
	 * @var string
	 */
	protected $twitterTextInfo = null;

	/**
	 * Text-Entsprechung der Schalter-Grafik im ausgeschalteten Zustand, in der Regel nicht sichtbar für den User
	 *
	 * @var string
	 */
	protected $twitterTextOff = null;

	/**
	 * Text-Entsprechung der Schalter-Grafik im eingeschalteten Zustand, in der Regel nicht sichtbar für den User
	 *
	 * @var string
	 */
	protected $twitterTextOn = null;

	/**
	 * Der User hat die Option sich Twitter dauerhaft einblenden zu lassen (mittels Cookie)
	 *
	 * @var bool
	 */
	protected $twitterPermaOption = true;

	/**
	 * Schreibweise des Service in den Optionen
	 *
	 * @var string
	 */
	protected $twitterDisplayName = null;

	/**
	 * Wird ans Ende der URL gehängt, kann zum Tracken des Referrers genutzt werden
	 *
	 * @var string
	 */
	protected $twitterReferrerTrack = null;

	/**
	 * Die Funktion prüft ob es die Meta-Angabe DC.title gibt und verwendet diese. Gibt es außerdem noch DC.creator wird diese etwas abgesetzt (" - ") hinten angehängt. Ist DC.title nicht vorhanden wird das <title>-Tag der Seite verwendet.
	 * Diese Option kann mit einem eigenen Text (typeof == string) überschrieben werden oder mit einer eigenen Funktion (typeof == function), die den Text generiert.
	 * Der übergebene Texte wird immer auf 120 Zeichen gekürzt und beim letzten Leerzeichen mit … ersetzt.
	 *
	 * @var string
	 */
	protected $twitterTweetText = null;

	/**
	 * Spracheinstellung (Default: "en" ja, uns gefällt Tweet besser als Twittern)
	 *
	 * @var string
	 */
	protected $twitterLanguage = null;

	/**
	 * Der User hat Google+ zur Auswahl
	 *
	 * @var bool
	 */
	protected $gplusEnabled = false;

	/**
	 * Pfad zur statischen Grafik
	 *
	 * @var string
	 */
	protected $gplusDummyImage = null;

	/**
	 * MouseOver-Text des „+1“-Buttons
	 *
	 * @var string
	 */
	protected $gplusTextInfo = null;

	/**
	 * Text-Entsprechung der Schalter-Grafik im ausgeschalteten Zustand, in der Regel nicht sichtbar für den User
	 *
	 * @var string
	 */
	protected $gplusTextOff = null;

	/**
	 * Text-Entsprechung der Schalter-Grafik im eingeschalteten Zustand, in der Regel nicht sichtbar für den User
	 *
	 * @var string
	 */
	protected $gplusTextOn = null;

	/**
	 * Der User hat die Option sich Google+ dauerhaft einblenden zu lassen (mittels Cookie)
	 *
	 * @var bool
	 */
	protected $gplusPermaOption = true;

	/**
	 * Schreibweise des Service in den Optionen
	 *
	 * @var string
	 */
	protected $gplusDisplayName = null;

	/**
	 * Wird ans Ende der URL gehängt, kann zum Tracken des Referrers genutzt werden
	 *
	 * @var string
	 */
	protected $gplusReferrerTrack = null;

	/**
	 * Spracheinstellung
	 *
	 * @var string
	 */
	protected $gplusLanguage = null;

	/**
	 * @param string $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param string $template
	 */
	public function setTemplate($template)
	{
		$this->template = $template;
	}

	/**
	 * @return string
	 */
	public function getTemplate()
	{
		return $this->template;
	}

	/**
	 * @param boolean $includeJQuery
	 */
	public function setIncludeJQuery($includeJQuery)
	{
		$this->includeJQuery = $includeJQuery ? true : false;
	}

	/**
	 * @return boolean
	 */
	public function getIncludeJQuery()
	{
		return $this->includeJQuery;
	}

	/**
	 * @param string $infoLink
	 */
	public function setInfoLink($infoLink)
	{
		$this->infoLink = $infoLink;
	}

	/**
	 * @return string
	 */
	public function getInfoLink()
	{
		return $this->infoLink;
	}

	/**
	 * @param string $textHelp
	 */
	public function setTextHelp($textHelp)
	{
		$this->textHelp = $textHelp;
	}

	/**
	 * @return string
	 */
	public function getTextHelp()
	{
		return $this->textHelp;
	}

	/**
	 * @param bool $settingsPerma
	 */
	public function setSettingsPerma($settingsPerma)
	{
		$this->settingsPerma = $settingsPerma;
	}

	/**
	 * @return bool
	 */
	public function getSettingsPerma()
	{
		return $this->settingsPerma;
	}

	/**
	 * @param string $cookiePath
	 */
	public function setCookiePath($cookiePath)
	{
		$this->cookiePath = $cookiePath;
	}

	/**
	 * @return string
	 */
	public function getCookiePath()
	{
		return $this->cookiePath;
	}

	/**
	 * @param string $cookieDomain
	 */
	public function setCookieDomain($cookieDomain)
	{
		$this->cookieDomain = $cookieDomain;
	}

	/**
	 * @return string
	 */
	public function getCookieDomain()
	{
		return $this->cookieDomain;
	}

	/**
	 * @param int $cookieExpires
	 */
	public function setCookieExpires($cookieExpires)
	{
		$this->cookieExpires = intval($cookieExpires);
	}

	/**
	 * @return int
	 */
	public function getCookieExpires()
	{
		return $this->cookieExpires;
	}

	/**
	 * @param string $cssPath
	 */
	public function setCssPath($cssPath)
	{
		$this->cssPath = $cssPath;
	}

	/**
	 * @return string
	 */
	public function getCssPath()
	{
		return $this->cssPath;
	}

	/**
	 * @param string $uri
	 */
	public function setUri($uri)
	{
		$this->uri = $uri;
	}

	/**
	 * @return string
	 */
	public function getUri()
	{
		return $this->uri;
	}

	/**
	 * Set language
	 *
	 * @param string $language
	 */
	public function setLanguage($language)
	{
		$this->setFacebookLanguage($language);
		$this->setTwitterLanguage($language);
		$this->setGplusLanguage($language);
	}

	/**
	 * @param bool $facebookEnabled
	 */
	public function setFacebookEnabled($facebookEnabled)
	{
		$this->facebookEnabled = $facebookEnabled ? true : false;
	}

	/**
	 * @return bool
	 */
	public function getFacebookEnabled()
	{
		return $this->facebookEnabled;
	}

	/**
	 * @param string $facebookDummyImage
	 */
	public function setFacebookDummyImage($facebookDummyImage)
	{
		$this->facebookDummyImage = $facebookDummyImage;
	}

	/**
	 * @return string
	 */
	public function getFacebookDummyImage()
	{
		return $this->facebookDummyImage;
	}

	/**
	 * @param string $facebookTextInfo
	 */
	public function setFacebookTextInfo($facebookTextInfo)
	{
		$this->facebookTextInfo = $facebookTextInfo;
	}

	/**
	 * @return string
	 */
	public function getFacebookTextInfo()
	{
		return $this->facebookTextInfo;
	}

	/**
	 * @param string $facebookTextOff
	 */
	public function setFacebookTextOff($facebookTextOff)
	{
		$this->facebookTextOff = $facebookTextOff;
	}

	/**
	 * @return string
	 */
	public function getFacebookTextOff()
	{
		return $this->facebookTextOff;
	}

	/**
	 * @param string $facebookTextOn
	 */
	public function setFacebookTextOn($facebookTextOn)
	{
		$this->facebookTextOn = $facebookTextOn;
	}

	/**
	 * @return string
	 */
	public function getFacebookTextOn()
	{
		return $this->facebookTextOn;
	}

	/**
	 * @param bool $facebookPermaOption
	 */
	public function setFacebookPermaOption($facebookPermaOption)
	{
		$this->facebookPermaOption = $facebookPermaOption ? true : false;
	}

	/**
	 * @return bool
	 */
	public function getFacebookPermaOption()
	{
		return $this->facebookPermaOption;
	}

	/**
	 * @param string $facebookDisplayName
	 */
	public function setFacebookDisplayName($facebookDisplayName)
	{
		$this->facebookDisplayName = $facebookDisplayName;
	}

	/**
	 * @return string
	 */
	public function getFacebookDisplayName()
	{
		return $this->facebookDisplayName;
	}

	/**
	 * @param string $facebookReferrerTrack
	 */
	public function setFacebookReferrerTrack($facebookReferrerTrack)
	{
		$this->facebookReferrerTrack = $facebookReferrerTrack;
	}

	/**
	 * @return string
	 */
	public function getFacebookReferrerTrack()
	{
		return $this->facebookReferrerTrack;
	}

	/**
	 * @param string $facebookLanguage
	 */
	public function setFacebookLanguage($facebookLanguage)
	{
		$this->facebookLanguage = $facebookLanguage;
	}

	/**
	 * @return string
	 */
	public function getFacebookLanguage()
	{
		return $this->facebookLanguage;
	}

	/**
	 * @param string $facebookAction
	 */
	public function setFacebookAction($facebookAction)
	{
		$this->facebookAction = $facebookAction == 'like' ? 'like' : 'recommend';
	}

	/**
	 * @return string
	 */
	public function getFacebookAction()
	{
		return $this->facebookAction;
	}

	/**
	 * @param bool $twitterEnabled
	 */
	public function setTwitterEnabled($twitterEnabled)
	{
		$this->twitterEnabled = $twitterEnabled ? true : false;
	}

	/**
	 * @return bool
	 */
	public function getTwitterEnabled()
	{
		return $this->twitterEnabled;
	}

	/**
	 * @param string $twitterDummyImage
	 */
	public function setTwitterDummyImage($twitterDummyImage)
	{
		$this->twitterDummyImage = $twitterDummyImage;
	}

	/**
	 * @return string
	 */
	public function getTwitterDummyImage()
	{
		return $this->twitterDummyImage;
	}

	/**
	 * @param string $twitterTextInfo
	 */
	public function setTwitterTextInfo($twitterTextInfo)
	{
		$this->twitterTextInfo = $twitterTextInfo;
	}

	/**
	 * @return string
	 */
	public function getTwitterTextInfo()
	{
		return $this->twitterTextInfo;
	}

	/**
	 * @param string $twitterTextOff
	 */
	public function setTwitterTextOff($twitterTextOff)
	{
		$this->twitterTextOff = $twitterTextOff;
	}

	/**
	 * @return string
	 */
	public function getTwitterTextOff()
	{
		return $this->twitterTextOff;
	}

	/**
	 * @param string $twitterTextOn
	 */
	public function setTwitterTextOn($twitterTextOn)
	{
		$this->twitterTextOn = $twitterTextOn;
	}

	/**
	 * @return string
	 */
	public function getTwitterTextOn()
	{
		return $this->twitterTextOn;
	}

	/**
	 * @param bool $twitterPermaOption
	 */
	public function setTwitterPermaOption($twitterPermaOption)
	{
		$this->twitterPermaOption = $twitterPermaOption ? true : false;
	}

	/**
	 * @return bool
	 */
	public function getTwitterPermaOption()
	{
		return $this->twitterPermaOption;
	}

	/**
	 * @param string $twitterDisplayName
	 */
	public function setTwitterDisplayName($twitterDisplayName)
	{
		$this->twitterDisplayName = $twitterDisplayName;
	}

	/**
	 * @return string
	 */
	public function getTwitterDisplayName()
	{
		return $this->twitterDisplayName;
	}

	/**
	 * @param string $twitterReferrerTrack
	 */
	public function setTwitterReferrerTrack($twitterReferrerTrack)
	{
		$this->twitterReferrerTrack = $twitterReferrerTrack;
	}

	/**
	 * @return string
	 */
	public function getTwitterReferrerTrack()
	{
		return $this->twitterReferrerTrack;
	}

	/**
	 * @param string $twitterTweetText
	 */
	public function setTwitterTweetText($twitterTweetText)
	{
		$this->twitterTweetText = $twitterTweetText;
	}

	/**
	 * @return string
	 */
	public function getTwitterTweetText()
	{
		return $this->twitterTweetText;
	}

	/**
	 * @param string $twitterLanguage
	 */
	public function setTwitterLanguage($twitterLanguage)
	{
		$this->twitterLanguage = $twitterLanguage;
	}

	/**
	 * @return string
	 */
	public function getTwitterLanguage()
	{
		return $this->twitterLanguage;
	}

	/**
	 * @param bool $gplusEnabled
	 */
	public function setGplusEnabled($gplusEnabled)
	{
		$this->gplusEnabled = $gplusEnabled ? true : false;
	}

	/**
	 * @return bool
	 */
	public function getGplusEnabled()
	{
		return $this->gplusEnabled;
	}

	/**
	 * @param string $gplusDummyImage
	 */
	public function setGplusDummyImage($gplusDummyImage)
	{
		$this->gplusDummyImage = $gplusDummyImage;
	}

	/**
	 * @return string
	 */
	public function getGplusDummyImage()
	{
		return $this->gplusDummyImage;
	}

	/**
	 * @param string $gplusTextInfo
	 */
	public function setGplusTextInfo($gplusTextInfo)
	{
		$this->gplusTextInfo = $gplusTextInfo;
	}

	/**
	 * @return string
	 */
	public function getGplusTextInfo()
	{
		return $this->gplusTextInfo;
	}

	/**
	 * @param string $gplusTextOff
	 */
	public function setGplusTextOff($gplusTextOff)
	{
		$this->gplusTextOff = $gplusTextOff;
	}

	/**
	 * @return string
	 */
	public function getGplusTextOff()
	{
		return $this->gplusTextOff;
	}

	/**
	 * @param string $gplusTextOn
	 */
	public function setGplusTextOn($gplusTextOn)
	{
		$this->gplusTextOn = $gplusTextOn;
	}

	/**
	 * @return string
	 */
	public function getGplusTextOn()
	{
		return $this->gplusTextOn;
	}

	/**
	 * @param bool $gplusPermaOption
	 */
	public function setGplusPermaOption($gplusPermaOption)
	{
		$this->gplusPermaOption = $gplusPermaOption ? true : false;
	}

	/**
	 * @return bool
	 */
	public function getGplusPermaOption()
	{
		return $this->gplusPermaOption;
	}

	/**
	 * @param string $gplusDisplayName
	 */
	public function setGplusDisplayName($gplusDisplayName)
	{
		$this->gplusDisplayName = $gplusDisplayName;
	}

	/**
	 * @return string
	 */
	public function getGplusDisplayName()
	{
		return $this->gplusDisplayName;
	}

	/**
	 * @param string $gplusReferrerTrack
	 */
	public function setGplusReferrerTrack($gplusReferrerTrack)
	{
		$this->gplusReferrerTrack = $gplusReferrerTrack;
	}

	/**
	 * @return string
	 */
	public function getGplusReferrerTrack()
	{
		return $this->gplusReferrerTrack;
	}

	/**
	 * @param string $gplusLanguage
	 */
	public function setGplusLanguage($gplusLanguage)
	{
		$this->gplusLanguage = $gplusLanguage;
	}

	/**
	 * @return string
	 */
	public function getGplusLanguage()
	{
		return $this->gplusLanguage;
	}

	public function generate()
	{
		// use a custom id
		if ($this->id !== null) {
			$strId = $this->id;
		}

		// use auto generated id
		else if (!isset($GLOBALS['SocialSharePrivacyID'])) {
			$strId = '_' . ($GLOBALS['SocialSharePrivacyID'] = 1);
		}

		else {
			$strId = '_' . ++$GLOBALS['SocialSharePrivacyID'];
		}

		// script settings
		$arrSettings = array();

		// global options
		if ($this->infoLink)
		{
			$arrSettings['info_link'] = $this->infoLink;
		}
		if ($this->textHelp)
		{
			$arrSettings['txt_help'] = $this->textHelp;
		}
		if ($this->settingsPerma)
		{
			$arrSettings['settings_perma'] = $this->settingsPerma;
		}
		if ($this->cookiePath)
		{
			$arrSettings['cookie_path'] = $this->cookiePath;
		}
		if ($this->cookieDomain)
		{
			$arrSettings['cookie_domain'] = $this->cookieDomain;
		}
		if ($this->cookieExpires)
		{
			$arrSettings['cookie_expires'] = $this->cookieExpires;
		}
		if ($this->cssPath)
		{
			$arrSettings['css_path'] = $this->cssPath;
		}
		else
		{
			$arrSettings['css_path'] = 'system/modules/socialshareprivacy/html/socialshareprivacy.css';
		}
		if ($this->uri)
		{
			$arrSettings['uri'] = urldecode($this->uri);
		}

		// facebook options
		$arrSettings['services']['facebook']['status'] = $this->facebookEnabled ? 'on' : 'off';
		if ($this->facebookDummyImage)
		{
			$arrSettings['services']['facebook']['dummy_img'] = $this->facebookDummyImage;
		}
		else
		{
			$arrSettings['services']['facebook']['dummy_img'] = 'system/modules/socialshareprivacy/html/images/dummy_facebook.png';
		}
		if ($this->facebookTextInfo)
		{
			$arrSettings['services']['facebook']['txt_info'] = $this->facebookTextInfo;
		}
		if ($this->facebookTextOff)
		{
			$arrSettings['services']['facebook']['txt_fb_off'] = $this->facebookTextOff;
		}
		if ($this->facebookTextOn)
		{
			$arrSettings['services']['facebook']['txt_fb_on'] = $this->facebookTextOn;
		}
		$arrSettings['services']['facebook']['perma_option'] = $this->facebookPermaOption ? 'on' : 'off';
		if ($this->facebookDisplayName)
		{
			$arrSettings['services']['facebook']['display_name'] = $this->facebookDisplayName;
		}
		if ($this->facebookReferrerTrack)
		{
			$arrSettings['services']['facebook']['referrer_track'] = $this->facebookReferrerTrack;
		}
		if ($this->facebookLanguage)
		{
			$arrSettings['services']['facebook']['language'] = $this->facebookLanguage;
		}
		if ($this->facebookAction)
		{
			$arrSettings['services']['facebook']['action'] = urldecode($this->facebookAction);
		}

		// twitter options
		$arrSettings['services']['twitter']['status'] = $this->twitterEnabled ? 'on' : 'off';
		if ($this->twitterDummyImage)
		{
			$arrSettings['services']['twitter']['dummy_img'] = $this->twitterDummyImage;
		}
		else
		{
			$arrSettings['services']['twitter']['dummy_img'] = 'system/modules/socialshareprivacy/html/images/dummy_twitter.png';
		}
		if ($this->twitterTextInfo)
		{
			$arrSettings['services']['twitter']['txt_info'] = $this->twitterTextInfo;
		}
		if ($this->twitterTextOff)
		{
			$arrSettings['services']['twitter']['txt_twitter_off'] = $this->twitterTextOff;
		}
		if ($this->twitterTextOn)
		{
			$arrSettings['services']['twitter']['txt_twitter_on'] = $this->twitterTextOn;
		}
		$arrSettings['services']['twitter']['perma_option'] = $this->twitterPermaOption ? 'on' : 'off';
		if ($this->twitterDisplayName)
		{
			$arrSettings['services']['twitter']['display_name'] = $this->twitterDisplayName;
		}
		if ($this->twitterReferrerTrack)
		{
			$arrSettings['services']['twitter']['referrer_track'] = $this->twitterReferrerTrack;
		}
		if ($this->twitterTweetText)
		{
			$arrSettings['services']['twitter']['tweet_text'] = $this->twitterTweetText;
		}
		if ($this->twitterLanguage)
		{
			$arrSettings['services']['twitter']['language'] = $this->twitterLanguage;
		}

		// google+ options
		$arrSettings['services']['gplus']['status'] = $this->gplusEnabled ? 'on' : 'off';
		if ($this->gplusDummyImage)
		{
			$arrSettings['services']['gplus']['dummy_img'] = $this->gplusDummyImage;
		}
		else
		{
			$arrSettings['services']['gplus']['dummy_img'] = 'system/modules/socialshareprivacy/html/images/dummy_gplus.png';
		}
		if ($this->gplusTextInfo)
		{
			$arrSettings['services']['gplus']['txt_info'] = $this->gplusTextInfo;
		}
		if ($this->gplusTextOff)
		{
			$arrSettings['services']['gplus']['txt_gplus_off'] = $this->gplusTextOff;
		}
		if ($this->gplusTextOn)
		{
			$arrSettings['services']['gplus']['txt_gplus_on'] = $this->gplusTextOn;
		}
			$arrSettings['services']['gplus']['perma_option'] = $this->gplusPermaOption ? 'on' : 'off';
		if ($this->gplusDisplayName)
		{
			$arrSettings['services']['gplus']['display_name'] = $this->gplusDisplayName;
		}
		if ($this->gplusReferrerTrack)
		{
			$arrSettings['services']['gplus']['referrer_track'] = $this->gplusReferrerTrack;
		}
		if ($this->gplusLanguage)
		{
			$arrSettings['services']['gplus']['language'] = $this->gplusLanguage;
		}

		$objTemplate = new FrontendTemplate('socialshareprivacy_default');
		$objTemplate->id       = $strId;
		$objTemplate->nojquery = !$this->includeJQuery;
		$objTemplate->settings = $arrSettings;

		return $objTemplate->parse();
	}

	public static function encodeSettings($arrSettings)
	{
		$strJson = json_encode($arrSettings);
		$strJson = preg_replace_callback('#"script:(.*)"#U', array('ModuleSocialSharePrivacy', 'encodeSettingsCallback'), $strJson);
		return $strJson;
	}

	public static function encodeSettingsCallback($m)
	{
		return html_entity_decode($m[1]);
	}
}
