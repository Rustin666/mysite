$(document).ready( function() {
    closeRegistration()
});

function openRegistration() {
    var templateText = function(){/*
        <div class="reg_block">
            <div class="reg_block_bg" onclick="closeRegistration()"></div>
            <div class="reg_block_body">
                <div class="reg_block_body_block_inputs">
                    <h1>Регистрация</h1>
                    <form action="/" method="post">
                        <input type="text" placeholder="Login">
                        <input type="text" placeholder="email">
                        <input type="password" placeholder="password">
                        <input type="password" placeholder="password again">
                        <button type="button">REGISTRATION</button>
                    </form>
                </div>
            </div>
        </div>
        */}.toString().slice(15,-3);
    $('body').append(templateText);
    $('.reg_block').fadeIn('slow');
}

function closeRegistration() {
    $('.reg_block').fadeOut('slow');
}