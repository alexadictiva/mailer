<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
  </head>
  <body>
    <main>
      <form action="sending.php" method="post">
        <label style="display: block">
          Nombre:
          <input name="nombre" type="text" />
        </label>
        <label style="display: block">
          Teléfono:
          <input name="telefono" type="text" />
        </label>
        <label style="display: block">
          Email:
          <input name="email" type="text" />
        </label>
        <label style="display: block">
          Mensaje:
          <textarea name="mensaje" rows="6" cols="50"></textarea>
        </label>
        <input type="reset" value="Borrar" style="display: block" />
        <input type="submit" value="Enviar" style="display: block" />
      </form>
    </main>
  </body>
</html>
