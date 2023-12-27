<!-- resources/views/layout/include/logo.blade.php -->

<div class="whatsapp-logo">
    <a href="https://wa.me/8148138485" target="_blank">
        <img src="{{ asset('frontend/assets/img/whatsapp-logo-png-2266.png') }}" alt="WhatsApp">
    </a>
</div>

<style>
    .whatsapp-logo {
        position: fixed;
        top: 50%; /* You can adjust the top position as needed */
        transform: translateY(-50%);
        left: 0;
        width: 80px; /* Adjust the width as needed */
        z-index: 999; /* Adjust the z-index to ensure it appears above other content */
    }

    .whatsapp-logo img {
        max-width: 100%;
        height: auto;
    }
</style>
