<?php 
use Cake\ORM\TableRegistry;

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('main_booking.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <!-- Navigation -->
    <header>
        <div class="logo">
        </div>    
            <nav>
            	<ul>
            		<li>
		                <div class="findservices_dropdown">
						  <button class="findservices_dropbtn">find services</button>
						  <div class="dropdown-content-findservices">
						    <a href="#">Link 1</a>
						    <a href="#">Link 2</a>
						    <a href="#">Link 3</a>
						  </div>
						</div>
					</li>
					<li>
						<div class="yourservices_dropdown">
						  <button class="yourservices_dropbtn">your services</button>
						  <div class="dropdown-content-yourservices">
						    <a href="#">Link 1</a>
						    <a href="#">Link 2</a>
						    <a href="#">Link 3</a>
						  </div>
						</div>
					</li>
						  <li><button class="button">profile</button></li>
						  <li><button class="button">settings</button></li>
						  <li><button class="button">help</button></li>
				  </ul>
            </nav>
        
        </header>

	


    <div class="container">

            <!-- Left Column -->
            <div class="left-col">
            <?php
            	$query = TableRegistry::get('service')->find();
            	foreach($query as $service) :
            ?>
                <div class="service">
                    <div class="service_title">
                        <h1><a href="#"><?php echo $service->Name; ?></a></h1>
                        <h2><a href="#"><?php echo $service->Type; ?></a></h2>
                    </div>
                    <div class="service_content">
	                    <div class="service_description">
	                        <p><?php echo $service->Description; ?></p>
	                    </div>
	                    <div class="service_features">
	                        <h2>FEATURES</h2>
	                        <ul>
	                            <li>Feature</li>
	                            <li>Feature</li>
	                            <li>Feature</li>
	                            <li>Feature</li>
	                            <li>Feature</li>
	                        </ul>
	                    </div>
                    </div>
                    <div class="price">
                        <p><?php echo $service->Price . '$ /'. $service->Rate; ?></p>
                	</div>
                </div>
                <?php 
				endforeach;
				?>
                
            </div><!--/Left Column-->

            <!-- Right Column -->
            <div class="right-col">
            </div><!--/Right Column -->

    </div><!--/container-fluid-->
    <?php ?>
	
    <footer>

    </footer>

	
        <!-- jQuery -->
        <script src="js/jquery-1.11.3.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
	
</body>
</html>
