 <!DOCTYPE html>
 <html>
 <head>
 	<title>Fav Quote</title>
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 </head>
 <body style="background:#E1CCE8">
 		
 		<section>
  <div class="container">
    <div class="row">
      <h1>Random Quote Generator</h1>
      <p>Click the below button to generate a new quote</p>
      <div class="well">
        <blockquote>
          <p id="quote"></p>
          <footer id="attrib"></footer>
        </blockquote>
        <a href="" target="_blank" id="twitterButton" class="btn btn-primary"><i class="fa fa-twitter"></i> Tweet </a>
      </div>
      
      
      <button id="generateButton" class="btn btn-lg" onclick="newQuote()">New Quote</button>
    </div>
  </div>
</section>

<script src="quote.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 </body>
 </html>