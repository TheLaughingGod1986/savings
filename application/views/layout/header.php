<!--<div id="desktop-content">-->
<!--<nav class="navbar navbar-inverse-light-grey navbar-fixed-top">-->
<!--    </div>-->
<!---->
<!--<div id="mobile-content">-->
<!--    <nav class="navbar navbar-default navbar-fixed-top">-->
<!--    </div>-->
<!---->
<!--    <nav class="navbar navbar-inverse-light-grey navbar-fixed-top">-->
<!--    <div class="container-fluid">-->
<!--        <div class="navbar-header">-->
<!--            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">-->
<!--                <span class="sr-only">Toggle navigation</span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--            </button>-->
<!--            --><?php
//            $this->load->helper('html'); // Load HTML Helper for img()
//            $img = base_url('img/Servare.png'); // generates text: siteroot/img/servare.png
//            $path = 'home'; // link to home controller index
//            ?>
<!--            <div class="logo-img">-->
<!--                --><?php
//                echo anchor($path, img($img));
//                ?>
<!--            </div>-->
<!--        </div>-->
<!--        <div id="navbar" class="navbar-collapse collapse">-->
<!---->
<!--            <div id="desktop-content">-->
<!--            <ul class="nav navbar-nav navbar-right">-->
<!--                --><?php
//                if ($this->session->userdata('id')) { ?>
<!--                    <li>--><?php //echo anchor('login/logout', 'Logout'); ?><!--</li>-->
<!--                    --><?php
//                }
//
//                else { ?>
<!--                    <li>--><?php //echo anchor('login', 'Login'); ?><!--</li>-->
<!--                    <li>--><?php //echo anchor('login/signup', 'Sign up'); ?><!--</li>-->
<!---->
<!--                    --><?php
//                }
//                ?>
<!--            </ul>-->
<!--                </div>-->
<!---->
<!--            <div id="mobile-content">-->
<!--                <ul class="nav navbar-nav navbar-right">-->
<!--                    --><?php
//                    if ($this->session->userdata('id')) { ?>
<!--                        <li>--><?php //echo anchor('members', 'Your Dashboard'); ?><!--</li>-->
<!--                        <li>--><?php //echo anchor('profile', 'Account Overview'); ?><!--</li>-->
<!--                        <li>--><?php //echo anchor('banks', 'Add Regular Savings'); ?><!--</li>-->
<!--                        <li><a href="#">Notification Accounts<br>(coming soon)</a></li>-->
<!--                        <li><a href="#">Fixed rate Bonds<br>(coming soon)</a></li>-->
<!--                        --><?php
//                    }
//
//                    else { ?>
<!---->
<!--                        --><?php
//                    }
//                    ?>
<!--                </ul>-->
<!--            </div>-->
<!---->
<!--        </div><!--/.nav-collapse -->-->
<!--    </div><!--/.container-fluid -->-->
<!--</nav>-->




<!-- Fixed navbar -->
<div id="desktop-content">
    <nav class="navbar navbar-inverse-light-grey navbar-fixed-top">
</div>
<div id="mobile-content">
    <nav class="navbar navbar-inverse-light-grey navbar-fixed-top">
</div>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../navbar/">Default</a></li>
                <li><a href="../navbar-static-top/">Static top</a></li>
                <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>