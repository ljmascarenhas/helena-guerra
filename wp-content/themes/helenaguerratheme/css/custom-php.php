<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Belleza&display=swap');
    * {
        font-family: 'Belleza', sans-serif;
    }

    :root{
        --orange: #FAA916;
        --orange-dark: #BC412B;
        --black: #020100;
    }

    a { text-decoration: none !important; color: var(--black);}
    a:hover {color: var(--orange-dark);}
    .menu ul li { 
        display: inline; 
        padding: 10px; 
        text-transform: uppercase;
    }
    .user-area {text-transform: uppercase;}

    svg {font-size: 40px !important;}

    .card-home {
        background-image: url('<?php header_image(); ?>');
        background-size: cover;
        background-attachment: fixed;
        height: 500px;
    }
    .overlay {
        height: 500px;
        width: 100%;
        background-color: rgba(236, 239, 239, 0.6);
    }
</style>