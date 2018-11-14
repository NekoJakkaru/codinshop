<div class="container-fluid">
    <div class="row no-gutters">
        <div class="col-4 pl-5">
            <h3>HELP</h3>
            <?php
                wp_nav_menu(array("menu" => "Footer"));
            ?>
        </div>
        <div class="col-4 pr-5">
            <h3>ABOUT</h3>
            <?php
                $page = get_page_by_title( 'ABOUT' );
                echo $page -> post_content;
            ?>
        </div>
        <div class="col-4">
            <h3>NEWSLETTER</h3>
            <input type="text" name="newsletter" placeholder="Your email...">
            <br>
            <button type="Submit" name="btn_news">SIGN UP</button>
        </div>
    </div>
</div>

</main>
</body>
</html>
