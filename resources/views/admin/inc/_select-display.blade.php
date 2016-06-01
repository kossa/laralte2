<?php $limits = [5, 10, 15, 30, 50, 75, 100 ] ?> 
<div class="form-group">
	<label for="">Afficher :</label>
	<select class="form-control onchange" name="limit" id="">
		@foreach ($limits as $l)
			<option {{ ($l == $limit)? 'selected':'' }} value="{{$l}}">{{$l}}</option>
		@endforeach
	</select>
</div>