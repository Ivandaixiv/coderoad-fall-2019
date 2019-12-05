(function($){
    $(function(){
        const searchBtn = $("#search-icon");
        const searchField = $("#search-field");
        const page = $("#content");
        const cancelBtn = $('#cancel-icon');
        let isOpened = false;

        function openField(){
            isOpened = true;
            searchField.css({'position':'absolute', 'width': '50vw','right': '25vw', });
            searchBtn.css({'transform': 'translate(-70vw,0)'});
            cancelBtn.css({'display':'flex'})
            setTimeout(function(){
                cancelBtn.css({'transform': 'translate(-30vw,0)'});
            }, 200);
            setTimeout(function(){
                searchField.css({'border':'1px solid black'});
                searchField.focus();
            },1900);
        }
        function closeField(){
            isOpened = false;
            searchField.css({'position':'absolute', 'width': '0','right': '0', 'border':'0'});
            searchField.val('');
            searchBtn.css({'transform': 'translate(0,0)'});
            cancelBtn.css({'transform': 'translate(0,0)'});
            setTimeout(function(){
                cancelBtn.css({'display':'none'})
            }, 1500);
        }

        searchBtn.on('click', function(){
            if(isOpened) {
                closeField();
            }
            else {
                openField();
            }
        });
        cancelBtn.on('click',function(){
            closeField();
        });
        page.on('click',function(){
            closeField();
        });
  });
})(jQuery);
