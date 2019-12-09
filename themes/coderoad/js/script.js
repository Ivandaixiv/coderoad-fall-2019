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
                fieldSetLabel = $('#fieldset-wrapper label'),
                footerSection = $('#colophon'),
                mainContent = $('#main');
        
        // const footerSection = $('#colophon')

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
            searchBtnImg.animate({'left':'30vw'},500);
            fieldSet.animate({'width':'70vw'},400);
            fieldSetLabel.animate({'width':'70%'},400);
            dropMenuBtn.animate({'left':'-100vw'},500);
            setTimeout(function(){
                fieldSet.css({'border':'1px solid black','border-radius':'5px'});
                searchField.focus();
            },500);
        }

        function closeField(){
            isOpened = false;
            dropMenuBtn.animate({'left':'0vw'});
            fieldSet.animate({'width':'0','border':'0'},1000);
            searchBtnImg.animate({'left':'90vw'});
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
                undropMenu();
            }
        });
  });
})(jQuery);
