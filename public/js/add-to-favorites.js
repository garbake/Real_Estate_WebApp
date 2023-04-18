$(document).ready(function() {
    $('#add-favorite').click(function() {
        var propertyId = $(this).data('Property-Id');
        $.post('/favorite-properties', {
            Property_Id: propertyId
        }, function(response) {
            alert('Added to favorites!');
        });
    });
});
