<?php

class bootstrapAdminThemePluginConfiguration extends sfPluginConfiguration
{
  /**
   * @see sfPluginConfiguration
   */
  public function initialize()
  {
      sfConfig::set('sf_bootstrap_admin_module_web_dir', '/bootstrapSymfonyThemeAdminPlugin/web');
      sfConfig::set('sf_bootstrap_admin_module_responsive', true);
  }
}