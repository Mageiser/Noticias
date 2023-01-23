$.getJSON('listarProduto.php').done(json => {
    if(json['status'] == 'sucesso') {
        let html = '';
        json['dados'].forEach(element => {
          html += '<div class="col">\
                    <div class="card shadow-sm">\
                    <button type="button" class="btn btn-sm btn-outline-secondary">\
                      <img src="upload/'+ element['imagem'] +'" class="card-img-top" width="100%">\
                      <div class="card-body">\
                        <p class="card-title">'+ element['titulo'] +'</p>\
                        <p class="card-text">'+ element['subtitulo'] +'</p>\
                        <div class="d-flex justify-content-between align-items-center">\
                        </div>\
                      </div>\
                    </button>\
                    </div>\
                  </div>';
        });
        $('#produto-lista').append(html);
    }
  }).fail(()=> {
    $('#produto-lista').append('<div class="col-12"><p class="text-danger text-center">Não foi possível carregar os produtos</p></div>');
  })