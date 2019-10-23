<?php
/**
 * Default Theme for Croogo CMS
 *
 * @author Fahad Ibnay Heylaal <contact@fahad19.com>
 * @link http://www.croogo.org
 */

use Cake\Core\Configure;

$siteTitle = Configure::read('Site.title');
$siteTagline = Configure::read('Site.tagline');

?>
<!DOCTYPE html>
<html style='background: #0e0e0e;'>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $this->fetch('title'); ?> - <?= $siteTitle; ?></title>
    <?php
//    echo $this->Meta->meta();
    echo $this->Layout->feed();
    $this->element('stylesheets');
    echo $this->Layout->js();
    echo $this->Blocks->get('css');
    echo $this->Blocks->get('script');
    ?>
</head>
<body data-spy="scroll" data-target="#navbar1" data-offset="60">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
        <div class="<?= $this->Theme->getCssClass('container') ?>">
            <a class="navbar-brand js-scroll-trigger" href="#main">
                <?= $siteTitle ?>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <?=
                    $this->Menus->menu('main', [
                        'dropdown' => true,
                        'dropdownClass' => 'navbar-nav ml-auto',
                        'subTagAttributes' => [
                            'class' => 'nav-item',
                        ],
                        'linkAttributes' => [
                            'class' => 'nav-link js-scroll-trigger',
                        ],
                    ]);
?>
            </div>
        </div>
    </nav>

    <section id="main" class="pt-2">
        <div class="<?= $this->Theme->getCssClass('container') ?>">
            <div class="<?= $this->Theme->getCssClass('row') ?>">
                <div class="col-12">
                    <?php
                        echo $this->Layout->sessionFlash();
                        echo $this->fetch('content');
                    ?>
                </div>
            </div>
        </div>
    </section>

    <footer class='bg-dark text-light fixed-bottom'>
        <div class="<?= $this->Theme->getCssClass('container') ?>">
            <div class="<?= $this->Theme->getCssClass('row') ?>">
                <div class="col-md-12 d-flex align-items-center">
                    <span class="copyright my-2">Copyright &copy; <?= $siteTitle ?> <?= date('Y') ?></span>
                </div>
            </div>
        </div>
    </footer>


    <?php
    $this->element('javascripts');
    echo $this->Blocks->get('scriptBottom');
    ?>
</body>
</html>
