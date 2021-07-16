<!DOCTYPE html>
<html>
  <head>
    <title>Family Medicine Practice</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 38px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #669999; 
      }
      .banner {
      position: relative;
      height: 300px;
      background-image: url("/uploads/media/default/0001/02/174b2e72df50743dfaa0a3bf9d2e59d8b42c91e1.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #669999;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #669999;
      color: #669999;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color:  #a3c2c2;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #669999;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #669999;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #669999;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #a3c2c2;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="/index" method="GET">
        <div class="banner">
          <h1>Ambulance Service Booking</h1>
        </div>
        <br/>
        <fieldset>
          <legend>Patient Information</legend>
          <div class="item">
            <label for="fname"> First Name<span>*</span></label>
            <input id="fname" type="text" name="fname" required/>
          </div>
          <div class="item">
            <label for="lname"> Last Name<span>*</span></label>
            <input id="lname" type="text" name="lname" required/>
          </div>
          <div class="item">
            <label for="initial">Middle Initial<span>*</span></label>
            <input id="initial" type="text" name="initial" required/>
          </div>
          <div class="item">
            <label for="phone">Mobile Phone<span>*</span></label>
            <input id="phone" type="number"   name="phone" required/>
          </div>
          <div class="item">
            <label for="phone">Home<span>*</span></label>
            <input id="phone" type="number"   name="phone" required/>
          </div>
          <div class="item">
            <label for="bdate">Birth Date <span>*</span></label>
            <input id="bdate" type="date" name="bdate" required/>
            <i class="fas fa-calendar-alt"></i>
          </div>
          <div class="question">
            <label>Is this your first visit to our Hospital?</label>
            <div class="question-answer">
              <div>
                <input type="radio" value="none" id="radio_1" name="visit"/>
                <label for="radio_1" class="radio"><span>Yes</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_2" name="visit"/>
                <label for="radio_2" class="radio"><span>No</span></label>
              </div>
            </div>
          </div>
        </fieldset>
        <br/>
        <fieldset>
          <legend>Appointment Information</legend>
          <div class="item">
            <label for="date">Date<span>*</span></label>
            <input id="date" type="date" name="date" required/>
            <i class="fas fa-calendar-alt"></i>
          </div>
          <div class="item">
            <p>Time</p>
            <select>
              <option selected value="" disabled selected></option>
              <option value="m" >Morning</option>
              <option value="a">Afternoon</option>
              <option value="e">Evening</option>
            </select>
          </div>
          <div class="question">
            <label>Distance from the home</label>
            <div class="question-answer">
              <div>
                <input type="radio" value="none" id="radio_3" name="distance"/>
                <label for="radio_3" class="radio"><span>less than 5km</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_4" name="distance"/>
                <label for="radio_4" class="radio"><span>less than 15km</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_5" name="distance"/>
                <label for="radio_5" class="radio"><span>less than 25km</span></label>
              </div>
              <div>
                <input  type="radio" value="none" id="radio_6" name="distance"/>
                <label for="radio_6" class="radio"><span>greater than 50km</span></label>
              </div>
            </div>
          </div>
          <div class="item">
            <label for="instructions">Please describe the reason for your request </label>
            <textarea id="instructions" rows="3"></textarea>
          </div>
        </fieldset>
        <div class="btn-block">
          <button type="submit" href="/">Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>