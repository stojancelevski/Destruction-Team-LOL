var url = "https://script.google.com/macros/s/AKfycbxL_rjGbIyd_o1-ODfgAjVeLMSGS_1TuSIoRhNKFJDehb3-AeaQ/exec";

$('#form').on('submit',function(e)
{
    e.preventDefault();
    var category = $("#category").val();
    var email = $("#email").val();
    if(!email)
    {
        alert('Please enter your e-mail');
    }
    else {


        var message = $("#message").val();
        if (!message) {
            alert('Please enter your message')
        }
        else {
            var newUrl = url + "?category=" + category + "&email=" + email + "&message=" + message

            $.getJSON(newUrl).then(res => {
                if(res == 'Ok!'
        )
            {
                alert('Thank you for your information. You will be contacted in a short period!');
            }
        else
            {
                alert('Something went wrong, please try again later or check your validation' +
                    'If the problem persists, please report a bug!')
                console.log(res);
            }


        });
        }
    }
})