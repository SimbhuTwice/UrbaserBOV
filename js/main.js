 $(document).ready(function () {
          $('.bin-in:contains(-),.bin-out:contains(-)').css( 'color','grey' );
           $('.bin-in:contains(8)').css( 'color','green' );
           $('.bin-out:contains(8)').css( 'color','orange' );
           $('.bin-status:contains(8)').addClass( 'bg-green' );
           $('.status-row:contains(-)').addClass( 'hidden' );
           $('.fa:contains(8)').removeClass('fa-remove').addClass( 'fa-check' );
           $('.checkbox-bg.eight .fa:contains(8)').removeClass('fa-remove').addClass( 'fa-check' );
           $('.checkbox-bg.seven .fa:contains(8),.checkbox-bg.seven .fa:contains(7)').removeClass('fa-remove').addClass( 'fa-check' );
           $('.checkbox-bg.six .fa:contains(8),.checkbox-bg.six .fa:contains(7),.checkbox-bg.six .fa:contains(6)').removeClass('fa-remove').addClass( 'fa-check' );
           $('.checkbox-bg.five .fa:contains(8),.checkbox-bg.five .fa:contains(7),.checkbox-bg.five .fa:contains(6),.checkbox-bg.five .fa:contains(5)').removeClass('fa-remove').addClass( 'fa-check' );
           $('.checkbox-bg.four .fa:contains(8),.checkbox-bg.four .fa:contains(7),.checkbox-bg.four .fa:contains(6),.checkbox-bg.four .fa:contains(5),.checkbox-bg.four .fa:contains(4)').removeClass('fa-remove').addClass( 'fa-check' );
           $('.checkbox-bg.three .fa:contains(8),.checkbox-bg.three .fa:contains(7),.checkbox-bg.three .fa:contains(6),.checkbox-bg.three .fa:contains(5),.checkbox-bg.three .fa:contains(4),.checkbox-bg.three .fa:contains(3)').removeClass('fa-remove').addClass( 'fa-check' );
           $('.checkbox-bg.two .fa:contains(8),.checkbox-bg.two .fa:contains(7),.checkbox-bg.two .fa:contains(6),.checkbox-bg.two .fa:contains(5),.checkbox-bg.two .fa:contains(4),.checkbox-bg.two .fa:contains(3),.checkbox-bg.two .fa:contains(2)').removeClass('fa-remove').addClass( 'fa-check' );
           $('.checkbox-bg.one .fa:contains(8),.checkbox-bg.one .fa:contains(7),.checkbox-bg.one .fa:contains(6),.checkbox-bg.one .fa:contains(5),.checkbox-bg.one .fa:contains(4),.checkbox-bg.one .fa:contains(3),.checkbox-bg.one .fa:contains(2),.checkbox-bg.one .fa:contains(1)').removeClass('fa-remove').addClass( 'fa-check' );
           

  });