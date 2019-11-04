

$(function(){



    
    /*------------------------------------    
        03. Shopping Cart Area
    --------------------------------------*/
    
        $('.cart__menu').on('click', function(e) {
            e.preventDefault();
            $('.shopping__cart').addClass('shopping__cart__on');
            $('.body__overlay').addClass('is-visible');
    
        });
    
        $('.offsetmenu__close__btn').on('click', function(e) {
            e.preventDefault();
            $('.shopping__cart').removeClass('shopping__cart__on');
            $('.body__overlay').removeClass('is-visible');
        });
    
    
    
    
    /*------------------------------------    
        13. Overlay Close
    --------------------------------------*/
    
        $('.body__overlay').on('click', function() {
            $(this).removeClass('is-visible');
           
            $('.shopping__cart').removeClass('shopping__cart__on');
          
            $('.user__meta').removeClass('user__meta__on');
        
        });
    
});
    
    
    
    
    