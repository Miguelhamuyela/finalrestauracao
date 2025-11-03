<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        console.log('ok');
        $('#client_id').on('change', function() {
            let clientId = $(this).val();

            if (clientId) {
                $.ajax({
                    url: '/get-client-nif/' + clientId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response.nif) {
                            $('#nif').val(response.nif);
                        } else {
                            $('#nif').val('');
                        }
                    },
                    error: function() {
                        console.error('Erro ao obter o NIF.');
                        $('#nif').val('');
                    }
                });
            } else {
                $('#nif').val('');
            }
        });
    });
</script>