<script>
$.get("soap.php", function(data){
var duce = jQuery.parseJSON(data);
var art1 = duce.key1;
var art2 = duce.key2;
var art3 = duce.key3;
});
</script>