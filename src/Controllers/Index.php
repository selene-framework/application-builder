<?php
namespace Selenia\Plugins\ApplicationBuilder\Controllers;
use Selenia\Controller;
use Selenia\Lib\PackagistAPI;

class Index extends Controller
{
  protected function render ()
  { ?>
    <Main>

      <h3>Available plugin modules</h3>

      <div style="display:inline-block">
        <Repeat for="{{ !packages }}">
          <p>
            <label for="P{{ #ord }}">
              <input id="P{{ #ord }}" type="checkbox">
              {{ name }}
            </label>
        </Repeat>

        <p align="right">
          <button class="btn">Install</button>
      </div>

    </Main>

    <?php
  }

  protected function viewModel ()
  {
    return [
      'packages' => (new PackagistAPI)->type ('selenia-plugin')->search (true),
    ];
  }
}
