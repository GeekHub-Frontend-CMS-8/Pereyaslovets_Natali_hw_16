<footer>
    <div class="wrap">
        <div class="footer-text">
            <p class="footer-text__about">Created by 2ndself.com, with <i class="fas fa-heart"></i></p>
            <p class="footer-text__about">exclusive for theuncreativelab.com</p>
            <p class="footer-text__copy">&copy 2014 Square. All Rights Reserved.</p>
        </div>
    </div>
</footer>
<script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
<script>$(document).on('click', '#openMenu', function () {
    $(this).toggleClass('active');
    $('.menu-list').toggleClass('open');
});

$(document).on('touchstart' && 'touchend', function (e) {
    var container = $(".header__menu");
    if (container.has(e.target).length === 0) {
        $('#openMenu').removeClass('active');
        $('.menu-list').removeClass('open');
    }
});</script>
<?php wp_footer();?>
</body>
</html>