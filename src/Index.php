<?php
// Página principal de la mesa de ayuda (sin base de datos)
?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Mesa de Ayuda - Login</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <!-- Contenedor de Login -->
  <div id="login-container" class="card">
    <h1>Mesa de Ayuda</h1>
    <h2>Iniciar sesión</h2>
    <form id="login-form">
      <label for="username">Usuario</label>
      <input type="text" id="username" required />

      <label for="password">Contraseña</label>
      <input type="password" id="password" required />

      <button type="submit">Entrar</button>
      <p id="login-error" class="error"></p>
    </form>
  </div>

  <!-- Contenedor de Mesa de Ayuda (oculto al inicio) -->
  <div id="helpdesk-container" class="hidden">
    <header class="topbar">
      <h1>Mesa de Ayuda</h1>
      <button id="logout-btn">Cerrar sesión</button>
    </header>

    <main class="layout">
      <!-- Panel izquierdo: crear ticket -->
      <section class="panel">
        <h2>Crear nuevo ticket</h2>
        <form id="ticket-form">
          <label for="ticket-title">Título</label>
          <input type="text" id="ticket-title" required />

          <label for="ticket-description">Descripción</label>
          <textarea id="ticket-description" rows="4" required></textarea>

          <label for="ticket-priority">Prioridad</label>
          <select id="ticket-priority">
            <option value="Baja">Baja</option>
            <option value="Media">Media</option>
            <option value="Alta">Alta</option>
          </select>

          <button type="submit">Registrar ticket</button>
        </form>
      </section>

      <!-- Panel derecho: lista de tickets -->
      <section class="panel">
        <h2>Mis tickets</h2>
        <ul id="ticket-list"></ul>
      </section>
    </main>
  </div>

  <script src="app.js"></script>
</body>
</html>

