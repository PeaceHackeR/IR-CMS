// Add //
$(function () {

  // ====== Checkbox ====== //

  // Checkboxes/radios (Uniform)
  // ------------------------------

  // Default initialization
  $(".styled, .multiselect-container input").uniform({
      radioClass: 'choice'
  });

  // File input
  $(".file-styled").uniform({
      wrapperClass: 'bg-blue',
      fileButtonHtml: '<i class="icon-file-plus"></i>'
  });

  //
  // Contextual colors
  //

  // Remember Me
  $(".control-remember-me").uniform({
      radioClass: 'choice',
      wrapperClass: 'border-600 color-remember-me'
  });

});
