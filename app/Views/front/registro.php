<form style="width: 50%; margin: 0 auto; padding: 20px;border: 1px solid#ccc;border-radius: 10px;box-shadow: 0 0 10px rgba(0,0,0,0,1);" class="row g-3">
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Su nombre</label>
    <input type="text" class="form-control" id="validationDefault01" value="Nombre" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Su apellido</label>
    <input type="text" class="form-control" id="validationDefault02" value="Apellido" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Correo electronico</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">Pais</label>
    <input type="text" class="form-control" id="validationDefault03" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Provincia</label>
    <select class="form-select" id="validationDefault04" required>
      <option selected disabled value="">Busqueda</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="validationDefault05" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Contraseña</label>
    <input type="text" class="form-control" id="validationDefault05" required>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Acepto terminos y condiciones.
      </label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Crear cuenta</button>
  </div>
</form>