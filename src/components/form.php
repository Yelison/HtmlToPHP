<div class="container">
<div class="row">
  <div class="col-lg-8 col-md-10 mx-auto">
    <form name="sentMessage" id="contactForm" method="POST" action="admin" novalidate>
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Title</label>
          <input type="text" class="form-control" placeholder="Title" id="name" name="name" required data-validation-required-message="Please enter a title.">
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Autor</label>
          <input type="email" class="form-control" placeholder="Autor" id="autor" name="autor" required data-validation-required-message="Please enter a name of autor.">
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Message</label>
          <textarea rows="5" class="form-control" placeholder="Message" id="content" name="content"required data-validation-required-message="Please enter a message."></textarea>
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <br>
      <div id="success"></div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
      </div>
    </form>
  </div>
</div>
</div>