
@if ($status == 1) {{-- sa --}}
	<span class="label label-success">Active</span>
@elseif ($status == 0)
	<span class="label label-info">Attente</span>
@elseif ($status == -1)
	<span class="label label-warning">Archivé</span>
@elseif ($status == -2)
	<span class="label label-danger">Corbeil</span>
@endif