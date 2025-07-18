fetch("MiniQuizBE.php")
    .then(response => response.json())
    .then(data =>{
        const questionElement = document.getElementById("question");
        const answerButtons = document.getElementById("answerButtons");
        const nextButton = document.getElementById("nextButton");

        let currentQuestionIndex = 0;
        let score = 0;

        function startQuiz(){
            currentQuestionIndex = 0;
            score = 0;
            nextButton.innerHTML = "Next";
            showQuestion();
        }

        function showQuestion(){
            resetState();
            let currentQuestion = data[currentQuestionIndex];
            let questionNo = currentQuestionIndex + 1;
            questionElement.innerHTML = questionNo + ". " + currentQuestion.question;

            currentQuestion.answers.forEach(answer => {
                const button = document.createElement("button");
                button.innerHTML = answer.answer;
                button.classList.add("btn");
                answerButtons.appendChild(button);
                if(answer.correct){
                    button.dataset.correct = answer.correct;
                }
                button.addEventListener("click", selectAnswer);
            });
        }

        function resetState(){
            nextButton.style.display = "none";
            while(answerButtons.firstChild){
                answerButtons.removeChild(answerButtons.firstChild);
            }
        }

        function selectAnswer(e){
            const selectedBtn = e.target;
            const isCorrect = selectedBtn.dataset.correct === "1";
            if(isCorrect){
                selectedBtn.classList.add("correct");
                score++;
            }else{
                selectedBtn.classList.add("incorrect");
            }
            Array.from(answerButtons.children).forEach(button => {
                if(button.dataset.correct === "1"){
                    button.classList.add("correct");
                }
                button.disabled = true;
            });
            nextButton.style.display = "block";
        }

        function showScore(){
            resetState();
            questionElement.innerHTML = `You scored ${score} out of ${data.length}!`;
            nextButton.style.display = "none";
            scoreForm = document.getElementById("scoreForm");
            scoreForm.style.display = "block";
            document.getElementById("scoreInput").value = score;
        }

        function handleNextButton(){
            currentQuestionIndex++;
            if(currentQuestionIndex < data.length){
                showQuestion();
            }else{
                showScore();
            }
        }

        nextButton.addEventListener("click", ()=>{
            if(currentQuestionIndex < data.length){
                handleNextButton();
            }
        });

        startQuiz();
    })
    .catch(error => console.error("Error:",error));