<label for="status">Estado </label>
<select name="status" id="status" class="form-control select2">
    <option value="0" @if($status == 0 || old('status') == 0) selected="selected" @endif>Inhabilitar</option>
    <option value="1" @if($status == 1 || old('status') == 1) selected="selected" @endif>Habilitar</option>
</select>
