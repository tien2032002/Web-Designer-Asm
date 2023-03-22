function ValidateUserName(inputText)
{
    var userNameWarningElement = document.getElementById("userNameWarning");
    if(inputText.length < 8 || inputText.length > 16) 
        userNameWarningElement.innerText = "Tên đăng nhập phải từ 8-16 ký tự!"

    else  userNameWarningElement.innerText = ""
}

function ValidatePassword(inputText)
{
    var passwordWarningElement = document.getElementById("passwordWarning");
    if(inputText.length < 8 || inputText.length > 16) 
        passwordWarningElement.innerText = "Mật khẩu phải từ 8-16 ký tự!"

    else  passwordWarningElement.innerText = ""
}

function ValidateEmail(inputText)
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var emailWarningElement = document.getElementById("emailWarning");
    if(!inputText.match(mailformat))
        emailWarningElement.innerText = "Email không đúng định dạng!"

    else  emailWarningElement.innerText = ""
}

function ValidatePhone(inputPhone){
    var phoneformat= /((09|03|07|08|05)+([0-9]{8})\b)/g;
    var phoneWarningElement = document.getElementById("phoneWarning");
    if(!inputPhone.match(phoneformat))
        phoneWarningElement.innerText = "Số điện thoại không hợp lệ!"

    else phoneWarningElement.innerText = ""
}