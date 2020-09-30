 <html>
 <head>
     <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 </head>
 <body>
 <div>
 <form>
     <div class="form-row">
         <div class="form-group col-md-6">
             <label for="inputEmail4">New Title</label>
             <input type="email" class="form-control" id="news_title" placeholder="Email">
         </div>
         <div class="form-group col-md-6">
             <label for="inputEmail4">New Slug</label>
             <input type="text" class="form-control" id="news_slug" placeholder="Slug" value="https://app.mobalytics.gg/tft/set4/comp-builder?map=AwQwzArATFZlATYAzMJkcwRlgNmGARlgOxYDGmm8UAnFvQEali5QAcUWVALBMAFMqGXOB7DkAOiA~~">
         </div>

     </div>
     <div class="form-group">
         <textarea name="editor1"></textarea>
         <script>
             CKEDITOR.replace( 'editor1' );
         </script>
     </div>
        {!!  !!}
     <div class="form-row">
         <div class="form-group col-md-6">
             <label for="inputCity">New Image 1</label>
             <input type="text" class="form-control" id="inputCity">
         </div>
         <div class="form-group col-md-4">
             <label for="inputState">New Image 1</label>
             <select id="inputState" class="form-control">
                 <option selected>Choose...</option>
                 <option>...</option>
             </select>
         </div>
         <div class="form-group col-md-2">
             <label for="inputZip">Zip</label>
             <input type="text" class="form-control" id="inputZip">
         </div>
     </div>
     <div class="form-group">
         <div class="form-check">
             <input class="form-check-input" type="checkbox" id="gridCheck">
             <label class="form-check-label" for="gridCheck">
                 Check me out
             </label>
         </div>
     </div>
     <button type="submit" class="btn btn-primary">Sign in</button>
 </form>
 </div>
 </body>
 </html>


