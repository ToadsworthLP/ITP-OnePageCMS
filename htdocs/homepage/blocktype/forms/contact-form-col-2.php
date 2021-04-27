<form>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name" hidden>Name</label>
                <input id="name" class="form-control" type="text" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="email" hidden>E-Mail-Adresse</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-Mail-Adresse">
            </div>
            <div class="form-group">
                <label for="topic" hidden>Betreff</label>
                <input id="topic" class="form-control" type="text" placeholder="Betreff">
            </div>
        </div>
        <div class="col-md-6">	
            <div class="form-group">
                <label for="message" hidden>Example textarea</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    
</form>