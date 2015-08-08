<?php
/**
 * @file
 * Template for ASF Front Page
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>
<div id="wrapper" class="toggled">
    <div id="sidebar-wrapper">
        <img class="logo" src="/sites/default/files/red_dig_in_logo_with_asf-01.png"/>
        <nav>
            <?php $menu = menu_tree('menu-sidebar-menu-desktop');
            $menuhtml = drupal_render($menu);
            print_r($menuhtml);?>
        </nav>
    </div>
    <div id="page-content-wrapper">
        <div class="front container-fluid">
            <div class="row">
                <div class="col-md-12 front-header panel-panel">

                            <?php
                                $view = views_get_view_result('announcments', $display_id = 'announcment_block');
                                $result = count($view);
                                if ($result) { ?>
                                    <div id="announcment">
                                        <div class="alert alert-warning alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                        <?php echo views_embed_view('announcments', $display_id = 'announcment_block'); ?>
                                        </div>
                                    </div>
                    <?php
                                }
                            ?>
                    <div class="panel-panel-inner">
                        <nav class="secondary">
                            <?php $menu = menu_tree('menu-secondary-menu');
                            $menuhtml = drupal_render($menu);
                            print_r($menuhtml);?>
                        </nav>
                        <a href="#menu-toggle" class="btn btn-default hidden-md hidden-lg" id="menu-toggle">☰ Main Menu</a>
                        <?php print $content['main-header']; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 front-concerts panel-panel">
                    <div class="panel-panel-inner">
                        <?php print $content['concerts']; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 front-large-block alpha panel-panel">
                    <div class="panel-panel-inner">
                        <?php print $content['block-alpha']; ?>
                    </div>
                </div>
                <div class="col-md-6 front-large-block bravo panel-panel">
                    <div class="panel-panel-inner">
                        <?php print $content['block-bravo']; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 front-large-block charlie panel-panel">
                    <div class="panel-panel-inner">
                        <?php print $content['block-charlie']; ?>
                    </div>
                </div>

                <div class="col-md-6 front-large-block delta panel-panel">
                    <div class="panel-panel-inner">
                        <?php print $content['block-delta']; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 front-little-block echo panel-panel">
                    <div class="panel-panel-inner">
                        <?php print $content['block-echo']; ?>
                    </div>
                </div>

                <div class="col-md-6 front-little-block foxtrot panel-panel">
                    <div class="panel-panel-inner">
                        <?php print $content['block-foxtrot']; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 front-little-block golf panel-panel">
                    <div class="panel-panel-inner">
                        <?php print $content['block-golf']; ?>
                    </div>
                </div>

                <div class="col-md-6 front-little-block hotel panel-panel">
                    <div class="panel-panel-inner">
                        <?php print $content['block-hotel']; ?>
                    </div>
                </div>
            </div>
            <footer class="hidden-xs hidden-sm">
                <div class="row top-footer">
                    <div class="col-md-3 internal-location panel-panel">
                        <div class="panel-panel-inner">
                            <?php
                            //D7
                            $block = module_invoke('block', 'block_view', '2');
                            print render($block['content']);
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6 internal-newsletter panel-panel">
                        <div class="panel-panel-inner">
                            <?php
                            //D7
                            $block = module_invoke('block', 'block_view', '8');
                            print render($block['content']);
                            ?>
                        </div>
                    </div>
                    <div class="col-md-3 internal-footmenu panel-panel">
                        <div class="panel-panel-inner">
                            <?php
                            //D7
                            $block = module_invoke('block', 'block_view', '7');
                            print render($block['content']);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 internal-sponsors panel-panel">
                        <div class="panel-panel-inner">
                            <?php
                            //D7
                            $block = module_invoke('block', 'block_view', '5');
                            print render($block['content']);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row bottom-footer">
                    <div class="col-md-12 internal-copyright panel-panel">
                        <div class="panel-panel-inner">
                            <?php
                            //D7
                            $block = module_invoke('block', 'block_view', '9');
                            print render($block['content']);
                            ?>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <div class="right-sidebar hidden-sm hidden-md" id="right-sidebar">
        <img src="http://alaskastatefair.org/sites/default/files/styles/panopoly_image_original/public/myfairiconbluegrey.png?itok=5sYFh5--" class="myfair-icon" alt="MyFair">
        <?php
        //D7
        $block = module_invoke('block', 'block_view', '10');
        print render($block['content']);
        ?>
    </div>
</div>
