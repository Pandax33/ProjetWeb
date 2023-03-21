<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Liste des articles</title>
</head>
<body>
<h1>{$Nom}</h1>

{if $myArray|@count > 0}
  <ul>
    {foreach from=$myArray item=object}
      <li>
        <h2>{$object->Entitled_O}</h2>
        <p><strong>Duration:</strong> {$object->Duration_O}</p>
        <p><strong>Salary:</strong> {$object->Salary_O}</p>
        <p><strong>Description:</strong> {$object->Description}</p>
        <p><strong>Location:</strong> {$object->Name}</p>
      </li>
    {/foreach}
  </ul>
{else}
  <p>Aucune donnée trouvée.</p>
{/if}
</body>
</html>