var responsive;

function setResponsive() {
    if ($('div#media-320').css('display') == 'block') responsive = 1;
    else if ($('div#media-768').css('display') == 'block') responsive = 2;
    else if ($('div#media-1024').css('display') == 'block') responsive = 3;
    else if ($('div#media-1025').css('display') == 'block') responsive = 0;
    else responsive = 4;
}
  
$(window).on('load', function () {
    setResponsive();
});
  
$(window).on('resize', function () {
    setResponsive();
});
