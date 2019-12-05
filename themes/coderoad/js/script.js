(function($){
    $(function(){
        const searchBtn = $("#search-icon");
        const searchField = $("#search-field");
        searchBtn.on('click', function(){
            searchField.css({'position':'absolute', 'width': '80vw','right': '0','margin':'20px'});
            searchBtn.css({'position':'absolute','left' : '0 '});
    });
  });
})(jQuery);
