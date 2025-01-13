document.addEventListener("DOMContentLoaded", function () {
  const addButton = document.querySelector(".addBtn");
  const tableBody = document.querySelector("tbody");

  function addRow() {
    const newRow = document.createElement("tr");
    const nameCell = document.createElement("td");

    nameCell.innerHTML = `
  <div class="mb-3">
    <label for="name" class="form-label visually-hidden">Nom</label>
    <input type="text" class="form-control" name="name[]" required aria-labelledby="name" placeholder="Votre nom" />
  </div>
`;

    const emailCell = document.createElement("td");
    emailCell.innerHTML = `
  <div class="mb-3">
    <label for="mail" class="form-label visually-hidden">Email</label>
    <input type="email" class="form-control" name="email[]" required aria-labelledby="mail" placeholder="Rentrez votre mail" />
  </div>
`;

    const actionCell = document.createElement("td");
    actionCell.innerHTML = `
  <button type="button" class="btn btn-danger deleteBtn" aria-label="Supprimer cette ligne">
    <span class="bi bi-trash-fill"></span>
  </button>
`;

    newRow.appendChild(nameCell);
    newRow.appendChild(emailCell);
    newRow.appendChild(actionCell);

    tableBody.appendChild(newRow);
  }

  function deleteRow(event) {
    const button = event.target.closest(".deleteBtn");
    const row = button.closest("tr");
    row.remove();
  }

  addButton.addEventListener("click", addRow);
  tableBody.addEventListener("click", deleteRow);
});
