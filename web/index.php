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
  <!-- Hello World! -->

  <label for="name">Name (4 to 8 characters):</label>

<input type="text" id="name" name="name" required
       minlength="4" maxlength="8" size="10">

<script>
// fix : Does not use passive listeners to improve scrolling performance
// const beforeUnloadListener = (event) => {
//   event.preventDefault();
//   return event.returnValue = "Are you sure you want to exit?";
// };
addEventListener('unload', (event) => { });
onunload = (event) => { };

// window.addEventListener('beforeunload', (event) => {
//   if (pageHasUnsavedChanges()) {
//     event.preventDefault();
//     return event.returnValue = 'Are you sure you want to exit?';
//   }
// });

// const nameInput = document.querySelector("#name");

// nameInput.addEventListener("input", (event) => {
//   if (event.target.value !== "") {
//     addEventListener("beforeunload", beforeUnloadListener, {capture: true});
//   } else {
//     removeEventListener("beforeunload", beforeUnloadListener, {capture: true});
//   }
// });
</script>

</body> 
</html>

<!-- git add -A
git commit -m "commit"
git push origin main
git push heroku main -->