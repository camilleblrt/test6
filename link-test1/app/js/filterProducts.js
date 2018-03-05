$(window).load(function() {
filterProducts();

    function filterProducts (){
        var value = getParameter('filter');
        if(value === null){
            return;
        }
        if (value !== ".keyboard" && value !== ".accessories" && value !== ".bag" && value !== ".gaming-bag"){
            value="*";
        }
        var jQuerycontainer = jQuery('.portfolio');

        jQuerycontainer.isotope({
            itemSelector: '.item'
        });

        var jQueryoptionSet = jQuery('#options .option-set .selected');
        jQueryoptionSet.removeClass('selected');

        var newFilter = jQuery( "[data-option-value='"+value +"']" );
        newFilter.addClass('selected');

        var options = {},
            key = 'filter',

        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[key] = value;
        if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
            // changes in layout modes need extra logic
            changeLayoutMode(jQuerythis, options)
        } else {
            // otherwise, apply new options
            jQuerycontainer.isotope(options);
        }        
    }
    
    function getParameter(paramName) {
      var searchString = window.location.search.substring(1),
          i, val, params = searchString.split("&");

      for (i=0;i<params.length;i++) {
        val = params[i].split("=");
        if (val[0] == paramName) {
          return unescape(val[1]);
        }
      }
      return null;
    }    

});
