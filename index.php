<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Smart-Truck</title>
  </head>

  <body>
    <main class="main1">
      <div class="wrapper1">
        <section class="introContainer">
          <h1>
            QUERÉS VIVIR EN
            <span class="logoUsa"
              ><img src="./assets/usa.png" alt="Usa logo"
            /></span>
          </h1>
          <h2>Invertí en <span class="truckTitle">CAMIONES</span></h2>
          <h2>y Obtené la <span class="truckTitle2">VISA</span></h2>
          <hr />
          <p>Rentablidad del 25% anual</p>
        </section>
        <section class="formContainer">
          <h2>Solicitar información</h2>
          <h3>
            Rellena este formulario y nos pondremos en contacto contigo a la
            mayor brevedad.
          </h3>
          <form action="sending.php" method="post">
            <article class="formGroup field">
              <input
                type="input"
                class="formField"
                placeholder="Name"
                name="name"
                required
              />
              <label for="name" class="formLabel">Nombre</label>
            </article>
            <article class="formGroup field">
              <input
                type="input"
                class="formField"
                placeholder="Email"
                name="email"
                required
              />
              <label for="email" class="formLabel">Email</label>
            </article>
            <article class="formGroup field">
              <input
                type="input"
                class="formField"
                placeholder="Phone"
                name="phone"
              />
              <label for="phone" class="formLabel">Teléfono</label>
            </article>
            <article class="formGroup field">
              <textarea
                class="formField"
                placeholder="Message"
                name="message"
                required
              ></textarea>
              <label for="message" class="formLabel">Consulta</label>
            </article>
            <div class="btnContainer">
              <button class="button btn" type="submit">
                Enviar
                <div class="button__horizontal"></div>
                <div class="button__vertical"></div>
              </button>
              <button class="button btn" type="reset">
                Borrar
                <div class="button__horizontal"></div>
                <div class="button__vertical"></div>
              </button>
            </div>
          </form>
        </section>
      </div>
    </main>
    <script src="./js/main.js"></script>
  </body>
</html>
