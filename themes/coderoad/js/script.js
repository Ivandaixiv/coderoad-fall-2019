(function($){
    $(function(){
        const searchBtn = $("#search-icon");
        const searchField = $("#search-field");
        searchBtn.on('click', function(){
            searchField.css('width', '100vw');
            searchBtn.css('position','absolute')
        })
    });
})(jQuery);