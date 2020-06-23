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
        <form action="mededelingen.php" method="post">
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