<<<<<<< HEAD
(function($) {
  $(function() {
    const searchBtn = $('#search-icon');
    const searchField = $('#search-field');
    searchBtn.on('click', function() {
      searchField.css('width', '100vw');
      searchBtn.css('position', 'absolute');
=======
(function($){
    $(function(){
        const searchBtn = $("#search-icon");
        const searchField = $("#search-field");
        searchBtn.on('click', function(){
            searchField.css({'position':'absolute', 'width': '80vw','right': '0','margin':'20px'});
            searchBtn.css({'position':'absolute','left' : '0 '});
        })
>>>>>>> baecbe154b06ad77074eefb2c20f55e1784ba603
    });
  });
})(jQuery);
