<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="{{ URL::asset('css/general.css') }}" rel="stylesheet"/><!-- For css files. -->
    
    <!--<link href="{{ URL::asset('js/script.js') }}" rel="script">--> <!-- For js files -->
  </head>
  <body>
    <header>
      <div class="container">
	<div id="left">
	  <strong>
	    <a href="new">
	      New
	    </a>
	  </strong>
	  <strong>
	    <a href="">
	    </a>
	  </strong>
	</div>
	<div id="right">
	  <strong>
	    <a href="">
	      Login
	    </a>
	  </strong>
	</div>
      </div>
    </header>
    <!--<br>-->
    
    <div class="container" id="mainBody">
      <a> body </a><br>
      @if (count($Projects) > 0)
          <table>
	    <tr>
	      <th>Project Name</th>
	      <th>Project Description</th>
	      <th>Initial Date</th>
	      <th>End Date</th>
	    </tr>
          @foreach ($Projects as $Project)
            <tr>
	      <td align="center">{{ $Project->pname }}</td>
	      <td align="center">{{ $Project->pdesc }}</td>
	      <td align="center">{{ $Project->idate }}</td>
	      <td align="center">{{ $Project->edate }}</td>
	    </tr>
          @endforeach
	  </table>    
      @endif
    </div>
    
    <footer>
      <div class="container">
	<div id="left">
	  <a>
	    left
	  </a>
	</div>
	<div id="right">
	  <a>
	    right
	  </a>
	</div>
      </div>
    </footer>
  </body>
</html>
