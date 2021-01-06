const search = document.querySelector('input[placeholder="Search for a specialist"]');
const specialistContainer = document.querySelector(".specialist");

search.addEventListener("keyup", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();

        const data = {search: this.value};

        fetch("/search", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(function (response) {
            return response.json();
        }).then(function (specialists) {
            specialistContainer.innerHTML = "";
            loadSpecialist(specialists)
        });
    }
});

function loadSpecialist(specialists){
    specialists.forEach(specialist => {
        console.log(specialist);
        createSpecialist(specialist);
    })
}

function createSpecialist(specialist){

    const template = document.querySelector("#specialist-template");

    const clone = template.content.cloneNode(true);
    const div = clone.querySelector("#specialist-doctor");
    div.id = specialist.id;
    const name = clone.querySelector(".name");
    name.innerHTML = specialist.name + " " + specialist.surname;
    const specialization = clone.querySelector(".specialisation");
    specialization.innerHTML = specialist.specialization;
    const phone = clone.querySelector(".phone");
    phone.innerHTML = specialist.phone;
    const mail = clone.querySelector(".email");
    mail.innerHTML = specialist.email;
    const about = clone.querySelector(".read_more");
    about.href = about.href+specialist.id;

    specialistContainer.appendChild(clone);
}