<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Nome:</span>
  </div>
  <input type="text" name="name" value="{{isset($registro->name) ? $registro->name : ''}}" class="form-control" placeholder="Nome" aria-label="Nome" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Preço:</span>
  </div>
  <input type="text" name="price" value="{{isset($registro->price) ? $registro->price : ''}}" class="form-control" placeholder="Preço" aria-label="Preço" aria-describedby="basic-addon1">
</div>
