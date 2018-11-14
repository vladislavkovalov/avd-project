
<label for="">Активен</label>    
<input type="checkbox" name="is_available" 
       @if($param->is_available == 1) checked @endif />

<br>

<label for="">Автоматический показ</label>    
<input type="checkbox" name="is_lazy"
       @if($param->is_lazy == 1) checked @endif/>
<hr>

<input class="btn btn-primary" type="submit" value="Сохранить" >
