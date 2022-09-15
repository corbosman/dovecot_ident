<?php

/**
  * Plugin to add imap id
  *
  * @version 1.0
  * @author Cor Bosman
  */

class dovecot_ident extends rcube_plugin 
{

  function init()
  {
    $this->add_hook('storage_connect', array($this, 'add_ident'));
  }

  function add_ident($args)
  {
    $args['preauth_ident'] = $args['preauth_ident'] ? array_merge($args['preauth_ident'], array('x-originating-ip' => $_SERVER['REMOTE_ADDR']))
									: array('x-originating-ip' => $_SERVER['REMOTE_ADDR']);
    return $args;
  }
}

?>
