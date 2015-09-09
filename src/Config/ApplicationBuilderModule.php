<?php
namespace Selenia\Plugins\ApplicationBuilder\Config;

use Selenia\Plugins\ApplicationBuilder\Controllers\Index;

class ApplicationBuilderModule
{
  const ref = __CLASS__;

  static function routes ()
  {
    return [

      PageRoute ([
        'title'      => 'Modules Manager Index',
        'URI'        => 'application-builder',
        'controller' => Index::ref (),
      ]),

    ];
  }
}
