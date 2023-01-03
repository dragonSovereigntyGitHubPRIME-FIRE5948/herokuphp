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
    <script>
      window.addEventListener("beforeunload", (event) => {
        console.log("I am the 1st one.");
      });
      window.addEventListener("unload", (event) => {
        console.log("I am the 3rd one.");
      });
    </script>
  </head>
  <body>
    <!-- Hello World -->
    <iframe src="child-frame.html"></iframe>
  </body>


</body> 
</html>

<!-- git add -A
git commit -m "commit"
git push origin main
git push heroku main -->