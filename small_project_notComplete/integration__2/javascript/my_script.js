/* code pour animer le petit trait slide*/
$(document).ready(function (){
    if(
        $("#next").hover(function (){
            $("#bottom-slide").animate({"left":"3.1rem"},200)
        })
    ) {
        $("#prev").hover(function (){
            $("#bottom-slide").animate({"left":"0rem"},200)
        })
    }
    
})

