<!-- fix : Page lacks the HTML doctype, thus triggering quirks-mode -->
<!DOCTYPE html>
<!-- fix : <html> element does not have a [lang] attribute -->
<html lang="en">
    <!-- fix : Document doesn't have a <title> element -->
    <title>Activity 3</title>
    <!-- fix : Document does not have a meta description -->
    <meta name="description" content="This is Activity 3">
<head>
    <!-- fix : Tap targets are not sized appropriately -->
    <!-- fix : Document doesn't use legible font sizes -->
    <!-- fix : Does not have a <meta name="viewport"> tag with width or initial-scale -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <body>
    <!-- Hello World -->
    <div id="test">Test</div>
    <script>
        
            document.getElementById("test").innerHTML = "<iframe src="https://www.w3schools.com" title="W3Schools Free Online Web Tutorials"></iframe>";
        
    </script>
</body> 
</html>

<!-- git add -A
git commit -m "commit"
git push origin main
git push heroku main -->