$(function(){
  // msFavoriter
  // https://github.com/TrywaR/msFavoriter
	// - Добавление или удаление избранных товаров
	$(document).on('click', '.msFavoriterToggle', function(){
		msProductId = $(this).parents('.ms2_form').find('[name="id"]').val()
		msFavoriterButton = $(this)

		$.post('/msFavoriter', {'id': msProductId}, function(){
			msFavoriterButton.toggleClass('_active_')
			msFavoriterCount()
		})

		return false
	})

	// - Количество избранных товаров
	function msFavoriterCount(){
		$.post('/msFavoriter', {}, function(data){
			if (data > 0)
				$('#msFavoriter').show().find('strong').text(data)
			else
				$('#msFavoriter').hide()
		})
	}
	msFavoriterCount()
	// msFavoriter x
})
