<body>
  <h1>Test</h1>

  <form method="get" action="contact.php" method="post">

    <label for="name">Name</label>

    <input type="name" id="name" name="name" />
    <input type="mail" id="mail" name="mail" />
    <input type="stuff" id="stuff" name="stuff" />

    <input type="submit" value="Submit" />

  </form>
</body>
  <!-- <script>
    var form = document.getElementById("name");
    form.onsubmit = function (e) {
        e.preventDefault();
        console.log(form.name.value);
        form.reset();
    };
  </script> -->