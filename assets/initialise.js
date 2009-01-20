jQuery(document).ready(function(){
  /* 
  * Init date picker
  */
  jQuery("label.date input").datepicker(
    {
      dateFormat: 'd MM yy'
    }
  );
});