# jQuery Date Picker #

Version: 1.4  
Author: Max Wheeler (max@makenosound.com)  
Build Date: 2012-05-08
Requirements: Symphony 2.3

Automatically enables the [jQuery Date Picker](http://docs.jquery.com/UI/Datepicker) on the "Publish" screen in the Symphony administration.

## Installation ##

1. Upload the 'jquery_date_picker' folder in this archive to your Symphony 'extensions' folder.

2. Enable it by selecting the "jQuery Date Picker", choose Enable from the with-selected menu, then click Apply.

3. All done. Any Date fields on your Publish pages will have the date picker enabled.

## Notes

* The date format is currently set as the Symphony default: 20 January 2009. The format can be changed by editing the initialise.js file in accordance with the formatting instructions at: [http://docs.jquery.com/UI/Datepicker/%24.datepicker.formatDate](http://docs.jquery.com/UI/Datepicker/%24.datepicker.formatDate)

* The date picker is styled using the default jQuery UI 'Cupertino' theme.

## Changelog ##

- **1.4:** Updated for Symphony 2.3.
- **1.3:** Changes by [kanduvisla](http://github.com/kanduvisla/) to make CSS compatible with Symphony 2.2
- **1.2:** Added .repeatingdate selector to initialise JS.