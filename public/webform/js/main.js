 function markNotificationAsRead(notificatonCount){
     if(notificatonCount!==0){
        $.get('/markAsRead');
     }  
 }
