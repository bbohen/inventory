<div class="container-fluid contain-create">      
      <form enctype="multipart/form-data" action="create" method="post" class="create_form">
      <legend><a id="head_crumb" href="manifest">Back</a> | Create New Product</legend>
      <div class="row-fluid">
        <div class="span7">       
          <div class="row-fluid">   
            <div class="span6 lightblue">
              <label>Product Name</label>
              <input type="text" name="product_name" class="span12" placeholder="">    
            </div><!--/span-->
            <div class="span2 lightblue">
              <label>Product #</label>
              <input type="text" name="product_number" class="span12" placeholder="###-###">           
            </div><!--/span-->
            <div class="span2 lightblue">
              <label>Quantity</label>
              <input type="text" class="span12" name="quantity" placeholder="">           
            </div><!--/span-->
          </div><!--/row-->
          <div class="row-fluid">
            <div class="span6 bgcolor">
              <label>Type (Brand Maybe?)</label>
              <select class="span12"></select>  
            </div><!--/span-->
            <div class="span6 bgcolor">
              <label>Possible Field</label>
              <input type="text" class="span12" placeholder="">    
            </div><!--/span-->
          </div><!--/row-->
          <div class="row-fluid">
            <div class="span6 bgcolor">
              <label>Possible Field</label>
              <input type="text" class="span12" placeholder="">    
            </div><!--/span-->
            <div class="span6 bgcolor">
              <label>Possible Field</label>
              <input type="text" class="span12" placeholder="">        
            </div><!--/span-->
          </div><!--/row-->                               
        </div><!--/span-->
        
        <div class="span5">
        	<div class="row-fluid">
        		<div class="span12 lightblue">
              <label>Product Photo</label>
              <input name="avatar" type="file" class="" onchange="readURL(this);" />
              <img id="blah" src="#" alt="your image" />
				<!-- <input class="button button-primary" name="commit" type="submit" value="Upload Image" />  -->
            </div><!--/span-->
        	</div>
        </div><!--/span-->     
      </div><!--/row-->
      <div class="span7">
      	<input type="submit" value="Create Product" class="create_submit span3 btn btn-large btn-success">  
      </div>

      </form>
      <hr>

    </div><!--/.fluid-container-->

