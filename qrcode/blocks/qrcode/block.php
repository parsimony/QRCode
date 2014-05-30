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

namespace qrcode\blocks;

/**
 * @title qrcode
 * @description displays a qrcode
 * @version 1
 * @browsers all
 * @php_version_min 5.3
 */

class qrcode extends \block {
    
	public function __construct($id) {
        parent::__construct($id);
        $this->setConfig('text', 'http://parsimony.mobi/');
        $this->setConfig('width', '150');
        $this->setConfig('height', '150');   
    }
     
    public function getView() {
        $url = 'https://chart.googleapis.com/chart?';
        $text = urlencode($this->getConfig('text'));
        $width = urlencode($this->getConfig('width'));
        $height = urlencode($this->getConfig('height'));
	ob_start();
        echo '<img src="'.$url.'chs='.$width.'x'.$height.'&amp;cht=qr&amp;chl='.$text.'&amp;choe=UTF-8&amp;chld=L|0" class="noborder" style="text-align: center">';
	return ob_get_clean();
    }

    public function saveConfigs() {
        if(isset($_POST['text'])){
          $this->setConfig('text',$_POST['text']);     
          if(empty($_POST['height'])) $this->setConfig('text','http://parsimony.mobi');
	}
        if(isset($_POST['width'])){
        $this->setConfig('width',$_POST['width']);
        if(empty($_POST['height'])) $this->setConfig('width','150');
        }

        if(isset($_POST['height'])){
        $this->setConfig('height',$_POST['height']);    
        if(empty($_POST['height'])) $this->setConfig('height','150');
        } 
    }


}

?>
