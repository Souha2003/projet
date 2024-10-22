
<div class="modal fade" id="editStudentModal" tabindex="-1" role="dialog" aria-labelledby="editStudentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="editStudentModalLabel">
          <i class="fas fa-user-edit mr-2"></i>Modifier Enseignant
        </h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('updateEnseignant', $data['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="form-group">
            <label for="studentCIN"><i class="fas fa-id-card mr-2"></i>CIN</label>
            <input type="text" name="cin" value="{{ $data['cin'] }}" class="form-control" id="studentCIN" required>
          </div>
          <div class="form-group">
            <label for="studentName"><i class="fas fa-user mr-2"></i>Nom</label>
            <input type="text" name="nom" value="{{ $data['nom'] }}" class="form-control" id="studentName" required>
          </div>
          <div class="form-group">
            <label for="studentFirstName"><i class="fas fa-user mr-2"></i>Prénom</label>
            <input type="text" name="prenom" value="{{ $data['prenom'] }}" class="form-control" id="studentFirstName" required>
          </div>
          <div class="form-group">
            <label for="studentEmail"><i class="fas fa-envelope mr-2"></i>Email</label>
            <input type="email" name="email" value="{{ $data['email'] }}" class="form-control" id="studentEmail" required>
          </div>
          <div class="form-group">
            <label for="studentSpecialite"><i class="fas fa-graduation-cap mr-2"></i>Spécialité</label>
            <input type="text" name="specialite" value="{{ $data['specialite'] }}" class="form-control" id="studentSpecialite" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            <i class="fas fa-times mr-2"></i>Annuler
          </button>
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-save mr-2"></i>Enregistrer les modifications
          </button>
        </div>
      </form>
    </div>
  </div>
</div>