<html>
  <head>
  <title>Omegasoft en</title>
  <link rel="shortcut icon" href="{{ URL::to('/') }}/images/favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style >
        body, html {
          height: 100%;
          margin: 0;
          font: 400 15px/1.8 "Lato", sans-serif;
          color: #777;
        }

        .bgimg-1 {
          position: relative;
          background-position: bottom;
          background-repeat: no-repeat;
          background-size: cover;

        }
        .bgimg-1 {
          background-image: url("{{ URL::to('/') }}/images/página-en-construccion.jpg");
          height: 100%;
          width: 100%;
        }

        .caption {
          position: absolute;
          left: 23%;
          top: 18%;
          width: 60%;
          text-align: center;
          color: #000;
        }

        .caption span.border {
          background-color: #111;
          color: #fff;
          padding: 18px;
          font-size: 25px;
          letter-spacing: 10px;
        }

        h1 {
          color: #fff;
        }
        h3 {
          letter-spacing: 5px;
          text-transform: uppercase;
          font: 20px "Lato", sans-serif;
          color: #fff;
        }
    </style>
    <meta charset="utf-8">
    <title>Error</title>
  </head>
  <body>
    <div class="bgimg-1">
      <div class="caption">
         <h1 style="font-size: 45px;" >Page under construction</h1>
        <h3>Soon it will be ready.</h3>
        <h3>...</h3>
        <a style="color:#fff" href="{{ URL::to('/') }}/" style="font-size: 16px">Go to start</a>
      </div>
    </div>
    </div>
  </body>
</html>
