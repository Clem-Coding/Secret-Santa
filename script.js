document.addEventListener("DOMContentLoaded", function () {
  const addButton = document.querySelector(".btn-js");

  const tableBody = document.querySelector("tbody");

  // Ajoutez un écouteur d'événement au bouton
  addButton.addEventListener("click", function (event) {
    // Empêche le rechargement de la page lors de l'appui sur le bouton
    event.preventDefault();

    // Créez une nouvelle ligne
    const newRow = document.createElement("tr");

    // Créez la première cellule (Nom)
    const nameCell = document.createElement("td");
    nameCell.innerHTML = `
          <div class="mb-3">
            <label for="name" class="form-label visually-hidden">Nom</label>
            <input type="text" class="form-control" id="name" name="name[]" aria-describedby="nameHelp" required />
          </div>
          `;

    // Créez la deuxième cellule (Email)
    const emailCell = document.createElement("td");
    emailCell.innerHTML = `
          <div class="mb-3">
            <label for="mail" class="form-label visually-hidden">Email</label>
            <input type="email" class="form-control" id="mail" name="email[]" aria-describedby="emailHelp" required />
          </div>
        `;

    // Ajoutez les cellules à la ligne
    newRow.appendChild(nameCell);
    newRow.appendChild(emailCell);

    // Ajoutez la ligne au tableau
    tableBody.appendChild(newRow);
  });
});
