<div class="modal fade" id="modal-container-del-department" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="/department/del" method="POST" role="form">
            {{csrf_field()}}
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        Вы уверены, что хотите удалить отдел?
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" value="" name="id">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Нет
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Да
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>