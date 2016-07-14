<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;
use Cake\Routing\Router;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#submit_btn').click(function(){
                jQuery.ajax({
                    url:"<?php echo Router::url('/', true) ?>contacts.json",
                    type:"post",
                    data: jQuery('#contact_us_form').serialize(),
					success: function(data) {
						if(data.message == 'Saved') {
						alert(data.message);
							window.location="<?php echo Router::url(['controller' => 'pages','action' => 'home']) ?>";
						}
					},
					error: function() {
						alert('error');
					}
                });
            });
        });
    </script>
</head>
<body class="home">
    <div id="content"><div class="row">
    <h2>Contact Us</h2>
    <?php
    echo $this->Form->create('Contacts',[
        'id' => 'contact_us_form'
    ]);
    echo $this->Form->input('name',[
        'required' => true
    ]);
    echo $this->Form->input('email',[
        'type'      => 'email',
        'required'  => true
    ]);
    echo $this->Form->input('message',[
        'rows'      => 5,
        'required'  => true
    ]);
    echo $this->Form->button('Submit',[
        'id'    => 'submit_btn',
        'type'  => 'button'
    ]);
    echo $this->Form->end();
    ?>
    </div></div>
</body>
</html>
