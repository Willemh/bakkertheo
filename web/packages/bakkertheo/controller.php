<?php    

defined('C5_EXECUTE') or die(_("Access Denied."));

class BakkertheoPackage extends Package 
{
	protected $pkgHandle = 'bakkertheo';
	protected $appVersionRequired = '5.5.0';
	protected $pkgVersion = '1.0';
	
	public function getPackageDescription() 
	{
		return t("Installs the Bakker theo theme");
	}
	
	public function getPackageName() 
	{
		return t("Bakkerij Theo Hoek");
	}
	
	public function install() 
	{
		$pkg = parent::install(); 
		
		// install the theme		
		PageTheme::add('bakkertheo', $pkg);		
	}
}