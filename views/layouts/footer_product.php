<script src="/template/js_product/jquery.js"></script>
<script src="/template/js_product/jquery.cycle2.min.js"></script>
<script src="/template/js_product/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js_product/bootstrap.min.js"></script>
<script src="/template/js_product/jquery.scrollUp.min.js"></script>
<script src="/template/js_product/price-range.js"></script>
<script src="/template/js_product/jquery.prettyPhoto.js"></script>
<script src="/template/js_product/main.js"></script>
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