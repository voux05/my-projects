let getPeople = document.getElementById("people-count");
let count = 0;

function addPeople() {
  count += 1;
  getPeople.innerText = count;
}

let getSummary = document.getElementById("save-summary");

function savePeople() {
  let countStr = count + " - ";
  count = 0;
  getPeople.textContent = 0;
  getSummary.textContent += countStr;
}
