<?php
require_once "config/database.php";
require_once "config/fungsi_tanggal.php";
require_once "config/fungsi_rupiah.php";


if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
else {
	if ($_GET['module'] == 'start') {
		include "modules/start/view.php";
	}

	elseif ($_GET['module'] == 'medicines') {
		include "modules/medicines/view.php";
	}

	elseif ($_GET['module'] == 'form_medicines') {
		include "modules/medicines/form.php";
	}
	
	elseif ($_GET['module'] == 'cas') {
		include "modules/cas/view.php";
	}

	elseif ($_GET['module'] == 'form_cas') {
		include "modules/cas/form.php";
		
	}
	
	elseif ($_GET['module'] == 'destacados') {
		include "modules/destacados/view.php";
	}

	elseif ($_GET['module'] == 'form_destacados') {
		include "modules/destacados/form.php";
		
	}
	
	elseif ($_GET['module'] == 'pasivos') {
		include "modules/pasivos/view.php";
	}

	elseif ($_GET['module'] == 'form_pasivos') {
		include "modules/pasivos/form.php";	
	}
	
	elseif ($_GET['module'] == 'residentes') {
		include "modules/residentes/view.php";
	}

	elseif ($_GET['module'] == 'form_residentes') {
		include "modules/residentes/form.php";	
	}
	
	elseif ($_GET['module'] == 'constancias') {
		include "modules/constancias/view.php";
	}

	elseif ($_GET['module'] == 'form_constancias') {
		include "modules/constancias/form.php";
	}
	
	elseif ($_GET['module'] == 'informes_escalafonarios') {
		include "modules/informes_escalafonarios/view.php";
	}

	elseif ($_GET['module'] == 'form_informes_escalafonarios') {
		include "modules/informes_escalafonarios/form.php";
	}
	
	elseif ($_GET['module'] == 'informes') {
		include "modules/informes/view.php";
	}

	elseif ($_GET['module'] == 'form_informes') {
		include "modules/informes/form.php";
	}
	
	elseif ($_GET['module'] == 'memorandos') {
		include "modules/memorandos/view.php";
	}

	elseif ($_GET['module'] == 'form_memorandos') {
		include "modules/memorandos/form.php";
	}

	elseif ($_GET['module'] == 'stock_actualizaciones') {
		include "modules/stock_actualizaciones/view.php";
	}

	elseif ($_GET['module'] == 'stock_report') {
		include "modules/stock_report/view.php";
	}
	

	elseif ($_GET['module'] == 'user') {
		include "modules/user/view.php";
	}


	elseif ($_GET['module'] == 'form_user') {
		include "modules/user/form.php";
	}

	elseif ($_GET['module'] == 'profile') {
		include "modules/profile/view.php";
		}


	elseif ($_GET['module'] == 'form_profile') {
		include "modules/profile/form.php";
	}

	elseif ($_GET['module'] == 'password') {
		include "modules/password/view.php";
	}
	
	elseif ($_GET['module'] == 'nuevo') {
		include "modules/nuevo/form.php";
	}
	
}
?>