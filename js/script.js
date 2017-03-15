function panic(){
    document.getElementById("panic").style.display = "inline-block";
    document.getElementById("ignorance").style.display = "none";
    document.getElementById("story").style.display = "inline-block";
}

function ignorance(){
    document.getElementById("panic").style.display = "none";
    document.getElementById("ignorance").style.display = "inline-block";
    document.getElementById("story").style.display = "inline-block";
}

function back(){history.go(-1)}

$(function () {
    $('input,textarea').focus(function () {
        $(this).data('placeholder', $(this).attr('placeholder'))
               .attr('placeholder', '');
    }).blur(function () {
        $(this).attr('placeholder', $(this).data('placeholder'));
    });
});