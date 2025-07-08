const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');
const signUpContainer = document.getElementById('SignUpContainer');
const signInContainer = document.getElementById('SignInContainer');

signUpButton.addEventListener('click' , function(){
    signInContainer.style.display="none";
    signUpContainer.style.display="block";
});

signInButton.addEventListener('click' , function(){
    signUpContainer.style.display="none";
    signInContainer.style.display="block";
});