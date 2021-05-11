# ReShare VuFind module
Vufind Module for ReShare customizations. Includes record driver to add bibliographic and user IDs to OpenURLs.

## Installation

1. Download or clone this repository and copy the top "ReShare" directory into VuFind's `module` dirctory.
2. Set the `VUFIND_LOCAL_MODULES` environment variable in $VUFIND_LOCAL_DIR/httpd-vufind.conf to "ReShare".
    - If `SetEnv VUFIND_LOCAL_MODULES` is commented out, uncomment the line and add a space and then "ReShare".
    - If other modules are already listed, add a comma after the last and then add "ReShare".
3. Restart apache (`systemctl restart apache2`).
4. To verify the module is working, view the page source for any item and look for a hidden `span` with a class of "Z3988". The `title` attribute of the `span` element will contain the new bibliographic and user (if logged in) ID fields in the list of key/value pairs.

See [VuFind's documentation](https://vufind.org/wiki/development:architecture:customizing_vufind) or the comments around the `SetEnv VUFIND_LOCAL_MODULES` line in $VUFIND_LOCAL_DIR/httpd-vufind.conf for more information on configuring custom modules.