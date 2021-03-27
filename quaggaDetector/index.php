<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>index</title>
    <meta name="description" content="" />
    <meta name="author" content="Christoph Oberhofer" />

    <meta name="viewport" content="width=device-width; initial-scale=1.0; user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
  </head>

  <body>
      <header>
          <div class="headline">
              <h1>QuaggaJS EJEMPLO</h1>
          </div>
      </header>
    <section id="container" class="container">
        <div id="resultado"></div>

        <div class="controls">
            <fieldset class="input-group">
                <button class="stop">Stop</button>
            </fieldset>
            
            </fieldset>
        </div>
      <div id="result_strip">
        <ul class="thumbnails"></ul>
        <ul class="collector"></ul>
      </div>
      <div id="interactive" class="viewport"></div>
    </section>
          <footer>
       
      </footer>

    <script src="jquery-1.9.0.min.js" type="text/javascript"></script>
    <script src="//webrtc.github.io/adapter/adapter-latest.js" type="text/javascript"></script>
    <script src="quagga.js" type="text/javascript"></script>
    <script src="live_w_locator.js" type="text/javascript"></script>
  </body>
</html>
