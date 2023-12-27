<!-- resources/views/loader.blade.php -->

<div id="loader-container" class="loader-container">
    <div class="loader"></div>
</div>

<style>
    /* Add your loader styling here */
    .loader-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        transition: opacity 0.3s ease;
    }

    .loader {
        border: 8px solid #2080C3;
        border-top: 8px solid #3498db;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

<script>
    // JavaScript to handle showing and hiding the loader
    document.onreadystatechange = function () {
        if (document.readyState === 'complete') {
            // Hide the loader when the page is fully loaded
            hideLoader();
        }
    };

    // Intercept AJAX requests to show/hide loader
    $(document).ajaxStart(function () {
        showLoader();
    });

    $(document).ajaxStop(function () {
        hideLoader();
    });

    function showLoader() {
        $('#loader-container').fadeIn();
    }

    function hideLoader() {
        $('#loader-container').fadeOut();
    }
</script>
