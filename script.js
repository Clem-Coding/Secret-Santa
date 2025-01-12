document.addEventListener("DOMContentLoaded", function () {
  const addButton = document.querySelector(".addBtn");
  const deleteButton = document.querySelector(".deleteBtn");
  const tableBody = document.querySelector("tbody");

  // Ajoutez un écouteur d'événement au bouton
  addButton.addEventListener("click", function (event) {
    // Créez une nouvelle ligne
    const newRow = document.createElement("tr");

    // Créez la première cellule (Nom)
    const nameCell = document.createElement("td");
    nameCell.innerHTML = `
      <div class="mb-3">
        <label for="name" class="form-label visually-hidden">Nom</label>
        <input type="text" class="form-control" name="name[]" required />
      </div>
    `;

    // Créez la deuxième cellule (Email)
    const emailCell = document.createElement("td");
    emailCell.innerHTML = `
      <div class="mb-3">
        <label for="mail" class="form-label visually-hidden">Email</label>
        <input type="email" class="form-control" name="email[]" required />
      </div>
    `;

    // Créez la cellule d'action avec le bouton de suppression
    const actionCell = document.createElement("td");
    actionCell.innerHTML = `
      <button type="button" class="btn btn-danger deleteBtn">
        <span class="bi bi-trash-fill"></span>
      </button>
    `;

    // Ajoutez les cellules à la ligne
    newRow.appendChild(nameCell);
    newRow.appendChild(emailCell);
    newRow.appendChild(actionCell);

    // Ajoutez la ligne au tableau
    tableBody.appendChild(newRow);
  });

  // Fonction pour supprimer une ligne
  function deleteRow(event) {
    const button = event.target.closest(".deleteBtn");
    if (button) {
      const row = button.closest("tr");
      if (row) {
        row.remove();
      }
    }
  }

  tableBody.addEventListener("click", deleteRow);
});
