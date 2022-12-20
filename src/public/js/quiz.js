const questions = document.querySelectorAll(".question_container");

questions.forEach((question) => {
    const choice_box = question.querySelector(".choice_box");
    const choices = question.querySelectorAll(".choice");
    choice_box.innerHTML = "";
    index = [0, 1, 2];
    for (i = 2; i > 0; i--) {
        r = Math.floor(Math.random() * (i + 1));
        tmp = index[i];
        index[i] = index[r];
        index[r] = tmp;
    }
    index.forEach((index) => {
      choice_box.appendChild(choices[index]);
    })
    const correct_choice = question.querySelector(".choice-1");
    const result_box = question.querySelector(".result_box");
    const result_title = question.querySelector(".result_box__title");
    const result_message = question.querySelector(".result_box__message");
    const message = "正解は「" + correct_choice.innerHTML + "」です！";
    result_message.innerHTML = message;
    choices.forEach((choice) => {
        choice.addEventListener("click", () => {
            choice.className = "choice_wrong";
            correct_choice.className = "choice_correct";
            result_box.classList.remove("hidden");
            if (choice === correct_choice) {
                result_title.innerHTML = "正解!";
                result_title.classList.add("correct");
            } else {
                result_title.innerHTML = "不正解!";
                result_title.classList.add("wrong");
            }
            choices.forEach((choice) => {
                choice.classList.add("no_event");
            });
        });
    });
});
