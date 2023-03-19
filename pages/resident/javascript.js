

function password(){
    var password = document.getElementsByClassName("pass").value;
    var password2 = document.getElementsByClassName("pass2").value;
   

        if(password != password2)
        {
            document.getElementById("sheesh").innerHTML = "Passwords do not match!";
            document.getElementById("btn_save").disabled = true;
        }
        else
        {
            document.getElementById("sheesh").innerHTML = '<span style="color:#006600;">Passwords matched!</span>';
            document.getElementById("btn_save").disabled = false;
        } 
};



$(document).ready(function() {
 
    var timeOut = null; // this used for hold few seconds to made ajax request

    var loading_html = '<img src="../../img/ajax-loader.gif" style="height: 20px; width: 20px;"/>'; // just an loading image or we can put any texts here

    //when button is clicked
    $('#us').keyup(function(e){

        // when press the following key we need not to make any ajax request, you can customize it with your own way
        switch(e.keyCode)
        {
            //case 8:   //backspace
            case 9:     //tab
            case 13:    //enter
            case 16:    //shift
            case 17:    //ctrl
            case 18:    //alt
            case 19:    //pause/break
            case 20:    //caps lock
            case 27:    //escape
            case 33:    //page up
            case 34:    //page down
            case 35:    //end
            case 36:    //home
            case 37:    //left arrow
            case 38:    //up arrow
            case 39:    //right arrow
            case 40:    //down arrow
            case 45:    //insert
            //case 46:  //delete= '1'
                return;
        }
        if (timeOut != null)
            clearTimeout(timeOut);
        timeOut = setTimeout(Available, 500);  // delay delay ajax request for 1000 milliseconds
        $('#su').html(loading_html); // adding the loading text or image
    });
});
function Available(){
//get the username
var username = $('#us').val();

//make the ajax request to check if username available or not
$.post("check_username.php", { username: username },
function(result)
{
    console.log(result);
    if(result != 0)
    {
        $('#su').html('Not Available');
        document.getElementById("btn_edit").disabled = true;
    }
    else
    {
        $('#su').html('<span style="color:#006600;">Available</span>');
        document.getElementById("btn_edit").disabled = false;
    }
});

}




