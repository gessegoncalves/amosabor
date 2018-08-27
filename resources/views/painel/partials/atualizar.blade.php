




      {{ Form::open(['route'=>'categoria.cadastrar','class'=>'form-horizontal','form-horizontal','method'=>'POST']) }}

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">CADASTRAR CATEGORIA</h4>
      </div>
      <div class="modal-body">



    <!---->


        


           
               {!!  Form::text('categoria', null, array('class'=>'form-control','id'=>'categoria'))  !!}
           
            
     





    <!---->
       

   




               

             
  
             


       
      </div>
      <div class="modal-footer">
      
                 {!! Form::submit('CADASTRAR', array('class' => 'btn btn-primary btn-block')) !!}
           
      </div>
    </div>
  </div>
</div>


   {{ Form::close() }}