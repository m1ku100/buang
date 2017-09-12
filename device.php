<script>
    $(document).ready(function(){
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $("#index").show();
            $("#desktop").hide();
        }else{
            $("#index").hide();
            location.href = "dekstop/index.php" ;
        }
    });
</script>