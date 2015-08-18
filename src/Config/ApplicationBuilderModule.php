<?php
namespace Selene\ApplicationBuilder\Config;

use Selene\ApplicationBuilder\Controllers\Index;

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
