
<?php if($_SESSION['user_name'] == null) redirect('/');?>
<section style="padding: 5% 0">
    <div class="container">
        <div class="alert alert-success">
            E-mail envoyé avec succés!
            <a href="<?= base_url();?>"><button class="btn btn-success">Revennir</button></a>
        </div>
        <div class="thumbnail">
            <div class="caption">
                Votre message
                <hr>
                <div class="row">
                    <div class="col-md-1">
                        <strong>Nom:</strong>
                    </div> 
                    <div class="col-md-11">
                        <?= $_SESSION['user_name']?><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <strong>Email:</strong>
                    </div> 
                    <div class="col-md-11">
                        <?= $_SESSION['user_email']?><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <strong>Message:</strong>
                    </div> 
                    <div class="col-md-11">
                        <?= $_SESSION['user_message']?><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>