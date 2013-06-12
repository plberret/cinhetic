
$(document).ready(function() {
		$field = $('#hetic_searchbundle_filmtype_title');
		$field.keyup(function() {
			if($field.val().length > 1){
				$.ajax({
					type: "POST",
					url: $field.parents('form').attr('action'),
					data: { query: $field.val() },
					cache: false,
					success: function(data){
						$list = $('form #ajaxFilm');
						$list.html("<ul></ul>");
						$.each(data, function(){
							$list.find('ul').append('<li>'+this.title+'</li>');
						 });
					}
				});
			}
		});
});