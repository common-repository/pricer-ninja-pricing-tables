(function() {
   tinymce.create('tinymce.plugins.pricerninja', {
      init : function(ed, url) {
         ed.addButton('pricerninja', {
            title : 'Pricing Table',
            image : url + '/pricerninja.png',
            onclick : function() {
				var tableID = prompt("Table ID (from http://pricerninja.com)", "");
				if (tableID != null && tableID != '') {
					ed.execCommand('mceInsertContent', false, '[pricerninja tableid="' + tableID + '"]');
					/*var height = prompt("Height (in pixels)", "500");
					if(height != null && height != '') {
						ed.execCommand('mceInsertContent', false, '[pricerninja tableid="' + tableID + '" height="' + height + '"]');
					}
					else {
						ed.execCommand('mceInsertContent', false, '[pricerninja tableid="' + tableID + '"]');
					}*/
				}
            }
         });
      },
      createControl : function(n, cm) {
         return null;
      },
      getInfo : function() {
         return {
            longname : "Pricing Tables",
            author : 'Common Ninja',
            authorurl : 'https://www.commoninja.com',
            infourl : 'https://www.commoninja.com',
            version : "1.0"
         };
      }
   });
   tinymce.PluginManager.add('pricerninja', tinymce.plugins.pricerninja);
})();