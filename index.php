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
    <title>Homepage</title>
  </head>

  <body>
    <main class="main1">
      <div class="wrapper1">
        <section class="introContainer">
          <h1>
            Vancouver's Best
            <br />
            Home Cleaners
          </h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque
            distinctio eaque totam minus incidunt officia voluptatum unde,
            suscipit perferendis eos pariatur illum corporis enim aspernatur
            corrupti, neque cumque magnam ut nostrum quaerat. Aspernatur, eum a!
            Inventore omnis tempore veniam molestias.
          </p>
        </section>
        <section class="formContainer">
          <h2>Request Info & Booking</h2>
          <h3>Fill this form and we will contact you as soon as we can.</h3>
          <form action="sending.php" method="post">
            <article class="formGroup field">
              <input
                type="input"
                class="formField"
                placeholder="Name"
                name="name"
                required
              />
              <label for="name" class="formLabel">Name</label>
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
              <label for="phone" class="formLabel">Phone</label>
            </article>
            <article class="formGroup field">
              <textarea
                class="formField"
                placeholder="Message"
                name="message"
                required
              ></textarea>
              <label for="message" class="formLabel">Message</label>
            </article>
            <div class="btnContainer">
              <button class="button btn" type="submit">
                Send
                <div class="button__horizontal"></div>
                <div class="button__vertical"></div>
              </button>
              <button class="button btn" type="reset">
                Reset
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
