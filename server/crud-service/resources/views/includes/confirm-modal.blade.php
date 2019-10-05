<!-- CANCEL ORDER MODAL -->
<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>{{ $message }}</p>
            </div>
            <div class="modal-footer">
                <form action="{{ $path }}" id="delete_form" method="POST">
                    @csrf
                    {{ $method }}
                    <button type="button" class="btn btn-outline-brand" data-dismiss="modal">Cancel</button>
                    <button type="submit" id="confirm" class="btn btn-brand">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{--<div class="modal fade" tabindex="-1" role="dialog" id="{{ $id }}">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
{{--                <h4 class="modal-title">{{ $title }}</h4>--}}
{{--            </div>--}}

{{--            <div class="modal-body">--}}
{{--                <div class="row">--}}
{{--                    <form action="{{ $path }}" id="delete_form" method="POST">--}}
{{--                        {{ $method }}--}}
{{--                        @csrf--}}
{{--                        <div class="form-body">--}}
{{--                            <!-- START OF MODAL BODY -->--}}
{{--                            <div class="container margin-bottom-10">--}}
{{--                                <label>{{ $message }}</label>--}}
{{--                            </div>--}}
{{--                            <!-- MODAL FOOTER -->--}}
{{--                            <div class="modal-footer">--}}
{{--                                <button type="button" class="btn default" data-dismiss="modal">Cancel</button>--}}
{{--                                <button id="edit_save" type="submit" name="edit_category" class="btn btn-primary">--}}
{{--                                    Confirm--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <!-- END OF MODAL FOOTER -->--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- /.modal-content -->--}}
{{--    </div>--}}
{{--    <!-- /.modal-dialog -->--}}
{{--</div>--}}
{{--<!--END OF CANCEL ORDER MODAL-->--}}
