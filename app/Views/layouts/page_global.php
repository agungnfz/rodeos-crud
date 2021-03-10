<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rodeos </title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/tailwind.css') ?>" />
</head>

<body>

  <?= $this->renderSection('content') ?>
  
  <script src="<?= base_url('js/jquery.min.js') ?>"></script>
  <script>
    $(function() {

      var datatoko = [];

      $.getJSON('datatoko.json', function(data) {
          $.each(data.offline, function(i, f) {
            var tblRow = "<tr>" + "<td>" + f.id_toko + "</td>" +
              "<td>" + f.nama + "</td>" + "<td>" + f.alamat + "</td>" + "<td>" + f.namakota + "</td>" + "</tr>"
              $(tblRow).appendTo("#datatoko tbody");
        });

      });

    });

  </script>
</body>

</html>