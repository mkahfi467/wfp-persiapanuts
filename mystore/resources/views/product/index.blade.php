@extends('utama')
@section('isi')
<a class="btn btn-info" data-toggle="modal" href="#disclaimer">Disclaimer</a>
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->id }}</td>
            <td>{{ $d->name }}</td>
            <td>{{ $d->price }}</td>
            <td>{{ $d->category_id }} - {{ $d->category->name }}</td>
            <td>
                <a class="btn btn-success" href="#detail_{{$d->id}}" data-toggle="modal">Show</a>
                <div class="modal fade" id="detail_{{$d->id}}" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">{{$d->name}}</h4>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset('image/'.$d->id.'.jpg') }}" height='200px' />
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- WEEK 7 -->
<div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">DISCLAIMER</h4>
            </div>
            <div class="modal-body">
                Pictures shown are for illustration purpose only. Actual product may vary due to product enhancement.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script>
    function showInfo() {
        $.ajax({
            type: 'POST',
            url: '{{route("products.showInfo")}}',
            data: '_token=<?php echo csrf_token() ?>',
            success: function(data) {
                $('#showinfo').html(data.msg)
            }
        });
    }
</script>
@endsection