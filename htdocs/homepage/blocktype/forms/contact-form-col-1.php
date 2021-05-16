<form method="post" action="index.php?action=<?= HomepageActions::SEND_MESSAGE ?>">
    <div class="form-group">
        <label for="name" hidden>Name</label>
        <input id="name" class="form-control" type="text" name="name" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="email" hidden>E-Mail-Adresse</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="E-Mail-Adresse">
    </div>
    <div class="form-group">
        <label for="topic" hidden>Betreff</label>
        <input id="topic" class="form-control" type="text" name="subject" placeholder="Betreff">
    </div>
    <div class="form-group">
        <label for="message" hidden>Example textarea</label>
        <textarea class="form-control" id="message" rows="3" name="message"></textarea>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
