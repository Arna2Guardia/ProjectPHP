<div id="modal1" class="modal">
    <div class="modal-content">
      <div class="row">
        <form method="post" action="../php/message_contact.php" class="col s12">
          <div class="row">
            <div class="input-field col l6 s12">
              <input id="firstname" name="firstname" type="text" class="validate" required>
              <label for="firstname">First Name</label>
            </div>
            <div class="input-field col l6 s12">
              <input id="lastname" name="name" type="text" class="validate" required>
              <label for="lastname">Last Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col l12 s12">
              <input id="email" name="email" type="email" class="validate" required>
              <label for="email">Email</label>
            </div>
          </div>
          <div class="input-field col l12 s12">
            <textarea name="message" id="message" cols="30" rows="10" class="validate l12 s12" required></textarea>
            <label for="message">Message</label>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="modal-lose waves-effect waves-green btn">Submit</button>
    </div>
    </form>
  </div>
</div>
