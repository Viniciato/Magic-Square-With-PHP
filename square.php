<?php require "receive.php" ?>
<?php require "layout/_header.php" ?>



<span class='help-block alert-danger'><?= @$ganhador=="1"?" Quadrado Mágico Correto" :""; ?></span>
<span class='help-block alert-danger'><?= @$ganhador=="2"?" Quadrado Mágico Incorreto" :""; ?></span>

<div class="jumbotron">

  <form method="POST">

    <ul class="nav nav-pills pull-right">
      <li role="presentation"><input type="submit" value="Resetar" name="new" id="new" class="btn btn-lg btn-primary"></li>
      <li role="presentation"><input type="submit" value="Enviar" name="send" id="send" class="btn btn-lg btn-primary"></li>
    </ul>

    <h3 class="text-muted">Quadrado Mágico</h3>

    <table class="velha">
      <tr>
        <td id="A"> <input type="text" maxlength="1" name="field[0]" value="<?= @$field[0]; ?>"<?= @$ganhador=="1"?"disabled" :"";?>> </td>
        <td id="B"> <input type="text" maxlength="1" name="field[1]" value="<?= @$field[1]; ?>"<?= @$ganhador=="1"?"disabled" :"";?>> </td>
        <td id="C"> <input type="text" maxlength="1" name="field[2]" value="<?= @$field[2]; ?>"<?= @$ganhador=="1"?"disabled" :"";?>> </td>
      </tr>
      <tr>
        <td id="D"> <input type="text" maxlength="1" name="field[3]" value="<?= @$field[3]; ?>"<?= @$ganhador=="1"?"disabled" :"";?>> </td>
        <td id="E"> <input type="text" maxlength="1" name="field[4]" value="<?= @$field[4]; ?>"<?= @$ganhador=="1"?"disabled" :"";?>> </td>
        <td id="F"> <input type="text" maxlength="1" name="field[5]" value="<?= @$field[5]; ?>"<?= @$ganhador=="1"?"disabled" :"";?>> </td>
      </tr>
      <tr>
        <td id="G"> <input type="text" maxlength="1" name="field[6]" value="<?= @$field[6]; ?>"<?= @$ganhador=="1"?"disabled" :"";?>> </td>
        <td id="H"> <input type="text" maxlength="1" name="field[7]" value="<?= @$field[7]; ?>"<?= @$ganhador=="1"?"disabled" :"";?>> </td>
        <td id="I"> <input type="text" maxlength="1" name="field[8]" value="<?= @$field[8]; ?>"<?= @$ganhador=="1"?"disabled" :"";?>> </td>
      </tr>
    </table>

    <input type="hidden" name="jogador" value="<?= @$jogador;  ?>"></td>

  </form>
  
  <?php require "layout/_footer.php" ?>