salesorder = {

	index: {
		init: function(){
			this._dataTables();
		},
		_dataTables: function(){
			$('#so-list').DataTable({
				'pageLength'	: 20,
				'sPageButton'	: 'btn btn-default',
				'aoColumnDefs'	: [
					{ 'bSortable' : false, 'aTargets' : [0, 7] }
				]
			});
		}
	}

}