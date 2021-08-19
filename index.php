<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trabajo Final</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <main>
      <section id="login">
        <div class="login-box">
          <h2>Login</h2>
          <form method ="POST" action="login.php" >
            <div class="user-box">
              <input type="text" name = "userName" required="" autocomplete="nope"/>
              <label>Usuario</label>
            </div>
            <div class="user-box">
              <input type="password" name = "password" required="" autocomplete="off"/>
              <label>Contraseña</label>
            </div>
            <a href="">
            <button>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              Enviar
            </button>
            </a>
          </form>
        </div>
      </section>
      <section id="altaCliente">
        <h1>Bienvenido</h1>
        <div class="altaCliente">
          <form class="altaClienteForm">
            <label>Nombre</label>
            <input type="text" name="" required="" />
            <label>Apellido</label>
            <input type="text" name="" required="" />
            <label>DNI</label>
            <input type="text" name="" required="" />
            <label>Dirección</label>
            <input type="text" name="" required="" />
            <label>Teléfono</label>
            <input type="text" name="" required="" />
            <div class="buttons">
              <button id="altCli" class="buttonAltaCli">Guardar</button>
              <button id="canCli" class="buttonAltaCli">Cancelar</button>
            </div>
          </form>
        </div>
      </section>

      <section id="altaVehiculo">
        <h1>Bienvenido</h1>
        <div class="altaVehiculo">
          <form class="altaVehiculoForm">
            <label>Marca</label>
            <input type="text" name="" required="" />
            <label>Tipo</label>
            <input type="text" name="" required="" />
            <label>Modelo</label>
            <input type="text" name="" required="" />
            <label>Patente</label>
            <input type="text" name="" required="" />
            <label>Numero de Motor</label>
            <input type="text" name="" required="" />
            <div class="buttons">
              <button id="altVehi" class="buttonAltVehi">Guardar</button>
              <button id="canVehi" class="buttonAltVehi">Cancelar</button>
            </div>
          </form>
        </div>
      </section>

      <section id="seguros">
        <h1>Bienvenido</h1>
        <div class="seguros">
          <form class="segurosForm">
            <label>Tipo</label>
            <input type="text" name="" required="" />
            <label>Número</label>
            <input type="text" name="" required="" />
            <label>Valor</label>
            <input type="text" name="" required="" />
            <div class="buttons">
              <button id="altSeg" class="buttonSeg">Guardar</button>
              <button id="canSeg" class="buttonSeg">Cancelar</button>
            </div>
          </form>
        </div>
      </section>

      <section id="informe">
        <div></div>
      </section>
    </main>
  </body>
</html>
