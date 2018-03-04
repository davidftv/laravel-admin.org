<?php

namespace App\Admin\Extensions\Nav;

class VueMain
{
    public function __toString()
    {
        return <<<HTML

        <div id="app">
        </div>
         <script>
           window.Laravel = <?php echo json_encode([
               'csrfToken' => csrf_token(),
                    ]); ?>
          </script>
        <script src="{{asset('js/app.js')}}"></script>

HTML;
    }
}