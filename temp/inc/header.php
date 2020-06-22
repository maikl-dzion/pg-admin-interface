
<header id="home-1" ><div class="header-top-area-1 site-header-top-menu" >
    <div class="container-fluid" >

        <div class="" style="margin:0px; padding:0px;" >

<!--            <div class="col-sm-2">-->
<!--                <div class="logo">-->
<!--                    <a href="--><?php //echo SITE_URL;?><!--index.php">Панель управления базой</a></div>-->
<!--            </div>-->

            <div class=""> <div class=""><div class="">

                    <div class="">
                        <ul class="" style="display: flex; list-style: none;">
                            <?php foreach ($topMenu as $fileName => $menu) { ?>
                                <li style=" margin:2px 10px 2px 2px; padding:2px;" >
                                    <a class="top-menu-item"
                                       href="<?php echo SITE_URL . '?page=' . $fileName; ?>" >
                                       <?php echo $menu['title'];?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

            </div></div></div>
        </div>

    </div><!---- container-fluid -->
</div></header>