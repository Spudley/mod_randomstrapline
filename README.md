Random Strapline
=======================

A small Joomla! module to display a random line of content from the module config.

Written by Simon Champion, August 2018.


Version History
---------------

* v1.0.0    Initial release.


Introduction
------------

This is a very small Joomla! module that allows you to place small single line of text on your page, which is selected at random from a number of lines configured in the module.

I am using this for the strapline of my site (ie a line of text below the site logo). The module allows me to have several possible straplines and display a random one from the list on the page.

As with any module, it can be placed anywhere on your site, so you are of course free to use it for displaying any random text, not just straplines.


Installation
------------

This module should be installed via the Extensions manager in Joomla!'s admin panel. You should also ensure that you have K2 installed in your Joomla! instance, as this module relies on it.


Setup
-----

Configuring the module is very simple. It has two configuration fields:

- HTML Class: This sets the class for the module's content. You can use this for styling the element.

- Straplines: This is the text field where you put the strapline texts. The module will split the text field content into lines, and pick one of them at random to display.


Multiple Instances
------------------

As with all Joomla! modules, you can create duplicates of the module with different config parameters and different publishing positions, etc. This may be useful if you have a lot of categories and want to provide separate lists for groups of related feeds.

Use the "Duplicate" button on the list of modules to achieve this. This is standard Joomla! functionality, so please see the Joomla! documentation for more details.


Who wrote this?
---------------

This code was written by Simon Champion.

All code in this repository is released under the GPLv2 licence. The GPLv2 licence document should be included with the code.



Known bugs and Limitations
--------------------------

- Note that this extension has only been tested against the current versions of Joomla! (3.8.11 at the time of writing).
- If your site uses caching (and it should do), then the module content may only be refreshed whenever the cache expires, rather than on every page load.


Todo
----

* No further work planned.


Trademarks and Licenses
-----------------------

* Joomla!® is a registered trademark of Open Source Matters, Inc.
* Joomla! is distributed under the GPLv2 licence.
* This package is distributed under the GPLv2 licence. The GPLv2 licence document should be included with the code.

