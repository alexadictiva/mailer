<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Homepage</title>
  </head>
  <body>
    <main>
      <div class="wrapper">
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
            <div class="formControl">
              <input name="name" type="text" placeholder="Your Name" />
            </div>
            <div class="formControl">
              <input name="phone" type="text" placeholder="Your Phone" />
            </div>
            <div class="formControl">
              <input name="email" type="text" placeholder="Your Mail" />
            </div>
            <div class="formControl">
              <textarea
                name="message"
                placeholder="Your Message"
                rows="6"
                cols="50"
              ></textarea>
            </div>
            <input type="reset" class="btn btn-send" value="Borrar" />
            <input type="submit" class="btn btn-reset" value="Enviar" />
          </form>
        </section>
      </div>
    </main>
  </body>
</html>
