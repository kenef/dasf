<?php
/**
 * @file
 * Template for ASF Internal Page
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>
<div id="wrapper" class="toggled">
    <div id="sidebar-wrapper">
        <img class="logo" src="http://dev-d7asf.pantheon.io/sites/default/files/styles/panopoly_image_original/public/red_dig_in_logo_with_asf-01.png?itok=T-xwEscu"/>
        <nav>
            <?php $menu = menu_tree('menu-sidebar-menu-desktop');
            $menuhtml = drupal_render($menu);
            print_r($menuhtml);?>
        </nav>
    </div>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 internal-header panel-panel">
                    <div class="panel-panel-inner">
                        <nav class="secondary">
                            <?php $menu = menu_tree('menu-secondary-menu');
                            $menuhtml = drupal_render($menu);
                            print_r($menuhtml);?>
                        </nav>
                        <a href="#menu-toggle" class="btn btn-default hidden-md hidden-lg" id="menu-toggle">☰ Main Menu</a>
                        <?php print $content['header']; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12 internal-content panel-panel nosub">
                <?php print $content['content']; ?>
            </div>
        </div>
        <footer>
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
    <div class="right-sidebar hidden-sm" id="right-sidebar">
        <img src="http://alaskastatefair.org/sites/default/files/styles/panopoly_image_original/public/myfairiconbluegrey.png?itok=5sYFh5--" class="myfair-icon" alt="MyFair">
        <?php
        //D7
        $block = module_invoke('block', 'block_view', '10');
        print render($block['content']);
        ?>
    </div>
</div>
