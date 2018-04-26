<!-- Modal -->
<div class="modal fade" id="info-box-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-danger text-light">
      
      <div class="modal-header text-uppercase font-weight-bold">
        <div class="col-12 modal-title text-center" id="info-box-header">
          
        </div>
      </div>
      
      <div class="modal-body text-justify text-center text-capitalize " id="info-box-body">
      </div>
      
    </div>  
  </div>   
</div>  

@if(count($errors) > 0)

<script>
    $(document).ready(function(){
        var errordata = '<?php foreach ($errors->all() as $message) {
            echo $message.'<br>';
        };?>';
           info_display(1,"validation error",errordata);
        });
</script>
@endif