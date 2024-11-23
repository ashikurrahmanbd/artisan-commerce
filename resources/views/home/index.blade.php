<!DOCTYPE html>
<html>

<head>
    @include('home.header_meta.header_meta')
</head>

<body>

    <div class="hero_area">


        <!-- header section strats -->
        
    
        @include('home.site_header.header')


        <!-- end header section -->



        <!-- slider section -->

        
        @include('home.slider.slider')


        <!-- end slider section -->


    </div>
    <!-- end hero area -->




  <!-- shop section -->

  @include('home.shop.shop')

  <!-- end shop section -->


  <!-- contact section -->

    @include('home.contact.contact')

  <br><br><br>

  <!-- end contact section -->

   

  <!-- info section -->

    @include('home.footer.footer')

  {{-- end of info with footer --}}

</body>

</html>