jQuery.noConflict();
jQuery(document).ready(function()
{
  /**
  * Init date picker
  */
  jQuery(".field-date input, .repeatingdate .date input").datepicker(
    {
      dateFormat: 'd MM yy' // e.g., 15 June 2009
    }
  );
});
