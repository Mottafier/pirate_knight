function sendMail(){
    //var input = document.getElementById('message_input')
    var input = $('#message_input')//document.getElementById('message_input')
    //Check if the input box is empty
    if(input.val() == ''){
        //If empty, change border of input box to red
        input.css('border-color', 'red');
        input.css('background-color', 'rgb(249, 241, 241)');
    }
    else{
        //If not empty, hide all of the input box elements, and send email
        
        //Incorporating email sending is too complex at the moment, so I have replace it with a console log for now
        console.log("Sending message '" + input.val() + "' to Pirate_Knight@gmail.com")
        input.val('')
        
        //hide input elements
        //let input_elements = document.getElementsByClassName('text_input');
        $('.text_input').hide("slow",function() {
             //Append new element that says Message Sent!
        });

        $('textarea').hide("slow",function() {
            //Append new element that says Message Sent!
           var new_textNode = $('<p>').text("Message Sent!");
           $('body').append(new_textNode);
       });

       
    }
}


$("#send_mail_button").on("click",sendMail)