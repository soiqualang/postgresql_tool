<h2>Backup file to SQL file</h2>
<form class="form-horizontal" action="psqlex.php" method="GET">
<div class="form-group">
  <label class="control-label col-sm-2" for="binfol">PostgreSQL Bin folder:</label>
  <div class="col-sm-10">
	<input type="text" class="form-control" id="binfol" placeholder="C:\Program Files (x86)\PostgreSQL\9.2\bin" name="binfol" value="C:\Program Files (x86)\PostgreSQL\9.2\bin\" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="port">PostgreSQL Port:</label>
  <div class="col-sm-10">          
	<input type="number" class="form-control" id="port" placeholder="5432" name="port" value="5433" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="uname">PostgreSQL User name:</label>
  <div class="col-sm-10">          
	<input type="text" class="form-control" id="uname" placeholder="postgres" value="postgres" name="uname" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="dbname">Database name:</label>
  <div class="col-sm-10">
	<input type="text" class="form-control" id="dbname" placeholder="Enter your Database name" name="dbname" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="infol">Backup Folder:</label>
  <div class="col-sm-10">
	<input type="text" class="form-control" id="infol" placeholder="D:\tmp\input" name="infol" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="fname">Backup file name:</label>
  <div class="col-sm-10">
	<input type="text" class="form-control" id="fname" placeholder="file.backup" name="fname" required>
  </div>
</div>
<div class="form-group">        
  <div class="col-sm-offset-2 col-sm-10">
	<button name="submit_backup2db" id="submit_backup2db" type="submit" class="btn btn-default">Submit</button>
  </div>
</div>
</form>