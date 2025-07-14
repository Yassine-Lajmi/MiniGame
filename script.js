fetch("getUser.php")
    .then(response => response.json())
    .then(user =>{
        const scoreDisplay = document.getElementById("score");
        const cookiesDisplay = document.getElementById("cookies");
        const identityDisplay = document.getElementById("identity");
        let score = user.score;
        let cookies = user.cookies;
        let identity = user.firstname + " " + user.lastname;
        scoreDisplay.textContent = score;
        cookiesDisplay.textContent = cookies;
        identityDisplay.textContent = identity;
        MQPlayButton = document.getElementById('MiniQuizPlayButton');
        MQPlayButton.addEventListener("click", function(){
            if(cookies >= 2){
                window.location.href = "MiniQuiz/MiniQuiz.php";
            }else{
                alert("You don't have enough cookies!");
            }
        })
    })
    .catch(error => console.error("Error:",error));

/*MQPlayButton = document.getElementById('MiniQuizPlayButton');
MQPlayButton.addEventListener("click", function(){
    fetch("getScore.php")
        .then(response => response.json())
        .then(score =>{
            if(score >= 2){
                window.location.href = "MiniQuiz/MiniQuiz.php";
            }else{
                alert("You don't have enough coins!");
            }
        })
        .catch(error => console.error("Error:",error));
})*/