<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script> --}}
{{-- <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.bootstrap5.min.js') }}"></script>

{{-- sidebar --}}
<script type='text/Javascript'>
    document.addEventListener("DOMContentLoaded", function(event) {

    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
        console.log(toggleId);
        console.log(navId);
        console.log(bodyId);
        console.log(headerId);
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)
    
    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
        toggle.addEventListener('click', ()=>{
            // show navbar
            nav.classList.toggle('show')
            // change icon
            toggle.classList.toggle('bx-x')
            // add padding to body
            bodypd.classList.toggle('body-pd')
            // add padding to header
            headerpd.classList.toggle('body-pd')
            })
        }
    }
    
    showNavbar('header-toggle','nav-bar','body-pd','header')
    
    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')
    
    function colorLink(){
    if(linkColor){
        linkColor.forEach(l=> l.classList.remove('active'))
            this.classList.add('active')
        }
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink))
    
    // Your code to run since DOM is loaded and ready
    });
</script>