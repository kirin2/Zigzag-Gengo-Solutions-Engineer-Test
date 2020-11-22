$(function(){


    $("#ins").on("input",function(){

        var sPalString = $(this).val();

        Index.checkPalindrome( sPalString);
       
    });

});


var Index = {

    checkPalindrome : function(sPalString){

        $.get("/action/checkPalindrome.php",
        {
            str : sPalString
        },function(mRes){

            try{

                mRes = JSON.parse(mRes);

                $("#p-lvl1").text(mRes.lvl1);

                $("#p-lvl2").text(mRes.lvl2);

                 $("#p-lvl3").text(mRes.lvl3);


            }catch(mErr){

            }
            
        });


    }

}
