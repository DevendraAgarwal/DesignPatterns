<?php

namespace Structural\Bridge;

use Structural\Bridge\Pages\Page;

class BridgeAppClient {

    /**
     * The generatePageView usually deals only with
     * the Abstraction objects.
     *
     * @param  Page $page
     * @return void
     */
    public function generatePageView(Page $page)
    {
        // ...

        echo $page->view();

        // ...
    }
}
