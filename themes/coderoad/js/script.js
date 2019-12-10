(function($){
    $(function(){
        const   searchBtn = $("#search-icon"),
                searchBtnImg = $("#search-icon img"),
                searchField = $("#search-field"),
                page = $("#content"),
                cancelBtn = $('#cancel-icon img'),
                dropMenuBtn = $('#hamburger-icon'),
                burgerMenuWrapper = $('.drop-menu'),
                fieldSet = $('#fieldset-wrapper'),
                footerSection = $('#colophon'),
                mainContent = $('#main');

        let isOpened = false,
            isDropped = false;

        function dropMenu(){
            isDropped = true;
            closeField();
            darkenBack();
            burgerMenuWrapper.animate({'left':'0'},1000);
        }
        function undropMenu() {
            isDropped = false;
            closeField();
            brightenBack();
            burgerMenuWrapper.animate({left:'-100%'});
        }
        function darkenBack(){
            mainContent.css({'opacity':'25%'});
            footerSection.css({'opacity':'25%'});
        }
        function brightenBack() {
            mainContent.css({'opacity':'1',});
            footerSection.css({'opacity':'1'});
        }
        function openField(){
            isOpened = true;
            searchBtnImg.animate({'left':'30vw'});
            fieldSet.animate({'width':'70vw'});
            dropMenuBtn.animate({'left':'-100vw'});
            searchField.animate({'width':'40vw'});
            setTimeout(function(){
                fieldSet.css({'border':'1px solid black','border-radius':'5px'});
                searchField.focus();
            },500);
        }

        function closeField(){
            isOpened = false;
            dropMenuBtn.animate({'left':'0vw'});
            if($(window).width() < 700) {  
                fieldSet.animate({'width':'0','border':'0'});
                searchField.animate({'width':'0'});
                searchBtnImg.animate({'left':'90vw'});
            }
        }

        dropMenuBtn.on('click',function(){
            if(isDropped){
                undropMenu();
            }
            else{
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
            undropMenu();
        });
        window.onresize = function(){
            console.log('change');
            if($(window).width() > 700) {
                fieldSet.css({'border':'1px solid black','border-radius':'5px'});
                fieldSet.css({'width':'30vw'});
                searchField.animate({'width':'20vw'});
                dropMenuBtn.animate({'left':'0vw'});
                console.log("removed");
            }
            else {
                fieldSet.css({'width':'0','border':'0'});
                fieldSet.css({'width':'0vw'});
                searchField.animate({'width':'0vw'});
                searchBtnImg.animate({'left':'90vw'});
            }
        }
  });
})(jQuery);
