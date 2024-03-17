//import '../node_modules/dotenv/config.js'
//import { MailerSend, EmailParams, Sender, Recipient } from "../node_modules/mailersend";

async function sendMail(){

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

        /*
        const mailerSend = new MailerSend({
            apiKey: "mlsn.ae977b55651912708a27358d2709221790ea6f1fe22bb7e1ca90f2058ac82b64",
          });
        const sentFrom = new Sender("trial-yzkq340n6v6gd796.mlsender.net", "Customer");
        const recipients = [
            new Recipient("djm831@gmail.com", "Pirate Knight Team")
          ];

        const emailParams = new EmailParams()
        .setFrom(sentFrom)
        .setTo(recipients)
        .setReplyTo(sentFrom)
        .setSubject("This is a Subject")
        .setHtml("<strong>This is the HTML content</strong>")
        .setText("This is the text content");

        await mailerSend.email.send(emailParams);
        */

        var msgJSON = {
            "from": {
              "email": "MS_YTbbrW@trial-yzkq340n6v6gd796.mlsender.net",
              "name": "MailerSend"
            },
            "to": [
              {
                "email": "djm831@gmail.com",
                "name": "John Mailer"
              }
            ],
            "subject": "Hello from !",
            "text": "This is just a friendly hello from your friends at .",
            "html": "<b>This is just a friendly hello from your friends at.</b>"
          }

        const response = await fetch("https://api.mailersend.com/v1/email", {
            method: "POST",
            body: JSON.stringify(msgJSON),
            headers: {
                "Content-type": "application/json; charset=UTF-8",
                "Authorization": "Bearer mlsn.e0a793eeee35496fbe30f539bbe1439687580152221d44450d36d924edebd00d"
            }
        });

        console.log(response)
        
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