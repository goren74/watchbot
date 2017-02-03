<!-- Static navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= BASE_URL.'/home/';?>"><?= App::getInstance()->name_website;?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?= BASE_URL.'/home/';?>">Accueil</a></li>
                <li><a href="<?= BASE_URL.'/post/';?>">Posts</a></li>
                <?php if($isLogged): ?>               
                    <!--<li><a href="#">Contact</a></li>-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Panneau administration</li>
                            <li><a href="<?= BASE_URL.'/robotino/';?>">Déplacement robotino</a></li>
                            <!--<li role="separator" class="divider"></li>-->
                        </ul>
                    </li>
                <?php endif; ?>
            </ul> 
            <?php if(!$isLogged): ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= BASE_URL.'/user/register';?>">Register <span class="sr-only"></span></a></li>
                    <li><a href="<?= BASE_URL.'/user/login';?>">Login <span class="sr-only"></span></a></li>
                </ul>
            <?php endif; ?>
                      
            
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
