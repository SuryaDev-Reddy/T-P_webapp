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
    <form class="form-horizontal" action="./feedComp.php" id="feedbackForm" method="POST">
    <input type="hidden" name="entry_num" id="entry_num" value="">
    <div class="item active">
        <div class="col-xs-8">
        <label for="name">Employee Attiude : </label>
        <div class="stars">
          <span class="glyphicon glyphicon-star-empty" id="estar1" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="estar2" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="estar3" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="estar4" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="estar5" onclick="changeIt(this);"></span>
        </div>
        </div>
        <input type="hidden" value="0" name="employee_attitude" id="employee_attitude">
        
              
    </div>

    <div class="item">
        <div class="col-xs-8">
        <label for="name">Working Strategy : </label>
        <div class="stars">
          <span class="glyphicon glyphicon-star-empty" id="pstar1" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="pstar2" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="pstar3" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="pstar4" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="pstar5" onclick="changeIt(this);"></span>
        </div>
        </div>
        <input type="hidden" value="0" name="work_strategy" id="work_strategy">
             
    </div>
    
    <div class="item">
        <div class="col-xs-8">
        <label for="name">Quantity of work : </label>
        <div class="stars">
          <span class="glyphicon glyphicon-star-empty" id="cstar1" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="cstar2" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="cstar3" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="cstar4" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="cstar5" onclick="changeIt(this);"></span>
        </div>
      </div>
      <input type="hidden" value="0" name="quantity_of_work" id="quantity_of_work">
             
    </div>
    <div class="item">
        <div class="col-xs-8">
        <label for="name">Quality of work : </label>
        <div class="stars">
          <span class="glyphicon glyphicon-star-empty" id="mstar1" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="mstar2" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="mstar3" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="mstar4" onclick="changeIt(this);"></span>
          <span class="glyphicon glyphicon-star-empty" id="mstar5" onclick="changeIt(this);"></span>
        </div>
        </div>
        <input type="hidden" value="0" name="quality_of_work" id="quality_of_work">
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
    <a href="#myFeedback" role="button" data-slide="next" onclick="setEntry();">
    <h2><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></h2>
    <span class="sr-only">Next</span>
  </a>
  </div>
  </div>
  </form>
  </div>
  </div>