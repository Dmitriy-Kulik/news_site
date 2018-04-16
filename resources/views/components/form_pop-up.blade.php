<button id="button" class="button btn btn-info btn-lg" type="button" data-toggle="modal" data-target="#myModal" style="display: none;">Показать всплывающее окно</button>

<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <form>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="first_name" class="col-form-label">First name:</label>
                        <input type="text" class="form-control" id="first_name-name">
                    </div>
                    <div class="form-group">
                        <label for="last_name" class="col-form-label">Last name:</label>
                        <input type="text" class="form-control" id="last_name-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" id="message-text">
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Subscribe to news</button>
                </form>
            </div>
        </div>
    </div>
</div>

