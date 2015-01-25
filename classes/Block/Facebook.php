<?php

defined('SYSPATH') or die('No direct script access.');

class Block_Facebook extends Block
{

    public function run_spec($arguments = array())
    {
        $this->view->url = $arguments;
    }

}
