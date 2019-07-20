
<br>
<br>
<br>
<br>
<br>
<br>

<!-- JQUERY -->
<script src="/template/js/vendor/jquery-1.11.2.min.js"></script>
<script src="/template/js/vendor/bootstrap.min.js"></script>
<script src="/template/js/isotope.pkgd.min.js"></script>
<script src="/template/js/owl.carousel.min.js"></script>
<script src="/template/js/wow.min.js"></script>
<script src="/template/js/custom.js"></script>
<script src="/template/js/modal.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>
</body>
</html>
