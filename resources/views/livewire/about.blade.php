<div>

     <div class="container-fluid " style="margin-top:-6%;">
    <div class="row">
        <div class="col-sm-10 m-auto " style="">
     <!-- {{-- copiedcode        --}} -->
 

  
     @php
     foreach($data as $value){
    $facebooklink = $value->furl;
     $youtubelink=$value->uurl;
     $instalink=$value->iurl;
     $glink=$value->gurl;
     $githublink=$value->github;
     }
    
    @endphp
     


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen"> <i class="fas fa-book-reader pr-2"></i>Education</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')"><i class="fas fa-briefcase pr-2"></i>Work Experience</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')"> <i class="fas fa-running pr-2"></i>Running Project</button>
  <button class="tablinks" onclick="openCity(event, 'contact')"> <i class="fas fa-address-card pr-2"></i>Contect</button>
</div>

<div id="London" class="tabcontent">
  <h3>EDUCATION</h3>
 
<table class="table table-hover table-striped">
  <thead>
    <th>Institute</th>
      <th>Level</th>
      <th>Retreive</th>
      <th>Passed year</th>
  </thead>
  <tbody>
      @foreach($edata as $evalue)
      <tr>
      <td class="text-capitalize">{{$evalue->instute}}</td>
      <td class="text-capitalize">{{$evalue->level}}</td>
      <td>{{$evalue->retreive}}</td>
      <td>{{$evalue->Passed_year}}</td>
    </tr>
    @endforeach
  </tbody>

</table>


</div>

<div id="Paris" class="tabcontent">
  <h3>Work Experience</h3>

  <table class="table table-hover table-striped ">
    <thead>
        <th >Oraganization</th>
        <th>joining year</th>
        <th>engaged year</th>
        <th >Position</th>
        
    </thead>
    <tbody>
      @foreach ($workdata as  $wvalue) 
        <tr>
        <td class="text-capitalize">{{$wvalue->oraganization}}</td>
        <td class="text-capitalize">{{$wvalue->joining}}</td>
        <td class="text-capitalize">{{$wvalue->duration}}</td>
        <td class="text-capitalize">{{$wvalue->position}}</td>
      </tr>
      @endforeach
    </tbody>
  
  </table>
  
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Running project</h3>
  <p>I gald to say i contribute for these some live project as developer </p>

  
  <table class="table table-hover table-striped ">
  <thead>
  <th>URL</th>
  <th>View Now</th>
  </thead>
    <tbody>
    @forelse($urldata as $url)
    <tr>
    <td><p class=" text-dark">{{$url->url}}</p></td>
    <td><a href="{{$url->url}}" target="_blank">
    <i class="fas fa-eye fa-2x this"></i>
          
    </a></td>
    </tr>
    @empty
    <td colspan="2"><p class="text-danger text-capitalize h4">no live projects added yet !</p></td>
    @endforelse
  
    </tbody>
    </table>


    
</div>
<div id="contact" class="tabcontent" >
    <h3 class="  ">Contact</h3>

    <table class="table table-hover  table-striped">
        <tbody>
      
          <tr>
            <td>Name: </td>
            <td class="text-capitalize">{{ $name}}</td>
          </tr>
            <tr>
            <td>Email: </td>
            <td class="text-capitalize">{{ $email}}</td>
          </tr>
    <tr>
        <td>Address: </td>
    <td class="text-capitalize">{{$address}}</td>
    </tr>
    <tr>
        <td>Contact</td>
    <td class="text-capitalize">{{$number}}</td>
    </tr>

    <tr>
    <td class="pt-2">Social links</td>
        <td>
        <div >
        
            <a href=" {{$facebooklink}}" target="_blank"><i class="fab fa-facebook fa-2x this"></i></a>
             <a href="{{$instalink}}" target="_blank"><i class="fab fa-instagram-square fa-2x this"></i></a>
             <a href="{{$glink}}" target="_blank"><i class="fab fa-google-plus fa-2x this"></i></a>
             <a href="{{$youtubelink}}" target="_blank"> <i class="fab fa-youtube fa-2x this"></i></a>
             <a href="{{$githublink}}" target="_blank"> <i class="fab fa-github fa-2x this"></i></a>
            
          </div>
        </td>
    </tr>

        </tbody>
      
      </table>

      


  </div>



<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 



<!-- copied code  -->
    </div>
    </div>
     </div>



<style>
  
 .this{color: #032943;}

* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #03304e;
 
background: radial-gradient(#1991e1, transparent);
  width: 30%;
  /* height: 300px; */
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 26px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background: radial-gradient(#15537c, transparent);
}

/* Create an active/current "tab button" class */
.tab button.active {
  background:#1698ef;
  color:white;
  
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid black;
  border-left: 1px solid black;
  width: 70%;
  border-left: none;
  /* height: 300px; */
  background: radial-gradient(#61aada, transparent);
}
</style>

<br><br>

</div>
