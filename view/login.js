function ValidateUserName(inputText)
{
    var userNameWarningElement = document.getElementById("userNameWarning");
    if(inputText.length =="") 
        userNameWarningElement.innerText = "Vui lòng nhập tên đăng nhập!"

    else  userNameWarningElement.innerText = ""
}

function ValidatePassword(inputText)
{
    var userNameWarningElement = document.getElementById("passwordWarning");
    if(inputText.length =="") 
        userNameWarningElement.innerText = "Vui lòng nhập mật khẩu!"

    else  userNameWarningElement.innerText = ""
}