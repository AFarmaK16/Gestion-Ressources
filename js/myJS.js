$(document).ready(function(){
    const btn = document.getElementById('up');

    btn.addEventListener('click', () => {

    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    })
    

    })
    $(function(){
        $('.mydropJQ').hover(function() {
        $(this).addClass('open');
        },
        function() {
        $(this).removeClass('open');
        });
        });
    
});

// CLOSE BUTTON



