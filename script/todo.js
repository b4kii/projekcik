$(document).ready(function() {
    $('#todo-list').on('submit', function(event) {
        event.preventDefault();
        let form_data = $(this).serialize();

        $.ajax({
            url: "add_list.php",
            method: "POST",
            data: form_data,
            // dataType: "JSON",
            success: function(data) {
                $('#todo-list')[0].reset();
                $('#display-list').prepend(data);
                // $('.test').append(data);
            }
        });
    }); 
});

loadList();

function loadList() {
    $.ajax({
        url: "show_list.php",
        method: "POST",
        success: function(data) {
            $('#display-list').html(data);
        }
    });
}

$(document).ready(function() {
    $('#delete').click(function() {
        let checked = [];

        $('#display-list input[type=checkbox]').each(function() {
            if ($(this).is(':checked')) {
                let id = this.id;
                let splitid = id.split('_');
                let checkid = splitid[1];
                checked.push(checkid);
            }
        });

        if (checked.length > 0) {
            $.ajax({
                url: "delete_list.php",
                method: "POST",
                data: {check_id: checked},
                success: function(result) {
                    $.each(checked, function(i, l) {
                        $('#tr_'+l).remove();
                    })
                }
            });
        }
    });
});