(function ($, Drupal, once) {
  Drupal.behaviors.openFileModal = {
    attach: function (context, settings) {
      // Attach a click event to the links.
      $(once('open-file', '.open-file', context)).click(function (e) {
        e.preventDefault();

        // Get the URL.
        let iframeUrl = $(this).attr('href');
        let iframeText = $(this).text();
        let windowHeight = window.innerHeight;
        let modalHeight = windowHeight * 0.8;
        let height = $(this).data('height') || modalHeight;

        // Create iframe and append it to the modal content.
        $('<div>').html('<iframe src="' + iframeUrl + '" width="100%" height="100%" style="border:none;"></iframe>').dialog({
          title: iframeText,
          modal: true,
          width: '80%',
          height: height + 50,
          close: function (event, ui) {
            $(this).dialog('destroy').remove();
          }
        });
      });
    }
  };
})(jQuery, Drupal, once);
