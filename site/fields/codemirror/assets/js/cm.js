(function ($) {
  $.fn.cm = function () {
    return this.each(function () {
      var cm;
      cm = CodeMirror.fromTextArea(this, {
        mode: 'css',
        indentUnit: 2,
      });
      cm.on('changes', function () {
        cm.save();
      });
    });
  };
}(jQuery));