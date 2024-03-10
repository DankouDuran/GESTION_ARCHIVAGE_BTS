<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <script src="https://a jax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css
    /fontawesome.min.css">
    <script src="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!--material-->
    <link href="https://fonts.googleleapis.com/icon?family-MùATERIAL+Icons+Sharp" rel="stylesheet">
    <!--style css-->
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="mode">
    <h1 class="bale"><marquee behavior="alternate"> GESTION DES ARCHIVES <span class="merci">MEDICALS </span>DES PATIENTS</marquee></h1>
    </div>
    
            </div>
    <div class="container">
<aside>
    <div class="top">
    <div class="logo">
        <img src="piece12.jpg" alt="">
        <h2>DA<span class="danger">GAMP</span></h2>
    </div>
    <div class="close" id="close-btn">
<span class="material-icons-sharp">close</span>
    </div>
</div>
<div class="sidebar">
    <a href="dashboard.php" >
        <span class="las la-search"></span>
        <h3>Tableau de bord</h3>
    
    </a>
    <a href="inserer.php" class="active">
        <span class="las la-user"></span>
        <h3>UTILISATEURS</h3>
</a>
    <a href="index.php">
        <span class="material-icons-sharp"></span>
        <h3>PATIENTS</h3>
    </a>
    <a href="medical.php">
        <span class="material-icons-sharp"></span>
        <h3>ARCHIVES</h3>
    </a>
    <a href="examens.php">
        <span class="material-icons-sharp"></span>
        <h3>EXAMENS</h3>
    </a>
    
    <a href="#">
        <span class="glyphicon glyphicon-envelope"></span>
        <h3>Messages</h3>
        <span class="message-count">01</span>
    </a>
    <a href="donner.php">
        <span class="material-icons-sharp"></span>
        <h3>Deconnexion</h3>

    </a>
</div>
</aside>

<!---end of aside-->

<main>
    <h1>Dashboard</h1>
    <div class="date">
        <input type="datetime-local">
    </div>
    <div class="search">
        <input type="search" placeholder="search">
    </div>
    <div class="insights">
<div class="sales">
    <span class="material-icons-sharp">analyses</span>
<div class="middle">
    <div class="lef">
<h3>Total des patients</h3>
<h1>178</h1>
    </div>
    <div class="progress">
        <svg>
            <circle cx="38" cy="38" r="36"></circle>
        </svg>
        <div class="number">
            <p>76%</p>
        </div>
    </div>
</div>
<small class="text-muted">Les deux derniers mois</small>
</div>
<!------FIN DES COMMANDES-->
<div class="expenses">
    <span class="material-icons-sharp">Bar_chart</span>
    <div class="middle">
        <div class="lef">
    <h3>Total des archives</h3>
    <h1>14501</h1>
        </div>
        <div class="progress">
            <svg>
                <circle cx="38" cy="38" r="36"></circle>
            </svg>
            <div class="number">
                <p>12.%</p>
            </div>
        </div>
    </div>
    <small class="text-muted">Les deux derniers mois</small>
    </div>
    <!------FIN DES depenses-->
    <div class="income">
        <span class="material-icons-sharp">entrées</span>
        <div class="middle">
            <div class="lef">
        <h3>Total des utilisateurs</h3>
        <h1>1789</h1>
            </div>
            <div class="progress">
                <svg>
                    <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="number">
                    <p>25%</p>
                </div>
            </div>
        </div>
        <small class="text-muted">Les deux derniers mois</small>
        </div>
        <!------FIN DES entrees-->
            </div>
            <!--end of insights-->
            <div class="recent-orders">
                
    <div class="insights">
<div class="sales">
    <span class="material-icons-sharp">analyses</span>
<div class="middle">
    <div class="lef">
<h3>Total des examens</h3>
<h1>178000</h1>
    </div>
    <div class="progress">
        <svg>
            <circle cx="38" cy="38" r="36"></circle>
        </svg>
        <div class="number">
            <p>76%</p>
        </div>
    </div>
