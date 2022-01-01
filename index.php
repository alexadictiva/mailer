<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon">
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
          <hr class="bar"/>
          <p>Rentablidad del 25% anual</p>
        </section>
        <hr class="hiddenDesktop">
        <section class="formContainer">
          <h2>Solicitar información</h2>
          <h3>
            Completá este formulario y te enviaremos la información.
          </h3>
          <form action="sending.php" method="post">
            <article class="formControl">
              <input
                type="input"
                class="formField"
                placeholder="Name"
                name="name"
                required
              />
              
            </article>
            <article class="formControl">
              <input
                type="input"
                class="formField"
                placeholder="Email"
                name="email"
                required
              />
              
            </article>
            <article class="formControl">
              <input
                type="input"
                class="formField"
                placeholder="Phone"
                name="phone"
              />
           
            </article>
            <article class="formControl">
              <textarea
                                placeholder="Message"
                name="message"
                required
              ></textarea>
              
            </article>
            <div class="btnContainer">
              <button class="btn btnSubmit" type="submit">                Enviar                              </button>
              <button class="btn btnReset" type="reset">                Borrar                             </button>
            </div>
          </form>
        </section>
      </div>
    </main>
    <script src="./js/main.js"></script>
  </body>
</html>
