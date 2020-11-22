$(document).ready(function(){
$('#checkorderbtn').click(function(event){
    event.preventDefault();

    let order_status=$('#order_status').val();

    $.ajax({

        url:"http://localhost/FoodApp/order.php",//url to the resource
        type:"post",
        data:{ 
               order_status:order_status

        },
        //pass API  as authentication in headers
        headers:{
         
            'Authorization':'Basic NJHBMBVXDCN56uvhHVF6'
        },
        success:function(data){
            alert(data["Order status"]);
        },
        error:function(){
            alert("This Feature is coming soon");
        }
    });
    
})
})
