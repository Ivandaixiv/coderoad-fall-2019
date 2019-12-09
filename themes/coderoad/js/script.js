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
                fieldSetLabel = $('#fieldset-wrapper label');
        
        // const footerSection = $('#colophon')

        let isOpened = false,
            isDropped = false;

        function dropMenu(){
            isDropped = true;
            closeField();
            burgerMenuWrapper.animate({'left':'0'});
        }
        function undropMenu() {
            isDropped = false;
            closeField();
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
            searchBtnImg.animate({'left':'30vw'},1000);
            fieldSet.animate({'width':'70vw'},900);
            fieldSetLabel.animate({'width':'70%'},900);
            dropMenuBtn.animate({'left':'-100vw'},1000);
            setTimeout(function(){
                fieldSet.css({'border':'1px solid black','border-radius':'5px'});
                searchField.focus();
            },2000);
        }

        function closeField(){
            isOpened = false;
            dropMenuBtn.animate({'left':'0vw'});
            fieldSet.animate({'width':'0','border':'0'},1000);
            searchBtnImg.animate({'left':'90vw'});
            // searchBtnImg.animate({'left':'90vw'},2000);
            // fieldSet.animate({'right':'-100vw'},2000);
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
