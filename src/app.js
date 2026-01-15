// Login muy simple (solo para demo)
// Usuario: admin, Contraseña: 1234

const loginForm = document.getElementById("login-form");
const loginError = document.getElementById("login-error");
const loginContainer = document.getElementById("login-container");
const helpdeskContainer = document.getElementById("helpdesk-container");
const logoutBtn = document.getElementById("logout-btn");

const ticketForm = document.getElementById("ticket-form");
const ticketList = document.getElementById("ticket-list");

loginForm.addEventListener("submit", function (e) {
  e.preventDefault();

  const username = document.getElementById("username").value.trim();
  const password = document.getElementById("password").value.trim();

  if (username === "admin" && password === "1234") {
    loginError.textContent = "";
    loginContainer.classList.add("hidden");
    helpdeskContainer.classList.remove("hidden");
  } else {
    loginError.textContent = "Usuario o contraseña incorrectos.";
  }
});

logoutBtn.addEventListener("click", function () {
  helpdeskContainer.classList.add("hidden");
  loginContainer.classList.remove("hidden");
  loginForm.reset();
});

// Lógica básica de tickets (solo en memoria)

ticketForm.addEventListener("submit", function (e) {
  e.preventDefault();

  const title = document.getElementById("ticket-title").value.trim();
  const description = document
    .getElementById("ticket-description")
    .value.trim();
  const priority = document.getElementById("ticket-priority").value;

  if (!title || !description) return;

  const li = document.createElement("li");
  li.className = "ticket-item";

  li.innerHTML = `
    <div class="ticket-header">
      <span class="ticket-title">${title}</span>
      <span class="ticket-priority prioridad-${priority}">${priority}</span>
    </div>
    <p class="ticket-description">${description}</p>
  `;

  ticketList.prepend(li);

  ticketForm.reset();
});
