$(document).ready(function(){
 $('#orderbtn').click(function(event){
        event.preventDefault();

        //receive variables
        let food_name=$('#food_name').val();
        let food_quantity=$('#food_quantity').val();
        
    


//build post request using ajax
        $.ajax({

            url:"http://localhost/FoodApp/order.php",//url to the resource
            type:"post",
            data:{ food_name:food_name,
                   food_quantity:food_quantity,
                

            },
            //pass API  as authentication in headers
            headers:{
             
                'Authorization':'Basic NJHBMBVXDCN56uvhHVF6'
            },
            success:function(data){
                alert(data["Your order has been received and is being processed"]);
            },
            error:function(){
                alert("An error occured.Feature not available");
            }
        });
    
    })
    })