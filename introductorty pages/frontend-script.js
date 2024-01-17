$(function() {
    $("#query").autocomplete({
        source: 'backend-script.php', // This should point to your backend script
        minLength: 2 // Minimum characters before autocomplete starts
    });
});

