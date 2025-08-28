<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cadastro</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main class="card" role="main">
    <div class="header" aria-hidden="true">
      <div class="logo" title="Cadastro"></div>
      <div>
        <h1>Crie sua conta</h1>
        <p class="sub">Preencha seus dados para começar.</p>
      </div>
    </div>

    <form novalidate onsubmit="this.checkValidity() || event.preventDefault()">
      <!-- CPF -->
      <div class="field">
        <label for="cpf">CPF</label>
        <div class="input">
          <div class="icon" aria-hidden="true">🪪</div>
          <input id="cpf" name="cpf" type="text" inputmode="numeric" maxlength="10" autocomplete="off" placeholder="00000000017" required
                 title="Use o formato 000.000.000-00" />
          <div class="icon endcap" aria-hidden="true"></div>
        </div>
        <div class="hint">Formato: 00000000017</div>
      </div>

      <!-- Nome -->
      <div class="field">
        <label for="nome">Nome completo</label>
        <div class="input">
          <div class="icon" aria-hidden="true">👤</div>
          <input id="nome" name="nome" type="text" autocomplete="name" placeholder="Seu nome" required minlength="3" />
          <div class="icon endcap" aria-hidden="true"></div>
        </div>
      </div>

      <!-- Idade -->
      <div class="field">
        <label for="idade">Idade</label>
        <div class="input">
          <div class="icon" aria-hidden="true">🎂</div>
          <input id="idade" name="idade" type="number" inputmode="numeric" placeholder="18" required min="1" max="120" />
          <div class="icon endcap" aria-hidden="true"></div>
        </div>
      </div>

      <!-- Nome -->
      <div class="field">
        <label for="nome">Cidade</label>
        <div id="cid" class="input">
          <div class="icon" aria-hidden="true">🗺️</div>
          <select id="cid" name="cidade">
            <option value="1">Joinville</option>
            <option value="2">Blumenau</option>
            <option value="3">Florianópolis</option>
            <option value="4">Jaraguá do Sul</option>
          </select>
          <div class="icon endcap" aria-hidden="true"></div>
        </div>
      </div>

      <!-- Email -->
      <div class="field">
        <label for="email">E-mail</label>
        <div class="input">
          <div class="icon" aria-hidden="true">✉️</div>
          <input id="email" name="email" type="email" autocomplete="email" placeholder="voce@exemplo.com" required />
          <div class="icon endcap" aria-hidden="true"></div>
        </div>
      </div>

      <!-- Senha -->
      <div class="field">
        <label for="senha">Senha</label>
        <div class="input">
          <div class="icon" aria-hidden="true">🔒</div>
          <input id="senha" name="senha" type="password" autocomplete="new-password" placeholder="Mín. 8 caracteres" required minlength="8" />
          <div class="icon endcap" aria-hidden="true"></div>
        </div>
        <div class="hint">Use pelo menos 8 caracteres, combinando letras e números.</div>
      </div>

      <div class="actions">
        <button class="btn" type="submit">Cadastrar</button>
      </div>

      <div class="foot">Ao continuar, você concorda com nossos termos e políticas.</div>
    </form>
  </main>
</body>
</html>

<?php
error_reporting(0);
include_once('classes/cad.php');

$u = new Usuario();
$u->setCpf($_GET['cpf']);
$u->setNome($_GET['nome']);
$u->setIdade($_GET['idade']);
$u->setCidade($_GET['cidade']);
$u->setEmail($_GET['email']);
$u->setSenha($_GET['senha']);
$all = $u->dados();

$bd = new Sql();
$bd->insert($all);

?>
