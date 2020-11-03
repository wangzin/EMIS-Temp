<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Education Management Information System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>

  <body>
    
     <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand active" href="http://www.education.gov.bt" target="_blank"><i fa fa-home></i> Home</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">  
            @if (Route::has('login'))
                @auth
                <li class="active"><a href="{{ url('/dashboard') }}"><i class="fas fa-sign-out-alt"></i> Dashboard </a></li>
                @else
                    
                    <li class="active"><a href="{{ route('login') }}">Login</a></li>

                    @if (Route::has('register'))
                    <li ><a href="{{ route('register') }}">Register</a></li>
                    @endif
                @endif
            @endif
               
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
	<div class="container">
	  <div class="row">
		<div class="col-sm-8">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<i class="fa fa-bars"></i> Education Management Information System				
				</div>
				<div class="panel-body">
					<div class="row">
						
						<div class="col-sm-12">
							<b>Non-Formal and Continuing Education Division  </b><br>
							The Non-Formal Education (NFE) plays a critical role in fulfilling the provision of education for all to provide
							education to those children, youth and adults who missed the opportunity to participate in and complete
							formal schooling or training. NFE programme thus helps to enhance the level of qualification of those who
							have no or low levels of literacy, numeracy, vocational, digital and life skills. It creates opportunities for those
							learners to acquire basic competencies, foster interpersonal skills and collaborative values and skills that
							respond to the country’s aspiration of Gross National Happiness (GNH) while being responsive to the
							changing needs of the society. Considering its importance, NFE programme was initiated in 1990 through the
							Royal Command during the 53rd National Assembly. Since then, the programme has gained widespread
							popularity and proven its effectiveness. The programme evolved considerably in addressing the needs of its
							learners through the introduction of Basic Literacy Course. Further, the Post Literacy Course (PLC), the
							Community Learning Centre (CLC) and the Continuing Education (CE) programme were introduced in 1997,
							2000 and 2006 respectively. In 2014, the functional English curriculum was incorporated in the PLC.
							Approximately a total of 203,471 learners have benefitted from this programme thereby achieving 66.6%
							adult literacy rate (BLSS, 2017). The provision for the NFE programme is now to reach the remaining
							unreached 33.4% of the adult population.
						</div>
					</div>
					 
					<a href="http://emis.education.gov.bt/home/" class="btn btn-block btn-lg btn-success">
						Visit More
						<i class="fas fa-angle-double-right"></i>
					</a>
				</div>
			</div>		 
		</div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<i class="fa fa-bars"></i>  Other Internal System Links
				
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-3">
							<span class="fa fa-chart-bar well"></span>
						</div>
						<div class="col-sm-9">
							<b>Education Managment Information System(EMIS)</b><br>
							Information related to the reuirement of staff and teachers in the schools in nations<br />
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-3">
							<span class="fa fa-user-edit well "></span>
						</div>
						<div class="col-sm-9">
							<b>Teacher Requirement Exercise (TRE)</b><br>
							Information related to the reuirement of staff and teachers in the schools in nations<br />
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-3">
							<span class="fa fa-blind well "></span>
						</div>
						<div class="col-sm-9">
							<b>Speacial Education Nee(SEN)</b><br>
							Information related to the reuirement of staff and teachers in the schools in nations<br />
						</div>
					</div>
					
				</div>
			</div>		 
		</div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<i class="fa fa-bars"></i>  Teacher Requirement Exercise (TRE) System				
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-3">
							<span class="fa fa-user-edit well "></span>
						</div>
						<div class="col-sm-9">
							<b>STeacher Requirement Exercise (TRE)</b><br><br>
							Information related to the reuirement of staff and teachers in the schools in nations<br />
						</div>
					</div>
					<a href="http://tre.education.gov.bt/auth/NWFUN1phelc0NVBoVkpnSStWWXB6dz09" class="btn btn-block btn-lg btn-primary">
						TRE
						<i class="fas fa-angle-double-right"></i>
					</a>
				</div>
			</div>		 
		</div>
		
	  </div>
	</div>
     
      
  
</body></html>
