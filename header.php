<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<title>the_creative_factory</title>
	<link rel="stylesheet" type="text/css" href="product-page.css">
    <link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" type="text/css" href="header.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="about.css">


</head>
<body>
	<?php $currentpage = basename($_SERVER["SCRIPT_FILENAME"], '.php'); 
    echo $currentpage;
	?>
	<div class="fixed-top">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">The Creative Factory</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
		<li class="nav-item">
		<?php if ($currentpage == "home"){ ?>
          <a class="nav-link active"  href="home.php">Home</a>
      <?php } else { ?>
          <a class="nav-link "  href="home.php">Home</a>
      <?php } ?>
        </li>
        <li class="nav-item">
        	<?php if ($currentpage == "about"){ ?>
          <a class="nav-link active" href="about.php">About</a>
          <?php } else { ?>
          	<a class="nav-link "  href="about.php">About</a>
          	<?php } ?>
        </li>
        <li class="nav-item">
        	<?php if ($currentpage == "contact"){ ?>
				<a class="nav-link active"  href="contact.php">Contact</a>
			<?php } else { ?>
				<a class="nav-link "  href="contact.php">Contact</a>
				<?php } ?>

        </li>
      </ul>
    </div>
  </div>

</nav>
	</div>

