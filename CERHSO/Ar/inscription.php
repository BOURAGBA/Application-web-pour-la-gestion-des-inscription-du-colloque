<?xml version="1.0" encoding="utf-8"?>
<html xmlns="http://www.w3.org/1999/xhtml" >
    <head>
        <title>تسجيل</title>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Fancy Sliding Form with jQuery" />
        <meta name="keywords" content="jquery, form, sliding, usability, css3, validation, javascript"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
		<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
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
		document.write("<center><b> <font color='red'>ملحوظة : لم يتبقى سوى"+chrono()+" يوم لنهاية التسجيل </font></b></center>");
		</script>
        </div>
		<b><a href='index.php'>الرئيسية</a></b>
        <div id="content">
            <h1>تسجيل</h1>
            <div id="wrapper">
                <div id="steps">
                    <form id="formElem" name="formElem" action="do_inscription.php" method="post" enctype="multipart/form-data">
                        <fieldset class="step">
                            <legend><center>مقالة</center></legend>
                            <p>
                                <label for="username">عنوان</label>
                                <input id="username" name="username" dir="rtl"/><br><br><span class="error_form" id="username_error_message"></span>
                            </p>

							<p>
                                <label for="langue">اللغة</label>
                                <select id="langue" name="langue">
                                    <option value="ar" selected>العربية</option>
                                    <option value="fr">الفرنسية</option>
                                    <option value="An">الانجليزية</option>
                                </select>         
                            </p>
                        </fieldset>
                        <fieldset class="step">
                            <legend><center>كاتب</center></legend>
                            <p>
                                <label for="name">النسب</label>
                                <input id="name" name="name" type="text" dir="rtl" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="name_error_message"></span>
                            
                                <label for="prenom">الاسم</label>
                                <input id="prenom" name="prenom" type="text" dir="rtl" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="prenom_error_message"></span>
                            </p>
							<p>
                                <label for="institution">الوظيفة</label>
                                <input id="institution" name="institution" type="text" dir="rtl" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="institution_error_message"></span>
                           </p>
						   <p>
                                <label for="ville">المدينة</label>
                                <input id="ville" name="ville" type="text" dir="rtl" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="ville_error_message"></span>
                         
                                <label for="pays">الدولة</label>
                                <input id="pays" name="pays" type="text" dir="rtl" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="pays_error_message"></span>
                         
                            </p>
                            <p>
                                <label for="phone">الهاتف</label>
                                <input id="phone" name="phone" placeholder="e.g. +212600000000" type="tel" dir="rtl" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="phone_error_message"></span>
                           
                                <label for="email">الايميل</label>
                                <input id="email" name="email" placeholder="info@gmail.com" type="email" dir="rtl" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="email_error_message"></span>
                            </p>
                        </fieldset>
                        <fieldset class="step">
                            <legend><center>مساعد كاتب</center></legend>
                         <p>
                                <label for="namec">النسب</label>
                                <input id="namec" name="namec" type="text" dir="rtl" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="namec_error_message"></span>
                            
                                <label for="prenomc">الاسم</label>
                                <input id="prenomc" name="prenomc" type="text" dir="rtl" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="prenomc_error_message"></span>
                            </p>
							<p>
                                <label for="institutionc">الوظيفة</label>
                                <input id="institutionc" name="institutionc" type="text" dir="rtl" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="institutionc_error_message"></span>
                           </p>
						   <p>
                                <label for="villec">المدينة</label>
                                <input id="villec" name="villec" type="text" dir="rtl" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="villec_error_message"></span>
                         
                                <label for="paysc">الدولة</label>
                                <input id="paysc" name="paysc" type="text" dir="rtl" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="paysc_error_message"></span>
                         
                              
                            </p>
                            <p>
                                <label for="phonec">الهاتف</label>
                                <input id="phonec" name="phonec" placeholder="e.g. +212600000000" type="tel" dir="rtl" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="phonec_error_message"></span>
                           
                                <label for="emailc">الايميل</label>
                                <input id="emailc" name="emailc" placeholder="info@gmail.com" type="email" dir="rtl" AUTOCOMPLETE=OFF /><br><br><span class="error_form" id="emailc_error_message"></span>
                            </p>
                        </fieldset>
                        <fieldset class="step">
                            <legend><center>تحميل</center></legend>
							<br><br><br><br><br><br><br><br><br><br>
							
                            <p>
                                <input type="file" name="doc_file" id="doc_file" AUTOCOMPLETE=OFF />
						   </p>
                        
							
                        </fieldset>
						<fieldset class="step">
                            <legend><center>تسجيل</center></legend>
							<p>
								<font color="blue"><b> تسجيل المعلومات</b></font>
							</p>
                            <p class="submit">
                                <button id="registerButton" type="submit">تسجيل</button>
                            </p>
                        </fieldset>
                    </form>
                </div>
                <div id="navigation" style="display:none;">
                    <ul>
                        <li class="selected">
                            <a href="#">مقالة</a>
                        </li>
                        <li>
                            <a href="#">كاتب</a>
                        </li>
                        <li>
                            <a href="#">مساعد كاتب</a>
                        </li>
                        <li>
                            <a href="#">تحميل</a>
                        </li>
						<li>
                            <a href="#">تسجيل</a>
                        </li>
                    </ul>
                </div>
            </div>
			
        </div>
		
		
    </body>
</html>