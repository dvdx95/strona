<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Witaj to jest strona powitalna</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <style>
      table, th, td {
        border: 1px solid black;
        text-align: center;
      }
      .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
      }
      input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
      input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      div.add {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
      }
      .remove{
        color: red;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <div id="items">
    </div>
    <button id="button" class="button"> Load Items </button>
    <button id="button-add" class="button"> Add Item </button>
    <div id="add-item-form" class="add">
    </div>
  </body>
</html>
