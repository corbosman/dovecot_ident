ident
=====

Roundcube Ident Plugin that uses IMAP ID to pass some logging info to the remote imap server.

This can be used with for instance dovecot to log the actual connecting ip address instead of the webserver's address.

To use this in dovecot, make sure the webserver network is added to login_trusted_networks in dovecot.conf,


