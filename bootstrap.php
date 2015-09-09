<?php

use Selenia\Plugins\ApplicationBuilder\Config\ApplicationBuilderModule;

ModuleOptions (__DIR__, [
  'templates'  => true,
  'views'      => true,
  'public'     => 'modules/selenia-plugins/application-builder',
//  'publish'    => [],
//  'lang'       => true,
//  'assets'     => [],
//  'config'     => [],
//  'components' => [],
//  'presets'    => [],
  'routes'     => ApplicationBuilderModule::routes (),
]);
