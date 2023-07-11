$(document).ready(function() {

    $("#province_list").on('change', function() {
        var selected_province = this.value;
        $.post("data_request/get_municipality_list.php", {

            province_id: selected_province

        }, function(data) {

            $("#municipality_list").html(data);
            $('#barangay_list').empty();
            
        });

    });

    $("#municipality_list").on('change', function() {
        var selected_municipality = this.value;
        $.post("data_request/get_barangay_list.php", {

            municipality_id: selected_municipality

        }, function(data) {

            $("#barangay_list").html(data);

        });

    });

    $('#jo_client_list').on('change', function() {
        var client_id = this.value;

        $.post('data_request/get_client_addresses', {

            client_id: client_id

        }, function(data) {

            $("#address_list").html(data);

        });
    });
});