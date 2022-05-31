<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from byrushan.com/projects/material-admin/app/2.6/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Nov 2020 14:30:15 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href=<?= base_url('assets/vendors/material-design-iconic-font/css/material-design-iconic-font.min.css')?>>
        <link rel="stylesheet" href=<?= base_url('assets/vendors/animate.css/animate.min.css')?>>
        <link rel="stylesheet" href=<?= base_url('assets/vendors/jquery-scrollbar/jquery.scrollbar.css')?>>
        <link rel="stylesheet" href=<?= base_url('assets/vendors/fullcalendar/fullcalendar.min.css')?>>

        <!-- App styles -->
        <link rel="stylesheet" href=<?= base_url('assets/css/app.min.css')?>>
    </head>

    <body data-ma-theme="green">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>

            <header class="header">
                <div class="navigation-trigger hidden-xl-up" data-ma-action="aside-open" data-ma-target=".sidebar">
                    <div class="navigation-trigger__inner">
                        <i class="navigation-trigger__line"></i>
                        <i class="navigation-trigger__line"></i>
                        <i class="navigation-trigger__line"></i>
                    </div>
                </div>

                <div class="header__logo hidden-sm-down">
                    <h1><a href="index.html">CognitveTraining</a></h1>
                </div>

                <form class="search">
                    <div class="search__inner">
                        <input type="text" class="search__text" placeholder="Search for people, files, documents...">
                        <i class="zmdi zmdi-search search__helper" data-ma-action="search-close"></i>
                    </div>
                </form>

                <ul class="top-nav">
                    <li class="hidden-xl-up"><a href="#" data-ma-action="search-open"><i class="zmdi zmdi-search"></i></a></li>

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-email"></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                            <div class="listview listview--hover">
                                <div class="listview__header">
                                    Messages

                                    <div class="actions">
                                        <a href="messages.html" class="actions__item zmdi zmdi-plus"></a>
                                    </div>
                                </div>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            David Belle <small>12:01 PM</small>
                                        </div>
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Jonathan Morris
                                            <small>02:45 PM</small>
                                        </div>
                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Fredric Mitchell Jr.
                                            <small>08:21 PM</small>
                                        </div>
                                        <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Glenn Jecobs
                                            <small>08:43 PM</small>
                                        </div>
                                        <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Bill Phillips
                                            <small>11:32 PM</small>
                                        </div>
                                        <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                                    </div>
                                </a>

                                <a href="#" class="view-more">View all messages</a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown top-nav__notifications">
                        <a href="#" data-toggle="dropdown" class="top-nav__notify">
                            <i class="zmdi zmdi-notifications"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                            <div class="listview listview--hover">
                                <div class="listview__header">
                                    Notifications

                                    <div class="actions">
                                        <a href="#" class="actions__item zmdi zmdi-check-all" data-ma-action="notifications-clear"></a>
                                    </div>
                                </div>

                                <div class="listview__scroll scrollbar-inner">
                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">David Belle</div>
                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Jonathan Morris</div>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Fredric Mitchell Jr.</div>
                                            <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Glenn Jecobs</div>
                                            <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Bill Phillips</div>
                                            <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">David Belle</div>
                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Jonathan Morris</div>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </a>

                                    <a href="#" class="listview__item">
                                        <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Fredric Mitchell Jr.</div>
                                            <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="p-1"></div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown hidden-xs-down">
                        <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-check-circle"></i></a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="listview listview--hover">
                                <div class="listview__header">Tasks</div>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading mb-2">HTML5 Validation Report</div>

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading mb-2">Google Chrome Extension</div>

                                        <div class="progress">
                                            <div class="progress-bar bg-warning" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading mb-2">Social Intranet Projects</div>

                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading mb-2">Bootstrap Admin Template</div>

                                        <div class="progress">
                                            <div class="progress-bar bg-info" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading mb-2">Youtube Client App</div>

                                        <div class="progress">
                                            <div class="progress-bar bg-danger" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="view-more">View all tasks</a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown hidden-xs-down">
                        <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-apps"></i></a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="row app-shortcuts">
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zmdi zmdi-calendar"></i>
                                    <small class="">Calendar</small>
                                    <span class="app-shortcuts__helper bg-red"></span>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zmdi zmdi-file-text"></i>
                                    <small class="">Files</small>
                                    <span class="app-shortcuts__helper bg-blue"></span>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zmdi zmdi-email"></i>
                                    <small class="">Email</small>
                                    <span class="app-shortcuts__helper bg-teal"></span>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zmdi zmdi-trending-up"></i>
                                    <small class="">Reports</small>
                                    <span class="app-shortcuts__helper bg-blue-grey"></span>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zmdi zmdi-view-headline"></i>
                                    <small class="">News</small>
                                    <span class="app-shortcuts__helper bg-orange"></span>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="#">
                                    <i class="zmdi zmdi-image"></i>
                                    <small class="">Gallery</small>
                                    <span class="app-shortcuts__helper bg-light-green"></span>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown hidden-xs-down">
                        <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-item theme-switch">
                                Theme Switch

                                <div class="btn-group btn-group-toggle btn-group--colors" data-toggle="buttons">
                                    <label class="btn bg-green active"><input type="radio" value="green" autocomplete="off" checked></label>
                                    <label class="btn bg-blue"><input type="radio" value="blue" autocomplete="off"></label>
                                    <label class="btn bg-red"><input type="radio" value="red" autocomplete="off"></label>
                                    <label class="btn bg-orange"><input type="radio" value="orange" autocomplete="off"></label>
                                    <label class="btn bg-teal"><input type="radio" value="teal" autocomplete="off"></label>

                                    <div class="clearfix mt-2"></div>

                                    <label class="btn bg-cyan"><input type="radio" value="cyan" autocomplete="off"></label>
                                    <label class="btn bg-blue-grey"><input type="radio" value="blue-grey" autocomplete="off"></label>
                                    <label class="btn bg-purple"><input type="radio" value="purple" autocomplete="off"></label>
                                    <label class="btn bg-indigo"><input type="radio" value="indigo" autocomplete="off"></label>
                                    <label class="btn bg-brown"><input type="radio" value="brown" autocomplete="off"></label>
                                </div>
                            </div>
                            <a href="#" class="dropdown-item">Fullscreen</a>
                            <a href="#" class="dropdown-item">Clear Local Storage</a>
                        </div>
                    </li>

                    <li class="hidden-xs-down">
                        <a href="#" data-ma-action="aside-open" data-ma-target=".chat" class="top-nav__notify">
                            <i class="zmdi zmdi-comment-alt-text"></i>
                        </a>
                    </li>
                </ul>
            </header>

            <aside class="sidebar">
                <div class="scrollbar-inner">
                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
                            <div>
                                <div class="user__name">Malinda Hollaway</div>
                                <div class="user__email">malinda-h@gmail.com</div>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">View Profile</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </div>

                    <ul class="navigation">
                        <li class="navigation__active"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>

                        <li class="navigation__sub">
                            <a href="#"><i class="zmdi zmdi-view-week"></i> Variants</a>

                            <ul>
                                <li><a href="hidden-sidebar.html">Hidden Sidebar</a></li>
                                <li><a href="boxed-layout.html">Boxed Layout</a></li>
                                <li><a href="hidden-sidebar-boxed-layout.html">Boxed Layout with Hidden Sidebar</a></li>
                                <li><a href="top-navigation.html">Top Navigation</a></li>
                            </ul>
                        </li>

                        <li><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>

                        <li><a href="widgets.html"><i class="zmdi zmdi-widgets"></i> Widgets</a></li>

                        <li class="navigation__sub">
                            <a href="#"><i class="zmdi zmdi-view-list"></i> Tables</a>

                            <ul>
                                <li><a href="html-table.html">HTML Table</a></li>
                                <li><a href="data-table.html">Data Table</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub">
                            <a href="#"><i class="zmdi zmdi-collection-text"></i> Forms</a>

                            <ul>
                                <li><a href="form-elements.html">Basic Form Elements</a></li>
                                <li><a href="form-components.html">Form Components</a></li>
                                <li><a href="form-layouts.html">Form Layouts</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub">
                            <a href="#"><i class="zmdi zmdi-swap-alt"></i> User Interface</a>

                            <ul>
                                <li><a href="colors.html">Colors</a></li>
                                <li><a href="css-animations.html">CSS Animations</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="icons.html">Icons</a></li>
                                <li><a href="listview.html">Listview</a></li>
                                <li><a href="toolbars.html">Toolbars</a></li>
                                <li><a href="cards.html">Cards</a></li>
                                <li><a href="alerts.html">Alerts</a></li>
                                <li><a href="badges.html">Badges</a></li>
                                <li><a href="breadcrumbs.html">Bredcrumbs</a></li>
                                <li><a href="jumbotron.html">Jumbotron</a></li>
                                <li><a href="navs.html">Navs</a></li>
                                <li><a href="pagination.html">Pagination</a></li>
                                <li><a href="progress.html">Progress</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub">
                            <a href="#"><i class="zmdi zmdi-group-work"></i> Javascript Components</a>

                            <ul class="navigation__sub">
                                <li><a href="carousel.html">Carousel</a></li>
                                <li><a href="collapse.html">Collapse</a></li>
                                <li><a href="dropdowns.html">Dropdowns</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="popover.html">Popover</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                                <li><a href="tooltips.html">Tooltips</a></li>
                                <li><a href="notifications-alerts.html">Notifications & Alerts</a></li>
                                <li><a href="tree-view.html">Tree View</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub">
                            <a href="#"><i class="zmdi zmdi-trending-up"></i> Charts</a>

                            <ul>
                                <li><a href="flot-charts.html">Flot</a></li>
                                <li><a href="other-charts.html">Other Charts</a></li>
                            </ul>
                        </li>

                        <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>

                        <li><a href="photo-gallery.html"><i class="zmdi zmdi-image"></i> Photo Gallery</a></li>

                        <li class="navigation__sub">
                            <a href="#"><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>

                            <ul>
                                <li><a href="profile-about.html">Profile</a></li>
                                <li><a href="messages.html">Messages</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="new-contact.html">New Contact</a></li>
                                <li><a href="groups.html">Groups</a></li>
                                <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="todo-lists.html">Todo Lists</a></li>
                                <li><a href="notes.html">Notes</a></li>
                                <li><a href="search-results.html">Search Results</a></li>
                                <li><a href="issue-tracker.html">Issue Tracker</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="questions-answers.html">Questions & Answers</a></li>
                                <li><a href="questions-answers-details.html">Questions & Answers Details</a></li>
                                <li><a href="login.html">Login & SignUp</a></li>
                                <li><a href="lockscreen.html">Lockscreen</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="empty.html">Empty Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>

            <aside class="chat">
                <div class="chat__header">
                    <h2 class="chat__title">Chat <small>Currently 20 contacts online</small></h2>

                    <div class="chat__search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                </div>

                <div class="scrollbar-inner">
                    <div class="listview listview--hover chat__buddies">
                        <a class="listview__item chat__available">
                            <img src="demo/img/profile-pics/7.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>hey, how are you doing.</p>
                            </div>
                        </a>

                        <a class="listview__item chat__available">
                            <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>hmm...</p>
                            </div>
                        </a>

                        <a class="listview__item chat__away">
                            <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>all good</p>
                            </div>
                        </a>

                        <a class="listview__item">
                            <img src="demo/img/profile-pics/8.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>morbi leo risus portaac consectetur vestibulum at eros.</p>
                            </div>
                        </a>

                        <a class="listview__item">
                            <img src="demo/img/profile-pics/6.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>fusce dapibus</p>
                            </div>
                        </a>

                        <a class="listview__item chat__busy">
                            <img src="demo/img/profile-pics/9.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>cras mattis consectetur purus sit amet fermentum.</p>
                            </div>
                        </a>
                    </div>
                </div>

                <a href="messages.html" class="btn btn--action btn-danger"><i class="zmdi zmdi-plus"></i></a>
            </aside>

            <section class="content">
                <header class="content__title">
                    <h1>Dashboard</h1>
                    <small>Welcome to the unique Material Design admin web app experience!</small>

                    <div class="actions">
                        <a href="#" class="actions__item zmdi zmdi-trending-up"></a>
                        <a href="#" class="actions__item zmdi zmdi-check-all"></a>

                        <div class="dropdown actions__item">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">Refresh</a>
                                <a href="#" class="dropdown-item">Manage Widgets</a>
                                <a href="#" class="dropdown-item">Settings</a>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="row quick-stats">
                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item bg-blue">
                            <div class="quick-stats__info">
                                <h2>987,459</h2>
                                <small>Total Website Traffics</small>
                            </div>

                            <div class="quick-stats__chart sparkline-bar-stats">6,4,8,6,5,6,7,8,3,5,9,5</div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item bg-amber">
                            <div class="quick-stats__info">
                                <h2>356,785K</h2>
                                <small>Total Website Impressions</small>
                            </div>

                            <div class="quick-stats__chart sparkline-bar-stats">4,7,6,2,5,3,8,6,6,4,8,6</div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item bg-purple">
                            <div class="quick-stats__info">
                                <h2>$58,778</h2>
                                <small>Total Online Sales</small>
                            </div>

                            <div class="quick-stats__chart sparkline-bar-stats">9,4,6,5,6,4,5,7,9,3,6,5</div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item bg-red">
                            <div class="quick-stats__info">
                                <h2>214</h2>
                                <small>Total Support Tickets</small>
                            </div>

                            <div class="quick-stats__chart sparkline-bar-stats">5,6,3,9,7,5,4,6,5,6,4,9</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sales Statistics</h4>
                                <h6 class="card-subtitle">Vestibulum purus quam scelerisque, mollis nonummy metus</h6>

                                <div class="flot-chart flot-curved-line"></div>
                                <div class="flot-chart-legends flot-chart-legends--curved"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Growth Rate</h4>
                                <h6 class="card-subtitle">Commodo luctus nisi erat porttitor ligula eget lacinia odio semnec elit</h6>

                                <div class="flot-chart flot-line"></div>
                                <div class="flot-chart-legends flot-chart-legends--line"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-columns>
                    <div class="card">
                        <img class="card-img-top" src="demo/img/widgets/note.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Pellentesque Ligula Fringilla</h4>
                            <h6 class="card-subtitle">by Malinda Hollaway on 19th June 2015 at 09:10 AM</h6>

                            <p>Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra.</p>
                            <a href="#" class="view-more text-left">View Article...</a>
                        </div>
                    </div>

                    <div class="card widget-visitors">
                        <div class="card-body">
                            <h4 class="card-title">Realtime Visitors</h4>
                            <h6 class="card-subtitle">Nullam dolor isnibh ultricies vehicula adipiscing</h6>

                            <div class="widget-visitors__stats">
                                <div>
                                    <strong>23528</strong>
                                    <small>Visitor for last 24 hours</small>
                                </div>
                                <div>
                                    <strong>746</strong>
                                    <small>Visitors last 30 minutes</small>
                                </div>
                            </div>

                            <div class="widget-visitors__map map-visitors"></div>
                        </div>

                        <div class="listview listview--striped">
                            <div class="listview__item">
                                <div class="listview__content">
                                    <p>Sunday, September 4, 21:44:02 (2 Mins 56 Seconds)</p>

                                    <div class="listview__attrs">
                                        <span><img class="widget-visitors__country" src="demo/img/flags/United_States_of_America.png" alt=""> United States</span>
                                        <span>Firefox</span>
                                        <span>Mac OSX</span>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="listview__content">
                                    <p>Sunday, September 4, 20:21:01 (5 Mins 12 Seconds)</p>

                                    <div class="listview__attrs">
                                        <span><img class="widget-visitors__country" src="demo/img/flags/Australia.png" alt=""> Australia</span>
                                        <span>Chrome</span>
                                        <span>Android</span>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="listview__content">
                                    <p>Sunday, September 4, 20:21:10 (10 Mins 43 Seconds)</p>

                                    <div class="listview__attrs">
                                        <span><img class="widget-visitors__country" src="demo/img/flags/Brazil.png" alt=""> Brazil</span>
                                        <span>Edge</span>
                                        <span>Windows</span>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="listview__content">
                                    <p>Sunday, September 4, 20:59:04 (1 Min 02 Seconds)</p>

                                    <div class="listview__attrs">
                                        <span><img class="widget-visitors__country" src="demo/img/flags/South_Korea.png" alt=""> South Korea</span>
                                        <span>Chrome</span>
                                        <span>Android</span>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="listview__content">
                                    <p>Sunday, September 4, 20:58:12 (3 Min 44 Seconds)</p>

                                    <div class="listview__attrs">
                                        <span><img class="widget-visitors__country" src="demo/img/flags/Japan.png" alt=""> Japan</span>
                                        <span>Chrome</span>
                                        <span>Windows</span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-2"></div>
                        </div>
                    </div>

                    <div class="card card--inverse widget-past-days">
                        <div class="card-body">
                            <h4 class="card-title">For the past 30 days</h4>
                            <h6 class="card-subtitle">Pellentesque ornare sem lacinia quam</h6>
                        </div>

                        <div class="widget-past-days__main">
                            <div class="flot-chart flot-chart--sm flot-past-days"></div>
                        </div>

                        <div class="listview listview--inverse listview--striped">
                            <div class="listview__item">
                                <div class="widget-past-days__info">
                                    <small>Page Views</small>
                                    <h3>47,896,536</h3>
                                </div>

                                <div class="widget-past-days__chart hidden-sm">
                                    <div class="sparkline-bar-stats">6,9,5,6,3,7,5,4,6,5,6,4,2,5,8,2,6,9</div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="widget-past-days__info">
                                    <small>Site Visitors</small>
                                    <h3>24,456,799</h3>
                                </div>

                                <div class="widget-past-days__chart hidden-sm">
                                    <div class="sparkline-bar-stats">5,7,2,5,2,8,6,7,6,5,3,1,9,3,5,8,2,4</div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="widget-past-days__info">
                                    <small>Total Clicks</small>
                                    <h3>13,965</h3>
                                </div>

                                <div class="widget-past-days__chart hidden-sm">
                                    <div class="sparkline-bar-stats">5,7,2,5,2,8,6,7,6,5,3,1,9,3,5,8,2,4</div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="widget-past-days__info">
                                    <small>Total Returns</small>
                                    <h3>198</h3>
                                </div>

                                <div class="widget-past-days__chart hidden-sm">
                                    <div class="sparkline-bar-stats">3,9,1,3,5,6,7,6,8,2,5,2,7,5,6,7,6,8</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card widget-calendar">
                        <div class="widget-calendar__header">
                            <div class="widget-calendar__year"></div>
                            <div class="widget-calendar__day"></div>

                            <div class="actions actions--inverse">
                                <a href="calendar.html" class="actions__item"><i class="zmdi zmdi-refresh-alt"></i></a>
                                <a href="calendar.html" class="actions__item"><i class="zmdi zmdi-plus"></i></a>
                            </div>
                        </div>

                        <div class="widget-calendar__body"></div>
                    </div>

                    <div class="card card--inverse widget-pie">
                        <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                            <div class="easy-pie-chart" data-percent="50" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                                <span class="easy-pie-chart__value">92</span>
                            </div>
                            <div class="widget-pie__title">Email<br> Scheduled</div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                            <div class="easy-pie-chart" data-percent="11" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                                <span class="easy-pie-chart__value">11</span>
                            </div>
                            <div class="widget-pie__title">Email<br> Bounced</div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                            <div class="easy-pie-chart" data-percent="52" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                                <span class="easy-pie-chart__value">52</span>
                            </div>
                            <div class="widget-pie__title">Email<br> Opened</div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                            <div class="easy-pie-chart" data-percent="44" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                                <span class="easy-pie-chart__value">44</span>
                            </div>
                            <div class="widget-pie__title">Storage<br>Remaining</div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                            <div class="easy-pie-chart" data-percent="78" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                                <span class="easy-pie-chart__value">78</span>
                            </div>
                            <div class="widget-pie__title">Web Page<br> Views</div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                            <div class="easy-pie-chart" data-percent="32" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                                <span class="easy-pie-chart__value">32</span>
                            </div>
                            <div class="widget-pie__title">Server<br> Processing</div>
                        </div>
                    </div>

                    <div class="card todo">
                        <div class="card-body">
                            <h4 class="card-title">Todo lists</h4>
                            <h6 class="card-subtitle">Venenatis portauam Inceptos ameteiam</h6>
                        </div>

                        <div class="listview">
                            <div class="listview__item">
                                <div class="checkbox checkbox--char todo__item">
                                    <input type="checkbox" id="todo-1">
                                    <label for="todo-1" class="bg-red checkbox__char">F</label>

                                    <div class="listview__content">
                                        <div class="listview__heading">Fivamus sagittis lacus vel augue laoreet rutrum faucibus dolor</div>
                                        <p>Today at 8.30 AM</p>
                                    </div>

                                    <div class="listview__attrs">
                                        <span>#Messages</span>
                                        <span>!!!</span>
                                    </div>
                                </div>

                                <div class="actions listview__actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Mark as completed</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="checkbox checkbox--char todo__item">
                                    <input type="checkbox" id="todo-2">
                                    <label class="checkbox__char bg-light-blue" for="todo-2">N</label>

                                    <div class="listview__content">
                                        <div class="listview__heading">Nullam id dolor id nibh ultricies vehicula ut id elit</div>
                                        <p>Today at 12.30 PM</p>
                                    </div>

                                    <div class="listview__attrs">
                                        <span>#Clients</span>
                                        <span>!!</span>
                                    </div>
                                </div>

                                <div class="actions listview__actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Mark as completed</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="checkbox checkbox--char todo__item">
                                    <input  type="checkbox" id="todo-3">
                                    <label class="checkbox__char bg-amber" for="todo-3">C</label>

                                    <div class="listview__content">
                                        <div class="listview__heading">Cras mattis consectetur purus sit amet fermentum</div>
                                        <p>Tomorrow at 10.30 AM</p>
                                    </div>

                                    <div class="listview__attrs">
                                        <span>#Clients</span>
                                        <span>!!</span>
                                    </div>
                                </div>

                                <div class="actions listview__actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Mark as completed</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="checkbox checkbox--char todo__item">
                                    <input  type="checkbox" id="todo-4">
                                    <label class="checkbox__char bg-lime" for="todo-4">I</label>

                                    <div class="listview__content">
                                        <div class="listview__heading">Integer posuere erat a ante venenatis dapibus posuere velit aliquet</div>
                                        <small>05/08/2017 at 08.00 AM</small>
                                    </div>

                                    <div class="listview__attrs">
                                        <span>#Server</span>
                                        <span>!</span>
                                    </div>
                                </div>

                                <div class="actions listview__actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Mark as completed</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="checkbox checkbox--char todo__item">
                                    <input  type="checkbox" id="todo-5">
                                    <label class="checkbox__char bg-purple" for="todo-5">P</label>

                                    <div class="listview__content">
                                        <div class="listview__heading">Praesent commodo cursus magnavel scelerisque nisl consectetur</div>
                                        <small>10/08/2016 at 04.00 AM</small>
                                    </div>

                                    <div class="listview__attrs">
                                        <span>#Server</span>
                                        <span>!!!</span>
                                    </div>
                                </div>

                                <div class="actions listview__actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Mark as completed</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="todo-lists.html" class="view-more">View More</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Server Process Data</h4>
                            <h6 class="card-subtitle">Fusce dapibus tellus cursus commodo tortor</h6>

                            <div class="flot-chart flot-dynamic"></div>
                        </div>
                    </div>
                </div>

                <footer class="footer hidden-xs-down">
                    <p>© Material Admin Responsive. All rights reserved.</p>

                    <ul class="nav footer__nav">
                        <a class="nav-link" href="#">Homepage</a>

                        <a class="nav-link" href="#">Company</a>

                        <a class="nav-link" href="#">Support</a>

                        <a class="nav-link" href="#">News</a>

                        <a class="nav-link" href="#">Contacts</a>
                    </ul>
                </footer>
            </section>
        </main>

        <!-- Older IE warning message -->
            <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="img/browsers/chrome.png" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="img/browsers/firefox.png" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="img/browsers/safari.png" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="img/browsers/edge.png" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

        <!-- Javascript -->
        <!-- Vendors -->
        <script src=<?= base_url('assets/vendors/jquery/jquery.min.js')?>></script>
        <script src=<?= base_url('assets/vendors/popper.js/popper.min.js')?>></script>
        <script src=<?= base_url('assets/vendors/bootstrap/js/bootstrap.min.js')?>></script>
        <script src=<?= base_url('assets/vendors/jquery-scrollbar/jquery.scrollbar.min.js')?>></script>
        <script src=<?= base_url('assets/vendors/jquery-scrollLock/jquery-scrollLock.min.js')?>></script>

        <script src=<?= base_url('assets/vendors/flot/jquery.flot.js')?>></script>
        <script src=<?= base_url('assets/vendors/flot/jquery.flot.resize.js')?>></script>
        <script src=<?= base_url('assets/vendors/flot.curvedlines/curvedLines.js')?>></script>
        <script src=<?= base_url('assets/vendors/jqvmap/jquery.vmap.min.js')?>></script>
        <script src=<?= base_url('assets/vendors/jqvmap/maps/jquery.vmap.world.js')?>></script>
        <script src=<?= base_url('assets/vendors/easy-pie-chart/jquery.easypiechart.min.js')?>></script>
        <script src=<?= base_url('assets/vendors/salvattore/salvattore.min.js')?>></script>
        <script src=<?= base_url('assets/vendors/sparkline/jquery.sparkline.min.js')?>></script>
        <script src=<?= base_url('assets/vendors/moment/moment.min.js')?>></script>
        <script src=<?= base_url('assets/vendors/fullcalendar/fullcalendar.min.js')?>></script>

        <!-- Charts and maps-->
        <script src=<?= base_url('assets/demo/js/flot-charts/curved-line.js')?>></script>
        <script src=<?= base_url('assets/demo/js/flot-charts/dynamic.js')?>></script>
        <script src=<?= base_url('assets/demo/js/flot-charts/line.js')?>></script>
        <script src=<?= base_url('assets/demo/js/flot-charts/chart-tooltips.js')?>></script>
        <script src=<?= base_url('assets/demo/js/other-charts.js')?>></script>
        <script src=<?= base_url('assets/demo/js/jqvmap.js')?>></script>

        <!-- App functions and actions -->
        <script src=<?= base_url('assets/js/app.min.js')?>></script>
    </body>

<!-- Mirrored from byrushan.com/projects/material-admin/app/2.6/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Nov 2020 14:32:06 GMT -->
</html>