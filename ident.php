<?php

/**
  * Plugin to add imap id
  *
  * @version 1.0
  * @author Cor Bosman
  */

class ident extends rcube_plugin 
{

  function init()
  {
    $this->add_hook('storage_connect', array($this, 'add_ident'));
  }

  function add_ident($args)
  {
    $args['ident'] = $args['ident'] ? array_merge($args['ident'], array('x-originating-ip' => rcube_utils::remote_addr()))
									: array('x-originating-ip' => rcube_utils::remote_addr());
    return $args;
  }
}

?>
