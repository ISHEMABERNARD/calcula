<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="cal.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>simple calculator</title>
  </head>
  <body>
    <div class="wrap">
      <h2
        style="
          padding-left: 80px;
          color: gainsboro;
          font-family: Arial, Helvetica, sans-serif;
        "
      >
        CALCULATOR
      </h2>
      <form name="cal">
        <input type="text" name="display" style="width: 8.1cm" />
        <br /><br />
        <input type="button" value="9" onclick="cal.display.value+='9'" />
        <input type="button" value="8" onclick="cal.display.value+='8'" />
        <input type="button" value="7" onclick="cal.display.value+='7'" />
        <input type="button" value="+" onclick="cal.display.value+='+'" />
        <br /><br />

        <input type="button" value="6" onclick="cal.display.value+='6'" />
        <input type="button" value="5" onclick="cal.display.value+='5'" />
        <input type="button" value="4" onclick="cal.display.value+='4'" />
        <input type="button" value="-" onclick="cal.display.value+='-'" />
        <br /><br />

        <input type="button" value="3" onclick="cal.display.value+='3'" />
        <input type="button" value="2" onclick="cal.display.value+='2'" />
        <input type="button" value="1" onclick="cal.display.value+='1'" />
        <input type="button" value="*" onclick="cal.display.value+='*'" />
        <br /><br />
        <input type="button" value="0" onclick="cal.display.value+='0'" />
        <input type="button" value="/" onclick="cal.display.value+='/'" />
        <input
          type="button"
          value="="
          onclick="cal.display.value =eval(cal.display.value)"
        />
        <input
          type="button"
          value="DEL"
          onclick="cal.display.value= ''"
          id="del"
        />
        <br /><br />
        <h3 style="padding-top: 20px; padding-left: 230px; color: gainsboro">
          &copyISHEMA2024
        </h3>
      </form>
    </div>
  </body>
</html>
