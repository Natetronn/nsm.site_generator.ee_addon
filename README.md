# NSM Site Generator

Many years in the making it's finally starting to take shape.

1. Create a new EE install (for testing purposes)
2. Download the addon and copy files to `system/expressionengine/third_party/nsm_site_generator`
3. Install the module, extension
4. Set the theme import / export path in the extension settings (bundles included in repo)
5. Open the module
6. Export your current site as a new theme or import an existing site
7. Profit…

## Todo:

* Backup existing templates on export
* Implement category import / export
* Implement third party custom field dependency checking
* Implement third party custom field hooks for import / export
* Implement pages module for import / export
* Create bootstrap theme based on Newism's naming conventions
* Implement extension hooks / generator callbacks

## Done: 

* -Fix related custom field channel assignment- Fixed: Native relationships now work. This allows users to [update naive relationship fields to playa](http://pixelandtonic.com/playa/docs/conversion)
