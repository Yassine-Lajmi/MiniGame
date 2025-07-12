GMEntryBtn = document.getElementById('GameMasterVerifBtn');
const message = document.getElementById("message");

GMEntryBtn.addEventListener("click", ()=>{
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();
    const trueEmail = "bking@gmail.com";
    const truePassword = "1234"
    if((email === trueEmail) && (password === truePassword)){
        window.location.href = "GMhomepage.php";
    }else{
        message.textContent = "Wrong email or password";
    }
});