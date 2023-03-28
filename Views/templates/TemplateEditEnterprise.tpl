<html>
<head>
  <meta charset="utf-8">
  <title>Heraclès | Modification Entreprise</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../Views/css/TemplateEditEnterprise.css" type="text/css">
  <link rel="stylesheet" href="../../Views/css/footer.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>
<body>

  <form method="POST" action="index.php?p=enterprises/update">
  
    <div class="container">
      <div class="create-enterprise-border">
      <label>Modification Entreprise</label></div>
        <div class="card-body">
            <form>
                <div class="row mb-3">
    <div class="form-group col-md-6">
      <label for="inputNom" name="Nom">Nom</label>
      <select id="inputNom" name ="Nom" class="form-control">
        <option selected>Choose...</option>
       {foreach $entreprises as $item}
  <option data-activity="{$item->Activity_E}" data-ID="{$item->ID_E}" data-Intership="{$item->Intership_E}" data-description="{$item->Description_E}" data-visibility="{$item->Visibility_E}" data-localite="{$item->Localite}" data-TrustRate="{$item->TrustRate_E}">{$item->Name_E}</option>
{/foreach}
      </select>
    </div>
    
    <div class="form-group col-md-6">
    <label for="ID">IDE</label>
    <input type="text" class="form-control" id="ID" placeholder="ID" name="ID" readonly>
</div>
    </div>
    <div class="row mb-3">
    <div class="form-group col-md-12">
      <label for="inputSecteurActivite4">Secteur d'activité</label>
      <input type="Secteur d'activité" class="form-control" id="inputSecteur d'activité4" placeholder="Secteur d'activité" name="activite">
    </div>

    <div class="form-group col-md-12">
      <label for="inputDescriptiond4">Description_E</label>
      <input type="text" class="form-control" id="inputDescription4" placeholder="description" name="description">
    </div>
  </div>
    <div class="row mb-3">
      <div class="form-group col-md-6">
        <label for="inputNbStagiaire">Nombre de stagiaire</label>
        <input type="number" class="form-control" id="inputNbStagiaire" name="nbStagiaire" >
      </div>
      <div class="form-group col-md-6">
        <label for="inputImage">Image</label>
        <input type="file" class="form-control-file" id="inputImage" name="image">
      </div>
      </div>
      
      <div class="form-group col-md-12">
        <label for="inputLocalite">Localite</label>
        <select id="inputLocalite" class="form-control" name="citys[]" multiple >
        <option selected>Choose...</option>
        {foreach $city as $item}
          <option>{$item->Name}</option>
        {/foreach}
        <option>oui</option>
      </select>
      </div>
    </div>
    <div class="row mb-3">
      <div class="form-group col-md-6">
    <div class="form-check">
      <input class="form-check-input" type="radio" name="visible" id="Visible" value="visible">
      <label class="form-check-label" for="Visible">Visible</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="visible" id="Invisible" value="invisible" checked>
      <label class="form-check-label" for="Invisible">Invisible</label>
    </div></div>
    <div class="form-group col-md-6">
      <div class="row mb-3">
        <fieldset class="rating">
       <legend>Notez cet article :</legend>
       <input type="radio" id="star5" name="rating" value="5"><label for="star5">☆</label>
       <input type="radio" id="star4" name="rating" value="4"><label for="star4">☆</label>
       <input type="radio" id="star3" name="rating" value="3"><label for="star3">☆</label>
       <input type="radio" id="star2" name="rating" value="2"><label for="star2">☆</label>
       <input type="radio" id="star1" name="rating" value="1"><label for="star1">☆</label>
     </fieldset>
   </div></div>
    
</div>
<div>
    <button type="submit" name="validation" class="continue-btn">Modify</button>
    </div>
  </form>
</div>
</div>


<script src = "../../Views/javascript/TemplateEditEnterprise.js"> </script>
<script>$(document).ready(function () {
    $('#inputLocalite').select2();
    
});</script>
</body>
</html>