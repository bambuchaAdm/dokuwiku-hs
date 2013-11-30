<?php
/**
 * Template header, included in the main and detail files
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>

<!-- ********** HEADER ********** -->

<div class="row">
  <div class="span4">
	<div id="mainlogo">
	  <a href="http://hackerspace-krk.pl/"><img src="http://hackerspace-krk.pl/wp-content/themes/hskrk/images/logo.png" alt="Hackerspace Kraków" /></a>
	</div>
  </div>
  <div class="span8">
	<div id="topmenu">
	  <?php if ($conf['useacl']): ?>
        <ul id="menu-gorne-menu" class="nav nav-pills" >
          <?php
             tpl_action('admin', 1, 'li');
             tpl_action('profile', 1, 'li');
             tpl_action('register', 1, 'li');
             tpl_action('login', 1, 'li');
             ?>
        </ul>
      <?php endif ?>
	</div>
  </div>
</div>

<div id="dokuwiki__header"><div class="pad group">
    <div class="headings group">
        <ul class="a11y skip">
            <li><a href="#dokuwiki__content"><?php echo $lang['skip_to_content']; ?></a></li>
        </ul>
        <?php if ($conf['tagline']): ?>
            <p class="claim"><?php echo $conf['tagline']; ?></p>
        <?php endif ?>
    </div>

    <div class="tools group">
        <!-- USER TOOLS -->

        <!-- SITE TOOLS -->
        <div id="dokuwiki__sitetools">
            <h3 class="a11y"><?php echo $lang['site_tools']; ?></h3>
            <?php tpl_searchform(); ?>
            <div class="mobileTools">
                <?php tpl_actiondropdown($lang['tools']); ?>
            </div>
            <ul>
                <?php
                    tpl_action('recent', 1, 'li');
                    tpl_action('media', 1, 'li');
                    tpl_action('index', 1, 'li');
                ?>
            </ul>
        </div>

    </div>

    <!-- BREADCRUMBS -->
    <?php if($conf['breadcrumbs'] || $conf['youarehere']): ?>
        <div class="breadcrumbs">
            <?php if($conf['youarehere']): ?>
                <div class="youarehere"><?php tpl_youarehere() ?></div>
            <?php endif ?>
            <?php if($conf['breadcrumbs']): ?>
                <div class="trace"><?php tpl_breadcrumbs() ?></div>
            <?php endif ?>
        </div>
    <?php endif ?>

    <?php html_msgarea() ?>

    <hr class="a11y" />
</div></div><!-- /header -->
