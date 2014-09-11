/* Copyright khalil timou 2013 */
(function($)
{
    JQFUNCTIONS =
    {
        settings:
        {
			ajaxImage: 'loading.gif'
        },

        sel: function()
        {
			//button events
			$('select').live('change', function(e) {
				e.preventDefault();
				eval('JQFUNCTIONS.runFunc["'+$(this).attr("id")+'"]();');
			});
        },
		 cli: function()
        {
			//button events
			$('a').live('click', function(e) {
				e.preventDefault();
				eval('JQFUNCTIONS.runFunc["'+$(this).attr("id")+'"]();');
			});
        },
		
		

        runFunc:
        {

            "domainetab": function()
            {
				//console.log('running ajaxphp...');
				$('#scat').html('<img src="pagi/loader.gif" />');
				$.ajax({
				  url: 'ajax.php',
				  type: 'POST',
				   data:'val_sel='+document.getElementById( 'domainetab' ).value,
				 
				
				  success: function(data) {
					//called when successful
					$('#scat').html(data);
				  },
				  error: function(e) {
					//called when there is an error
					$('#scat').html(e.message);
				  }
				});	
				
				
				
            },
			
            "categann": function()
            {
				//console.log('running ajaxphp...');
				$('#souscategoriesann').html('<img src="pagi/loader.gif" />');
				$.ajax({
				  url: 'pagi/sous-categorie-annonce.php',
				  type: 'POST',
				   data:'val_sel='+document.getElementById( 'categann' ).value,
				 
				
				  success: function(data) {
					//called when successful
					$('#souscategoriesann').html(data);
				  },
				  error: function(e) {
					//called when there is an error
					$('#souscategoriesann').html(e.message);
				  }
				});	
				
				
				
            },
			
			 "annsouscategorie": function()
            {
				//console.log('running ajaxphp...');
				$('#details').html('<img src="pagi/loader.gif" />');
				$.ajax({
				  url: 'pagi/details.php',
				  type: 'POST',
				   data:'val_sel='+document.getElementById( 'annsouscategorie' ).value,
				 
				
				  success: function(data) {
					//called when successful
					$('#details').html(data);
				  },
				  error: function(e) {
					//called when there is an error
					$('#details').html(e.message);
				  }
				});	
				
				
				
            },
			
			 "rechannonce": function()
            {
				//console.log('running ajaxphp...');
				$('#rechsousannonce').html('<img src="pagi/loader.gif" />');
				$.ajax({
				  url: 'pagi/rech-sous-categorie-annonce.php',
				  type: 'POST',
				   data:'val_sel='+document.getElementById( 'rechannonce' ).value,
				 
				
				  success: function(data) {
					//called when successful
					$('#rechsousannonce').html(data);
				  },
				  error: function(e) {
					//called when there is an error
					$('#rechsousannonce').html(e.message);
				  }
				});	
				
				
				
            },
			
			 "rechannsouscategorie": function()
            {
				//console.log('running ajaxphp...');
				$('#detailsRechAnnonce').html('<img src="pagi/loader.gif" />');
				$.ajax({
				  url: 'pagi/detailsrechercheannonce.php',
				  type: 'POST',
				   data:'val_sel='+document.getElementById( 'rechannsouscategorie' ).value,
				 
				
				  success: function(data) {
					//called when successful
					$('#detailsRechAnnonce').html(data);
				  },
				  error: function(e) {
					//called when there is an error
					$('#detailsRechAnnonce').html(e.message);
				  }
				});
            }

			
			
        }

    }

})(jQuery);