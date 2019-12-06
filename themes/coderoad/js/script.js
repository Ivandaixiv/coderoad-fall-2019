(function($){
    $(function(){
        const searchBtn = $("#search-icon");
        const searchField = $("#search-field");
        const page = $("#content");
        const cancelBtn = $('#cancel-icon');
        const dropMenuBtn = $('#hamburger-icon');
        const burgerMenu = $("#site-navigation ul");
        const footerSection = $('#colophon')

        let isOpened = false;
        let isDropped = false;

        function dropMenu(){
            isDropped = true;
            burgerMenu.css({'display': 'flex'});
        }
        function undropMenu() {
            isDropped = false;
            burgerMenu.css({'display': 'none'});
        }
        function darkenBack(){
            page.css({'opacity':'50%','filter': 'brightness(20%)'});
            footerSection.css({'opacity':'50%','filter': 'brightness(20%)'});
        }
        function brightenBack() {
            page.css({'opacity':'1','filter': 'brightness(1)'});
            footerSection.css({'opacity':'1','filter': 'brightness(1)'});
        }
        function openField(){
            isOpened = true;
            searchField.css({'position':'absolute', 'width': '70vw','right': '15%',});
            searchBtn.css({'transform': 'translate(-73vw,0)'});
            cancelBtn.css({'display':'flex'})
            setTimeout(function(){
                cancelBtn.css({'transform': 'translate(-20vw,0)'});
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
            cancelBtn.css({'transform': 'translate(10vw,0)'});
            setTimeout(function(){
                cancelBtn.css({'display':'none'});
            }, 1500);
        }

        dropMenuBtn.on('click',function(){
            if(isDropped){
                undropMenu();
            }
            else{
                closeField();
                dropMenu();
            }
        });
        searchBtn.on('click', function(){
            if(isOpened) {
                closeField();
            }
            else {
                undropMenu();
                openField();
            }
        });
        cancelBtn.on('click',function(){
            closeField();
        });
        page.on('click',function(){
            closeField();
            if(isDropped && isOpened == false){
                undropMenu();
            }
            else {
                closeField();
                setTimeout(function(){
                    undropMenu();
                })
            }
        });
  });
})(jQuery);
