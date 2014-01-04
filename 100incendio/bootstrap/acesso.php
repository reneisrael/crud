<body>
<?php 
	$cabecalho_title = "100 incêndio";
	include("_menu_cabecalho.php");
?>

<!-- Form Name -->
<legend>Acesso de Viatura na Edificação</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="text_via">Via de acesso para viaturas:</label>
</div>

<!-- Multiple Radios -->
<div class="control-group">
  <label class="control-label" for="radios_via_a">Largura maior que 6m? </label>
  <div class="controls">
    <label class="radio" for="radios_via_a-0">
      <input type="radio" name="radios_via_a" id="radios_via_a-0" value="Não" checked="checked">
      Não
    </label>
    <label class="radio" for="radios_via_a-1">
      <input type="radio" name="radios_via_a" id="radios_via_a-1" value="Sim">
      Sim
    </label>
  </div>
</div>

<!-- Multiple Radios -->
<div class="control-group">
  <label class="control-label" for="radios_via_b">Suporta viaturas com peso de 25 toneladas distribuídas em dois eixos? </label>
  <div class="controls">
    <label class="radio" for="radios_via_b-0">
      <input type="radio" name="radios_via_b" id="radios_via_b-0" value="Não" checked="checked">
      Não
    </label>
    <label class="radio" for="radios_via_b-1">
      <input type="radio" name="radios_via_b" id="radios_via_b-1" value="Sim">
      Sim
    </label>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="text_portao">Portão de acesso:</label>
</div>

<!-- Multiple Radios -->
<div class="control-group">
  <label class="control-label" for="radios_portao_a">Largura maior que 4m?</label>
  <div class="controls">
    <label class="radio" for="radios_portao_a-0">
      <input type="radio" name="radios_portao_a" id="radios_portao_a-0" value="Não" checked="checked">
      Não
    </label>
    <label class="radio" for="radios_portao_a-1">
      <input type="radio" name="radios_portao_a" id="radios_portao_a-1" value="Sim">
      Sim
    </label>
  </div>
</div>

<!-- Multiple Radios -->
<div class="control-group">
  <label class="control-label" for="radios_portao_b">Altura maior que 4,5m?</label>
  <div class="controls">
    <label class="radio" for="radios_portao_b-0">
      <input type="radio" name="radios_portao_b" id="radios_portao_b-0" value="Não" checked="checked">
      Não
    </label>
    <label class="radio" for="radios_portao_b-1">
      <input type="radio" name="radios_portao_b" id="radios_portao_b-1" value="Sim">
      Sim
    </label>
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="singlebutton_acesso"></label>
  <div class="controls">
    <button id="singlebutton_acesso" name="singlebutton_acesso" class="btn btn-primary">Salvar</button>
  </div>
</div>

</fieldset>
</form>
</body>