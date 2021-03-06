<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>{pagetitle}</title>
                <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

								<!-- Bootstrap CSS -->
                <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen"/>

								<!-- Custom CSS -->
								<link href="/assets/css/full-width-pics.css" rel="stylesheet">
                <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
	</head>
	<body>

		<h1>COMP 4711 - Assignement 1</h1>
        <!-- Loads the navbar -->
        <div class="navbar">
               {menubar}
        </div>


        <!-- Loads the page content -->
        <div id="container">
					<!-- Header image -->
					{header}
            {content}
        </div>

					<footer>
						{footer}
					</footer>
	</body>
</html>
