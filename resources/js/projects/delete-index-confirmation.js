const formEls = document.querySelectorAll("form.form-destroyer");

console.log(formEls);

formEls.forEach((formEl) => {
    formEl.addEventListener("submit", function(event){
        event.preventDefault();

        const userChoice = window.confirm(`Sei sicuro che vuoi cancellare il progetto ${this.getAttribute("data-project-name")}?`);

        if(userChoice){
            this.submit();
        }
    });
})
