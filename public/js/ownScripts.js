$(function () {
    'use strict';
    $('.modal-edit-department').on('click', function () {
        var $this = $(this);
        var $modalEdit = $('#modal-container-edit-department');
        $modalEdit.find( "input[name='name']" ).val( $this.data('name') );
        $modalEdit.find( "input[name='id']" ).val( $this.data('id') );
    });

    $('.modal-del-department').on('click', function () {
        var $this = $(this);
        var $modalEdit = $('#modal-container-del-department');
        $modalEdit.find( "input[name='id']" ).val( $this.data('id') );
    })
});