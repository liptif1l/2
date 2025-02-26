document.addEventListener("DOMContentLoaded", function () {
    loadQuestions();
});

function addQuestion() {
    let questionInput = document.getElementById("question-input").value.trim();
    let username = document.getElementById("user-nickname").innerText || "Гість"; // Якщо не авторизований, буде "Гість"

    if (questionInput === "") {
        alert("Будь ласка, напишіть питання!");
        return;
    }

    let question = {
        user: username,
        text: questionInput,
        date: new Date().toLocaleString()
    };

    let questions = JSON.parse(localStorage.getItem("faq")) || [];
    questions.push(question);
    localStorage.setItem("faq", JSON.stringify(questions));

    document.getElementById("question-input").value = "";
    loadQuestions();
}

function loadQuestions() {
    let faqList = document.getElementById("faq-list");
    faqList.innerHTML = "";
    
    let questions = JSON.parse(localStorage.getItem("faq")) || [];

    questions.forEach(q => {
        let questionItem = document.createElement("div");
        questionItem.classList.add("faq-item");
        questionItem.innerHTML = 
            <p><strong>${q.user}</strong> <span class="faq-date">(${q.date})</span></p>
            <p>${q.text}</p>
        ;
        faqList.prepend(questionItem);
    });
}
