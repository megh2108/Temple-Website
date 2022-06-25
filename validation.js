const form=document.getElementById("form");
const username=document.getElementById("username");
const password=document.getElementById("password");

function check()
{
    alert("hello");
    const usernameValue=username.value.trim();
    const passwordValue=password.value.trim();    

    if(usernameValue=="")
    {
        setErrorFor(username,"Username cannot be blank.");
        return false;
    }
}
function setErrorFor(input,message)
{
    const formControl=input.parentElement;
    const small=formControl.querySelector("small");
    small.innerText=message;
    formControl.className="form-control error";
}