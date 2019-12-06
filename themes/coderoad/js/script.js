(function($){
    $(function(){
        const   searchBtn = $("#search-icon"),
                searchField = $("#search-field"),
                page = $("#content"),
                cancelBtn = $('#cancel-icon img'),
                cancelWrapper = $("#cancelWrapper"),
                dropMenuBtn = $('#hamburger-icon'),
                burgerMenuWrapper = $('.drop-menu');
        
        // const footerSection = $('#colophon')

        let isOpened = false,
            isDropped = false;

        function dropMenu(){
            isDropped = true;
            burgerMenuWrapper.css({'left':'0'});
        }
        function undropMenu() {
            isDropped = false;
            burgerMenuWrapper.animate({left:'-100%'});
        }
        // function darkenBack(){
        //     page.css({'opacity':'50%','filter': 'brightness(20%)'});
        //     footerSection.css({'opacity':'50%','filter': 'brightness(20%)'});
        // }
        // function brightenBack() {
        //     page.css({'opacity':'1','filter': 'brightness(1)'});
        //     footerSection.css({'opacity':'1','filter': 'brightness(1)'});
        // }
        function openField(){
            isOpened = true;
            searchField.css({'position':'absolute', 'width': '70vw','right': '15%',});
            searchBtn.css({'transform': 'translate(-72vw,0)'});
            cancelWrapper.css({'width':'100vw'});
            cancelBtn.css({'right': '20vw'});
            setTimeout(function(){
                searchField.css({'border':'1px solid black'});
                searchField.focus();
            },1600);
        }
        function closeField(){
            isOpened = false;
            searchField.css({'width': '0','right': '0', 'border':'0'});
            searchField.val('');
            searchBtn.css({'transform': 'translate(0,0)'});
            cancelBtn.css({'right': '-20%'});
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
