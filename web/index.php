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
    <!-- fix : Serve images in next-gen formats -->
    <!-- <img src="images/image.webp" alt="Image"> -->
    <picture>
  <source srcset="img/awesomeWebPImage.webp" type="image/webp">
  <source srcset="https://media.istockphoto.com/id/1176969551/photo/singapore-skyline-at-marina-bay-at-twilight-with-glowing-sunset-illuminating-the-clouds.jpg?b=1&s=170667a&w=0&k=20&c=AXMh6Q1vN3BgWc4pVha7MfX5gJ_iYUthIBXKmcEBUPQ=" type="image/jpeg"> 
  <img src="https://media.istockphoto.com/id/1176969551/photo/singapore-skyline-at-marina-bay-at-twilight-with-glowing-sunset-illuminating-the-clouds.jpg?b=1&s=170667a&w=0&k=20&c=AXMh6Q1vN3BgWc4pVha7MfX5gJ_iYUthIBXKmcEBUPQ=" alt="Alt Text!">
</picture>

  </body> 

</html>

<!-- git add -A
git commit -m "commit"
git push origin main
git push heroku main -->