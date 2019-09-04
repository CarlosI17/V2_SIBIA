<?php 

if ($_SESSION['permisos_acceso']=='Super Admin') { ?>

    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php 

	if ($_GET["module"]=="start") { 
		$active_home="active";
	} else {
		$active_home="";
	}
	?>
		<li class="<?php echo $active_home;?>"  title="Inicio">
			<a href="?module=start"><i class="fa fa-home" ></i> Inicio </a>
	  	</li>
		
	<?php

		if ($_GET["module"]=="medicines" || $_GET["module"]=="form_medicines") { ?> 
		<li class="active treeview">
          	<a href="javascript:void(0);" >
            	<i class="fa fa-child"></i><span>Recurso Humano</span><i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li class="active"><a href="?module=medicines"><i class="fa fa-users"></i> Personal Nombrado</a></li>
				<li><a href="?module=cas"><i class="fa fa-user"></i> Personal CAS</a></li>
				<li><a href="?module=pasivos"><i class="fa fa-wheelchair"></i> Personal Pasivo</a></li>
      		</ul>
    	</li>
    <?php
	}

	elseif ($_GET["module"]=="cas" || $_GET["module"]=="form_cas") { ?>
		<li class="active treeview" >
          	<a href="javascript:void(0);">
            	<i class="fa fa-child"></i> <span>Recurso Humano</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu" >
        		<li><a href="?module=medicines"><i class="fa fa-users"></i> Personal Nombrado </a></li>
				<li class="active"><a href="?module=cas"><i class="fa fa-user"></i> Personal CAS</a></li>
				<li><a href="?module=pasivos"><i class="fa fa-wheelchair"></i> Personal Pasivo</a></li>
      		</ul>
    	</li>
    <?php
	}
	
	elseif ($_GET["module"]=="pasivos" || $_GET["module"]=="form_pasivos") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-child"></i> <span>Recurso Humano</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=medicines"><i class="fa fa-users"></i> Personal Nombrado </a></li>
				<li><a href="?module=cas"><i class="fa fa-user"></i> Personal CAS</a></li>
				<li class="active"><a href="?module=pasivos"><i class="fa fa-wheelchair"></i> Personal Pasivo</a></li>
      		</ul>
    	</li>
    <?php
	}
	
	else { ?>
		<li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-child"></i> <span>Recurso Humano</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=medicines"><i class="fa fa-users"></i> Personal Nombrado </a></li>
				<li><a href="?module=cas"><i class="fa fa-user"></i> Personal CAS</a></li>
				<li><a href="?module=pasivos"><i class="fa fa-wheelchair"></i> Personal Pasivo</a></li>
      		</ul>
    	</li>
    <?php
	}



	if ($_GET["module"]=="user" || $_GET["module"]=="form_user") { ?>
		<li class="active" title="Administrar usuarios">
			<a href="?module=user"><i class="fa fa-user"></i> Administrar usuarios</a>
	  	</li>
	<?php
	}

	else { ?>
		<li title="Administrar usuarios">
			<a href="?module=user"><i class="fa fa-user"></i> Administrar usuarios</a>
	  	</li>
	<?php
	}


	if ($_GET["module"]=="password") { ?>
		<li class="active" title="Cambiar contraseña">
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}

	else { ?>
		<li title="Cambiar contraseña">
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	?>
	</ul>

<?php
}

elseif ($_SESSION['permisos_acceso']=='Gerente') { ?>

    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php 

	if ($_GET["module"]=="start") { 
		$active_home="active";
	} else {
		$active_home="";
	}
	?>
		<li class="<?php echo $active_home;?>">
			<a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
		
	<?php

		if ($_GET["module"]=="medicines" || $_GET["module"]=="form_medicines") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-child"></i> <span>Recurso Humano</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li class="active"><a href="?module=medicines"><i class="fa fa-users"></i> Personal Nombrado</a></li>
				<li><a href="?module=cas"><i class="fa fa-user"></i> Personal CAS</a></li>
				<li><a href="?module=pasivos"><i class="fa fa-wheelchair"></i> Personal Pasivo</a></li>
      		</ul>
    	</li>
    <?php
	}

	elseif ($_GET["module"]=="cas" || $_GET["module"]=="form_cas") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-child"></i> <span>Recurso Humano</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=medicines"><i class="fa fa-users"></i> Personal Nombrado </a></li>
				<li class="active"><a href="?module=cas"><i class="fa fa-user"></i> Personal CAS</a></li>
				<li><a href="?module=pasivos"><i class="fa fa-wheelchair"></i> Personal Pasivo</a></li>

      		</ul>
    	</li>
    <?php
	}
	
	elseif ($_GET["module"]=="pasivos" || $_GET["module"]=="form_pasivos") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-child"></i> <span>Recurso Humano</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=medicines"><i class="fa fa-users"></i> Personal Nombrado </a></li>
				<li><a href="?module=cas"><i class="fa fa-user"></i> Personal CAS</a></li>
				<li class="active"><a href="?module=pasivos"><i class="fa fa-wheelchair"></i> Personal Pasivo</a></li>

      		</ul>
    	</li>
    <?php
	}

	
	else { ?>
		<li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-child"></i> <span>Recurso Humano</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=medicines"><i class="fa fa-users"></i> Personal Nombrado </a></li>
				<li><a href="?module=cas"><i class="fa fa-user"></i> Personal CAS</a></li>
				<li><a href="?module=pasivos"><i class="fa fa-wheelchair"></i> Personal Pasivo</a></li>

      		</ul>
    	</li>


    <?php
	  }
	  if ($_GET["module"]=="password") { ?>
		<li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	?>
	</ul>
<?php
}
if ($_SESSION['permisos_acceso']=='Almacen') { ?>

    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php 

  if ($_GET["module"]=="start") { ?>
    <li class="active">
      <a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
      </li>
  <?php
  }

	if ($_GET["module"]=="medicines" || $_GET["module"]=="form_medicines") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-file-text"></i> <span>Recurso Humano</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li class="active"><a href="?module=medicines"><i class="fa fa-users"></i> Personal Nombrado</a></li>
				<li><a href="?module=cas"><i class="fa fa-user"></i> Personal CAS</a></li>
				<li><a href="?module=pasivos"><i class="fa fa-wheelchair"></i> Personal Pasivo</a></li>

      		</ul>
    	</li>
    <?php
	}

	else { ?>
		<li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-file-text"></i> <span>Recurso Humano</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li class="active"><a href="?module=medicines"><i class="fa fa-users"></i> Personal Nombrado</a></li>
				<li><a href="?module=cas"><i class="fa fa-user"></i> Personal CAS</a></li>
				<li><a href="?module=pasivos"><i class="fa fa-wheelchair"></i> Personal Pasivo</a></li>

      		</ul>
    	</li>
    <?php
	}
	?>
	
	

	</ul>
<?php
}
?>