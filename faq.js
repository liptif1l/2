document.getElementById('question-form').addEventListener('submit', function (event) {
    event.preventDefault();

    // Отримуємо введене питання
    const questionInput = document.getElementById('question-input');
    const questionText = questionInput.value.trim();

    if (questionText) {
        // Створюємо новий блок для питання
        const questionElement = document.createElement('div');
        questionElement.classList
