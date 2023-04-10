<script>
  $.ajax({
  url: 'tab1.php?param1=value1&param2=value2',
  //...
});

// Sử dụng phương thức POST
$.ajax({
  url: 'tab1.php',
  type: 'POST',
  data: {
    param1: 'value1',
    param2: 'value2'
  },
  //...
});
</script>
<div>
  <h1>Tab 1 Content</h1>
  <p>This is the content of tab 1</p>
</div>
