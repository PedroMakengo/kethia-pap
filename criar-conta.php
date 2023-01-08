<!-- Adicionar aqui o caminho do meu controllador -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="views/assets/styles/login.css">
  </head>
  <body>
    <main>
      <div class="content-banner"></div>
      <div class="login">
        <form action="">
          <div class="logo">
            <h2>Agendamento</h2>
            <p>Iniciar Sessão</p>
          </div>
          <input type="text" name="nome" placeholder="Nome do usuário" />
          <input type="email" name="email" placeholder="examplo@gmail.com" />
          <input type="password" name="senha" placeholder="palavra-passe" />
          <input type="tel" name="tel" placeholder="Número de Telefone" />
          <input type="submit" value="Efetuar o Login" />

          <div class="criar-conta">
            <p>Já tens uma conta? <a href="login.php">Login</a></p>
          </div>
        </form>
      </div>
    </main>
  </body>
</html>
