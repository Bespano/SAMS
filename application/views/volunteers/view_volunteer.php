<!-- Fixed navbar -->

<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>Voluntarios</h1>
    <p>Asistencia Social</p>
  </div>

  <div class="page-header">
    <h2>Ver voluntario/a</h2>
  </div>
  <div class="row">
    <div class="col-sm-6">
     
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ver voluntario/a</h3>
        </div>
        <div class="panel-body">
          
 <form>
<?php foreach ($volunteer_item as $volunteer_data): ?>
<?php echo form_open('volunteers/edit_volunteer/'.$volunteer_data['idVolunteer'].''); ?>
    <input type="hidden" name="idVolunteer" value="<?php echo set_value('idVolunteer',$volunteer_data['idVolunteer']); ?>" />
    <p class="text-muted"><?php echo "Creado el ".$volunteer_data['volunteer_creationdate'] ?></p>
    <p class="text-muted"><?php echo "Modificado por última vez el ".$volunteer_data['volunteer_lastmodificationdate'] ?></p>
    
    <label for="volunteer_date_label">Fecha de nacimiento</label>
    <input type="input" class="form-control" name="volunteer_birthdate" value="<?php echo set_value('volunteer_birthdate',$volunteer_data['volunteer_birthdate']); ?>" readonly/><br />
    
    <label for="volunteer_firstname_label">Nombre</label>
    <input type="input" class="form-control" name="volunteer_firstname" value="<?php echo set_value('volunteer_firstname',$volunteer_data['volunteer_firstname']); ?>"  readonly readonly/><br />
    
    <label for="volunteer_name_label">Apellidos</label>
    <input type="input" class="form-control" name="volunteer_lastname"  value="<?php echo set_value('volunteer_lastname',$volunteer_data['volunteer_lastname']); ?>" readonly/><br />
    
    <label for="volunteer_email_label">Email</label>
    <input type="input" class="form-control" name="volunteer_email" value="<?php echo set_value('volunteer_email',$volunteer_data['volunteer_email']); ?>" readonly/><br />
    
    <label for="volunteer_phone_label">Teléfono</label>
    <input type="input" class="form-control" name="volunteer_phone" value="<?php echo set_value('volunteer_phone',$volunteer_data['volunteer_phone']); ?>"  readonly/><br />
    
    <label for="volunteer_profession_label">Profesión</label>
    <input type="input" class="form-control" name="volunteer_profession" value="<?php echo set_value('volunteer_profession',$volunteer_data['volunteer_profession']); ?>"  readonly/><br />
    
    <label for="volunteer_occupation_label">Ocupación</label>
    <input type="input" class="form-control" name="volunteer_occupation" value="<?php echo set_value('volunteer_occupation',$volunteer_data['volunteer_occupation']); ?>"  readonly/><br />
    
    <label for="volunteer_availability_label">Disponibilidad</label>
    <input type="input" class="form-control" name="volunteer_availability" value="<?php echo set_value('volunteer_availability',$volunteer_data['volunteer_availability']); ?>"  readonly/><br />
    
    <label for="volunteer_preferences_label">Preferencias</label>
    <input type="input" class="form-control" name="volunteer_preferences"  readonly/><br />
    
    <label for="volunteer_experience_label">Experiencia</label>
    <textarea name="volunteer_experience" class="form-control" rows="10" cols="50"  readonly><?php echo set_value('volunteer_experience',$volunteer_data['volunteer_experience']); ?></textarea><br />
    <a href="<?php echo base_url(); ?>volunteers"><button type="button" class="btn btn-primary">Volver</button></a>

  <?php endforeach; ?>


    

</form>

        </div>
      </div>
    </div><!-- /.col-sm-4 -->
    </div>


  


</div> <!-- /container -->

