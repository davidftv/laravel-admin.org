<?php

namespace App\Admin\Extensions\Nav;

class VueMain
{
    public function __toString()
    {
        return <<<HTML

        <div id="app">
        </div>
        <script src="/js/app.js"></script>

HTML;
    }
}