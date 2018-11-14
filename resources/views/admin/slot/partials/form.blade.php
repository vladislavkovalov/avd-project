<label for="">Имя слота</label>    
<input type="text" class="form-control" name="slot_name" placeholder="Имя слота" 
       value="{{$slot->slot_name or ""}}" required=""/>

<label for="">Идентификатор</label>    
<input type="text" class="form-control" name="slot_element_id" placeholder="Идентификатор" 
       value="{{$slot->slot_element_id  or ""}}" required=""/>

<label for="">Размер слота</label>    
<input type="text" class="form-control" name="slot_sizes" placeholder="Размер слота" 
       value="{{$slot->slot_sizes  or ""}}" required=""/>

<hr>

<input class="btn btn-primary" type="submit" value="Сохранить" >
