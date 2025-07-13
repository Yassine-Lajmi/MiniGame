MQPlayButton = document.getElementById('MiniQuizPlayButton');

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
})