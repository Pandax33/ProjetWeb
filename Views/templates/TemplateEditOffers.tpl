<html>
<head>
  <meta charset="utf-8">
  <title>Héraclès | Modification Offre</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../Views/css/createOffers.css" type="text/css">
  <link rel="stylesheet" href="../../Views/css/footer.css">
  <link rel="icon" type="image/x-icon" href="../../Views/css/images/LogoH.png">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body>

<form method="POST" action="index.php?p=offers/update" enctype="multipart/form-data">

  

<div class="container">
        <div class="create-off-border">
            <label>Modification Offre</label></div>
            <div class="row mb-3">
<div class="form-group col-md-6">
<label for="Intitule">Intitulé</label>
<select id="Intitule" class="form-control" name="Intitule">


{foreach $offers as $item}
  <option data-ID-O='{$item->ID_O}' data-Name_Enterprise='{$item->Name_E}' data-duration='{$item->Duration_O}' data-salary='{$item->Salary_O}' data-description='{$item->Description}' data-space='{$item->Space_O}' data-state='{$item->State}' data-IDE='{$item->ID_E}' data-name='{$item->Name}' data-competences='{$item->Competences}' data-promotions='{$item->Promotions}'>{$item->Entitled_O}</option>
{/foreach}

</select>
</div>

<div class="form-group col-md-6">
    <label for="ID">IDO</label>
    <input type="text" class="form-control" id="IDO" placeholder="IDO" name="IDO" readonly>
  </div>
            </div>
            <div class="row mb-3">
    <div class="form-group col-md-6">
      <label for="Duree">Durée</label>
      <input type="Secteur d'activité" class="form-control" id="Duree" placeholder="Durée" name="Duree">
    </div>

    <div class="form-group col-md-6">
      <label for="Duree">Salaire</label>
      <input type="Secteur d'activité" class="form-control" id="Salaire" placeholder="Salaire" name="Salaire">
    </div>
            </div>
    <div class="form-group col-md-6">
      <label for="inputDescriptiond4">Description</label>
      <input type="text" class="form-control" id="inputDescription4" placeholder="description" name="description">
    </div>

    <div class="form-group col-md-6">
  <label for="inputImage">Image</label>
  <input type="file" class="form-control-file" id="inputImage" name="image">
</div>
  
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputNbStagiaire">Nombre de stagiaire</label>
        <input type="number" class="form-control" id="inputNbStagiaire" name="nbStagiaire" >
      </div>
      
      <div class="form-group col-md-6">
        <label for="Entreprise">Entreprise</label>
        <select id="Entreprise" class="form-control" name="Entreprise">
        <option selected>Choisir...</option>
        {foreach $enterprise as $item}
          <option data-ID="{$item->ID_E}">{$item->Name_E}</option>
        {/foreach}
        
      </select>
      </div>

      <div class="form-group col-md-6">
    <label for="ID">IDE</label>
    <input type="text" class="form-control" id="ID" placeholder="ID" name="ID" readonly>
  </div>

      <div class="form-group col-md-6">
        <label for="Lieux">Lieux</label>
        <select id="Lieux" class="form-control" name="Lieux">
        {foreach $city as $item}
          <option>{$item->Name}</option>
        {/foreach}
        
      </select>
      </div>
    </div>
    

  <div class="form-group col-md-6">
        <label for="Competence">Competence</label>
        <select id="Competence" class="form-control" name="competence[]" multiple >
        
        {foreach $Request as $item}
          <option>{$item->Name_Competence}</option>
        {/foreach}
        
      </select>
      </div>

      <div class="form-group col-md-6">
        <label for="Promotion">Promotion</label>
        <select id="Promotion" class="form-control" name="Promotion[]" multiple>
        {foreach $Promotion as $item}
          <option >{$item->Name_Promotion}</option>
        {/foreach}
        
      </select>
      </div>

  
  <div class="form-check">
  <input class="form-check-input" type="radio" name="visible" id="Visible" value="visible">
  <label class="form-check-label" for="Visible">
    Visible
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="visible" id="Invisible" value="invisible" checked>
  <label class="form-check-label" for="Invisible">
    Invisible
  </label>
</div>







    <br></br>
    <button type="submit" name="submitBtn" id="submitBtn" class="btn btn-primary">Sign in</button>

  </form>



</body>
<script src="../../Views/javascript/TemplateEditOffers.js"></script>
</html>