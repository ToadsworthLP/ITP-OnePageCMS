<section class="my-section">
    <div class="container">
        <form method="post" action="index.php?action=<?= HomepageActions::SEND_MESSAGE ?>">
            <div class="row">
                <div class="col-md-6">
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
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="message" hidden>Example textarea</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" style="background-color: <?=Settings::get(SettingsConfig::PRIMARY_COLOR)?>;" onMouseOver="this.style.backgroundColor='<?=Settings::get(SettingsConfig::SECONDARY_COLOR)?>'" onMouseOut="this.style.backgroundColor='<?=Settings::get(SettingsConfig::PRIMARY_COLOR)?>'">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>
