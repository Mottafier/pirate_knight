function sendMail(){
    var input = document.getElementById('message_input')
    //Check if the input box is empty
    if(input.value == ''){
        //If empty, change border of input box to red
        input.style['border-color'] = "red";
    }
    else{
        //If not empty, hide all of the input box elements, and send email
        input.style['border-color'] = "black";
        //Incorporating email sending is too complex at the moment, so I have replace it with a console log for now
        console.log("Sending message '" + input.value + "' to Pirate_Knight@gmail.com")
        input.value = ''
        
        //hide input elements
        let input_elements = document.getElementsByClassName('text_input');
        for(let i = 0; i < input_elements.length; i++){
            input_elements[i].style.display='none';
        }

        //Append new element that says Message Sent!
        let new_p = document.createElement("p")
        let new_textNode = document.createTextNode("Message Sent!")
        new_p.appendChild(new_textNode);
        document.body.appendChild(new_p);
    }
}