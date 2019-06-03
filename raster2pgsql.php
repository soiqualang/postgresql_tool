<h2>Raster to PostgreSQL</h2>
https://dothanhlong.org/import-raster-to-postgresql-postgis-and-view-in-qgis/<br>
http://spatialreference.org/ref/epsg/
<hr>
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
  <label class="control-label col-sm-2" for="schema">Schema name:</label>
  <div class="col-sm-10">
	<input type="text" class="form-control" id="schema" placeholder="public" value="public" name="schema" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="table">Table name:</label>
  <div class="col-sm-10">
	<input type="text" class="form-control" id="table" placeholder="Enter your Table name" value="" name="table" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="infol">Raster file Folder:</label>
  <div class="col-sm-10">
	<input type="text" class="form-control" id="infol" placeholder="D:\tmp\input" name="infol" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="fname">Raster file name:</label>
  <div class="col-sm-10">
	<input type="text" class="form-control" id="fname" placeholder="LT51260521989007BKT00_B1.TIF" name="fname" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="srid">SRID:</label>
  <div class="col-sm-10">
	<input type="text" class="form-control" id="srid" placeholder="4326" name="srid" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2" for="size">size:</label>
  <div class="col-sm-10">
	<input type="text" class="form-control" id="size" placeholder="250×250" value="250x250" name="size" required>
  </div>
</div>
<div class="form-group">        
  <div class="col-sm-offset-2 col-sm-10">
	<button name="submit_raster2pgsql" id="submit_raster2pgsql" type="submit" class="btn btn-default">Submit</button>
  </div>
</div>
</form>