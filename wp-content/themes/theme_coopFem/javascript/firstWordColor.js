
       $('h2').each(function() {
           var h = $(this).html();
           var index = h.indexOf(' ');
           if(index == -1) {
               index = h.length;
           }
           $(this).html('<span style="color:#8e161c; font-weight:bold;">' + h.substring(0, index) + '</span>' + h.substring(index, h.length));
       });
