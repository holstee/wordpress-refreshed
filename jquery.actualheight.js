(function( $ ){
  $.fn.actualHeight = function(){
    var visibleParent, thisHeight;
    
    // find the closest visible parent and get it's hidden children
    visibleParent = this.closest(':visible').children();
    
    // set a temporary class on the hidden parent of the element
    visibleParent.addClass('temp-show');
    
    // get the height
    thisHeight = this.height();
    
    // remove the temporary class
    visibleParent.removeClass('temp-show');
    
    return thisHeight;
  };
})( jQuery );