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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_nojquery']                    = array('jQuery unterbinden', 'Verhindert die Einbindung von jQuery.');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_info_link']                   = array('Link zu detaillierter Datenschutz-Info', 'default: <a href="http://www.heise.de/ct/artikel/2-Klicks-fuer-mehr-Datenschutz-1333879.html" target="_blank" onclick="window.open(this.href); return false;">http://www.heise.de/ct/artikel/2-Klicks-fuer-mehr-Datenschutz-1333879.html</a>');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_txt_help']                    = array('MouseOver-Text des i-Icons', '');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_settings_perma']              = array('Überschrift des Einstellungsmenüs', 'default: "Dauerhaft aktivieren und Datenüber­tragung zustimmen:"');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_cookie_path']                 = array('Pfad der Gültigkeit des Cookies', 'default: /');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_cookie_domain']               = array('Domain für die das Cookie gültig ist', 'default: document.location.host');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_cookie_expires']              = array('Dauer die das Cookie gültig ist in Tagen', 'default: 365');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_css_path']                    = array('Pfad zur CSS-Datei', 'default: socialshareprivacy/socialshareprivacy.css	');

$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_status']             = array('Der User hat Facebook zur Auswahl', '');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_app_id']             = array('Facebook App-ID', '<a href="http://www.heise.de/extras/socialshareprivacy/#fb_app-id" target="_blank" onclick="window.open(this.href); return false;">Hinweis zur Facebook App-ID</a>. Sie ist nötig um den Empfehlen-Button von Facebook nutzen zu können.');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_dummy_img']          = array('Pfad zur statischen Grafik', 'default: system/modules/socialshareprivacy/html/images/dummy_facebook.png');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_txt_info']           = array('MouseOver-Text des Empfehlen-Buttons', '');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_txt_fb_off']         = array('Text-Entsprechung der Schalter-Grafik im ausgeschalteten Zustand', 'in der Regel nicht sichtbar für den User, default: nicht mit Facebook verbunden');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_txt_fb_on']          = array('Text-Entsprechung der Schalter-Grafik im eingeschalteten Zustand', 'in der Regel nicht sichtbar für den User, default: mit Facebook verbunden');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_perma_option']       = array('Dauerhafte Einblendung aktivieren', 'Der User hat die Option sich Facebook dauerhaft einblenden zu lassen (mittels Cookie)');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_display_name']       = array('Schreibweise des Service in den Optionen', 'default: Facebook');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_referrer_track']     = array('Tracking Parameter', 'Wird ans Ende der URL gehängt, kann zum Tracken des Referrers genutzt werden');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_language']           = array('Spracheinstellung', 'Sprache in erweiterter Ausführung, also de_DE');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_uri']                = array('Share URL', 'Standardmäßig wird den Services die URL der aktuellen Seite übergeben (document.location.href), ist jedoch eine kanonische URL hinterlegt (<link rel="canonical">), wird diese genommen. Hier kann die URL überschrieben werden.');

$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_twitter_status']              = array('Der User hat Twitter zur Auswahl', '');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_twitter_dummy_img']           = array('Pfad zur statischen Grafik', 'default: system/modules/socialshareprivacy/html/images/dummy_twitter.png');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_twitter_txt_info']            = array('MouseOver-Text des Tweet-Buttons', '');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_twitter_txt_twitter_off']     = array('Text-Entsprechung der Schalter-Grafik im ausgeschalteten Zustand', 'in der Regel nicht sichtbar für den User, default: nicht mit Twitter verbunden');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_twitter_txt_twitter_on']      = array('Text-Entsprechung der Schalter-Grafik im eingeschalteten Zustand', 'in der Regel nicht sichtbar für den User, default: mit Twitter verbunden');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_twitter_perma_option']        = array('Dauerhafte Einblendung aktivieren', 'Der User hat die Option sich Twitter dauerhaft einblenden zu lassen (mittels Cookie)');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_twitter_display_name']        = array('Schreibweise des Service in den Optionen', 'Twitter');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_twitter_referrer_track']      = array('Tracking Parameter', 'Wird ans Ende der URL gehängt, kann zum Tracken des Referrers genutzt werden');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_twitter_tweet_text']          = array('Tweet Text', 'Die Funktion prüft ob es die Meta-Angabe <code>DC.title</code> gibt und verwendet diese. Gibt es außerdem noch <code>DC.creator</code> wird diese etwas abgesetzt (" - ") hinten angehängt. Ist <code>DC.title</code> nicht vorhanden wird das &lt;title&gt;-Tag der Seite verwendet.
Diese Option kann mit einem eigenen Text (<code>typeof == string</code>) überschrieben werden oder mit einer eigenen Funktion (<code>typeof == function</code>), die den Text generiert.
Der übergebene Texte wird immer auf 120 Zeichen gekürzt und beim letzten Leerzeichen mit … ersetzt.');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_twitter_uri']                 = array('Share URL', 'Standardmäßig wird den Services die URL der aktuellen Seite übergeben (document.location.href), ist jedoch eine kanonische URL hinterlegt (<link rel="canonical">), wird diese genommen. Hier kann die URL überschrieben werden.');

$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_gplus_status']                = array('Der User hat Google+ zur Auswahl', '');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_gplus_dummy_img']             = array('Pfad zur statischen Grafik', 'default: system/modules/socialshareprivacy/html/images/dummy_gplus.png');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_gplus_txt_info']              = array('MouseOver-Text des „+1“-Buttons', '');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_gplus_txt_gplus_off']         = array('Text-Entsprechung der Schalter-Grafik im ausgeschalteten Zustand', 'in der Regel nicht sichtbar für den User, default: nicht mit Google+ verbunden');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_gplus_txt_gplus_on']          = array('Text-Entsprechung der Schalter-Grafik im eingeschalteten Zustand', 'in der Regel nicht sichtbar für den User, default: mit Google+ verbunden');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_gplus_perma_option']          = array('Dauerhafte Einblendung aktivieren', 'Der User hat die Option sich Google+ dauerhaft einblenden zu lassen (mittels Cookie)');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_gplus_display_name']          = array('Schreibweise des Service in den Optionen', 'Google+');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_gplus_referrer_track']        = array('Tracking Parameter', 'Wird ans Ende der URL gehängt, kann zum Tracken des Referrers genutzt werden');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_gplus_language']              = array('Spracheinstellung', '');
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_gplus_uri']                   = array('Share URL', 'Standardmäßig wird den Services die URL der aktuellen Seite übergeben (document.location.href), ist jedoch eine kanonische URL hinterlegt (<link rel="canonical">), wird diese genommen. Hier kann die URL überschrieben werden.');

$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_template']                    = array('Template', 'Hier können Sie das Modultemplate auswählen.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_legend']                      = 'Privacy aware social share buttons';
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_facebook_legend']             = 'Facebook';
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_twitter_legend']              = 'Twitter';
$GLOBALS['TL_LANG']['tl_module']['socialshareprivacy_gplus_legend']                = 'Google+';
