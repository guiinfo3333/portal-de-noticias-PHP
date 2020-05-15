
  $(document).ready(function(){

        $('#buscacom').keyup(function(){

            $('form').submit(function(){
                var dados = $(this).serialize();

                $.ajax({
                    url: 'testerefresh.php',
                    method: 'post',
                    dataType: 'html',
                    data: dados,
                    success: function(data){
                        $('#showtable').empty().html(data);
                    }
                });

                return false;
            });

            $('form').trigger('submit');

        });
    });