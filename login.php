<?php include 'header.php'; ?>
<style>
    .email-entry-page {
        display: flex;
        flex-direction: column;
    }
</style>
<!-- Main Content -->
<div class="navbar">
    <div class="navbar-left">
        <div class="logo" onclick="goToHome()">WATCH NOW</div>
    </div>
</div>
</div>
<!-- Modifiez la div email-entry-page comme suit -->
<form class="email-entry-page" id="emailEntryPage" style="background: #000; z-index: 1;">
    <h2>Login</h2>
    <div class="email-form" style="display:flex; flex-direction: column; height: 50%">
        <input type="email" id="userEmail" placeholder="Adresse e-mail" required style="margin:2rem 0; max-height:44px">
        <input type="password" id="userPassword" placeholder="Password" required style="margin:2rem 0;  max-height:44px">
        <button onclick="validateEmail()" type="submit">Login <i class="fas fa-chevron-right"></i></button>
    </div>
</form>
<?php include 'footer.php'; ?>