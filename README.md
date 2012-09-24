Magento Responsive Theme
========================

The GPMD responsive Magento theme is a simple fluid base theme which can be easily used as a starting point for your projects.

**The styling has been kept purposely simple so it's easy to override. It's based on the base/default theme (with the demo store content), and has only a few template overrides to make the markup suitable for a responsive site.**

It combines elements from [Mobile Boilerplate](https://github.com/h5bp/mobile-boilerplate/), [Gridless](http://thatcoolguy.github.com/gridless-boilerplate/) and [semantic.gs](https://github.com/twigkit/semantic.gs/). It also includes the excellent [Font Awesome](http://fortawesome.github.com/Font-Awesome/) icon font.


![GPMD Responsive Magento Theme](https://dl.dropbox.com/u/35123605/GPMD/Magento%20Responsive%20Theme/Screen%20Grabs/gpmd-mage-resp-ipad-iphone-852.jpg)


Get it now!
-----------

Clone the repo, `git clone git@github.com:gpmd/magento-responsive-theme.git`, or [download the latest release](https://github.com/gpmd/magento-responsive-theme/zipball/master).

Alternatively you can [download the theme as a Magento package](https://github.com/gpmd/magento-responsive-theme/blob/master/var/connect/GPMD_Responsive_Theme-0.1.3.tgz), although this may not be the most up-to-date version.


Screen shots
------------

We don't yet have a live demo available, but in the meantime you can [view some screen grabs here](http://gpmd.github.com/magento-responsive-theme/).


Instructions
------------

Either...

- [Download the theme as a Magento package](https://github.com/gpmd/magento-responsive-theme/blob/master/var/connect/GPMD_Responsive_Theme-0.1.3.tgz) and install through the Magento Connect Manager

Or...

1. [Download the repository](https://github.com/gpmd/magento-responsive-theme/zipball/master) and merge the files/folders into your own site manually:
2. In **System** > **Configuration** (General / Design tab), set **Package** to `gpmd`
3. Then set **Themes** - **Templates**, **Skin (Images/CSS)**, **Layout** and **Default** to `default`


Updates
-------

Keep up to date by following GPMD on Twitter, [@gpmd](https://twitter.com/gpmd).


Bugs
----

Please create issues on GitHub: https://github.com/gpmd/magento-responsive-theme/issues


Changelog
---------

### v0.1.3 Beta

- Created initial git repo.


To do
-----

- Add instructions on overriding the theme
- Modularise the less/css more effectively (smacss approach)
- Better less/css commenting
- Move less variables out of style-mixins.less into their own file
- Reduce css specificity
- Replace Gridless with a more simple reset
- More thorough cross browser/platform testing
- Remove unnecessary files/folders (mainly images)
- Remove unnecessary css/js
- Change namespace


Authors
-------

**GPMD**

+ http://gpmd.co.uk

**Matt Bailey**

+ http://twitter.com/_mattbailey
+ http://dribbble.com/mattbailey
+ http://github.com/matt-bailey
+ http://www.mattbailey.co


License
-------

Copyright 2012 GPMD

This file is part of the GPMD Magento Responsive Theme.

The GPMD Magento Responsive Theme is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

The GPMD Magento Responsive Theme is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with the GPMD Magento Responsive Theme. If not, see http://www.gnu.org/licenses/.