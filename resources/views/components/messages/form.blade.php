<form action="{{ route('messages.store') }}" method="POST" class="form-horizontal">
    @csrf
    @if ($errors->has('text'))
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            @if($errors->has('text'))
                <strong>Ошибка!</strong> Сообщение не может быть пустым.
            @endif
        </div>
    @endif
    <div class="controls">
        <div class="col-md-12">
            <div class="form-group">
                <label for="message_text">Текст сообщения:</label>
                <textarea id="message_text" name="text" class="form-control"
                          placeholder="Ваше сообщение" rows="4"
                          required="required"></textarea>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <input type="submit" class="btn btn-success btn-send" value="Отправить сообщение"/>
        </div>
    </div>
</form>
