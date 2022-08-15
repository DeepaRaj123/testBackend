@extends('admin.layout.base')

@section('title', 'Provider Documents ')

@section('content')
<div class="content-area py-1">
    <div class="container-fluid">
        
        <div class="box box-block bg-white">
            <h5 class="mb-1">@lang('admin.provides.provider_name'): {{ $Document->provider->first_name }} {{ $Document->provider->last_name }}</h5>
            <h5 class="mb-1">@lang('admin.document.document_name'): {{ $Document->document->name }}</h5>
            <embed src="{{ asset('storage/'.$Document->url) }}" width="100%" height="100%" />

            <div class="row">
                 <form action="{{ route('admin.provider.document.update', [$Document->provider->id, $Document->id]) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                 @if($exp_status->doc_required == "YES")
                       <div class="form-group row col-md-4">
							<label for="expires_date" class="col-xs-4 col-form-label">Expiry Date</label>
							<div class="col-xs-8">
							@if(!empty($Document->expires_at))
								<input class="form-control" type="date"  name="expires_date" value="<?php echo date('Y-m-d',strtotime($Document->expires_at)) ?>" >
                              @else        
                                <input class="form-control" type="date"  name="expires_date" value="<?php echo date('Y-m-d') ?>" > 
                              @endif  
                                
							</div>
						</div>
             @else
              <div class="form-group row col-md-4">
			 </div>
              @endif
              
              <div class="col-xs-4">
                  <input class="form-control" type="hidden" name="expire_status" value="{{ $exp_status->doc_required }}" >
                   <button class="btn btn-block btn-primary" type="submit">@lang('admin.provides.approve')</button>
                    </form>
                </div>

                <div class="col-xs-4">
                    <form action="{{ route('admin.provider.document.destroy', [$Document->provider->id, $Document->id]) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-block btn-danger" type="submit">@lang('admin.provides.delete')</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection





<script type="text/javascript">
   
    $('.expires_date').datepicker({ 
        startDate: new Date()
    });
  
</script>
