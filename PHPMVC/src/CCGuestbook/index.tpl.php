<h1>Gästbok</h1>
<p>En gästbok i ramverket Drygia</p>

<form action="<?=$form_action?>" method='post'>
  <p>
    <label>Inlägg: <br/>
    <textarea name='newEntry'></textarea></label>
  </p>
  <p>
    <input type='submit' name='doAdd' value='Spara' />
    <input type='submit' name='doClear' value='Radera Gästboken' />
    <input type='submit' name='doCreate' value='Skapa Databas' />
  </p>
</form>

<h2>Samtliga inlägg:</h2>

<?php foreach($entries as $val):?>
<div style='background-color:#f6f6f6;border:1px solid #ccc;margin-bottom:1em;padding:1em;'>
  <p>Datum: <?=$val['created']?></p>
  <p><?=htmlent($val['entry'])?></p>
</div>
<?php endforeach;?>
