<style type="text/css">
  div.stars
  {
    font-size: 30px;
  }
</style>
<div id="myFeedback" class="carousel" data-ride="carousel" data-interval="false">
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  <div class="col-xs-2">
  <div id="previous">
  <a href="#myFeedback" role="button" data-slide="prev">
    <h2><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></h2>
    <span class="sr-only">Previous</span>
  </a>
  </div>
  </div>
    <form class="form-horizontal" action="./index.php" id="feedbackForm" method="POST">
    <input type="hidden" name="email" id="email" value="">
    <div class="item active">
        <div class="col-xs-8">
        <label for="name">Work Environment : </label>
        <div class="stars">
          <span class="glyphicon glyphicon-star-empty" id="estar1" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="estar2" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="estar3" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="estar4" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="estar5" onclick="changeIt(this);"></span>
        </div>
        </div>
        <input type="hidden" value="0" name="work_environment" id="work_environment">
        
              
    </div>

    <div class="item">
        <div class="col-xs-8">
        <label for="name">Work Provided : </label>
        <div class="stars">
          <span class="glyphicon glyphicon-star-empty" id="pstar1" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="pstar2" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="pstar3" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="pstar4" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="pstar5" onclick="changeIt(this);"></span>
        </div>
        </div>
        <input type="hidden" value="0" name="work_provided" id="work_provided">
             
    </div>
    <div class="item">
        <div class="col-xs-8">  
        <label for="name">Office Activities : </label>
        <div class="stars">
          <span class="glyphicon glyphicon-star-empty" id="astar1" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="astar2" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="astar3" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="astar4" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="astar5" onclick="changeIt(this);"></span>
        </div>
        </div>
        <input type="hidden" value="0" name="office_activities" id="office_activities">
    </div>
    <div class="item">
        <div class="col-xs-8">
        <label for="name">Communication : </label>
        <div class="stars">
          <span class="glyphicon glyphicon-star-empty" id="cstar1" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="cstar2" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="cstar3" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="cstar4" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="cstar5" onclick="changeIt(this);"></span>
        </div>
      </div>
      <input type="hidden" value="0" name="communication" id="communication">
             
    </div>
    <div class="item">
        <div class="col-xs-8">
        <label for="name">Monitoring : </label>
        <div class="stars">
          <span class="glyphicon glyphicon-star-empty" id="mstar1" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="mstar2" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="mstar3" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="mstar4" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="mstar5" onclick="changeIt(this);"></span>
        </div>
        </div>
        <input type="hidden" value="0" name="monitoring" id="monitoring">
      </div>
    <div class="item">
        <div class="col-xs-8">
        <label for="name">Any Comments : </label>
        <textarea class="form-control" rows="5" cols="20" name="additionally"></textarea>
        <button type="button" class="btn btn-warning" onclick="submitForm2();" >Submit Feedback</button>
        </div>
      </div>
                     
    <div class="col-xs-2">
    <div id="next">
    <a href="#myFeedback" role="button" data-slide="next" onclick="setEmail();">
    <h2><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></h2>
    <span class="sr-only">Next</span>
  </a>
  </div>
  </div>
  </form>
  </div>
  </div>