setInterval(function(){ 
    $(document).ready(function (){
    $.ajax({
        type: "GET",
        url: "get-data.php",
        dataType: "html",
        success: function(data){
            $('#my-data').html(data);
        }
    });  
    });
}, 3000);