<!-- Modal -->
  <div class="modal modal-warning fade" id="filter-Model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Filtrer les journeaux</h4>
        </div>
        <form action="" class="filter-search">
          <input type="hidden" name="filter" value="1">
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control" id="title" value="{{ $title }}">
                </div>
                <?php $limits = [5, 10, 15, 30, 50, 75, 100 ] ?> 
                <div class="form-group">
                  <label for="">Afficher</label>
                  <select class="form-control" name="limit" id="">
                    @foreach ($limits as $l)
                      <option {{ ($l == $limit)? 'selected':'' }} value="{{$l}}">{{$l}}</option>
                    @endforeach
                  </select>
                </div>  
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="from">De</label>
                  <input type="text" name="from" class="form-control datetime" id="from" value="{{ $from }}">
                </div>
                <div class="form-group">
                  <label for="to">à</label>
                  <input type="text" name="to" class="form-control datetime" id="to" value="{{ $to }}">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            
            <button type="submit" class="btn btn-outline">Filtrer</button>
          </div>
        </form>
      </div>
    </div>
  </div>