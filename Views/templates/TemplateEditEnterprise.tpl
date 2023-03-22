<html>
<head>
  <meta charset="utf-8">
  <title>Liste des articles</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Views/css/TemplateEditEnterprise.css" type="text/css">
</head>
<body>
  <form>
    <div class="form-group col-md-6">
      <label for="inputNom">Nom</label>
      <select id="inputNom" class="form-control">
        <option selected>Choose...</option>
       {foreach $entreprises as $item}
  <option data-activity="{$item->Activity_E}" data-ID="{$item->ID_E}" data-Intership="{$item->Intership_E}" data-description="{$item->Description_E}" data-visibility="{$item->Visibility_E}" data-localite="{$item->Localite}" data-TrustRate="{$item->TrustRate_E}">{$item->Name_E}</option>
{/foreach}
      </select>
    </div>
    
    <div class="form-group col-md-6">
      <label for="inputSecteurActivite4">Secteur d'activité</label>
      <input type="Secteur d'activité" class="form-control" id="inputSecteur d'activité4" placeholder="Secteur d'activité">
    </div>

    <div class="form-group col-md-6">
      <label for="inputDescriptiond4">Description_E</label>
      <input type="text" class="form-control" id="inputDescription4" placeholder="description">
    </div>
  
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputNbStagiaire">Nombre de stagiaire</label>
        <input type="number" class="form-control" id="inputNbStagiaire">
      </div>
      
      <div class="form-group col-md-6">
        <label for="inputLocalite">Localite</label>
        <select id="inputLocalite" class="form-control">
          <option selected>Choose...</option>
           {foreach $city as $item}
           <option>{$item->Name}</option>
           
           {/foreach}
           <option> oui </option>
        </select>
      </div>
    </div>
  
     <fieldset class="rating">
    <legend>Notez cet article :</legend>
    <input type="radio" id="star5" name="rating" value="5"><label for="star5">☆</label>
    <input type="radio" id="star4" name="rating" value="4"><label for="star4">☆</label>
    <input type="radio" id="star3" name="rating" value="3"><label for="star3">☆</label>
    <input type="radio" id="star2" name="rating" value="2"><label for="star2">☆</label>
    <input type="radio" id="star1" name="rating" value="1"><label for="star1">☆</label>
  </fieldset>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="Visible">
  <label class="form-check-label" for="Visible">
    Visible
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="Invisible" checked>
  <label class="form-check-label" for="Invisible">
    Invisible
  </label>
</div>


    <br></br>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>

  <script src = "../../Views/javascript/TemplateEditEnterprise.js">
    
  </script>
</body>
</html>