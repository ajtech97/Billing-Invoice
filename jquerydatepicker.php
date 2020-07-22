<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $(function(){
    $( "#invoicedate" ).datepicker();
  });
</script>
<body>
<input type="text" id="invoicedate" value="<?php echo date("d-m-Y");?>">
</body>