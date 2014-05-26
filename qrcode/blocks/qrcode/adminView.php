<?php
/**
 * Parsimony
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@parsimony-cms.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Parsimony to newer
 * versions in the future. If you wish to customize Parsimony for your
 * needs please refer to http://www.parsimony.mobi for more information.
 *
 * @authors Julien Gras et Benoît Lorillot
 * @copyright  Julien Gras et Benoît Lorillot
 * @version  Release: 1.0
 * @category  Parsimony
 * @package qrcode/blocks
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
?>
<h2><?php echo t('Change the QR code settings', false); ?></h2>
<div class="placeholder" style="display: inline-block;width:450px">
        <label><?php echo t('QR Code Data'); ?> </label>
<input type="text" name="text" value="<?php echo $this->getConfig('text') ?>">
</div>
    <div class="placeholder" style="display: inline-block;width:450px">
        <label><?php echo t('Width'); ?> (px): </label><input type="text" name="width" value="<?php if ($this->getConfig('width')) echo s($this->getConfig('width')); ?>" />
    </div>
    <div class="placeholder" style="display: inline-block;width:450px">
        <label><?php echo t('Height'); ?> (px): </label><input type="text" name="height" value="<?php if ($this->getConfig('height')) echo s($this->getConfig('height')); ?>" />
    </div>