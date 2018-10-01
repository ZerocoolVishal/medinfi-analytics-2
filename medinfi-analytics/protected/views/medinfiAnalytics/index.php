<?php
/* @var $this MedinfiAnalyticsController */

?>
<div id="message">
    <?php
    if(isset($message)) {
        echo $message;
    }
    ?>
</div>
<!--TODO: Change the action URL-->
<form class="form-signin" action="index.php?r=medinfi-analytics/authenticate-user" method="post">
    <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Medinfi Analytics</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="text" id="inputEmail" class="form-control" placeholder="Email address or Client ID" name="email" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
    <input type="hidden" name="_csrf" value="<?=Yii::app()->request->getCsrfToken()?>" />
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>