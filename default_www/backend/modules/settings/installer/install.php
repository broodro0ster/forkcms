<?php

/**
 * SettingsInstall
 * Installer for the settings module
 *
 * @package		installer
 * @subpackage	contact
 *
 * @author		Davy Hellemans <davy@netlash.com>
 * @author 		Tijs Verkoyen <tijs@netlash.com>
 * @since		2.0
 */
class SettingsInstall extends ModuleInstaller
{
	/**
	 * Install the module
	 *
	 * @return	void
	 */
	protected function execute()
	{
		// load install.sql
		$this->importSQL(PATH_WWW .'/backend/modules/settings/installer/install.sql');

		// add 'settings' as a module
		$this->addModule('settings', 'The module to manage your settings.');

		// general settings
		$this->setSetting('settings', 'requires_akismet', false);
		$this->setSetting('settings', 'requires_google_maps', false);

		// module rights
		$this->setModuleRights(1, 'settings');

		// action rights
		$this->setActionRights(1, 'settings', 'index');

		// insert locale (nl)
		$this->insertLocale('nl', 'backend', 'settings', 'msg', 'ConfigurationError', 'Sommige instellingen zijn nog niet geconfigureerd:');
		$this->insertLocale('nl', 'backend', 'settings', 'msg', 'HelpAPIKeys', 'Toegangscodes voor gebruikte webservices:');
		$this->insertLocale('nl', 'backend', 'settings', 'msg', 'HelpDateFormatLong', 'Formaat dat bij de overzichtspagina\'s en detailweergaves wordt gebruikt.');
		$this->insertLocale('nl', 'backend', 'settings', 'msg', 'HelpDateFormatShort', 'Dit formaat wordt voornamelijk gebruikt bij tabelweergaves.');
		$this->insertLocale('nl', 'backend', 'settings', 'msg', 'HelpDomains', 'Vul de domeinen in waarop de website te bereiken is (1 domein per regel)');
		$this->insertLocale('nl', 'backend', 'settings', 'msg', 'HelpEmailWebmaster', 'Stuur notificaties van het CMS naar dit e-mailadres.');
		$this->insertLocale('nl', 'backend', 'settings', 'msg', 'HelpLanguages', 'Duid aan welke talen toegankelijk zijn voor bezoekers');
		$this->insertLocale('nl', 'backend', 'settings', 'msg', 'HelpRedirectLanguages', 'Duid aan in welke talen mensen op basis van hun browser mogen terechtkomen.');
		$this->insertLocale('nl', 'backend', 'settings', 'msg', 'HelpScripts', 'Plaats hier code die op elke pagina geladen moet worden. (bvb. Google Analytics).');
		$this->insertLocale('nl', 'backend', 'settings', 'msg', 'HelpThemes', 'Duid aan welk thema je wil gebruiken.');
		$this->insertLocale('nl', 'backend', 'settings', 'msg', 'HelpTimeFormat', 'Dit formaat wordt gehanteerd bij het weergeven van datums in de frontend.');

		// insert locale (en)
		$this->insertLocale('en', 'backend', 'settings', 'msg', 'ConfigurationError', 'Some settings are not yet configured.');
		$this->insertLocale('en', 'backend', 'settings', 'msg', 'HelpAPIKeys', 'Access codes for webservices.');
		$this->insertLocale('en', 'backend', 'settings', 'msg', 'HelpDateFormatLong', 'Format that\s used on overview and detail pages.');
		$this->insertLocale('en', 'backend', 'settings', 'msg', 'HelpDateFormatShort', 'This format is mostly used in table overviews.');
		$this->insertLocale('en', 'backend', 'settings', 'msg', 'HelpDomains', 'Enter the domains on which this website can be reached. (Split domains with linebreaks.)');
		$this->insertLocale('en', 'backend', 'settings', 'msg', 'HelpEmailWebmaster', 'Send CMS notifications to this e-mailaddress.');
		$this->insertLocale('en', 'backend', 'settings', 'msg', 'HelpLanguages', 'Select the languages that are accessible for visitors.');
		$this->insertLocale('en', 'backend', 'settings', 'msg', 'HelpRedirectLanguages', 'Select the languages that people may automatically be redirect to by their browser.');
		$this->insertLocale('en', 'backend', 'settings', 'msg', 'HelpScripts', 'Reserved for a piece of code, that needs to be loaded on every page. (eg. Google Analytics)');
		$this->insertLocale('en', 'backend', 'settings', 'msg', 'HelpThemes', 'Select the theme you wish to use.');
		$this->insertLocale('en', 'backend', 'settings', 'msg', 'HelpTimeFormat', 'This format is used to display dates on the website.');
	}
}

?>