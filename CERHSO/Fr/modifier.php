<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Formulaire d'inscription</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Fancy Sliding Form with jQuery" />
        <meta name="keywords" content="jquery, form, sliding, usability, css3, validation, javascript"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
		<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/validation.js"></script>
		 <script type="text/javascript" src="js/sliding.form.js"></script>
    </head>
    <style>
    </style>
    <body style="background-color:#141212">
        <div><!-- compte à rebours -->
		<script language="javascript">
		function chrono()
		{
		jour=Date.parse("April 10, 2017 GMT") - Date.parse(new Date);
		return(Math.round(jour/(24*60*60*1000)))
		}
		document.write("<center><b> <font color='red'>NB: Il reste "+chrono()+" jours avant le dernier jour d'inscription : le 10 avril 2017 !! </font></b></center>");
		</script>
        </div>
		<?php
		//Accèder à la base de données
		try{
		$base=new PDO('mysql:host=localhost;dbname=colloque','root','');
		$base->exec("set names utf8");
		}
		catch(Exception $e){
		die('Erreur:'.$e->getMessage());}
		
		$id1=$_GET['idArticle'];
		$sql="select * from article where numArticle='$id1'";
        $resultat=$base->query($sql); 
		$ligne=$resultat->fetch(PDO::FETCH_OBJ);
		$title=$ligne->titreArticle;
		$langue=$ligne->langueArticle;
		
		$id2=$_GET['numAuteur'];
		$sql="select * from auteur where numAuteur='$id2'";
        $resultat=$base->query($sql); 
		$ligne=$resultat->fetch(PDO::FETCH_OBJ);
		$nom=$ligne->nomAuteur;
		$prenom=$ligne->prenomAuteur;
		$institution=$ligne->institutionAuteur;
		$ville=$ligne->villeAuteur;
		$pays=$ligne->paysAuteur; 
		$phone=$ligne->phoneAuteur;
		$email=$ligne->emailAuteur;
		
		$id3=$_GET['idCo'];
		$sql="select * from coauteur where numCoauteur='$id3'";
		$resultat=$base->query($sql);
		$ligne=$resultat->fetch(PDO::FETCH_OBJ);
		$nomc=$ligne->nomCoauteur;
		$prenomc=$ligne->prenomCoauteur;
		$institutionc=$ligne->institutionCoauteur;
		$villec=$ligne->villeCoauteur;
		$paysc=$ligne->paysCoauteur; 
		$phonec=$ligne->phoneCoauteur;
		$emailc=$ligne->emailCoauteur;
		
		
		?>
        <div id="content">
            <h1>Formulaire d'inscription</h1>
            <div id="wrapper">
                <div id="steps">
                    <form id="formElem" name="formElem" action="do_modification.php" method="post" enctype="multipart/form-data">
                        <fieldset class="step">
						<?php
						session_start();
						$_SESSION['numAuteur']=$id2;
						$_SESSION['idCo']=$id3;
						$_SESSION['idArticle']=$id1;	
						?>
                            <legend>Article</legend>
                            <p>
                                <label for="username">Titre</label>
                                <input id="username" name="username" value="<?php if(isset($title)) echo $title;?>"/><br><br><span class="error_form" id="username_error_message"></span>
                            </p>

							<p>
                                <label for="langue">Langue</label>
                                <select id="langue" name="langue">
                                    <option value="ar" <?php if(isset($langue)&& $langue=="ar") echo "selected";?> >Arabe</option>
                                    <option value="fr" <?php if(isset($langue)&& $langue=="fr") echo "selected";?> >Francais</option>
                                    <option value="An"<?php if(isset($langue)&& $langue=="An") echo "selected";?>>Anglais</option>
                                </select>         
                            </p>
                        </fieldset>
                        <fieldset class="step">
                            <legend>Auteur</legend>
                            <p>
                                <label for="name">Nom</label>
                                <input id="name" name="name" type="text" value="<?php if(isset($nom)) echo $nom;?>" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="name_error_message"></span>
                            
                                <label for="prenom">Prénom</label>
                                <input id="prenom" name="prenom" type="text" value="<?php if(isset($prenom)) echo $prenom;?>" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="prenom_error_message"></span>
                            </p>
							<p>
                                <label for="institution">Institution</label>
                                <input id="institution" name="institution" type="text" value="<?php if(isset($institution)) echo $institution;?>" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="institution_error_message"></span>
                           </p>
						   <p>
                                <label for="ville">Ville</label>
                                <input id="ville" name="ville" type="text" value="<?php if(isset($ville)) echo $ville;?>" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="ville_error_message"></span>
                         
                                <label for="pays">Pays</label>
                                <input id="pays" name="pays" type="text" value="<?php if(isset($pays)) echo $pays;?>" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="pays_error_message"></span>
                         
                            </p>
                            <p>
                                <label for="phone">Phone</label>
                                <input id="phone" name="phone" placeholder="e.g. +212600000000" type="tel" value="<?php if(isset($phone)) echo $phone;?>" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="phone_error_message"></span>
                           
                                <label for="email">Email</label>
                                <input id="email" name="email" placeholder="info@gmail.com" type="email" value="<?php if(isset($email)) echo $email;?>" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="email_error_message"></span>
                            </p>
                        </fieldset>
                        <fieldset class="step">
                            <legend>Co-Auteur</legend>
                         <p>
                                <label for="namec">Nom</label>
                                <input id="namec" name="namec" type="text" value="<?php if(isset($nomc)) echo $nomc;?>"  AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="namec_error_message"></span>
                            
                                <label for="prenomc">Prénom</label>
                                <input id="prenomc" name="prenomc" type="text" value="<?php if(isset($prenomc)) echo $prenomc;?>" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="prenomc_error_message"></span>
                            </p>
							<p>
                                <label for="institutionc">Institution</label>
                                <input id="institutionc" name="institutionc" type="text" value="<?php if(isset($institutionc)) echo $institutionc;?>" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="institutionc_error_message"></span>
                           </p>
						   <p>
                                <label for="villec">Ville</label>
                                <input id="villec" name="villec" type="text" value="<?php if(isset($villec)) echo $villec;?>" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="villec_error_message"></span>
                         
                                <label for="paysc">Pays</label>
                                <input id="paysc" name="paysc" type="text" value="<?php if(isset($paysc)) echo $paysc;?>" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="paysc_error_message"></span>
                         
                              
                            </p>
                            <p>
                                <label for="phonec">Phone</label>
                                <input id="phonec" name="phonec" placeholder="e.g. +212600000000" type="tel" value="<?php if(isset($phonec)) echo $phonec;?>" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="phonec_error_message"></span>
                           
                                <label for="emailc">Email</label>
                                <input id="emailc" name="emailc" placeholder="info@gmail.com" type="email" value="<?php if(isset($emailc)) echo $emailc;?>" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="emailc_error_message"></span>
                            </p>
                        </fieldset>
                       
						<fieldset class="step">
                            <legend>Submit</legend>
							<p>
								<font color="blue"> ===> Mise à jour les données !!</font>
							</p>
                            <p class="submit">
                                <button id="registerButton" type="submit">Entrer</button>
                            </p>
                        </fieldset>
                    </form>
                </div>
                <div id="navigation" style="display:none;">
                    <ul>
                        <li class="selected">
                            <a href="#">Article</a>
                        </li>
                        <li>
                            <a href="#">Auteur</a>
                        </li>
                        <li>
                            <a href="#">Co-Auteur</a>
                        </li>
						<li>
                            <a href="#">Submit</a>
                        </li>
                    </ul>
                </div>
            </div>
			
        </div>
		
		
    </body>
</html>