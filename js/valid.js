$("document").ready(function(){

    var form = $('#form'), comments = $('#commune');


    $(form).on('submit', function(e){
        e.preventDefault();
        if(comments==""){
            console.log(helo);
            return false;
        }
       
    });
   
});