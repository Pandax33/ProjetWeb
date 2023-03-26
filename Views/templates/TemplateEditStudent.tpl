<html>
<head>
  <meta charset="utf-8">
  <title>Liste des articles</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../Views/css/TemplateEditStudent.css" type="text/css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body>

<form method="POST" action="index.php?p=students/update" enctype="multipart/form-data">

  

    
<div class="form-group col-md-6">
<label for="Etudiant">Etudiant</label>
<select id="Etudiant" class="form-control" name="Etudiant">


{foreach $students as $student}
    <option data-id-p="{$student->ID_P}"
    data-firstname="{$student->Firstname_P}"
    data-lastname="{$student->Lastname_P}"
    data-role="{$student->Role_P}"
    data-mail="{$student->mail}"
    data-password="{$student->password}"
    data-name-center="{$student->Name_Center}"
    data-linkpicture="{$student->LinkPicture}"
    data-promotions="{$student->Promotions}"
    data-competences="{$student->Competences}">
{$student->Firstname_P} {$student->Lastname_P}
</option>
{/foreach}

</select>
</div>

<div class="form-group col-md-6">
    <label for="ID">ID</label>
    <input type="text" class="form-control" id="ID" placeholder="ID" name="ID" readonly>
  </div>

    <div class="form-group col-md-6">
      <label for="Prenom">Prenom</label>
      <input type="Secteur d'activité" class="form-control" id="Prenom" placeholder="Durée" name="Prenom">
    </div>

    <div class="form-group col-md-6">
      <label for="Nom">Nom</label>
      <input type="Secteur d'activité" class="form-control" id="Nom" placeholder="Nom" name="Nom">
    </div>

    <div class="form-group col-md-6">
      <label for="Mail">Mail</label>
      <input type="Mail" class="form-control" id="Mail" placeholder="Mail" name="Mail">
    </div>

    <div class="form-group col-md-6">
  <label for="inputImage">Image</label>
  <input type="file" class="form-control-file" id="inputImage" name="image">
</div>
  
    
      
      <div class="form-group col-md-6">
        <label for="Centre">Centre</label>
        <select id="Centre" class="form-control" name="Centre">
        {foreach $center as $item}
          <option >{$item->Name_Center}</option>
        {/foreach}
        
      </select>
      </div>

      <div class="form-group col-md-6">
        <label for="Competence">Competence</label>
        <select id="Competence" class="form-control" name="competence[]" multiple >
        
        {foreach $competence as $item}
          <option>{$item->Name_Competence}</option>
        {/foreach}
        
      </select>
      </div>

      <div class="form-group col-md-6">
        <label for="Promotion">Promotion</label>
        <select id="Promotion" class="form-control" name="Promotion">
        {foreach $promotion as $item}
          <option >{$item->Name_Promotion}</option>
        {/foreach}
        
      </select>
      </div>

    
  









    <br></br>
    <button type="submit" name="submitBtn" id="submitBtn" class="btn btn-primary">Sign in</button>

  </form>



</body>
<script src="../../Views/javascript/TemplateEditstudent.js"></script>
</html>