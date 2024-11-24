<!DOCTYPE html>
<html>
    <head> 
      
        @include('admin.header.headermeta')
          
    </head>
    <body>

        <header class="header">   
            @include('admin.header.header')
        </header>

      <div class="d-flex align-items-stretch">

            {{-- Sidebar --}}
            @include('admin.sidebar.sidebar')
            {{-- sidebar end --}}


            <div class="page-content">

                {{-- page content --}}
                @yield('page-content')
                {{-- end of page content --}}
            

                {{-- footer --}}
                @include('admin.footer.footer')
                {{-- end of footer --}}
            </div>
        
      </div>


      <!-- Footer JavaScript files-->
      @include('admin.footer.footerscript')
      {{-- End of Footer JS Files --}}

    </body>
    
</html>