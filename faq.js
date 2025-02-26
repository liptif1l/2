document.addEventListener('DOMContentLoaded', () => {
    const questionForm = document.getElementById('question-form');
    const questionInput = document.getElementById('question-input');
    const questionsContainer = document.getElementById('questions-container');

    questionForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const questionText = questionInput.value.trim();
        if (questionText) {
            addQuestion(questionText);
            questionInput.value = '';
        }
    });

    function addQuestion(text) {
        const questionItem = document.createElement('div');
        questionItem.className = 'question-item';
        questionItem.innerHTML = `
            <h3>Питання:</h3>
            <p>${text}</p>
            <div class="answers-container"></div>
            <form class="answer-form">
                <label>Ваша відповідь:</label>
                <textarea required></textarea>
                <button type="submit">Відпов12
