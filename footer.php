
<!-- /.row -->
</br>
<div class="seperator-container">
    <div class="seperator-3">
    </div>
</div>
</br>

<!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; Emi Illustrations | 2017 </p>
            <p>
               Built with <3 by Haley Elder
            </p>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</footer>

</div>

<!-- /.container -->

<!-- jQuery -->
<script src="<?php echo get_bloginfo('template_directory'); ?>/jquery.js"></script>


<script>
    var addEvent = function(object, type, callback) {
        if (object == null || typeof(object) == 'undefined') return;
        if (object.addEventListener) {
            object.addEventListener(type, callback, false);
        } else if (object.attachEvent) {
            object.attachEvent("on" + type, callback);
        } else {
            object["on"+type] = callback;
        }
    };
    var fixPostHeight = function() {
        // this will fix the height of absolute posts
        $('.post').addClass('height-fix');
        setTimeout(function(){ $('.post').removeClass('height-fix'); }, 10);
    };
    addEvent(window, "resize", function(event) {
        fixPostHeight();
    });

    fixPostHeight();

</script>

<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--
<script src="<?php echo get_bloginfo('template_directory'); ?>/bootstrap.min.js"></script>-->
<?php wp_footer(); ?>
</body>

</html>
