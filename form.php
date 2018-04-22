<?php
include "data/database.php";
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="./form.css">
  </head>
  <body>

    <h2> Charisma Event Form </h2>
    <div class ="form">
      <form action =" data/forms.php" method="post">
        <div class="organization">
          Name of Organization:
          <input type="text" name="organization" placeholder="Name of organization">
        <div>
        <br>
        <div class="firstlastname">
          First Name:
          <input type="text" name="firstname" placeholder="First name">
          Last Name:
          <input type="text" name="lastname" placeholder="Last name">
        <div>
          <br>
          e-mail:
          <input type="email" name="email" placeholder="e-mail">
          <br>
          Billing Address:
          <input type="text" name="billingAddress" placeholder="Billing Address">
          <br>
          Estimated number of guests:
          <input type="text" name="guests" Placeholder="Number of guests">
          <br>
          Event date:
          <input type="text" name="date" placeholder="Event date">
          Serving time:
          <input type="text" name="time" placeholder="Serving time">
          <br>
          Event location:
          <input type="text" name="location" placeholder="Event location">
          <div>
          Event will be (Select all that apply):
          <br>
          Breakfast:<input type="checkbox" name="event_type" value="Breakfast">
          Brunch:<input type="checkbox" name="event_type" value="Brunch">
          Lunch:<input type="checkbox" name="event_type" value="Lunch">
          Dinner:<input type="checkbox" name="event_type" value="Dinner">
          Drop-in:<input type="checkbox" name="event_type" value="Drop-in">
          Party:<input type="checkbox" name="event_type" value="Party">
          <div>
          <br>
          <div>
          Charisma can provide the following (Select all that apply):
          <br>
          Tables:<input type="checkbox" name="tables" values="Tables">
          <br>
          Chairs:<input type="checkbox" name="chairs" value="Chairs">
          <br>
          Tablecloths:<input type="checkbox" name="tablecloths" value="Tablecloths">
          Color:<input type="text" name="tableclothcolor" placeholder="Tablecloth color">
          <br>
          Linen:<input type="text" name="Linen" placeholder="Linen";>
          <br>
          Centerpiece: yes<input type="radio" name="Centerpiece" value="yes">
          no<input type="radio" name="Centerpiece" value="no">
          <div>
            <div>
              <h3>
                Menu Requested:
                <br>
                <textarea name="Menuitems" rows="25" cols="50" placeholder="type requested menu items here"></textarea>
                <br>

                <h3>
              <div>
          <br>
          <button ="submit" name="submit" value="Submit">submit</button>

      </form>
    </div>

  </body>
</html>
