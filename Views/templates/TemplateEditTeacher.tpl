<html>
<head>
  <meta charset="utf-8">
  <title>Héraclès | Modification Pilote</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../Views/css/createOffers.css" type="text/css">
  <link rel="stylesheet" href="../../Views/css/footer.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body>

<form method="POST" action="index.php?p=teachers/update" enctype="multipart/form-data">

  

    <div class="container">
        <div class="create-off-border">
        <label>Modification Pilote</label></div>
        <div class="row mb-3">   
<div class="form-group col-md-6">
<label for="Etudiant">Etudiant</label>
<select id="Etudiant" class="form-control" name="Etudiant">


{foreach $teachers as $teacher}
    <option data-id-p="{$teacher->ID_P}"
    data-firstname="{$teacher->Firstname_P}"
    data-lastname="{$teacher->Lastname_P}"
    data-role="{$teacher->Role_P}"
    data-mail="{$teacher->mail}"
    data-password="{$teacher->password}"
    data-name-center="{$teacher->Name_Center}"
    data-linkpicture="{$teacher->LinkPicture}"
    data-promotions="{$teacher->Promotions}"
    data-competences="{$teacher->Competences}">
{$teacher->Firstname_P} {$teacher->Lastname_P}
</option>
{/foreach}

</select>
</div>

<div class="form-group col-md-6">
    <label for="ID">ID</label>
    <input type="text" class="form-control" id="ID" placeholder="ID" name="ID" readonly>
  </div></div>
  <div class="row mb-3">

    <div class="form-group col-md-6">
      <label for="Prenom">Prenom</label>
      <input type="Secteur d'activité" class="form-control" id="Prenom" placeholder="Durée" name="Prenom">
    </div>

    <div class="form-group col-md-6">
      <label for="Nom">Nom</label>
      <input type="Secteur d'activité" class="form-control" id="Nom" placeholder="Nom" name="Nom">
    </div></div>

    <div class="form-group col-md-12">
      <label for="Mail">Mail</label>
      <input type="Mail" class="form-control" id="Mail" placeholder="Mail" name="Mail">
    </div>

   
  
    
    <div class="row mb-3">
      <div class="form-group col-md-6">
        <label for="Centre">Centre</label>
        <select id="Centre" class="form-control" name="Centre">
        {foreach $center as $item}
          <option >{$item->Name_Center}</option>
        {/foreach}
        
      </select>
      </div>
      <div class="form-group col-md-6">
        <label for="Promotion">Promotion</label>
        <select id="Promotion" class="form-control" name="Promotion[]" multiple>
        {foreach $promotion as $item}
          <option >{$item->Name_Promotion}</option>
        {/foreach}
        
      </select>
      </div></div>

      <div class="form-group col-md-12">
        <label for="Competence">Competence</label>
        <select id="Competence" class="form-control" name="competence[]" multiple >
        
        {foreach $competence as $item}
          <option>{$item->Name_Competence}</option>
        {/foreach}
        
      </select>
      </div>

     
      <div class="form-group col-md-6">
        <label for="inputImage">Image</label>
        <input type="file" class="form-control-file" id="inputImage" name="image">
      </div>

    
  









    <br></br>
    <button type="submit" name="submitBtn" id="submitBtn" class="btn btn-primary">Sign in</button>

  </form>



</body>
<script src="../../Views/javascript/TemplateEditteacher.js"></script>
</html>