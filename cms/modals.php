<!-- Add mededeling modal -->
<div class="modal fade" id="addMededeling" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mededeling toevoegen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="mededelingen_add.php" method="post">
            <div class="form-group">
                <label for="titel">Titel</label>
                <input name="titel" type="text" class="form-control" id="titel" placeholder="titel">
            </div>
            <div class="form-group">
                <label for="tekst">Tekst</label>
                <textarea name="tekst" class="form-control" id="tekst" rows="3"></textarea>
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Toevoegen</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Add rooster activiteit modal -->
<div class="modal fade" id="addActiviteit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Activiteit toevoegen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="rooster_add.php" method="post">
            <!-- <div class="form-group">
                <label for="dag">Dag</label>
                <input name="dag" type="text" class="form-control" id="dag" placeholder="dag">
            </div> -->
            <div class="form-group">
              <label for="tijd">Dag</label>
              <select name="dag" class="form-control">
                <option value="Ma">Maandag</option>
                <option value="Di">Dinsdag</option>
                <option value="Woe">Woensdag</option>
                <option value="Do">Donderdag</option>
                <option value="Vrij">Vrijdag</option>
              </select>
            </div>
            <div class="form-group">
                <label for="tijd">Tijd</label>
                <input name="tijd" type="text" class="form-control" placeholder="tijd">
            </div>
            <div class="form-group">
                <label for="klas">Klas</label>
                <input name="klas" type="text" class="form-control" placeholder="klas">
            </div>
            <div class="form-group">
                <label for="activiteit">Activiteit</label>
                <input name="activiteit" type="text" class="form-control" placeholder="activiteit">
            </div>
            <div class="form-group">
                <label for="lokaal">Lokaal</label>
                <input name="lokaal" type="text" class="form-control" placeholder="lokaal">
            </div>
            <div class="form-group">
                <label for="docent">Docent</label>
                <input name="docent" type="text" class="form-control" placeholder="docent">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Toevoegen</button>
        </form>
      </div>
    </div>
  </div>
</div>