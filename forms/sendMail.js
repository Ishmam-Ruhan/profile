function send(params){
    var tempParam = {
        name : document.getElementById("name").value,
        email : document.getElementById("email").value,
        subject : document.getElementById("subject").value,
        message : document.getElementById("message").value
    };

    emailjs.send('service_4zxcvhs','template_7zni9ur',tempParam)
    .then(function(res){
        console.log(res.status);
    });
}