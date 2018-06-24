$(document).ready(function(){
    
    $('.next').click(function(){
        var currentImage = $('.emg.curry');
        var currentImageIndex = $('.img.curry').index();
        var nextImageIndex = currentImageIndex + 1;
        var nextImage = $('.img').eq(nextImageIndex);
        currentImage.fadeOut(1000);
        currentImage.removeClass('curry');
        
        if(nextImageIndex == ($('.img:last').index()+1)){
            $('.img').eq(0).fadeIn(1000);
            $('.img').eq(0).addClass('curry');
        }
        else
            {
                nextImage.fadeIn(1000);
                nextImage.addClass('curry');
            }
    })
});