</div>
<small class="text-muted">Les deux derniers mois</small>
</div>
<!------FIN DES COMMANDES-->
<div class="expenses">
    <span class="material-icons-sharp">Bar_chart</span>
    <div class="middle">
        <div class="lef">
    <h3>Total des traitements</h3>
    <h1>14501</h1>
        </div>
        <div class="progress">
            <svg>
                <circle cx="38" cy="38" r="36"></circle>
            </svg>
            <div class="number">
                <p>12.%</p>
            </div>
        </div>
    </div>
    <small class="text-muted">Les deux derniers mois</small>
    </div>
    <!------FIN DES depenses-->
    <div class="income">
        <span class="material-icons-sharp">entrées</span>
        <div class="middle">
            <div class="lef">
        <h3>Total des consultation</h3>
        <h1>17894</h1>
            </div>
            <div class="progress">
                <svg>
                    <circle cx="38" cy="38" r="36"></circle>
                </svg>
                <div class="number">
                    <p>25%</p>
                </div>
            </div>
        </div>
        <small class="text-muted">Les deux derniers mois</small>
        </div>
</div>
</main>
<!---end of main--->
        <div class="right">
            <div class="top">
                <button id="menu-tbn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="profile">
                    <div class="info">
                        <p>salut, <b>DANKOU</b></p>
                            <small class="text-muted">utilisateur</small>
                    </div>
                    <div class="profile-photo">
                        <img src="pho.jpg">
                    </div>
                </div>
            </div><br><br>
            <!---end of top-->
            <div class="recent-update">
                <h2>Recent Updates</h2>
                <div class="Updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="piece3.jpg">
                        </div>
                        <div class="Message">
                            <p><b>Manuella dongmo</b>a suivi son traitement dans notre centre de sante rapha</p>
                            <small class="text-muted"> Il y a deux jours</small>  
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="profil.jpg">
                            </div>
                            <div class="Message">
                                <p><b>donald Kamdem</b>a suivi son traitement dans notre centre de sante rapha </p>
                                <small class="text-muted"> Il y a deux jours</small>  
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                 <img src="piece12.jpg">
                            </div>
                            <div class="Message">
                                <p><b>Gabriella Abogo</b>a suivi son traitement dans notre centre de sante rapha</p>
                                <small class="text-muted"> Il y a deux jours</small>  
                            </div>                   
                        </div>
                    </div>
                </div>
                <!----end of recent updates-->
                <div class="buy-analytics"> 
                    <h2>Analyses des archives medicals</h2>
                    <div class="item online">
                        <div class="icon">
                            <span class="material-icons-sharp">diagnostique</span>
                        </div>
                        <div class="right">
                           <div class="info">
                               <h3>archives</h3>
                               <small class="text-muted">ces deux derniers jours</small>
                           </div>
                            <h5 class="success">+39%</h5>
                            <h3>14</h3>
                        </div>
                    </div>
                    <div class="item offline">
                        <div class="icon">
                            <span class="material-icons-sharp">diagnostique</span>
                        </div>
                        <div class="right">
                           <div class="info">
                               <h3>pertes realisées</h3>
                               <small class="text-muted">ces deux derniers jours</small>
                           </div>
                            <h5 class="danger">-10%</h5>
                            <h3>145</h3>
                        </div>
                    </div>
                    <div class="item fournisseurs">
                        <div class="icon">
                            <span class="material-icons-sharp">diagnostique</span>
                        </div>
                        <div class="right">
                           <div class="inf">
                               <h3>nouveau dossier</h3>
                               <small class="text-muted">ces deux derniers jours</small>
                           </div>
                            <h5 class="success">+40%</h5>
                            <h3>10</h3>
                        </div>
                    </div>
                    <a href="#">
                    <div class="item add-product">
                        <div>
                            <span class="material-icons-sharp"></span>
                            <a href="medical.php">
                            <h3>ajouter un dossier medical</h3>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
 </html>