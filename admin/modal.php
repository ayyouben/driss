

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="contact-form" action="tamplate.php?&action=edit" method="get">
        
        <input type="email" name="email" id="email">
        
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="contact-button">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script src="assets/js/file.js"></script>
<script>

$("#contact-button").on('click', function() {


 
});

</script>