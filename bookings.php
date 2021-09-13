<?php include_once("header.php"); ?>

<div class="page-heading contact-heading header-text" style=" background-color: #2b3a4c; ">



  <div class="container">
    <div class="package">
      <div class="package__item">
        <div class="package__header">
          <div class="package__name">Package 1</div>
        </div>
        <div class="package__body">
          <div class="package__price-container">
            <div class="package__price">Rs. 1100/- <p>(All inclusive)</p></div>
            <p>per candidate</p>
          </div>
          <ul>
            <li>Pickup from Bhopal main Railway Station </li>
            <li>Twin Sharing in a Room</li>
            <li>Tea on Arrival & Departure </li>
            <li>40 minutes refreshing session on current affairs with the Colonel</li>
            <li>Packed Veg Dinner</li>
            <li>Dropping at SSB Bhopal</li>


          </ul>
        </div>
        <div class="package__footer">
          <button>Get Started</button>
        </div>
      </div>


      <div class="package__item">
        <div class="package__header">
          <div class="package__name">Package 2</div>
        </div>
        <div class="package__body">
          <div class="package__price-container">
            <div class="package__price">Rs. 1500/- <p>(All inclusive)</p></div>
            <p>per candidate</p>
          </div>
          <ul>
            <li>Pickup from Bhopal main Railway Station </li>
            <li>Single candidate in a Room</li>
            <li>Tea on Arrival & Departure </li>
            <li>40 minutes refreshing session on current affairs with the Colonel</li>
            <li>Packed Veg Dinner</li>
            <li>Dropping at SSB Bhopal</li>
         
          </ul>
        </div>
        <div class="package__footer">
          <button>Get Started</button>
        </div>
      </div>


      <div class="package__item">
        <div class="package__header">
          <div class="package__name">Package 3</div>
        </div>
        <div class="package__body">
          <div class="package__price-container">
            <div class="package__price">Rs. 1250/- <p>(All inclusive)</p></div>
            <p>per candidate</p>
          </div>

          <ul>
            <li>Pickup from Habibganj  Railway Station/ ISBT/ Any other place in Bhopal </li>
            <!-- <li class="package__price--ins-yearly">3 Premium User Account<br>Dashboard</li> -->
            <li>Twin Sharing in a Room</li>
            <li>Tea on Arrival & Departure </li>
            <li>40 minutes refreshing session on current affairs with the Colonel</li>
            <li>Packed Veg Dinner</li>
            <li>Dropping at SSB Bhopal</li>
         
          </ul>
        </div>
        <div class="package__footer">
          <button>Get Started</button>
        </div>
      </div>

  
      
      <div class="package__item">
        <div class="package__header">
          <div class="package__name">Package 4</div>
        </div>
        <div class="package__body">
          <div class="package__price-container">
            <div class="package__price">Rs. 1650/- <p>(All inclusive)</p></div>
            <p>per candidate</p>
          </div>
          <ul>
            <li>Pickup from Habibganj  Railway Station/ ISBT/ Any other place in Bhopal</li>
            <li>Single candidate in a Room</li>
            <li>Tea on Arrival & Departure </li>
            <li>40 minutes refreshing session on current affairs with the Colonel</li>
            <li>Packed Veg Dinner</li>
            <li>Dropping at SSB Bhopal</li>


          </ul>
        </div>
        <div class="package__footer">
          <button>Get Started</button>
        </div>
      </div>
      <div class="package__item">
        <div class="package__header">
          <div class="package__name">Package 5 </div>
        </div>
        <div class="package__body">
          <div class="package__price-container">
            <div class="package__price">Rs. 1400/- <p>(All inclusive)</p></div>
            
            <p>per candidate</p>
          </div>
          <ul>
            <li>Pickup from Raja Bhoj Airport Bhopal </li>
            <li>Twin Sharing in a Room</li>
            <li>Tea on Arrival & Departure </li>
            <li>40 minutes refreshing session on current affairs with the Colonel</li>
            <li>Packed Veg Dinner</li>
            <li>Dropping at SSB Bhopal</li>
         
          </ul>
        </div>
        <div class="package__footer">
          <button>Get Started</button>
        </div>
      </div>
      <div class="package__item">
        <div class="package__header">
          <div class="package__name">Package 6</div>
        </div>
        <div class="package__body">
          <div class="package__price-container">
            <div class="package__price">Rs. 1800/- <p>(All inclusive)</p></div>
            <p>per candidate</p>
          </div>

          <ul>
            <li>Pickup from Raja Bhoj Airport Bhopal </li>
            <!-- <li class="package__price--ins-yearly">3 Premium User Account<br>Dashboard</li> -->
            <li>Single Candidate in a Room</li>
            <li>Tea on Arrival & Departure </li>
            <li>40 minutes refreshing session on current affairs with the Colonel</li>
            <li>Packed Veg Dinner</li>
            <li>Dropping at SSB Bhopal</li>
         
          </ul>
        </div>
        <div class="package__footer">
          <button>Get Started</button>
        </div>
      </div>
    </div>
  </div>



