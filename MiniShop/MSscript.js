fetch("MiniShopBE.php")
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
    })
    .catch(error => console.error("Error:",error));