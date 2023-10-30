  <style>
  	.container {
  		display: flex;
  		flex-wrap: wrap;
  		gap: 20px;
  		/* Adjust the gap as needed */
  	}

  	.column {
  		flex: 1;
  		/* Each column takes up an equal amount of space */

  		/* Add a border for better separation */
  		padding: 10px;
  		display: flex;
  		flex-direction: column;
  	}

  	.column-header {
  		font-weight: bold;
  	}

  	.row {
  		margin-bottom: 10px;
  		font-weight: bold;
  		transition: background-color 0.8s;
  		transition: transform 0.3s;
  	}

  	.row:hover {
  		transform: scale(1.1);
  		color: orange;
  	}

  	.horizontal-list {
  		display: flex;
  		flex-direction: row;
  		align-items: center;
  		gap: 10px;
  	}

  	.horizontal-list img {
  		margin-right: 10px;
  		/* Adjust the spacing between images */
  	}

  	.icon {
  		height: 30px;
  		width: 30px;
  		border-radius: 50%;
  		background-color: orange;
  		display: flex;
  		justify-content: center;
  		align-items: center;
  		color: white;
  		transition: background-color 0.8s;
  		/* Add a smooth transition */
  	}

  	.icon:hover {
  		background-color: transparent;
  		color: black;
  	}
  </style>

  <div class="container">
  	<div class="column">
  		<div class="column-header">Seait vle U</div>
  		<br>
  		<div class="row">Terms And Conditions</div>
  		<div class="row">Offeres Programs</div>
  		<div class="row">Version Logs</div>
  		<div class="row">Android Application</div>
  	</div>
  	<div class="column">
  		<div class="column-header">Developer</div>
  		<br>
  		<div class="row">Mama mo developer</div>
  	</div>
  	<div class="column">
  		<div class="column-header">Partners</div>
  		<br>
  		<div class="row">
  			<div class="horizontal-list">
  				<img src=".//admin/images/mikrotik.png" alt="" width="30px" height="30px">
  				<img src=".//admin/images/cict.jpg" alt="" width="30px" height="30px">
  				<img src=".//admin/images/oracle.png" alt="" width="30px" height="30px">
  				<img src=".//admin/images/w3schools.png" alt="" width="30px" height="30px">
  			</div>
  		</div>
  	</div>
  	<div class="column">
  		<div class="column-header">Follow us</div>
  		<br>
  		<div class="row">
  			<div class="horizontal-list">
  				<i class="icon icon-facebook"></i>
  				<i class="icon icon-linkedin"></i>
  				<i class="icon icon-twitter"></i>
  				<i class="icon icon-github"></i>
  			</div>
  		</div>
  	</div>

  </div>