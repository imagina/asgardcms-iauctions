@extends('layouts.master')

@section('content-header')
    <h1>
        {{ trans('iauctions::auctionproviders.title.edit auctionprovider') }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li><a href="{{ route('admin.iauctions.auction.index') }}">{{ trans('iauctions::auctions.title.auctions') }}</a></li>
        <li class="active">{{ trans('iauctions::auctionproviders.title.edit auctionprovider') }}</li>
    </ol>
@stop

@section('content')
@include('iauctions::admin.auctionproviders.partials.modal-update-status')

    <div class="row">
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                <div class="tab-content">
                    @include('iauctions::admin.auctionproviders.partials.edit-fields')
                    <div class="box-footer">
                        {{--<button type="submit" class="btn btn-primary btn-flat">{{ trans('core::core.button.update') }}</button>--}}
                        <a class="btn btn-danger pull-right btn-flat" href="{{ route('admin.iauctions.auction.index')}}"><i class="fa fa-times"></i> {{ trans('core::core.button.cancel') }}</a>
                    </div>
                </div>
            </div> {{-- end nav-tabs-custom --}}
        </div>
    </div>
    
@stop

@section('footer')
    <a data-toggle="modal" data-target="#keyboardShortcutsModal"><i class="fa fa-keyboard-o"></i></a> &nbsp;
@stop
@section('shortcuts')
    <dl class="dl-horizontal">
        <dt><code>b</code></dt>
        <dd>{{ trans('core::core.back to index') }}</dd>
    </dl>
@stop

@push('js-stack')
    <script type="text/javascript">
        $( document ).ready(function() {
            $(document).keypressAction({
                actions: [
                    { key: 'b', route: "<?= route('admin.iauctions.auctionprovider.index') ?>" }
                ]
            });
        });
    </script>
    <script>
        $( document ).ready(function() {
            $('input[type="checkbox"].flat-blue, input[type="radio"].flat-blue').iCheck({
                checkboxClass: 'icheckbox_flat-blue',
                radioClass: 'iradio_flat-blue'
            });
        });
    </script>
@endpush
