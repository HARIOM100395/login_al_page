
	<script>
    $(document).ready(function() {
  $("#basic-form").validate({
    rules: {
     
      email: {
        required: true,
        email: true
      },
      password: {
        required: true
      }
    },
    messages : {
      email: {
        email: "The email should be in the format: abc@domain.tld"
      },
      password: {
        required: "Required",
        number: "Min of 8 Character"
      }
    }
  });
});
   
</script>
