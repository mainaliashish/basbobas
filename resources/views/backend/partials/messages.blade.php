@if($errors->any())
  <div class="clearfix"></div>
  <div class="row">
  <div class="col-md-3"></div>
    <div class="col-md-9" style="margin-left: -85px;">
            @foreach ($errors->all() as $error )
                <ul class="list-group pt-2">
                    <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Error : </strong> {{ $error  }}
                    </div>
                </ul>
                @endforeach
    </div>
  </div>
  <div class="clearfix"></div>
@endif