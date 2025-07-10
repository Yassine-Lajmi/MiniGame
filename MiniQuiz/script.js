fetch("MiniQuizBE.php")
    .then(response => response.json())
    .then(data =>{
        const container = document.getElementById("quizContainer");

        data.forEach((q,index) =>{
            const div = document.createElement("div");

            let answersHTML = "";
            q.answers.forEach(answer => {
                answersHTML += `
                    <label>
                        <input type="radio" name="q${q.questionid}" value="${answer.id}">
                        ${answer.answer}
                    </label><br>
                    `;
            });

            div.innerHTML = `
                <h3>Q${index + 1}: ${q.question}</h3>
                ${answersHTML}
                <hr>
            `;

            container.appendChild(div);
        });
    })
    .catch(error => console.error("Error:",error));