</div>

<style>
  .package {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 1rem;
    margin-top: 4rem;
  }

  @media screen and (max-width: 800px) {
    .package {
      grid-template-columns: 1fr;
      grid-row-gap: 7rem;
    }
  }

  .package__item {
    height: 100%;
    transition: all ease-in-out 0.3s;
  }

  .package__item:hover {
    transform: translateY(-5px);
  }

  .package__item .package__header {
    background-color: white;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    border-bottom: 3px solid rgba(0, 0, 0, 0.1);
  }

  .package__item .package__header .package__name {
    font-size: 1.2rem;
    font-weight: bold;

    padding: 8px;
    color: white;
  }

  .package__item .package__body {
    background-color: white;
    padding: 1rem;
    min-height: 82%;
  }

  @media screen and (max-width: 800px) {
    .package__item .package__body {
      min-height: 100%;
    }
  }

  .package__item .package__body .package__price-container {
    min-height: 150px;
    background-color: rgba(0, 0, 0, 0.06);
    display: flex;
    flex-direction: column;
    justify-content: center;
    border-radius: 4px;
  }

  @media screen and (max-width: 800px) {
    .package__item .package__body .package__price-container {
      min-height: 100%;
    }
  }

  .package__item .package__body .package__price-container--column {
    display: grid;
    grid-template-columns: 1fr 1fr;
    text-align: center;
  }

  @media screen and (max-width: 800px) {
    .package__item .package__body .package__price-container--column {
      grid-template-columns: 1fr;
    }
  }

  .package__item .package__body .package__price-container--column .package__column {
    display: grid;
  }

  .package__item .package__body .package__price-container--column .package__column [class^=package__column] {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .package__item .package__body .package__price-container--column .package__column .package__column-title {
    color: white;
    background-color: #78a87f;
    font-weight: 600;
  }

  .package__item .package__body .package__price-container--column .package__column .package__column-price {
    font-weight: bold;
  }

  .package__item .package__body .package__price-container--column .package__column .package__column-price--bb {
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  }

  .package__item .package__body .package__price-container--column .package__column--2 {
    border-left: 1px solid rgba(0, 0, 0, 0.05);
  }

  .package__item .package__body .package__price-container--column .package__column--2 .package__column-title {
    background-color: #5d9064;
  }

  .package__item .package__body .package__price {
    text-align: center;
    font-size: 3rem;
    font-weight: 600;
    position: relative;
  }

  .package__item .package__body .package__price--sm {
    font-size: 1.8rem;
  }

  .package__item .package__body .package__price--xs {
    font-size: 1.2rem;
  }

  .package__item .package__body .package__price--monthly::after {
    content: "Monthly";
    background-color: #459bba;
    border-radius: 8px;
    font-size: 10px;
    padding: 1px 5px;
    color: white;
    position: absolute;
  }

  .package__item .package__body .package__price--quarterly::after {
    content: "Quarterly";
    background-color: orange;
    border-radius: 8px;
    font-size: 10px;
    padding: 1px 5px;
    color: white;
    position: absolute;
  }

  .package__item .package__body .package__price--yearly::after {
    content: "Yearly";
    background-color: #377c95;
    border-radius: 8px;
    font-size: 10px;
    padding: 1px 5px;
    color: white;
    position: absolute;
  }

  .package__item .package__body .package__price--ind-yearly::after {
    content: "Yearly Individual";
    background-color: #5043c9;
    border-radius: 8px;
    font-size: 10px;
    padding: 1px 5px;
    color: white;
    position: absolute;
  }

  .package__item .package__body .package__price--ins-yearly::after {
    content: "Yearly Institutional";
    background-color: #5d9064;
    border-radius: 8px;
    font-size: 10px;
    padding: 1px 5px;
    color: white;
    position: absolute;
  }

  .package__item .package__body ul {
    margin-top: 1rem;
  }

  .package__item .package__body ul li {
    position: relative;
    font-size: 0.875rem;
    font-weight: 600;
    color: #31363c;
  }

  .package__item .package__footer button {
    background-color: #2287f5;
    color: white;
    padding: 8px 0;
    width: 100%;
    border: 0;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    cursor: pointer;
    position: relative;
    transition: all ease-in-out 0.3s;
    font-weight: 600;
  }

  .package__item .package__footer button::after {
    content: "»";
    opacity: 0;
    position: absolute;
    top: 0;
    font-size: 1.5rem;
    transition: all ease-in-out 0.3s;
  }

  .package__item .package__footer button:hover::after {
    opacity: 1;
    transform: translateX(4px);
  }

  .package__item:nth-child(1) .package__header {
    background-color: #eea726;
  }

  .package__item:nth-child(1) .package__footer button {
    background-color: #eea726;
  }

  .package__item:nth-child(1) .package__footer button:hover {
    background-color: #e49912;
  }

  .package__item:nth-child(2) .package__header {
    background-color: #459bba;
  }

  .package__item:nth-child(2) .package__footer button {
    background-color: #459bba;
  }

  .package__item:nth-child(2) .package__footer button:hover {
    background-color: #3d88a4;
  }

  .package__item:nth-child(3) .package__header {
    background-color: #78a87f;
  }

  .package__item:nth-child(3) .package__footer button {
    background-color: #78a87f;
  }

  .package__item:nth-child(3) .package__footer button:hover {
    background-color: #659c6d;
  }
  .package__item:nth-child(4) .package__header {
    background-color: #B924C4;
  }

  .package__item:nth-child(4) .package__footer button {
    background-color: #B924C4;
  }

  .package__item:nth-child(4) .package__footer button:hover {
    background-color: #B924C4;
  }

  .package__item:nth-child(5) .package__header {
    background-color: #24C444;
  }
  .package__item:nth-child(5) .package__footer button {
    background-color: #24C444;
  }

  .package__item:nth-child(5) .package__footer button:hover {
    background-color: #24C444;
  }

  .package__item:nth-child(6) .package__header {
    background-color: #C71E1E;
  }
  .package__item:nth-child(6) .package__footer button {
    background-color: #C71E1E;
  }

  .package__item:nth-child(6) .package__footer button:hover {
    background-color: #C71E1E;
  }


</style>



<div class="call-to-action">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="inner-content">
          <div class="row">
            <div class="col-md-8">
              <h4>Remarks</h4>
              <p>1.In case there is no other candidate on your SSB date, Single occupancy will be charged.</p>
              <p>2.Guidelines given by the coaching academies to be followed </p>
              <p>3.Food Served in the room </p>
              <p>4.15 minutes before the assigned reporting time</p>
            </div>
         
          </div>
      
  
       
        </div>
      </div>
    </div>
  </div>
</div>


<?php include_once("footer.php"); ?>