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
xs_log($args);
    $args['ident'] = array_merge($args['ident'], array('x-originating-ip' => $_SERVER['REMOTE_ADDR']));
    xs_log($args);
    return $args;
  }
}

?>
