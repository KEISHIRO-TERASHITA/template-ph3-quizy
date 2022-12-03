const questions = document.querySelectorAll(".question_container");

questions.forEach(question => {
  const choices = question.querySelectorAll(".choice");
  const correct_choice = question.querySelector(".choice-1");
  const result_box = question.querySelector(".result_box");
  const result_title = question.querySelector(".result_box__title");
  choices.forEach(choice => {
    choice.addEventListener("click", () => {
      choice.className = "choice_wrong";
      correct_choice.className = "choice_correct";
      result_box.classList.remove("hidden");
      if (choice.className === "choice_correct"){
        result_title.innerHTML = "正解!";
        result_title.classList.add("correct");
      } else {
        result_title.innerHTML = "不正解!";
        result_title.classList.add("wrong");
      }
      choices.forEach(choice => {
        choice.classList.add("no_event");
      })
    })
  })
});
