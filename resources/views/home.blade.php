@extends('default')
@section('content')
<div class="uk-position-relative uk-margin-large-top">
    <form class="uk-text-center" action={{route('rows.store')}} method="POST" enctype="multipart/form-data">
        <h6 class="uk-text-large uk-text-bold">Загрузите файл для его дальнейшей обработки</h6>
        <div class="uk-margin-large-top" uk-margin>
            <div uk-form-custom="target: true">
                <input type="file">
                <input class="uk-input uk-form-width-large" type="text" placeholder="Выберете файл .xls,xlsx" disabled>
            </div>
            <button class="uk-button uk-button-primary">ЗАГРУЗИТЬ</button>
        </div>
    </form>
</div>
@endsection